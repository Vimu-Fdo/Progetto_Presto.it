<x-layout>
  <x-navbar></x-navbar>
<div class="padUniversale">
  <div class="container index_announc_title">
    <div class="row align-content-end h-100">
      <div class="col-12">
          <h1>{{ $announcement_to_check ? __('ui.thereAreAnnouncements') : __('ui.noAnnouncements') }}</h1>
      </div>
    </div>
  </div>
  @if($announcement_to_check)
  <div class="container index_announc">
    <div class="row ">
      <div class="col-12">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          @if($announcement_to_check->images)
            <div class="carousel-inner">
              @foreach ($announcement_to_check->images as $image)
                <div class="carousel-item @if($loop->first) active @endif">
                  <img src="{{Storage::url($image->path)}}" class="img-fluid p-3" alt="...">
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
      <div class="col-12  ">
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
    </div>
   </div>
  </div> 
   @endif
</div>

</x-layout>
