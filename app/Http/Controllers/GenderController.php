<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index()
    {
        $genders = Gender::all();
        return view('genders.index', compact('genders'));
    }

    public function create()
    {
        return view('genders.create');
    }

    public function store(Request $request)
    {
        Gender::create(['type' => $request->type]);
        return to_route('genders.index');
    }

    public function show(Gender $gender)
    {
        return view('genders.show', compact('gender'));
    }

    public function edit(Gender $gender)
    {
        return view('genders.edit', compact('gender'));
    }

    public function update(Request $request, Gender $gender)
    {
        $gender->update(['type' => $request->type]);
        return to_route('genders.index');
    }

    public function destroy(Gender $gender)
    {
        $gender->delete();
        return to_route('genders.index');
    }
}
