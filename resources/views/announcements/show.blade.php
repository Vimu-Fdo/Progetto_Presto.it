<x-layout>
  <x-navbar></x-navbar>
  <div class="container show_announ">
    <div class="row align-items-center h-100">
      
      <div class="col-md-8" >
        
        <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel">
          @if(count($announcement->images))
            <div class="carousel-inner">
              @foreach ($announcement->images as $image)
                <div class="carousel-item @if($loop->first) active @endif">
                  <div class="d-flex justify-content-center">

                    <img src="{{$image->getUrl(400,400)}}" class="img-fluid p-3" alt="...">
                  </div>
                </div>
              @endforeach
            </div>
          @else
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
            </div>
          </div>
          @endif
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
          
        </div>
        
        <div class="col-md-4">
          <h1 class="my-3">{{$announcement->title}}</h1>
          <h3 class="my-3">{{ __('ui.description') }}</h3>
          <p>{{ $announcement->body }}</p>
          <h3 class="my-3">{{ __('ui.detailsShow') }}</h3>
          <ul>
            <li>€ {{ $announcement->price }}</li>
            <li>Inserito da: {{ $announcement->user->name }}</li>
            <li>Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</li>
          </ul>
        </div>
        
      </div>
    </div>
    
    
  <x-footer/>  
  </x-layout>

