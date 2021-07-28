<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $page_title = 'Gigawaffle';
        return view('index', compact('page_title'));
    }
    
    public function clients()
    {
        $page_title = 'Our Clients - Gigawaffle';
        return view('clients', compact('page_title'));
    }
    
    public function services()
    {
        $page_title = 'Services - Gigawaffle';
        return view('services', compact('page_title'));
    }
    
    public function about()
    {
        $page_title = 'About Gigawaffle';
        return view('about', compact('page_title'));
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
}