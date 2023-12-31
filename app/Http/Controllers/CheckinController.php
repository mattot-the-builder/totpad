<?php

namespace App\Http\Controllers;

use App\Models\CheckinLog;
use App\Models\Ipad;
use Illuminate\Http\Request;

class CheckinController extends Controller
{
    public function dashboard()
    {
        return view('student.dashboard');
    }

    public function checkinLog()
    {
        $checkinLogs = CheckinLog::where('user_id', auth()->user()->id)->latest()->paginate(10);
        return view('student.checkin-log', compact('checkinLogs'));
    }


    public function checkin()
    {
        if (auth()->check()) {

            $user = auth()->user();

            if ($user->status == 'checkout') {
                $user->update(['status' => 'checkin']);

                $checkin = new CheckinLog();
                $checkin->user_id = auth()->user()->id;
                $checkin->action = 'checkin';

                if ($checkin->save()) {
                    return redirect()->route('student.dashboard')->with('success', 'Checked in successfully');
                } else {
                    return redirect()->route('student.dashboard')->with('error', 'Failed to check in');
                }
            } else {
                return redirect()->route('student.dashboard')->with('error', 'Already checked in');
            }
        } else {
            return redirect()->route('login')->with('error', 'Please login first');
        }

    }

    public function checkout()
    {
        if (auth()->check()) {

            $user = auth()->user();
            if ($user->status == 'checkin') {

                $user->update(['status' => 'checkout']);

                $checkin = new CheckinLog();
                $checkin->user_id = auth()->user()->id;
                $checkin->action = 'checkout';

                if ($checkin->save()) {
                    return redirect()->route('student.dashboard')->with('success', 'Checked out successfully');
                } else {
                    return redirect()->route('student.dashboard')->with('error', 'Failed to check out');
                }
            } else {
                return redirect()->route('student.dashboard')->with('error', 'Already checked out');
            }
        }
    }

    public function updateIpad(Request $request, Ipad $ipad) {
        $ipad->model = $request->model;
        $ipad->serial_number = $request->serial_number;
        if ($ipad->save()) {
            return redirect()->route('student.ipad')->with('success', 'Ipad updated successfully');
        } else {
            return redirect()->route('student.ipad')->with('error', 'Failed to update ipad');
        }
    }

    public function destroyIpad(Ipad $ipad) {
        if ($ipad->delete()) {
            return redirect()->route('student.ipad')->with('success', 'Ipad deleted successfully');
        } else {
            return redirect()->route('student.ipad')->with('error', 'Failed to delete ipad');
        }
    }
}
