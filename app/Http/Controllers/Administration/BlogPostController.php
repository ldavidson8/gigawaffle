<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Repositories\BlogCategoryRepository;
use App\Repositories\BlogPostRepository;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Throwable;

class BlogPostController extends Controller
{
    public function index()
    {
        $blog_posts = BlogPostRepository::Select();
        if (!isset($blog_posts)) return redirect() -> route('control-panel');

        $page_title = 'Blog Posts - Control Panel';
        return view('administration.blog-posts.index', compact('page_title', 'blog_posts'));
    }


    public function create()
    {
        $blog_categories = BlogCategoryRepository::Select();
        if (!isset($blog_categories)) return redirect() -> route('control-panel.blog-post');

        $page_title = 'Create Blog Post - Control Panel';
        return view('administration.blog-posts.create', compact('page_title', 'blog_categories'));
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
                'image' => 'required|image',
                'full_content' => 'required|string',
                'category_id' => 'required|integer'
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
                    $image = 'storage/' . $uploaded_file -> store('blog-post/images', 'public_html');
                }
                catch (Throwable $th)
                {
                    report($th);
                    Log::channel('request-callback') -> error('BlogPostControllerController -> createPost(), try catch 1, Error saving the uploaded file  -:-  ' . $th -> getMessage());
                    return redirect() -> back() -> withErrors([ 'image' => 'The image could not be saved.' ]) -> withInput();
                }
            }

            // save the form data to the database
            $rows = BlogPostRepository::Insert(
                $request -> input('page_title'),
                $request -> input('heading'),
                $image,
                $request -> input('full_content'),
                $request -> input('category_id')
            );
            $insert_id = $rows[0] -> last_insert_id;

            if (isset($insert_id) && is_numeric($insert_id) && $insert_id > 0)
            {
                // redirect to the success page
                return redirect() -> route('control-panel.blog-post');
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
        if (!isset($blog_categories)) return redirect() -> route('control-panel.blog-post');

        $rows = BlogPostRepository::SelectById($id);
        if (!isset($rows) || count($rows) == 0) return redirect() -> route('control-panel.blog-post');
        $blog_post = $rows[0];

        $page_title = 'Edit Blog Post - Control Panel';
        return view('administration.blog-posts.edit', compact('page_title', 'blog_post', 'blog_categories'));
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
                'image' => 'nullable|image',
                'full_content' => 'required|string',
                'category_id' => 'required|integer'
            ]);
            if ($validator -> fails()) return back() -> withErrors($validator) -> withInput();

            // try catch 1 - save file uploads to the database
            $image = null;
            if ($request -> hasFile('image'))
            {
                try
                {
                    $uploaded_file = $request -> image;
                    $image = 'storage/' . $uploaded_file -> store('blog-post', 'public_html');
                }
                catch (Throwable $th)
                {
                    report($th);
                    Log::channel('request-callback') -> error('BlogPostControllerController -> createPost(), try catch 1, Error saving the uploaded file  -:-  ' . $th -> getMessage());
                    return redirect() -> back() -> withErrors([ 'image' => 'The image could not be saved.' ]) -> withInput();
                }
            }

            // save the form data to the database
            if (isset($image))
            {
                BlogPostRepository::Update(
                    $request -> input('id'),
                    $request -> input('page_title'),
                    $request -> input('heading'),
                    $image,
                    $request -> input('full_content'),
                    $request -> input('category_id')
                );
            }
            else
            {
                BlogPostRepository::UpdateNoImage(
                    $request -> input('id'),
                    $request -> input('page_title'),
                    $request -> input('heading'),
                    $request -> input('full_content'),
                    $request -> input('category_id')
                );
            }

            // redirect to the success page
            return redirect() -> route('control-panel.blog-post');
        }
        catch (Throwable $th)
        {
            // report the error and redirect to the error page
            report($th);
            return redirect() -> back() -> withErrors([ 'image' => 'Sorry, but there was an error.' ]) -> withInput();
        }
    }
}
