<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEquipo;

use App\Models\Equipo;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $equipos = Equipo::paginate(10);
        return view('equipo.index')->with('equipos', $equipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Club|null $club
     * @return View
     */
    public function create(Club $club = null): View
    {
        if ($club === null) {
            $clubs = Club::all();
        } else {
            $clubs[] = $club;
        }
        return view('equipo.create', compact('clubs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreEquipo  $request
     * @return RedirectResponse
     */
    public function store(StoreEquipo $request): RedirectResponse
    {
        $equipo = Equipo::create($request->all());

        return redirect()->route('equipo.show', $equipo);
    }

    /**
     * Display the specified resource.
     *
     * @param  Equipo $equipo
     * @return View
     */
    public function show( Equipo $equipo, Club $club): View
    {
        return view('equipo.show', compact('equipo', 'club'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Equipo $equipo
     * @return View
     */
    public function edit(Equipo $equipo): View
    {
        return view('equipo.edit', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Equipo $equipo
     * @return RedirectResponse
     */
    public function update(Request $request, Equipo $equipo): RedirectResponse
    {
        $equipo->update($request->all());
        return redirect()->route('equipo.show', $equipo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Equipo $equipo
     * @return RedirectResponse
     */
    public function destroy(Equipo $equipo): RedirectResponse
    {
        $equipo->delete();

        return redirect()->route('equipo.index');
    }
}
