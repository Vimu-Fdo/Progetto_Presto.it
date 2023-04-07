<x-layout>
<x-navbar></x-navbar>
<div class="container fluid my-5">
    <div class="row">
        <div class="col-12 py-5">
            <h1 class="text-center my-4">Esplora la categoria: <span class="fw-light">{{ $category->name }}</span></h1>
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
                        <p class="card-text">€ {{ $announcement->price }}</p>
                        <p class="card-text"> Descrizione{{ $announcement->body }}</p>
                        <p class="card-text"> User: {{ $announcement->user->name }}</p>
                        <a href="{{ route('announcements.show', compact('announcement')) }}" class="btn details px-auto">Visualizza</a><br />
                        <a href="#" class="btn cart px-auto">Categoria: {{ $announcement->category->name }}</a>
                        <a class="btn p-auto">Pubblicato il: {{ date_format($announcement->created_at, 'd/m/Y H:i')}}</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <h2 class="text-center my-4">Non ci sono annunci in questa categoria</h2>
                        <button class="button-18" role="button" href="{{ route('announcements.create') }}" class="button-18 text-decoration-none">Crea un nuovo annuncio</a></button>
                    </div>
                </div>
            </div>
            @endforelse
    </div>
</div>
</x-layout>

{{--
@forelse 
Abbiamo inserito un @forelse per ciclare tutti gli annunci della categoria selezionata. 
A differenza del @foreach, il @forelse ci permette di gestire il caso in cui la categoria non abbia annunci. In questo caso, stampiamo un messaggio di errore e un pulsante per creare un nuovo annuncio.   

dta_format
Abbiamo inserito un data_format per stampare la data di creazione dell'annuncio e l'ora.
--}}



