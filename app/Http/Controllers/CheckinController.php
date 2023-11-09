<?php

namespace App\Http\Controllers;

use App\Models\CheckinLog;
use Illuminate\Http\Request;

class CheckinController extends Controller
{
    public function checkin()
    {
        $user = auth()->user();

        if ($user->status == 'checkout') {
            $user->update(['status' => 'checkin']);

            $checkin = new CheckinLog();
            $checkin->user_id = auth()->user()->id;
            $checkin->action = 'checkin';

            if ($checkin->save()) {
                dd('checked in');
            } else {
                dd('failed to check in ');
            }
        } else {
            dd('already check in');
        }
    }

    public function checkout()
    {
        $user = auth()->user();
        if ($user->status == 'checkin') {

            $user->update(['status' => 'checkout']);

            $checkin = new CheckinLog();
            $checkin->user_id = auth()->user()->id;
            $checkin->action = 'checkout';

            if ($checkin->save()) {
                dd('checked out');
            } else {
                dd('failed to check out');
            }
        } else {
            dd('already check out');
        }
    }
}
