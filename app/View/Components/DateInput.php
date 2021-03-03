<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DateInput extends Component
{
    public $label;
    public $field;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label,$field)
    {
        $this->field = $field;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.date-input');
    }
}
