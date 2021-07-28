<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function clients()
    {
        $navbar_page = 'clients';
        $page_title = 'Our Clients - Gigawaffle';
        return view('clients', compact('navbar_page', 'page_title'));
    }

    public function clientProjects($blogId)
    {
        if (!isset($blogId)) return redirect() -> route('clients');

        switch ($blogId)
        {
            case '1': $view = 'blog.project-1'; break;
            case '2': $view = 'blog.project-2'; break;
            case '3': $view = 'blog.project-3'; break;
            case '4': $view = 'blog.project-4'; break;
            case '5': $view = 'blog.project-5'; break;
            case '6': $view = 'blog.project-6'; break;
            case '7': $view = 'blog.project-7'; break;
            case '8': $view = 'blog.project-8'; break;
            default:
                return redirect() -> route('clients');
        }
        
        $navbar_page = '';
        $page_title = 'Our Clients - Gigawaffle';
        return view($view, compact('navbar_page', 'page_title'));
    }
}