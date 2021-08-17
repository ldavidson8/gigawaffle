<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Repositories\ClientProjectRepository;
use Illuminate\Support\Facades\DB;
use Throwable;

class AdministrationController extends Controller
{
    public function index()
    {
        $client_projects = ClientProjectRepository::Select();
        if (!isset($client_projects)) return redirect() -> route('home');

        $page_title = 'Control Panel';
        return view('administration.index', compact('page_title', 'client_projects'));
    }
}
