<?php

namespace App\View\Components\card_item;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class product_grid_item extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card_item.product_grid_item');
    }
}