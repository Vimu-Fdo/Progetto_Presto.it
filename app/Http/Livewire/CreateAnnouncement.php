<?php

namespace App\Http\Livewire;

use App\Jobs\GoogleVisionSafeSearch;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component
{
    use WithFileUploads;
    
    public $title;
    public $body;
    public $validated;
    public $temporary_images;
    public $images = [];
    public $announcement;
    public $price;
    public $category;
    
    

    protected $rules = [
        'title' => 'required|min:6',
        'body' => 'required|min:6',
        'price' => 'required|numeric',
        'category' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',


    ];

    protected $messages = [
        'title.required' => 'Il titolo è obbligatorio',
        'title.min' => 'Il titolo deve essere di almeno 6 caratteri',
        'body.required' => 'La descrizione è obbligatoria',
        'body.min' => 'La descrizione deve essere di almeno 6 caratteri',
        'price.required' => 'Il prezzo è obbligatorio',
        'price.numeric' => 'Il prezzo deve essere un numero',
    ];

    public function updatedTemporaryImages()
    {  
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
           ])) {
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
    
    public function store(){

        $this->validate();

        $this->announcement = Category::find($this->category)->announcements()->create($this->validate());
        if($this->images){
            foreach ($this->images as $image) {
                // $this->announcement->images()->create(['path' => $image->store('images', 'public')]);
                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path' => $image->store($newFileName, 'public')]);

                dispatch(new ResizeImage($newImage->path , 700 , 400 ));
                dispatch(new ResizeImage($newImage->path , 300 , 300 ));
                dispatch(new GoogleVisionSafeSearch($newImage->id));
                
                
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        $this->announcement->user()->associate(Auth::user());
        $this->announcement->save();
   
        
       
        session()->flash('message', 'Annuncio creato con successo');
        $this->cleanForm();
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function cleanForm(){
        $this->title = '';
        $this->body = '';
        $this->images = [];
        $this->temporary_images = [];
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

