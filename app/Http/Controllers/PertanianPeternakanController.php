<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanianPeternakanController extends Controller
{
    public function index()
    {
        return view('pages.pertanian-peternakan.index');
    }
}
