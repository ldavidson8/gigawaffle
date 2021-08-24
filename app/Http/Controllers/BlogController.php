<?php

namespace App\Http\Controllers;

use App\Repositories\BlogPostRepository;
use Illuminate\Cache\Repository;
use Throwable;

class BlogController extends Controller
{
    public function index()
    {
        $navbar_page = 'blog';
        $page_title = 'Blog - Gigawaffle';

        $blog_posts = [];
        try
        {
            $rows = BlogPostRepository::Select();
            if (isset($rows) && count($rows) > 0)
            {
                $blog_posts = $rows;
            }
        }
        catch (Throwable $th)
        {
            report($th);
        }

        return view('blog.index', compact('navbar_page', 'page_title', 'blog_posts'));
    }

    public function blogPost($blogId)
    {
        if (!isset($blogId)) return redirect() -> action("BlogController@index");

        try
        {
            $rows = BlogPostRepository::SelectById($blogId);

            if (isset($rows) && count($rows) > 0)
            {
                $blog_post = $rows[0];
                $navbar_page = 'blog';
                $page_title = $blog_post -> PageTitle;
                return view('blog.post', compact('navbar_page', 'page_title', 'blog_post'));
            }
        }
        catch (Throwable $th)
        {
            report($th);
            return redirect() -> action("BlogController@index");
        }
        return redirect() -> action("BlogController@index");
    }
}
