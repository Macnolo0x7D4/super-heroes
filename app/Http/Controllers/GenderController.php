<?php

namespace App\Http\Controllers;

use App\Models\Gender;

class GenderController extends Controller
{
    public function index()
    {
        $gender = Gender::all();
        return view('genders', compact('gender'));
    }
}
