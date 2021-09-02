<?php

namespace App\Http\Controllers;

use App\Repositories\ClientProjectRepository;
use App\Repositories\ClientProjectServiceRepository;
use App\Repositories\ClientProjectTechnologyRepository;
use Throwable;

class ClientsController extends Controller
{
    public function clients()
    {
        $navbar_page = 'clients';
        $page_title = 'Our Clients - Gigawaffle';

        $client_projects = [];
        try
        {
            $rows = ClientProjectRepository::select();
            if (isset($rows) && count($rows) > 0)
            {
                $client_projects = $rows;
            }
        }
        catch (Throwable $th)
        {
            report($th);
            return redirect() -> route('home');
        }

        return view('clients.index', compact('navbar_page', 'page_title', 'client_projects'));
    }

    public function clientProjects($projectId)
    {
        if (!isset($projectId)) return redirect() -> action("ClientsController@clients");

        try
        {
            $rows = ClientProjectRepository::SelectById($projectId);
            if (!isset($rows) || count($rows) == 0) return redirect() -> action("ClientsController@clients");
            $client_project = $rows[0];

            $services = ClientProjectServiceRepository::SelectByClientProjectIDs($client_project -> Services);
            if (!isset($services) || count($services) == 0) return redirect() -> action("ClientsController@clients");

            $technologies = ClientProjectTechnologyRepository::SelectByClientProjectIDs($client_project -> Technologies);
            if (!isset($technologies) || count($technologies) == 0) return redirect() -> action("ClientsController@clients");

            $navbar_page = 'clients';
            $page_title = $client_project -> PageTitle;
            return view('clients.client-project', compact('navbar_page', 'page_title', 'client_project', 'services', 'technologies'));
        }
        catch (Throwable $th)
        {
            report($th);
            return redirect() -> action("ClientsController@clients");
        }
        return redirect() -> action("ClientsController@clients");
    }
}
