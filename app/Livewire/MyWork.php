<?php

namespace App\Livewire;

use App\Models\Work;
use Livewire\Component;

class MyWork extends Component
{
    public function render()
    {
        return view('livewire.my-work',[
            'travaux'=>Work::where('user_id',auth()->id())->get(),
            ]);
    }
}
