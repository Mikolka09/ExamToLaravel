<?php

namespace App\View\Components;

use App\Models\MyColumn;
use App\Models\MyTable;
use Illuminate\View\Component;
use Illuminate\Support\Collection;

class AppLayout extends Component
{
    public Collection $tables;
    public Collection $table;
    public string $url;
    public string $id;

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public function __construct($id = 0, $url = 'http://127.0.0.1:8000/img/wallpapers-nature-029.jpg')
    {
        $this->url = $url;
        $this->tables = collect(MyTable::all()->where('user_id', '==', auth()->id()));
        if ($id == 0 && $this->tables->count() == 0) {
            $this->table = collect([]);
            $this->tables = collect([]);
        }
        if ($this->tables->count() == 1 && $id > 0) {
            $this->table = $this->tables;
        }
        if ($this->tables->count() == 1 && $id == 0) {
            $this->table = $this->tables;
        }
        if ($this->tables->count() > 1 && $id > 0)
            $this->table = $this->tables->where('id', '==', $id);
        if ($this->tables->count() > 1 && $id == 0)
            $this->table = collect([]);
        $this->id = $id;
    }

    public function render()
    {
        return view('layouts.app', [
            'tables' => $this->tables,
            'table' => $this->table,
            'url' => $this->url]);
    }
}
