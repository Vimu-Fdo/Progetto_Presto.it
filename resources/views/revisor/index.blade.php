<x-layout>
  <x-navbar></x-navbar>
  @if($announcement_to_check)
  <div class="container index_announc_title mt-5">
    <div class="row align-content-center h-100">
      <div class="col-12 col-md-6">
        <h1>{{ __('ui.thereAreAnnouncements')}}</h1>
        
      </div>
    </div>
  </div>
 @else
 <div class="container min-vh-100 index_announc_title mt-5">
  <div class="row align-content-center h-100">
    <div class="col-12 col-md-6">
      <h1>{{ __('ui.noAnnouncements')}}</h1>
      
    </div>
  </div>
</div>
@endif
 
  
  @if($announcement_to_check)
   <div class="container index_announc">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel">
          @if($announcement_to_check->images)
            <div class="carousel-inner">
              @foreach ($announcement_to_check->images as $image)
                <div class="carousel-item @if($loop->first) active @endif">
                  <div class="d-flex justify-content-center">
                  <img src="{{$image->getUrl(400,400)}}" class="img-fluid" alt="...">
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
    </div>
   
   
   
    <div class="row mt-5">
        <div class="col-12 col-md-4">
          <h5 class="card-title text-center">Titolo: {{ $announcement_to_check->title }}</h5>
          <p class="text-center">Descrizione: {{ $announcement_to_check->body }}</p>
          <p class="text-center">Publicato il: {{ $announcement_to_check->created_at->format('d/m/Y') }}</p>
         <div class="d-flex justify-content-center">
            <form action="{{ route('revisor.accept_announcement', ['announcement'=>$announcement_to_check]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-success shadow">{{ __('ui.accept') }}</button>
              </form>
              <form action="{{ route('revisor.reject_announcement', ['announcement'=>$announcement_to_check]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-success shadow ms-3">{{ __('ui.reject') }}</button>
              </form>
         </div>
        </div>

        <div class="col-12 col-md-4">
          <div class="card-body">
            <h5 class="tc-accent">Revisione Immagini</h5>
             <p>Adulti: <span class="{{$image->adult}}"></span></p>
              <p>Satira: <span class="{{$image->spoof}}"></span></p>
              <p>Medicina: <span class="{{$image->medical}}"></span></p>
              <p>Violenza: <span class="{{$image->violence}}"></span></p>
              <p>Contenuto Ammiccante: <span class="{{$image->racy}}"></span></p>
          </div>
        </div>

        <div class="col-12 col-md-4">
          <h5 class="tc-accent">Tags</h5>
          <div>
            @if($image->labels)
              @foreach ($image->labels as $label)
                <span class="badge bg-secondary">{{ $label }}</span>
              @endforeach
            @endif
          </div>
        </div>

        
    
      </div>
   </div>
  @endif
 
  <x-footer/>
  
  
</x-layout>
