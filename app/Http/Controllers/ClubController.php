<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests\StoreClub;

use App\Models\Club;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        $clubs = Club::paginate(5);
        return view('club.index')->with('clubs', $clubs);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create(): View
    {
        $clubs = Club::all();
        return view('club.create', compact('clubs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreClub $request
     * @return RedirectResponse
     *
     */
    public function store(StoreClub $request): RedirectResponse
    {
        $clubs = Club::create($request->all());
        return redirect()->route('club.show', $clubs);
    }

    /**
     * Display the specified resource.
     *
     * @param  Club  $club
     * @return View
     */
    public function show(Club $club): View
    {
        return view('club.show', compact('club'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Club $club
     * @return View
     */
    public function edit(Club $club): View
    {
        return view('club.edit', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreClub $request
     * @param  Club $club
     * @return RedirectResponse
     */
    public function update(StoreClub $request, Club $club): RedirectResponse
    {
        $club->update($request->all());
        return redirect()->route('club.show', $club);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Club $club
     * @return RedirectResponse
     */
    public function destroy(Club $club): RedirectResponse
    {
        $club->delete();
        return redirect()->route('club.index');
    }
}
