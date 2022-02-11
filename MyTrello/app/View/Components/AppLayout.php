<?php

namespace App\View\Components;

use App\Models\DataUser;
use App\Models\MyTable;
use Illuminate\View\Component;
use Illuminate\Support\Collection;

class AppLayout extends Component
{
    public Collection $tables;
    public Collection $table;
    public string $url;
    public string $id;
    public string $avatar;

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public function __construct($id = 0)
    {
        $urlUser = is_null(DataUser::all()->where('user_id', '==', auth()->id())
            ->first()) ? 'img/wallpapers-nature-024.jpg' : DataUser::all()
            ->where('user_id', '==', auth()->id())->first()->imgUrl;
        $this->url = $urlUser;

        $avatar = is_null(DataUser::all()->where('user_id', '==', auth()->id())
            ->first()) ? 'No avatar' : DataUser::all()
            ->where('user_id', '==', auth()->id())->first()->avatar;
        $this->avatar = $avatar;

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
            'id' => $this->id,
            'url' => $this->url,
            'avatar' => $this->avatar]);
    }
}
