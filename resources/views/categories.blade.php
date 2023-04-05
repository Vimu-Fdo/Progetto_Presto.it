<x-layout>
<x-navbar></x-navbar>
<div class="container fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center my-4">Esplora la categoria {{ $category->name }}</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
            @forelse ($category->announcements as $announcement)
            <div class="col-12 col-md-4 my-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $announcement->title }}</h5>
                      <p class="card-text">{{ $announcement->body }}</p>
                      <p class="card-text">{{ $announcement->price }}</p>
                      <a href="#" class="btn btn-primary">Visualizza</a>
                      <a href="#" class="btn btn-primary">Categoria: {{ $announcement->category->name }}</a>
                      <a class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y')}} - Autore: {{ $announcement->user->name }}</a>
                    </div>
                  </div>
            </div>
            @empty
            <div class="col-12">
                <h2 class="text-center my-4">Non ci sono annunci in questa categoria</h2>
                <a href="{{ route('announcements.create') }}" class="btn btn-primary">Crea un nuovo annuncio</a>
        </div>
            @endforelse
    </div>
</div>
</x-layout>