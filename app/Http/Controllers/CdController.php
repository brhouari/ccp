<?php

namespace App\Http\Controllers;

use App\Models\Cd;

class CdController extends Controller
{
    public function index()
    {
        return view('cds.index', [
            'cds' => Cd::paginate(10),
        ]);
    }
}