<?php

namespace App\View\Components;

use App\Models\MyColumn;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class MainTable extends Component
{
    public Collection $columns;
    public string $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = 0)
    {
        $this->id = $id;
        if ($id > 0)
            $this->columns = collect(MyColumn::all()->where('table_id', '==', $id));
        else
            $this->columns = collect([]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.main-table', ['columns' => $this->columns]);
    }
}
