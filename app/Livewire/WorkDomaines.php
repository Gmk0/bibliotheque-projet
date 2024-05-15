<?php

namespace App\Livewire;

use App\Models\Domain;
use Livewire\Attributes\Layout;
use Livewire\Component;

class WorkDomaines extends Component
{

    public  $domain;
    public  $works;

    public function mount($id)
    {

        $condition = Domain::where('id', '=', $id)->exists();
        if ($condition) {
            $this->domain = Domain::find($id);

            $this->works = $this->domain->works;
        } else {
            return redirect()->route('works');
        }
    }
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.work-domaines');
    }
}
