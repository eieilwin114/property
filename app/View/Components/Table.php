<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $body;
    public $headers;
    public $routename;
    public function __construct($body,$headers,$routename)
    {
        $this->body = $body;
        $this->headers = $headers;
        $this->routename = $routename;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table');
    }
}
