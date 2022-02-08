<?php

namespace App\View\Components;

use App\Models\DataUser;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class UserView extends Component
{

    public Collection $userdata;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $base = collect(DataUser::all()->where('user_id', '==', auth()->id()));
        if ($base->isEmpty())
            $this->userdata = collect(new DataUser());
        else
            $this->userdata = $base;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.user-view', ['userdata' => $this->userdata]);
    }
}
