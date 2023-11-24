<?php


namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tests = Test::all();
        return view('tests.index', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestRequest $request)
    {

        Test::create($request->validated());

        return redirect()->route('tests.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        return view('tests.show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        return view('tests.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestRequest $request, Test $test)
    {
        // قم بتحديث السجل في قاعدة البيانات
        $test->update($request->validated());

        return redirect()->route('tests.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        $test->delete();

        return redirect()->route('tests.index');
    }
}
