<x-layout>
    <x-navbar></x-navbar>
    <div class="container index_announc_title">
      <div class="row align-content-end h-100">
        <div class="col-12">
            <h1>{{ $announcement_to_check ? __('ui.thereAreAnnouncements') : __('ui.noAnnouncements') }}</h1>
        </div>
      </div>
    </div>
    <div class="container index_announc">
     @if($announcement_to_check)
      <div class="row align-content-center h-100">
        <div class="col-md-7">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              @foreach ($announcement_to_check->images as $image)
                <div class="carousel-item @if($loop->first) active @endif">
                  <img src="{{Storage::url($image->path)}}" class="img-fluid p-3" alt="...">
                </div>
              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <div class="col-md-5">
          <h5 class="card-title">Titolo: {{ $announcement_to_check->title }}</h5>
          <p>Descrizione: {{ $announcement_to_check->body }}</p>
          <p>Publicato il: {{ $announcement_to_check->created_at->format('d/m/Y') }}</p>
         <div class="d-flex">
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
     @endif
  </div>
<x-footer></x-footer>
</x-layout>


