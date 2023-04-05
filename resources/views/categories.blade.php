<x-layout>
<x-navbar></x-navbar>
<div class="container fluid my-5">
    <div class="row">
        <div class="col-12 py-5">
            <h1 class="text-center my-4">Esplora la categoria {{ $category->name }}</h1>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
            @forelse ($category->announcements as $announcement)
            <div class="card mx-auto col-md-3 col-10 px-4 mt-5">
                <img class='mx-auto img-thumbnail'
                    src="https://picsum.photos/200/300"
                    width="auto" height="auto"/>
                <div class="card-body text-center mx-auto">
                    <div class='cvp'>
                        <h5 class="card-title font-weight-bold">{{ $announcement->title }}</h5>
                        <p class="card-text">{{ $announcement->price }}</p>
                        <p class="card-text">{{ $announcement->body }}</p>
                        <a href="{{ route('announcements.show', compact('announcement')) }}" class="btn details px-auto">Visualizza</a><br />
                        <a href="#" class="btn cart px-auto">Categoria: {{ $announcement->category->name }}</a>
                        <a class="btn p-auto">Pubblicato il: {{ date_format($announcement->created_at, 'd/m/Y H:i')}}</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <h2 class="text-center my-4">Non ci sono annunci in questa categoria</h2>
                <button class="button-18" role="button"><a href="{{ route('announcements.create') }}" class="button-18 text-decoration-none">Crea un nuovo annuncio</a></button>
        </div>
            @endforelse
    </div>
</div>
</x-layout>

<!-- HTML !-->



