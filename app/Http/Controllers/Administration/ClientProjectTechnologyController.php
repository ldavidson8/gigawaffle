<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Repositories\ClientProjectTechnologyRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Throwable;

class ClientProjectTechnologyController extends Controller
{
    public function index()
    {
        $technologies = ClientProjectTechnologyRepository::Select();
        if (!isset($technologies)) return redirect() -> route('control-panel');

        $page_title = 'Client Project Technologies - Control Panel';
        return view('administration.client-project-technologies.index', compact('page_title', 'technologies'));
    }


    public function create()
    {
        $page_title = 'Create Client Project Technologies - Control Panel';
        return view('administration.client-project-technologies.create', compact('page_title'));
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
                    $image = 'storage/' . $uploaded_file -> store('client-project-technologies', 'public_html');
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
                ClientProjectTechnologyRepository::Insert(
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
            return redirect() -> route('control-panel.client-project-technologies');
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
        $rows = ClientProjectTechnologyRepository::SelectById($id);
        if (!isset($rows) || count($rows) == 0) return redirect() -> route('control-panel.client-project-technologies');
        $technology = $rows[0];

        $page_title = 'Edit Client Project - Control Panel';
        return view('administration.client-project-technologies.edit', compact('page_title', 'technology'));
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
                    $image = 'storage/' . $uploaded_file -> store('client-project-technologies', 'public_html');
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
                    ClientProjectTechnologyRepository::Update(
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
                    ClientProjectTechnologyRepository::UpdateNoImage(
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
            return redirect() -> route('control-panel.client-project-technologies');
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
