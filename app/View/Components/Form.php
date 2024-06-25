<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    public $label,$name,$type,$labId;
    /**
     * Create a new component instance.
     */
    public function __construct($labId,$label,$name,$type)
    {
        //
        $this->labId=$labId;
        $this->label=$label;
        $this->name=$name;
        $this->type=$type;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form');
    }
}
