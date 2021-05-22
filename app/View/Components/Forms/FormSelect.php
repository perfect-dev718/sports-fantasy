<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class FormSelect extends Component
{
    public $type;
    public $name;
    public $label;
    public $value;
    public $options;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type='text', $name='', $label='', $value='', $options=array())
    {
        //
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.form-select');
    }
}
