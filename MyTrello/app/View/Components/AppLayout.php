<?php

namespace App\View\Components;

use App\Models\MyColumn;
use App\Models\MyTable;
use Illuminate\View\Component;
use Illuminate\Support\Collection;
use phpDocumentor\Reflection\Types\Integer;

class AppLayout extends Component
{
    public Collection $tables;
    public Collection $columns;
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
        $this->id = $id;
        $this->url = $url;
        $this->tables = collect(MyTable::all()->where('user_id', '==', auth()->id()));

        if ($id > 0) {
            $this->table = collect(MyTable::all()->where('id', '==', $id));
            $this->columns = collect(MyColumn::all()->where('table_id', '==', $id));
        } else {
            $this->table = collect([]);
            $this->columns = collect([]);
        }

    }

    public function render()
    {
        return view('layouts.app', [
            'tables' => $this->tables,
            'table' => $this->table,
            'url' => $this->url,
            'columns' => $this->columns]);
    }
}
