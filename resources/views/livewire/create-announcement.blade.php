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
                        <textarea wire:model.debounce.3000ms="body" class="form-control @error('body') is-invalid @enderror" name="body" id="body" type="text" placeholder="Description" style="height: 10rem;"></textarea>
                        <label for="body">Description</label>
                        @error('body')
                            <span class="text-danger text-sm">{{ $message }}</span> 
                        @enderror
                    </div>
            
            
                    <!-- Submit button -->
                    <div class="d-grid py-3">
                        <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                    </div>
                </form>
                {{-- @else --}}
            
                    <div class="d-grid py-3">
                        <button wire:click="cleanForm" class="btn btn-primary btn-lg">Crea un nuovo articolo</button>
                    </div>
            
                {{-- @endif --}}
            </div>
        </div>
    </div>
</div>


