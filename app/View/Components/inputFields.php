<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class inputFields extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    // public $label;
    public $name;
    public $placeholder;
    // public $value;

    
    public function __construct($type,$name,$placeholder)
    {
        // $this->label = $label;
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        // $this->value = $value;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-fields');
    }
}
