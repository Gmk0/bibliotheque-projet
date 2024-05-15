<?php

namespace App\Livewire;

use App\Models\Domain;
use App\Models\Work;
use Livewire\Component;
use Filament\Forms\Components\{TextInput, Select,FileUpload, Grid};
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Filament\Notifications\Notification;

class Publier extends Component implements HasForms
{
    use InteractsWithForms;


    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('titre')
                ->required(),
            TextInput::make('auteur')
            ->required(),
                MarkdownEditor::make('description'),
                Grid::make('4')->schema([
                TextInput::make('annee_academique')->required(),
                TextInput::make('code_classification')->required(),
                TextInput::make('nbre_pages')
                ->required(),
                Select::make('domain_id')
                ->options(Domain::all()->pluck('intitule', 'id'))
                ->required(),

                    ]),

                    Grid::make('2')->schema([FileUpload::make('path')
                    ->required(),
                FileUpload::make('image')
                    ->image(),
                        ])

                // ...
            ])
            ->statePath('data');
    }
    #[Layout('layouts.app')]


    public function create()
    {
        $this->form->validate();
       $data= $this->form->getState();

       $data['user_id']=auth()->id();
       $data['matricule']=rand(39,10000);



       $Work=Work::create($data);


       $this->form->fill();

        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();


    }
    public function render()
    {
        return view('livewire.publier');
    }
}
