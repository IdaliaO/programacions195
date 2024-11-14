<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $tipo;

    public function __construct($tipo = 'info')
    {
        $this->tipo = $tipo;
    }

    public function render()
    {
        return view('components.alert');
    }
}
