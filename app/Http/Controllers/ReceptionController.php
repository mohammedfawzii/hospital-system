<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReceptionRequest;
use App\Models\Reception;
use Illuminate\Http\Request;

class ReceptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receptions = Reception::all();
        return view('receptions.index', compact('receptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('receptions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReceptionRequest $request)
    {
        Reception::create($request->validated());

        return redirect()->route('receptions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reception $reception)
    {
        return view('receptions.show', compact('reception'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reception $reception)
    {
        return view('receptions.edit', compact('reception'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReceptionRequest $request, Reception $reception)
    {
        $reception->update($request->validated());

        return redirect()->route('receptions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reception $reception)
    {
        $reception->delete();

        return redirect()->route('receptions.index');
    }
}
