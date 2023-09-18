<?php

namespace App\View\Components\User;

use Illuminate\View\Component;

class JobsList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $annonces;
    public function __construct($annonces)
    {
        $this->annonces = $annonces;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.jobs-list');
    }
}
