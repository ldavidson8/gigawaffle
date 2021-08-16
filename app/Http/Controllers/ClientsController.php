<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
            $rows = DB::select('call SELECT_Client_Project');
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
            $rows = DB::select('call SELECT_BY_ID_Client_Project(?)', [ $projectId ]);

            if (isset($rows) && count($rows) > 0)
            {
                $client_project = $rows[0];
                $navbar_page = '';
                $page_title = $client_project -> PageTitle;
                return view('clients.client-project', compact('navbar_page', 'page_title', 'client_project'));
            }
        }
        catch (Throwable $th)
        {
            throw($th);
            report($th);
            return redirect() -> action("ClientsController@clients");
        }
        return redirect() -> action("ClientsController@clients");
    }
}
