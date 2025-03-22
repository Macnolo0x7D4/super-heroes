<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    public function create()
    {
        return view('superheroes.create');
    }

    public function store(Request $request)
    {
        Superhero::create(['type' => $request->type]);
        return to_route('superheroes.index');
    }

    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }

    public function edit(Superhero $superhero)
    {
        return view('superheroes.edit', compact('superhero'));
    }

    public function update(Request $request, Superhero $superhero)
    {
        $superhero->update(['type' => $request->type]);
        return to_route('superheroes.index');
    }

    public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return to_route('superheroes.index');
    }
}
