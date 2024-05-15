<?php

namespace App\Livewire;

use App\Models\Domain;
use App\Models\Work;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.home',
        [
                'works'=>Work::all(),
                'domains'=>Domain::all()]);
    }
}
