<?php

namespace App\View\Components;

use App\Models\MyTable;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public $tables;
    public $table;

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public function __construct($id)
    {
        $this->tables = collect(MyTable::all()->where('user_id', '==', auth()->id()));
        if ($id > 0)
            $this->table = collect(MyTable::all()->where('id', '==', $id));
        else
            $this->table = null;
    }

    public function render()
    {
        return view('layouts.app', ['tables' => $this->tables, 'table' => $this->table]);
    }
}
