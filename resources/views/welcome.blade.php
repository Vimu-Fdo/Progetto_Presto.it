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
    
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-6">
          <div class="head1"></div>
    
        </div>
        <div class="col-12 col-md-6"> 
          <div class="head2 py-5"><h1 class="headTxt"> BENVENUTI SU PRESTO.it</h1><br><p class="px-3">Perché spendere di più? Compra da noi e risparmia!</p> </div>
          
          <div class="container-fluid">
            <div class="row d-flex justify-content-between">
              
              <div class="col-6 miniBox1 hashtag"><span>#compra</span></div>
              <div class="col-6 miniBox2 hashtag"><span>#vendi</span></div>

            </div>            
          </div>
        </div>
      </div>
    </div>
    
    {{-- @if (session()->has('message'))
                <div class="alert alert-success mt-3">
                    {{ session('message') }}
                </div>
            @endif
    <header class="masthead mt-5">
      <div class="container">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6">
              <svg class="svgP" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800" opacity="1"><defs><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="nnneon-grad"><stop stop-color="hsl(37, 100%, 50%)" stop-opacity="1" offset="0%"></stop><stop stop-color="hsl(272, 99%, 54%)" stop-opacity="1" offset="100%"></stop></linearGradient><filter id="nnneon-filter" x="-100%" y="-100%" width="400%" height="400%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feGaussianBlur stdDeviation="17 8" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur></filter><filter id="nnneon-filter2" x="-100%" y="-100%" width="400%" height="400%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feGaussianBlur stdDeviation="10 17" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur></filter></defs><g stroke-width="16" stroke="url(#nnneon-grad)" fill="none"><path d="M387.9911311454382 226.7996749462182C395.422219192641 222.51010699136873 404.577780807359 222.51010699136873 412.0088688545618 226.80087583310365L543.9911411137375 303.00075137595445C551.4222291609403 307.290319330804 556.0000099682993 315.2197754354711 556.0000099682993 323.80011223205554V476.19986331775715C556.0000099682993 484.7802001143416 551.4222291609403 492.7096562190088 543.9911411137375 497.00042506074374L412.0088688545618 573.2003006035945C404.577780807359 577.489868558444 395.422219192641 577.489868558444 387.9911311454382 573.199099716709L256.00885888626243 496.99922417385824C248.5777708390596 492.7096562190088 243.9999900317007 484.7802001143416 243.9999900317007 476.19986331775715V323.80011223205554C243.9999900317007 315.2197754354711 248.5777708390596 307.290319330804 256.00885888626243 302.99955048906907L387.9911311454382 226.7996749462182Z " filter="url(#nnneon-filter)"></path><path d="M399.9911311454382 226.7996749462182C407.422219192641 222.51010699136873 416.577780807359 222.51010699136873 424.0088688545618 226.80087583310365L555.9911411137375 303.00075137595445C563.4222291609403 307.290319330804 568.0000099682993 315.2197754354711 568.0000099682993 323.80011223205554V476.19986331775715C568.0000099682993 484.7802001143416 563.4222291609403 492.7096562190088 555.9911411137375 497.00042506074374L424.0088688545618 573.2003006035945C416.577780807359 577.489868558444 407.422219192641 577.489868558444 399.9911311454382 573.199099716709L268.00885888626243 496.99922417385824C260.5777708390596 492.7096562190088 255.9999900317007 484.7802001143416 255.9999900317007 476.19986331775715V323.80011223205554C255.9999900317007 315.2197754354711 260.5777708390596 307.290319330804 268.00885888626243 302.99955048906907L399.9911311454382 226.7996749462182Z " filter="url(#nnneon-filter2)" opacity="0.25"></path><path d="M375.9911311454382 226.7996749462182C383.422219192641 222.51010699136873 392.577780807359 222.51010699136873 400.0088688545618 226.80087583310365L531.9911411137375 303.00075137595445C539.4222291609403 307.290319330804 544.0000099682993 315.2197754354711 544.0000099682993 323.80011223205554V476.19986331775715C544.0000099682993 484.7802001143416 539.4222291609403 492.7096562190088 531.9911411137375 497.00042506074374L400.0088688545618 573.2003006035945C392.577780807359 577.489868558444 383.422219192641 577.489868558444 375.9911311454382 573.199099716709L244.00885888626243 496.99922417385824C236.5777708390596 492.7096562190088 231.9999900317007 484.7802001143416 231.9999900317007 476.19986331775715V323.80011223205554C231.9999900317007 315.2197754354711 236.5777708390596 307.290319330804 244.00885888626243 302.99955048906907L375.9911311454382 226.7996749462182Z " filter="url(#nnneon-filter2)" opacity="0.25"></path><path d="M387.9911311454382 226.7996749462182C395.422219192641 222.51010699136873 404.577780807359 222.51010699136873 412.0088688545618 226.80087583310365L543.9911411137375 303.00075137595445C551.4222291609403 307.290319330804 556.0000099682993 315.2197754354711 556.0000099682993 323.80011223205554V476.19986331775715C556.0000099682993 484.7802001143416 551.4222291609403 492.7096562190088 543.9911411137375 497.00042506074374L412.0088688545618 573.2003006035945C404.577780807359 577.489868558444 395.422219192641 577.489868558444 387.9911311454382 573.199099716709L256.00885888626243 496.99922417385824C248.5777708390596 492.7096562190088 243.9999900317007 484.7802001143416 243.9999900317007 476.19986331775715V323.80011223205554C243.9999900317007 315.2197754354711 248.5777708390596 307.290319330804 256.00885888626243 302.99955048906907L387.9911311454382 226.7996749462182Z "></path></g></svg>
              </div>
              <div class="col-12 col-md-6">
                <h1 class="fw-light">Sei alla ricerca di qualcosa di unico nel suo genere?</h1>
                <p class="lead">Su Presto.it troverai tutto cio' che fa al caso tuo!</p>
                <form class="d-flex" action="{{ route('announcements.search') }}" method="GET">
                  <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button type="submit" class="button-18">
                    <i class="fas fa-search"></i>
                  </button>
                </form>
              </div>
        </div>
      </div>
    </header> --}}
    {{-- Fine Header --}}

    {{-- Sezione categorie --}}
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center mt-5 py-5">{{ __('ui.categoriesmostpopular') }}</h2>
        </div>
      </div>
      <div class="container-fluid  px-5">
      <a href=" {{ route('categories.show', ['category' => 4]) }} "><div class="row justify-content-between">
        <div class="col-6 col-md-3 column1 px-5">
          <div class="cardcategory d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-shirt py-3" style="color: #000000; font-size: 30px;"></i>
            <a class="text-decoration-none py-2" style="color: #000000" href=" {{ route('categories.show', ['category' => 4]) }} ">{{ __('ui.clothing') }} </a>
          </div></a>
        </div>
        <div class="col-6 col-md-3 column1 px-5">
          <a href=" {{ route('categories.show', ['category' => 2]) }}"><div class="cardcategory d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-lightbulb py-3" style="color: #000000; font-size: 30px;"></i>
            <a class="text-decoration-none py-2" style="color: #000000" href=" {{ route('categories.show', ['category' => 2]) }} ">{{ __('ui.electronics') }}</a>
          </div></a>
        </div> 
        <div class="col-6 col-md-3 column1 px-5">
          <a href=" {{ route('categories.show', ['category' => 16]) }}  "><div class="cardcategory d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-couch py-3" style="color: #000000; font-size: 30px;"></i>
            <a class="text-decoration-none py-2" style="color: #000000" href=" {{ route('categories.show', ['category' => 16]) }} ">{{ __('ui.furniture') }}</a>
          </div></a>
        </div>
        <div class="col-6 col-md-3 column1 px-5">
          <a href=" {{ route('categories.show', ['category' => 10]) }}  "><div class="cardcategory d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-dumbbell py-3" style="color: #000000; font-size: 30px;"></i>
            <a class="text-decoration-none py-2" style="color: #000000" href=" {{ route('categories.show', ['category' => 10]) }} ">{{ __('ui.sport') }}</a>
          </div></a>
        </div>
      </div>
    </div>
    </div>
    {{-- Fine Sezione categorie --}}

   

    {{-- Inizio Annunci --}}
    <h2 class="text-center mt-5 py-5">{{ __('ui.allAnnouncements') }}</h2>
    @foreach ($announcements as $announcement)
      <div class="card mx-auto  col-10 mt-5 larg " style="align-items: center"> <a href="{{ route('announcements.show', compact('announcement')) }}" >
          <img class="mx-auto img-thumbnail"src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(300, 300) : 'https://picsum.photos/200' }}" width="auto" height="auto">
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




<x-footer></x-footer>
</x-layout>


{{-- 
@foreach
Abbiamo inserito un @foreach per ciclare gli annunci e stamparli a schermo. Abbiamo impostato un masssimo di 6 annunci per la pagina welcome.

Date_format
Abbiamo utilizzato la funzione date_format per stampare la data di creazione dell'annuncio e l'ora di creazione.
  --}}