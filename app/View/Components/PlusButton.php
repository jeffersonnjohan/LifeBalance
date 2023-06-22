<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PlusButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $link,
        public string $color,
        public string $groupHover,
        public string $modal
    ) {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.plus-button');
    }
}
