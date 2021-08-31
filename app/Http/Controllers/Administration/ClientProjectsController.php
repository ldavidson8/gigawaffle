<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Repositories\ClientProjectRepository;
use App\Repositories\ClientProjectServiceRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Throwable;

class ClientProjectsController extends Controller
{
    public function index()
    {
        $client_projects = ClientProjectRepository::Select();
        if (!isset($client_projects)) return redirect() -> route('control-panel');

        $page_title = 'Client Projects - Control Panel';
        return view('administration.client-projects.index', compact('page_title', 'client_projects',));
    }


    public function create()
    {
        $services = ClientProjectServiceRepository::Select();
        if (!isset($services)) return redirect() -> route('control-panel.client-project-services');

        $page_title = 'Create Client Project - Control Panel';
        return view('administration.client-projects.create', compact('page_title', 'services'));
    }

    public function createPost(Request $request)
    {
        try
        {
            // form validation
            $validator = Validator::make($request -> all(),
            [
                'page_title' => 'required|string',
                'heading' => 'required|string',
                'sub_heading' => 'required|string',
                'image' => 'required|image',
                'services' => 'nullable|array',
                'short_content' => 'required|string',
                'full_content' => 'required|string'
            ]);
            if ($validator -> fails()) return back() -> withErrors($validator) -> withInput();

            // try catch 1 - store uploaded image
            $image = "";
            if (!$request -> hasFile('image'))
            {
                return redirect() -> back() -> withErrors([ 'image' => 'The image is required.' ]) -> withInput();
            }
            else
            {
                try
                {
                    $uploaded_file = $request -> image;
                    $image = 'storage/' . $uploaded_file -> store('client-projects/images', 'public_html');
                }
                catch (Throwable $th)
                {
                    report($th);
                    return redirect() -> back() -> withErrors([ 'image' => 'The image could not be saved.' ]) -> withInput();
                }
            }

            // save the form data to the database
            ClientProjectRepository::Insert(
                $request -> input('page_title'),
                $request -> input('heading'),
                $request -> input('sub_heading'),
                $image,
                ($request -> has('services')) ? implode(",", $request -> input('services')) : null,
                $request -> input('short_content'),
                $request -> input('full_content')
            );

            // redirect to the success page
            return redirect() -> route('control-panel.client-projects');
        }
        catch (Throwable $th)
        {
            throw($th);
            // report the error and redirect to the error page
            report($th);
            return redirect() -> back() -> withErrors([ 'image' => 'Sorry, but there was an error.' ]) -> withInput();
        }
    }


    public function edit($id)
    {
        // get the current client project information
        $rows = ClientProjectRepository::SelectById($id);
        if (!isset($rows) || count($rows) == 0) return redirect() -> route('control-panel.client-projects');
        $client_project = $rows[0];

        // get the list of services
        $services = ClientProjectServiceRepository::Select();
        if (!isset($services)) return redirect() -> route('control-panel.client-project-services');

        // return the view
        $page_title = 'Edit Client Project - Control Panel';
        return view('administration.client-projects.edit', compact('page_title', 'client_project', 'services'));
    }

    public function editPost(Request $request)
    {
        try
        {
            // form validation
            $validator = Validator::make($request -> all(),
            [
                'page_title' => 'required|string',
                'heading' => 'required|string',
                'sub_heading' => 'required|string',
                'image' => 'nullable|image',
                'services' => 'nullable|array',
                'short_content' => 'required|string',
                'full_content' => 'required|string'
            ]);
            if ($validator -> fails()) return back() -> withErrors($validator) -> withInput();

            // try catch 1 - save file uploads to the database
            $image = null;
            if ($request -> hasFile('image'))
            {
                try
                {
                    $uploaded_file = $request -> image;
                    $image = 'storage/' . $uploaded_file -> store('client-projects', 'public_html');
                }
                catch (Throwable $th)
                {
                    report($th);
                    return redirect() -> back() -> withErrors([ 'image' => 'The image could not be saved.' ]) -> withInput();
                }
            }

            // save the form data to the database
            if (isset($image))
            {
                ClientProjectRepository::Update(
                    $request -> input('id'),
                    $request -> input('page_title'),
                    $request -> input('heading'),
                    $request -> input('sub_heading'),
                    $image,
                    ($request -> has('services')) ? implode(",", $request -> input('services')) : null,
                    $request -> input('short_content'),
                    $request -> input('full_content')
                );
            }
            else
            {
                ClientProjectRepository::UpdateNoImage(
                    $request -> input('id'),
                    $request -> input('page_title'),
                    $request -> input('heading'),
                    $request -> input('sub_heading'),
                    ($request -> has('services')) ? implode(",", $request -> input('services')) : null,
                    $request -> input('short_content'),
                    $request -> input('full_content')
                );
            }

            // redirect to the success page
            return redirect() -> route('control-panel.client-projects');
        }
        catch (Throwable $th)
        {
            throw($th);
            // report the error and redirect to the error page
            report($th);
            return redirect() -> back() -> withErrors([ 'image' => 'Sorry, but there was an error.' ]) -> withInput();
        }
    }
}
