<?php

namespace App\Livewire;

use App\Models\Work;
use Livewire\Attributes\Layout;
use Livewire\Component;

class WorkViewOne extends Component
{
    public  $work;

    public function mount($matricule)
    {

        $condition=Work::where('matricule','=',$matricule)->exists();
        if($condition)
        {
            $this->work= Work::where('matricule', '=', $matricule)->first();

        }else{
            return redirect()->route('works');
        }

    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.work-view-one');
    }
}
