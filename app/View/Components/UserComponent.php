<?php

namespace App\View\Components;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserComponent extends Component
{
    /**
     * Create a new component instance.
     */

    public $user;
    public function __construct()
    {
        $this->user = User::get();
        // dd($this->user);
        // $this->user = ['name' => 'Yusuf', 'age' => 31];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.user-component');
    }
}
