<?php

namespace App\Http\Controllers;

use App\Models\Cd;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'cds' => Cd::paginate(10),
        ]);
    }
}