<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;

class CreateAnnouncement extends Component
{
    public $title;
    public $body;
    public $price;
    public $category;

    protected array $rules = [
        'title' => 'required|min:4',
        'body' => 'required|min:4',
        'category' => 'required',
        'price' => 'required|numeric',
    ];

    protected array $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Testo troppo corto',
        'numeric' => 'Il campo :attribute può contenere solo numeri',
    ];

    public function store()
    {
        $validatedData = $this->validate();

        $category = Category::find($this->category);
        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
        ]);
        Auth::user()->announcements()->save($announcement);

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
        $this->category = null;
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
