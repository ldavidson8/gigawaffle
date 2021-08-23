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
        $page_title = 'Control Panel';
        return view('administration.index', compact('page_title'));
    }
}
