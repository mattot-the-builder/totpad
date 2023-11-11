<?php

namespace App\Http\Controllers;

use App\Models\Ipad;
use Illuminate\Http\Request;

class IpadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ipads = Ipad::paginate(10);
        return view('ipad', compact('ipads'));
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
        $ipad = new Ipad();
        $ipad->user_id = auth()->user()->id;
        $ipad->model = $request->model;
        $ipad->serial_number = $request->serial_number;

        if ($ipad->save()) {
            return redirect()->back()->with('success', 'Ipad added successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
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
        $ipad = Ipad::find($ipad->id);
        if ($ipad->delete()) {
            return redirect()->back()->with('success', 'Ipad deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
