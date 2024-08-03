<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SinglePost extends Component
{
    /**
     * Create a new component instance.
     */

     public $title;
    public function __construct($postTitle)
    {
        $this->title = $postTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.single-post');
    }
}
