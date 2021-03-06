<?php

namespace App\View\Components;

use App\Models\MyTable;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class TablesList extends Component
{
    public Collection $tables;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->tables = collect(MyTable::all()->where('user_id', '==', auth()->id()));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.tables-list', ['tables' => $this->tables]);
    }
}
