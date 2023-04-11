<x-layout>
<x-navbar></x-navbar>
<div class='container pad'>
  <div class="row">
    @if (session('access_denied'))
        <div class="alert alert-danger">
           {{ session('access_denied') }}
        </div>
    @endif
    {{-- Header --}}
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="box1"></div>
        </div>
        <div class="col-12 col-md-6">
          
        </div>
      </div>
    </div>
    {{-- Fine Header --}}
    @foreach ($announcements as $announcement)
    <div class="card mx-auto col-md-3 col-10 px-4 my-4">
        <img class='mx-auto img-thumbnail'
            src="https://picsum.photos/200/200"
            width="auto" height="auto"/>
        <div class="card-body text-center mx-auto">
            <div class='cvp'>
                <h5 class="card-title font-weight-bold">{{ $announcement->title }}</h5>
                <p class="card-text">€ {{ $announcement->price }}</p>
                <p class="card-text">Descrizione: {{ $announcement->body }}</p>
                <p class="card-text"> User: {{ $announcement->user->name }}</p>
                <button class="button-18 mt-2" role="button"><a href="{{ route('announcements.show', compact('announcement')) }}" class="button-18 text-white text-decoration-none">Visualizza</a></button><br />
                <button class="button-181 mt-2" role="button"><a href="{{ route('categories.show',['category'=>$announcement->category]) }}"class="text-white text-decoration-none ">Categoria: {{ $announcement->category->name }}</a></button>
                <p class="text-black text-decoration-none mt-2 p-3">Pubblicato il: {{ date_format($announcement->created_at, 'd/m/Y H:i')}}</p>
            </div>
        </div>
    </div>
    @endforeach
  </div>
</div>
<x-footer/>
</x-layout>


{{-- 
@foreach
Abbiamo inserito un @foreach per ciclare gli annunci e stamparli a schermo. Abbiamo impostato un masssimo di 6 annunci per la pagina welcome.

Date_format
Abbiamo utilizzato la funzione date_format per stampare la data di creazione dell'annuncio e l'ora di creazione.
  --}}