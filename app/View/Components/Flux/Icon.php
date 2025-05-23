<?php

namespace App\View\Components\Flux;

use Illuminate\View\Component;

class Icon extends Component
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('components.flux.icon');
    }
}

