<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $navbar_page = 'home';
        $page_title = 'Gigawaffle';
        return view('index', compact('navbar_page', 'page_title'));
    }
    
    public function clients()
    {
        $navbar_page = 'clients';
        $page_title = 'Our Clients - Gigawaffle';
        return view('clients', compact('navbar_page', 'page_title'));
    }
    
    public function services()
    {
        $navbar_page = 'services';
        $page_title = 'Services - Gigawaffle';
        return view('services', compact('navbar_page', 'page_title'));
    }
    
    public function about()
    {
        $navbar_page = 'about';
        $page_title = 'About Gigawaffle';
        return view('about', compact('navbar_page', 'page_title'));
    }
    
    public function siteMap()
    {
        $navbar_page = 'sitemap';
        $page_title = 'Sitemap - Gigawaffle';
        return view('sitemap', compact('navbar_page', 'page_title'));
    }
}