<?php

// app/Http/Controllers/NurseController.php

namespace App\Http\Controllers;

use App\Http\Requests\NurseRequest;
use App\Models\Nurse;
use Illuminate\Http\Request;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nurses = Nurse::all();
        return view('nurses.index', compact('nurses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nurses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NurseRequest $request)
    {

        Nurse::create($request->validated());

        return redirect()->route('nurses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nurse $nurse)
    {
        return view('nurses.show', compact('nurse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nurse $nurse)
    {
        return view('nurses.edit', compact('nurse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NurseRequest $request, Nurse $nurse)
    {

        $nurse->update($request->validated());

        return redirect()->route('nurses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nurse $nurse)
    {

        $nurse->delete();

        return redirect()->route('nurses.index');
    }
}
