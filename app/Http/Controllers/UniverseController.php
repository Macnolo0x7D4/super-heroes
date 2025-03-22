<?php

namespace App\Http\Controllers;

use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    public function index()
    {
        $universes = Universe::all();
        return view('universes.index', compact('universes'));
    }

    public function create()
    {
        return view('universes.create');
    }

    public function store(Request $request)
    {
        Universe::create(['name' => $request->name]);
        return to_route('universes.index');
    }

    public function show(Universe $universe)
    {
        return view('universes.show', compact('universe'));
    }

    public function edit(Universe $universe)
    {
        return view('universes.edit', compact('universe'));
    }

    public function update(Request $request, Universe $universe)
    {
        $universe->update(['name' => $request->name]);
        return to_route('universes.index');
    }

    public function destroy(Universe $universe)
    {
        $universe->delete();
        return to_route('universes.index');
    }
}
