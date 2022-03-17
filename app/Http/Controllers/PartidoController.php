<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Partido;

use App\Http\Requests\StorePartido;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $partidos = Partido::all();
        return view('partido.index')->with('partidos', $partidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $equipos = Equipo::all();
        return view('partido.create', compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePartido  $request
     * @return RedirectResponse
     */
    public function store(StorePartido $request): RedirectResponse
    {
        $partido = Partido::create($request->all());
        return redirect()->route('partido.show', $partido);
    }

    /**
     * Display the specified resource.
     *
     * @param  Partido $partido
     * @return View
     */
    public function show(Partido $partido): View
    {
        return view('partido.show', compact('partido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Partido $partido
     * @return View
     */
    public function edit(Partido $partido): View
    {
        $equipos = Equipo::all();
        return view('partido.edit', compact('partido', 'equipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Partido $partido
     * @return RedirectResponse
     */
    public function update(Request $request, Partido $partido): RedirectResponse
    {
        $partido->update($request->all());
        return redirect()->route('partido.show', $partido);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Partido $partido
     * @return RedirectResponse
     */
    public function destroy(Partido $partido): RedirectResponse
    {
        $partido->delete();
        return redirect()->route('partido.index');
    }
}
