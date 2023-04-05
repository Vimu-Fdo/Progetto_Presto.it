<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row">
            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-4 my-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $announcement->title }}</h5>
                      <p class="card-text">{{ $announcement->body }}</p>
                      <p class="card-text">{{ $announcement->price }}</p>
                      <a href="{{ route('announcements.show', compact('announcement')) }}" class="btn btn-primary">Visualizza</a>
                      <a href="#" class="btn btn-primary">Categoria: {{ $announcement->category->name }}</a>
                      <a class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</a>
                    </div>
                  </div>
            </div>
            @endforeach
            {{ $announcements->links() }}
        </div>
    </div>
    </x-layout>