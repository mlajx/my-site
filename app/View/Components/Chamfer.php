<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Chamfer extends Component
{

    public $color;
    public $background;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color, $background)
    {
        $this->color = $color;
        $this->background = $background;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.chamfer');
    }
}
