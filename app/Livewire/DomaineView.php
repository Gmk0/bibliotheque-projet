<?php

namespace App\Livewire;

use App\Models\Domain;
use Livewire\Attributes\Layout;
use Livewire\Component;

class DomaineView extends Component
{




    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.domaine-view',['domaines'=>Domain::all()]);
    }
}
