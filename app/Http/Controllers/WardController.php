<?php

namespace App\Http\Controllers;

use App\Http\Requests\WardRequest;
use App\Models\Ward;
use Illuminate\Http\Request;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wards = Ward::all();
        return view('wards.index', compact('wards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WardRequest $request)
    {
        Ward::create($request->validated());

        return redirect()->route('wards.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ward $ward)
    {
        return view('wards.show', compact('ward'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ward $ward)
    {
        return view('wards.edit', compact('ward'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WardRequest $request, Ward $ward)
    {
        // قم بتحديث السجل في قاعدة البيانات
        $ward->update($request->validated());

        return redirect()->route('wards.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ward $ward)
    {
        $ward->delete();

        return redirect()->route('wards.index');
    }
}
