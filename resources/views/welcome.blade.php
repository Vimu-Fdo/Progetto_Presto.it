<x-layout>
<x-navbar></x-navbar>


<div class='container pad'>
  <div class="row">
    @if (session('access_denied'))
    <div class="alert alert-danger">
      {{ session('access_denied') }}
    </div>
    @endif
  </div>
    
  {{-- Header --}}
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-6">
          <div class="head1"></div>
        </div>
        <div class="col-12 col-md-6"> 
          <div class="head2 py-5">
            <h1 class="text-center">{{ __('ui.head2') }}</h1>
            <br>
            <div class=" ">
              <h2 class="fw-light text-center">{{ __('ui.head3') }}</h2>
              <p class="lead text-center">{{ __('ui.head4') }}</p>
              <form class="d-flex justify-content-center" action="{{ route('announcements.search') }}" method="GET">
                <input name="searched" class="form-control me-2 search" type="search" placeholder="Search" aria-label="Search">
                <button type="submit" class="button-18">
                  <i class="fas fa-search"></i>
                </button>
              </form>
            </div>
          </div>
          <div class="container-fluid">
            <div class="row d-flex justify-content-between">
              <a class="col-6 miniBox1 hashtag" href="{{ route('announcement.index') }}"><div ><span class="spanHash">{{__('ui.head5')}}</span></div></a>
              <a class="col-6 miniBox2 hashtag" href="{{ route('announcements.create') }}"><div ><span class="spanHash">{{__('ui.head6')}}</span></div></a>
            </div>            
          </div>
        </div>
      </div>
    </div>
  {{-- Fine Header --}}
              

    

    {{-- Sezione categorie --}}
    
    <div class="container">
      <div class="row">
        <div class="col-12">
         <h2 class="text-center mt-5 py-5">{{ __('ui.categoriesmostpopular') }}</h2>
            
        </div>
      </div>
      <div class="row ">
        <div class="col-12 col-md-3 d-flex justify-content-center mb-4">
          <a href=" {{ route('categories.show', ['category' => 2]) }}"><div class="cardcategory d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-lightbulb py-3" style="color: #000000; font-size: 30px;"></i>
            <a class="text-decoration-none py-2" style="color: #000000" href=" {{ route('categories.show', ['category' => 2]) }} ">{{ __('ui.electronics') }}</a>
          </div></a>
        </div>
        <div class="col-12 col-md-3 d-flex justify-content-center mb-4">
          <a href=" {{ route('categories.show', ['category' => 16]) }}  "><div class="cardcategory d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-couch py-3" style="color: #000000; font-size: 30px;"></i>
            <a class="text-decoration-none py-2" style="color: #000000" href=" {{ route('categories.show', ['category' => 16]) }} ">{{ __('ui.furniture') }}</a>
          </div></a>
        </div>
        <div class="col-12 col-md-3 d-flex justify-content-center mb-4">
          <a href=" {{ route('categories.show', ['category' => 10]) }}  "><div class="cardcategory d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-dumbbell py-3" style="color: #000000; font-size: 30px;"></i>
            <a class="text-decoration-none py-2" style="color: #000000" href=" {{ route('categories.show', ['category' => 10]) }} ">{{ __('ui.sport') }}</a>
          </div></a>
        </div>
        <div class="col-12 col-md-3 d-flex justify-content-center mb-4">
          <a href=" {{ route('categories.show', ['category' => 4]) }}  "><div class="cardcategory d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-shirt py-3" style="color: #000000; font-size: 30px;"></i>
            <a class="text-decoration-none py-2" style="color: #000000" href=" {{ route('categories.show', ['category' => 4]) }} ">{{ __('ui.clothing') }} </a>
          </div></a>
        </div>
      </div>
    </div>

 
    {{-- Fine Sezione categorie --}}

   

    {{-- Inizio Annunci --}}
    <div class="container">
      <div class="row">
        <h2 class="text-center mt-5 pt-5">{{ __('ui.allAnnouncements') }}</h2>
      </div>

      <div class="row">
        @foreach ($announcements as $announcement)
          <div class="card mx-auto  col-10 mt-5 larg " style="align-items: center"> <a href="{{ route('announcements.show', compact('announcement')) }}" >
              <img class="mx-auto img-thumbnail bordo"src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(300, 300) : 'https://picsum.photos/300' }}" width="auto" height="auto">
                  <a href="{{ route('categories.show',['category'=>$announcement->category]) }}"class="text-black text-decoration-none  p-3 ">{{ __('ui.category') }}: {{ $announcement->category->name }}</a>
                  <div class="card-body  mx-auto">
                    <div class='cvp'>
                      <a href="{{ route('announcements.show', compact('announcement')) }}"  class="text-decoration-none text-black"  ><h5 class="card-title font-weight-bold">{{ $announcement->title }}</h5></a>
                      <p class="card-text">€ {{ $announcement->price }}</p>
                      {{-- <p class="card-text">Descrizione: {{ $announcement->body }}</p> --}}
                     {{--  <p class="text-black text-decoration-none mb-1 p-1">Pubblicato il: {{ date_format($announcement->created_at, 'd/m/Y H:i')}} User:{{ $announcement->user->name }} </p> --}}
                      {{-- <button class="button-18 mt-2" role="button"><a href="{{ route('announcements.show', compact('announcement')) }}" class="button-18 text-white text-decoration-none">Visualizza Prodotto</a></button><br /> --}}
                      {{-- <p class="card-text fs-6 px-1"> User: {{ $announcement->user->name }}</p> --}}
                    </div>
                  </div>
            </div>
        @endforeach
      </div>
    </div>

  </div>
  
  
  
  
  
  <x-footer></x-footer>

</x-layout>


{{-- 
@foreach
Abbiamo inserito un @foreach per ciclare gli annunci e stamparli a schermo. Abbiamo impostato un masssimo di 6 annunci per la pagina welcome.

Date_format
Abbiamo utilizzato la funzione date_format per stampare la data di creazione dell'annuncio e l'ora di creazione.
  --}}