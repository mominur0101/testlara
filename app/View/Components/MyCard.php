<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MyCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $contentdes;
    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->contentdes = $content;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.my-card');
    }
}
