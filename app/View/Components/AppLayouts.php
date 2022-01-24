<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayouts extends Component
{
    public $title;

    public function __construct($title = null)
    {
        if ($title != null)
            $this->title = $title;
    }

    public function render()
    {
        return view('layouts.app');
    }
}
