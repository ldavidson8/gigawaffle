<?php

namespace App\Http\Controllers;

use App\Repositories\BlogPostRepository;
use Throwable;

class HomeController extends Controller
{
    public function index()
    {
        $navbar_page = 'home';
        $page_title = 'Gigawaffle';

        $blog_posts = [];
        try
        {
            $blog_posts = BlogPostRepository::SelectOnly(3);
        }
        catch (Throwable $th)
        {
            report($th);
        }

        return view('index', compact('page_title', 'navbar_page', 'blog_posts'));
    }

    public function services()
    {
        $navbar_page = 'services';
        $page_title = 'Services - Gigawaffle';
        return view('services', compact('page_title', 'navbar_page'));
    }

    public function about()
    {
        $navbar_page = 'about';
        $page_title = 'About Gigawaffle';
        return view('about', compact('page_title', 'navbar_page'));
    }

    public function siteMap()
    {
        $page_title = 'Sitemap - Gigawaffle';
        return view('sitemap', compact('page_title'));
    }

    public function termsAndConditions()
    {
        $page_title = 'Terms and Conditions - Gigawaffle';
        return view('terms-and-conditions', compact('page_title'));
    }

    public function privacyPolicy()
    {
        $page_title = 'Privacy Policy - Gigawaffle';
        return view('privacy-policy', compact('page_title'));
    }

    public function cookiePolicy()
    {
        $page_title = 'Cookie Policy - Gigawaffle';
        return view('cookie-policy', compact('page_title'));
    }

    public function picknMix()
    {
        $page_title = 'Pick n Mix - Gigawaffle';
        return view('service-selection', compact('page_title'));
    }
}
