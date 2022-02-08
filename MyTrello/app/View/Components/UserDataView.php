<?php

namespace App\View\Components;

use App\Models\DataUser;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class UserDataView extends Component
{

    public Collection $userdata;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->userdata = collect(DataUser::all()->where('user_id', '==', auth()->id()));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.user-data-view', ['userdata' => $this->userdata]);
    }
}
