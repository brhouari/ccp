<?php

namespace App\Http\Controllers;

use App\Models\Cd;

class DashController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'cds' => Cd::paginate(10),
        ]);
    }
}