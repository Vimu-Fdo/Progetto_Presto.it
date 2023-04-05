<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row">
        <h1 class="my-4 mt-5"> Annuncio {{$announcement->title}}</h1>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <h5 class="card-title">{{ $announcement->title }}</h5>
          <p class="card-text">{{ $announcement->body }}</p>
          <p class="card-text">{{ $announcement->price }}</p>
          <a href="{{ route('categories.show',['category'=>$announcement->category]) }}" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-success">categoria: {{ $announcement->category->name }}</a>
          <a class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</a>
          </div>
        </div>
    </div>

</x-layout>