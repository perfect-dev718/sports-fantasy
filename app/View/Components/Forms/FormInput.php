<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class FormInput extends Component
{
    public $type;
    public $name;
    public $label;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type='', $name='', $label='', $value='')
    {
        //
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.form-input');
    }
}
