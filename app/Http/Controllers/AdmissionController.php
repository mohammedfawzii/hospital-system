<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdmissionRequest;
use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admissions = Admission::all();
        return view('admissions.index', compact('admissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdmissionRequest $request)
    {
        Admission::create($request->all());

        return redirect()->route('admissions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admission $admission)
    {
        return view('admissions.show', compact('admission'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admission $admission)
    {
        return view('admissions.edit', compact('admission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdmissionRequest $request, Admission $admission)
    {
        $admission->update($request->all());

        return redirect()->route('admissions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admission $admission)
    {
        $admission->delete();

        return redirect()->route('admissions.index');
    }
}
