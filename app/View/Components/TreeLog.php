<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TreeLog extends Component
{
    public $log;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($log)
    {
        //
        $this->log = $log;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.tree-log');
    }
}
