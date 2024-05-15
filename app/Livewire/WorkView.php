<?php

namespace App\Livewire;

use App\Models\Domain;
use App\Models\Work;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class WorkView extends Component
{

    use WithPagination;
    public $search = '';
    public $domaine;
    public $categorie;
    public $faculte;
    public $order = "asc";
    public $sort = 10;
    public $name = "sujet";
    public $sujet;



    protected $queryString = [
        'search' => ['expect' => ''],
        'categorie' => ['expect' => ''],
        'faculte' => ['expect' => '']

    ];


    public function clearFiltre()
    {

        $this->search = "";
        $this->categorie = null;
        $this->faculte = null;
    }

    public function searchiTem()
    {

        return $this->searchs;
    }

    public function updating($name, $val)
    {
        if ($name == 'search') {
            $this->resetPage();
        }
    }
    #[Layout('layouts.app')]

    public function render()
    {
        return view('livewire.work-view',
            [
                'domains'=>Domain::all(),
                'travaux' => Work::where('titre', 'like', '%' . $this->search . '%')->paginate(20),
                'travauxCount' => Work::where('titre', 'like', '%' . $this->search . '%')->get(),
            ]);
    }
}
