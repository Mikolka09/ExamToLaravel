<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardCreate extends Component
{
    public string $id_col;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id_col=$id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.card-create', ['id'=>$this->id_col]);
    }
}
