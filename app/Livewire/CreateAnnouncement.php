<?php

namespace App\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class CreateAnnouncement extends Component
{
    public $title;
    public $body;
    public $price;

    protected array $rules = [
        'title' => 'required|min:4',
        'body'  => 'required|min:4',
        'price' => 'required|numeric'
    ];

    protected array $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Testo troppo corto',
        'numeric' => 'Il campo :attribute può contenere solo numeri',
    ];

    public function store()
    {
        $validatedData = $this->validate();


        Announcement::create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
        ]);

        session()->flash('success', 'Annuncio creato correttamente!');
        $this->cleanForm();
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cleanForm()
    {
        $this->title = null;
        $this->body = null;
        $this->price = null;
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
