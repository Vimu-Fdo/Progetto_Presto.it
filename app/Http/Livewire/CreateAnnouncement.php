<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    public $title;
    public $body;
    public $price;
    public $category;

    protected $rules = [
        'title' => 'required|min:6',
        'body' => 'required|min:6',
        'price' => 'required|numeric',
        'category' => 'required',

    ];

    protected $messages = [
        'title.required' => 'Il titolo è obbligatorio',
        'title.min' => 'Il titolo deve essere di almeno 6 caratteri',
        'body.required' => 'La descrizione è obbligatoria',
        'body.min' => 'La descrizione deve essere di almeno 6 caratteri',
        'price.required' => 'Il prezzo è obbligatorio',
        'price.numeric' => 'Il prezzo deve essere un numero',
    ];

    public function store(){

        $category = Category::find($this->category);

        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,

        ]);
        
        // serve per salvare l'annuncio nel database e
        Auth::user()->announcements()->save($announcement);
   
        
       
        session()->flash('message', 'Annuncio creato con successo');
        $this->cleanForm();
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function cleanForm(){
        $this->title = '';
        $this->body = '';
        $this->price = '';
        $this->category = '';

    }

    public function render()
    {
        return view('livewire.create-announcement');
    }


}
// public $rules ci permette di creare delle regole per i campi del form. Required ci permette di rendere obbligatorio il campo, min ci permette di impostare un minimo di caratteri. Numeric ci permette di rendere il campo numerico
// public $messages ci permette di creare dei messaggi di errore personalizzati
// public $title, $body, $price ci permettono di creare delle variabili che poi andremo a utilizzare nel form
// Public function store() ci permette di salvare i dati nel database
// Public function updated($propertyName) ci permette di aggiornare i dati nel database in tempo reale
// Public function cleanForm() ci permette di ripulire i campi dopo aver salvato i dati nel database

