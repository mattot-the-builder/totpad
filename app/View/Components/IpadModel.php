<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IpadModel extends Component
{
    public $ipads;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->ipads = json_decode(file_get_contents(public_path('ipad.json')));
        foreach ($this->ipads as $ipad) {
            // dd($ipad->ANumber);
            // dd($ipad);
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ipad-model');
    }
}
