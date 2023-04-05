<div class="container formAnn">
    <div class="row h-100 align-content-center">
        <div class="col-12 ">
            <h1 class="text-center">Crea Annuncio</h1>
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                
                {{-- @if(!$article) --}}
                <form id="contactForm" wire:submit.prevent="store" >
                    @csrf
                    
                    <!-- Title Input -->
                    <div class="form-floating mb-3">
                        <input wire:model.debounce.500ms="title" class="form-control @error('title') is-invalid @enderror" name="title" id="title" type="text" placeholder="Title"/>
                        <label for="title">Title</label>
                        @error('title')
                            <span class="text-danger text-sm">{{ $message }}</span> 
                        @enderror
                    </div>
            
            
                    <!-- Body Input -->
                    <div class="form-floating mb-3">
                        <textarea wire:model.debounce.500ms="body" class="form-control @error('body') is-invalid @enderror" name="body" id="body" type="text" placeholder="Description" style="height: 10rem;"></textarea>
                        <label for="body">Description</label>
                        @error('body')
                            <span class="text-danger text-sm">{{ $message }}</span> 
                        @enderror
                    </div>

                    <!-- Price Input -->
                    <div class="form-floating mb-3">
                        <input wire:model.debounce.500ms="price" class="form-control @error('price') is-invalid @enderror" name="price" id="price" type="text" placeholder="Price"/>
                        <label for="price">Price</label>
                        @error('price')
                            <span class="text-danger text-sm">{{ $message }}</span> 
                        @enderror
                    
                        <div class="form-floating mt-3">
                            <select wire:model.defer="category"
                            class="form-select @error('category_id') is-invalid @enderror" 
                            {{-- name="category_id" --}}
                            id="category"
                            aria-label="Floating label select example">
                            <option selected disabled>Open this select menu</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                            </select>
                               <label for="category">User name</label>
                            </div>
            
            
                    <!-- Submit button -->
                    <div class="d-grid py-3 justify-content-center">
                        <button class="button-18" id="submitButton" type="submit">Crea Annuncio</button>
                    </div>
                </form>
                {{-- @else --}}
            
                    {{-- <div class="d-grid py-3">
                        <button wire:click="cleanForm" class="btn btn-primary btn-lg">Crea un nuovo articolo</button>
                    </div> --}}
            
                {{-- @endif --}}
            </div>
        </div>
    </div>
</div>

{{-- 

form wire:submit.prevent="store" ci permette di salvare i dati nel database.

- Tile Input -
wire:model.debounce.500ms="title" ci permette di aggiornare i dati nel database con un ritardo di 500ms
class="form-control @error('title') is-invalid @enderror" è una classe di bootstrap che ci permette di aggiungere un bordo rosso se il campo è vuoto
name="title" id="title" type="text" placeholder="Title" sono attributi html
@error('title') ci permette di mostrare un messaggio di errore se il campo è vuoto

- Body Input -
wire:model.debounce.3000ms="body" ci permette di aggiornare i dati nel database con un ritardo di 3000ms
class="form-control @error('body') is-invalid @enderror" è una classe di bootstrap che ci permette di aggiungere un bordo rosso se il campo è vuoto
name="body" id="body" type="text" placeholder="Description" style="height: 10rem;" sono attributi html
@error('body') ci permette di mostrare un messaggio di errore se il campo è vuoto

- Price Input -
wire:model.debounce.500ms="price" ci permette di aggiornare i dati nel database con un ritardo di 500ms
class="form-control @error('price') is-invalid @enderror" è una classe di bootstrap che ci permette di aggiungere un bordo rosso se il campo è vuoto
name="price" id="price" type="text" placeholder="Price" sono attributi html
@error('price') ci permette di mostrare un messaggio di errore se il campo è vuoto

- Submit button -
<button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button> è un bottone di bootstrap che ci permette di salvare i dati nel database

--}}


