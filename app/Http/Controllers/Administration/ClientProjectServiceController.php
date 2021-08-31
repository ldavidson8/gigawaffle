<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Repositories\ClientProjectServiceRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Throwable;

class ClientProjectServiceController extends Controller
{
    public function index()
    {
        $services = ClientProjectServiceRepository::Select();
        if (!isset($services)) return redirect() -> route('control-panel');

        $page_title = 'Client Project Services - Control Panel';
        return view('administration.client-project-services.index', compact('page_title', 'services'));
    }


    public function create()
    {
        $page_title = 'Create Client Project Service - Control Panel';
        return view('administration.client-project-services.create', compact('page_title'));
    }

    public function createPost(Request $request)
    {
        try
        {
            // form validation
            $validator = Validator::make($request -> all(),
            [
                'name' => 'required|string',
                'image' => 'required|file',
                'sort_index' => 'required|integer'
            ]);
            if ($validator -> fails()) return back() -> withErrors($validator) -> withInput();

            // try catch 1 - save file uploads to the database
            $image = null;
            if (!$request -> hasFile('image'))
            {
                return redirect() -> back() -> withErrors([ 'image' => 'The image is required.' ]) -> withInput();
            }
            else
            {
                try
                {
                    $uploaded_file = $request -> image;
                    $image = 'storage/' . $uploaded_file -> store('client-project-services', 'public_html');
                }
                catch (Throwable $th)
                {
                    report($th);
                    return redirect() -> back() -> withErrors([ 'image' => 'The image could not be saved.' ]) -> withInput();
                }
            }

            // save the form data to the database
            try
            {
                ClientProjectServiceRepository::Insert(
                    $request -> input('name'),
                    $image,
                    $request -> input('sort_index')
                );
            }
            catch (Throwable $th)
            {
                throw($th);
                report($th);
                return redirect() -> back() -> withErrors([ 'image' => 'There was a problem saving to the database.' ]) -> withInput();
            }

            // redirect to the success page
            return redirect() -> route('control-panel.client-project-services');
        }
        catch (Throwable $th)
        {
            // report the error and redirect to the error page
            throw($th);
            report($th);
            return redirect() -> back() -> withErrors([ 'image' => 'Sorry, but there was an error.' ]) -> withInput();
        }
    }


    public function edit($id)
    {
        $rows = ClientProjectServiceRepository::SelectById($id);
        if (!isset($rows) || count($rows) == 0) return redirect() -> route('control-panel.client-project-services');
        $service = $rows[0];

        $page_title = 'Edit Client Project - Control Panel';
        return view('administration.client-project-services.edit', compact('page_title', 'service'));
    }

    public function editPost(Request $request)
    {
        try
        {
            // form validation
            $validator = Validator::make($request -> all(),
            [
                'name' => 'required|string',
                'image' => 'nullable|file',
                'sort_index' => 'required|integer'
            ]);
            if ($validator -> fails()) return back() -> withErrors($validator) -> withInput();

            $image = null;
            if ($request -> hasFile('image'))
            {
                try
                {
                    $uploaded_file = $request -> image;
                    $image = 'storage/' . $uploaded_file -> store('client-project-services', 'public_html');
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
                try
                {
                    ClientProjectServiceRepository::Update(
                        $request -> input('id'),
                        $request -> input('name'),
                        $image,
                        $request -> input('sort_index')
                    );
                }
                catch (Throwable $th)
                {
                    throw($th);
                    report($th);
                    return redirect() -> back() -> withErrors([ 'image' => 'There was a problem saving to the database.' ]) -> withInput();
                }
            }
            else
            {
                try
                {
                    ClientProjectServiceRepository::UpdateNoImage(
                        $request -> input('id'),
                        $request -> input('name'),
                        $request -> input('sort_index')
                    );
                }
                catch (Throwable $th)
                {
                    throw($th);
                    report($th);
                    return redirect() -> back() -> withErrors([ 'image' => 'There was a problem saving to the database.' ]) -> withInput();
                }
            }

            // redirect to the success page
            return redirect() -> route('control-panel.client-project-services');
        }
        catch (Throwable $th)
        {
            // report the error and redirect to the error page
            throw($th);
            report($th);
            return redirect() -> back() -> withErrors([ 'image' => 'Sorry, but there was an error.' ]) -> withInput();
        }
    }
}
