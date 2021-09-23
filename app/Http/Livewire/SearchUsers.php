<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as User;

class SearchUsers extends Component
{

    public $search = '';

    public function render()
    {

        $data = User::where('username', $this->search)->get();

        return view('livewire.search-users')->with(['data' => $data]);
    }
}
