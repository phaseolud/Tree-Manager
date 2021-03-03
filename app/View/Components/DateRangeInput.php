<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DateRangeInput extends Component
{
    public $field;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($field,$label)
    {
        $this->label = $label;
        $this->field = $field;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.date-range-input');
    }
}
