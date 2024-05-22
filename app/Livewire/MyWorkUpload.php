<?php

namespace App\Livewire;

use Livewire\Component;

class MyWorkUpload extends Component
{
    public function render()
    {
        return view('livewire.my-work-upload',
        ['works'=>auth()->user()->works]);
    }
}
