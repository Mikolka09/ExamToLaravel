<?php

namespace App\View\Components;

use App\Models\MyCard;
use Illuminate\View\Component;
use Illuminate\Support\Collection;

class TableColumn extends Component
{
    public string $title;
    public Collection $cards;
    public string $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = "", $id = 0)
    {
        $this->id = $id;
        $this->title = $title;
        if ($id > 0)
            $this->cards = collect(MyCard::all()->where('column_id', '==', $id));
        else
            $this->cards = collect([]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table-column', [
            'title' => $this->title,
            'cards' => $this->cards]);
    }
}
