<x-layout>
<x-navbar></x-navbar>
<div class="container fluid my-5">
    <div class="row">
        <div class="col-12 py-5">
            <h1 class="text-center my-4">{{ __('ui.explorecategory') }}<span class="fw-light">{{ $category->name }}</span></h1>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
            @forelse ($category->announcements as $announcement)
            <div class="card mx-auto col-md-3 col-10 px-4 my-4">
                <img class='mx-auto img-thumbnail'
                    src="https://picsum.photos/200/200"
                    width="auto" height="auto"/>
                <div class="card-body text-center mx-auto">
                    <div class='cvp'>
                        <h5 class="card-title font-weight-bold">{{ $announcement->title }}</h5>
                        <p class="card-text ml-1 mt-5"> User: {{ $announcement->user->name }}</p>
                        <p class="card-text">€ {{ $announcement->price }}</p>
                        {{-- <p class="card-text">Descrizione: {{ $announcement->body }}</p> --}}
                        <button class="button-18 mt-2" role="button"><a href="{{ route('announcements.show', compact('announcement')) }}" class="button-18 text-white text-decoration-none">Visualizza</a></button><br />
                        <button class="button-181 mt-2" role="button"><a href="{{ route('categories.show',['category'=>$announcement->category]) }}"class="text-white text-decoration-none ">Categoria: {{ $announcement->category->name }}</a></button>
                        <p class="text-black text-decoration-none mb-1 p-3">Pubblicato il: {{ date_format($announcement->created_at, 'd/m/Y H:i')}}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="container padUniversale">
                <div class="row  justify-content-center">
                    <div class="col-12 d-flex flex-column align-items-center">
                        <h2 class="text-center my-4">{{ __('ui.noAnnouncements') }}</h2>
                        <button class="button-18" role="button"><a href="{{ route('announcements.create')}}" class="button-18 text-decoration-none">{{ __('ui.createAnnouncement') }}</a></button>
                    </div>
                </div>
            </div>
            @endforelse
    </div>
</div>
<x-footer/>
</x-layout>

{{--
@forelse 
Abbiamo inserito un @forelse per ciclare tutti gli annunci della categoria selezionata. 
A differenza del @foreach, il @forelse ci permette di gestire il caso in cui la categoria non abbia annunci. In questo caso, stampiamo un messaggio di errore e un pulsante per creare un nuovo annuncio.   

dta_format
Abbiamo inserito un data_format per stampare la data di creazione dell'annuncio e l'ora.
--}}



