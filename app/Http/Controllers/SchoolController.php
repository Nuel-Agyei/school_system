<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{

    public function index()
    {
        return view('school.index');
    }
    public function create()
    {
        return view('school.create');
    }
    public function store(Request $request)
    {
        return $request->all();
    }
}
