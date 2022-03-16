<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Models\Jugador;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $jugadores = Jugador::all();
        return view('jugador.index')->with('jugadores', $jugadores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $equipos = Equipo::all();
        return view('jugador.create', compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $jugador = Jugador::create($request->all());

        return redirect()->route('jugador.show', $jugador);
    }

    /**
     * Display the specified resource.
     *
     * @param  Jugador $jugador
     * @return View
     */
    public function show( Jugador $jugador, Equipo $equipo): View
    {
        return view('jugador.show', compact('jugador', 'equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Jugador $jugador
     * @return View
     */
    public function edit(Jugador $jugador): View
    {
        return view('jugador.edit', compact('jugador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Jugador $jugador
     * @return RedirectResponse
     */
    public function update(Request $request, Jugador $jugador): RedirectResponse
    {
        $jugador->update($request->all());

        return redirect()->route('jugador.index', $jugador);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Jugador $jugador
     * @return RedirectResponse
     */
    public function destroy(Jugador $jugador): RedirectResponse
    {
        $jugador->delete();

        return redirect()->route('jugador.index');
    }
}