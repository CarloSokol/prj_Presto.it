<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $title;
    public $body;
    public $price;
    public $category;
    // public $Announcement;
    // public $validated;
    // public $message;
    // public $form_id;

    public $images = [];
    public $image;
    public $temporary_images;

    protected array $rules = [
        'title' => 'required|min:4',
        'body' => 'required|min:4',
        'category' => 'required',
        'price' => 'required|numeric',

        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    protected array $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Testo troppo corto',
        'numeric' => 'Il campo :attribute può contenere solo numeri',

        'temporary_images.required' => 'L\'immagine è richiesta',
        'temporary_images.*.image' => 'I file devono essere immagini ',
        'temporary_images.*.max' => 'L\'immagine dev\'essere massimo di 1mb',
        'images.image' => 'L\'immagine dev\'essere un\'immagine ',
        'images.max' => 'L\'immagine dev\'essere massimo di 1mb',
    ];

    public function updatedTemporaryImages()
    {
        if (
            $this->validate([
                'temporary_images.*' => 'image|max:1024',
            ])
        ) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store()
    {
        $validatedData = $this->validate();

        if (gettype($this->category) == 'string') {
            $category = Category::find($this->category);
        } else {
            $category = $this->category;
        }

        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
        ]);
        Auth::user()->announcements()->save($announcement);

        session()->flash('success', 'Annuncio creato correttamente!');
        $this->cleanForm();

        // $this->announcement->user()->associate(Auth::user());

        // $this->announcement->save();
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
