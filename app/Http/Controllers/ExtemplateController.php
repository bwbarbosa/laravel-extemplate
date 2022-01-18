<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtemplateController extends Controller
{
    public function index()
    {
        return view('extemplate');
    }
}
