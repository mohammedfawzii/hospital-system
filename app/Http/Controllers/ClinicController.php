<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClinicRequest;
use App\Models\Clinic;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clinics = Clinic::all();
        return view('clinics.index', compact('clinics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clinics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClinicRequest $request)
    {
        Clinic::create($request->validated());

        return redirect()->route('clinics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clinic $clinic)
    {
        return view('clinics.show', compact('clinic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clinic $clinic)
    {
        return view('clinics.edit', compact('clinic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClinicRequest $request, Clinic $clinic)
    {
        $clinic->update($request->validated());

        return redirect()->route('clinics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clinic $clinic)
    {
        $clinic->delete();

        return redirect()->route('clinics.index');
    }
}
