<?php

namespace App\Http\Controllers;

class ClientsController extends Controller
{
    public function clients()
    {
        $navbar_page = 'clients';
        $page_title = 'Our Clients - Gigawaffle';
        return view('clients', compact('navbar_page', 'page_title'));
    }

    public function clientProjects($projectId)
    {
        if (!isset($projectId)) return redirect() -> route('clients');

        switch ($projectId)
        {
            case '1': $view = 'clients.project-1'; break;
            case '2': $view = 'clients.project-2'; break;
            case '3': $view = 'clients.project-3'; break;
            case '4': $view = 'clients.project-4'; break;
            case '5': $view = 'clients.project-5'; break;
            case '6': $view = 'clients.project-6'; break;
            case '7': $view = 'clients.project-7'; break;
            case '8': $view = 'clients.project-8'; break;
            default:
                return redirect() -> route('clients');
        }
        
        $navbar_page = '';
        $page_title = 'Our Clients - Gigawaffle';
        return view($view, compact('navbar_page', 'page_title'));
    }
}