<?php

namespace App\View\Components;

use App\Models\CheckinLog;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Stat extends Component
{
    public $current_check_in;
    public $current_check_out;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->current_check_in = User::where('status', 'checkin')->count();
        $this->current_check_out = User::where('status', 'checkout')->count();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.stat');
    }
}
