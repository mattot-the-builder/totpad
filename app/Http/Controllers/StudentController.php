<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = User::where('role', 'student')->paginate(10);
        return view('student', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ipad $ipad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ipad $ipad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ipad $ipad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ipad $ipad)
    {
        //
    }
}
