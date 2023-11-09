<?php

namespace App\Http\Controllers;

use App\Models\CheckinLog;
use Illuminate\Http\Request;

class CheckinLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $checkinLogs = CheckinLog::latest()->paginate(10);
        return view('checkin-log', compact('checkinLogs'));
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
    public function show(CheckinLog $checkinLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CheckinLog $checkinLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CheckinLog $checkinLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CheckinLog $checkinLog)
    {
        //
    }
}
