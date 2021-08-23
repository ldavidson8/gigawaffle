<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Repositories\BlogCategoryRepository;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Throwable;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $blog_categories = BlogCategoryRepository::Select();
        if (!isset($blog_categories)) return redirect() -> route('control-panel');

        $page_title = 'Blog Categories - Control Panel';
        return view('administration.blog-categories.index', compact('page_title', 'blog_categories'));
    }


    public function create()
    {
        $blog_categories = BlogCategoryRepository::Select();
        if (!isset($blog_categories)) return redirect() -> route('control-panel.blog-category');

        $page_title = 'Create Blog Category - Control Panel';
        return view('administration.blog-categories.create', compact('page_title', 'blog_categories'));
    }

    public function createPost(Request $request)
    {
        try
        {
            // form validation
            $validator = Validator::make($request -> all(),
            [
                'name' => 'required|string'
            ]);
            if ($validator -> fails()) return back() -> withErrors($validator) -> withInput();

            // save the form data to the database
            $rows = BlogCategoryRepository::Insert($request -> input('name'));
            $insert_id = $rows[0] -> last_insert_id;

            if (isset($insert_id) && is_numeric($insert_id) && $insert_id > 0)
            {
                // redirect to the success page
                return redirect() -> route('control-panel.blog-category');
            }

            return redirect() -> back() -> withErrors([ '' => 'Sorry, but something went wrong. ' . $insert_id ]) -> withInput();
        }
        catch (Throwable $th)
        {
            // report the error and redirect to the error page
            report($th);
            return redirect() -> back() -> withErrors([ 'image' => 'Sorry, but there was an error.' ]) -> withInput();
        }
    }


    public function edit($id)
    {
        $blog_categories = BlogCategoryRepository::Select();
        if (!isset($blog_categories)) return redirect() -> route('control-panel.blog-category');

        $rows = BlogCategoryRepository::SelectById($id);
        if (!isset($rows) || count($rows) == 0) return redirect() -> route('control-panel.blog-category');
        $blog_category = $rows[0];

        $page_title = 'Edit Blog Category - Control Panel';
        return view('administration.blog-categories.edit', compact('page_title', 'blog_category'));
    }

    public function editPost(Request $request)
    {
        try
        {
            // form validation
            $validator = Validator::make($request -> all(),
            [
                'id' => 'required|integer',
                'name' => 'required|string'
            ]);
            if ($validator -> fails()) return back() -> withErrors($validator) -> withInput();

            // save the form data to the database
            BlogCategoryRepository::Update(
                $request -> input('id'),
                $request -> input('name')
            );

            // redirect to the success page
            return redirect() -> route('control-panel.blog-category');
        }
        catch (Throwable $th)
        {
            // report the error and redirect to the error page
            report($th);
            return redirect() -> back() -> withErrors([ 'image' => 'Sorry, but there was an error.' ]) -> withInput();
        }
    }
}
