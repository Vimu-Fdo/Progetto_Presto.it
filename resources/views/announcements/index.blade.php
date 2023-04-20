<x-layout>
  <x-navbar></x-navbar>
    <div class="container index_announc_title">
      <div class="row align-content-center my-5 h-100">
        <div class="col-12">
          <h1 class="text-center mt-4">{{ __('ui.announcements') }}</h1>
          <form class="d-flex mt-4 justify-content-center" action="{{ route('announcements.search') }}" method="GET">
            <input name="searched" class="form-control me-2 search" type="search" placeholder="Search" aria-label="Search">
            <button type="submit" class="button-18">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
      </div>
      <div class="row">
        
      </div>
    </div>
   <div class="container">

     <div class="row">
       @forelse ($announcements as $announcement)
         <div class="card mx-auto  col-10 my-3 larg " style="align-items: center"> <a href="{{ route('announcements.show', compact('announcement')) }}" >
             <img class="mx-auto img-thumbnail bordo"src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(300, 300) : 'https://picsum.photos/300' }}" width="auto" height="auto">
                 <a href="{{ route('categories.show',['category'=>$announcement->category]) }}"class="text-black text-decoration-none  p-3 ">{{ __('ui.category') }}: {{ $announcement->category->name }}</a>
                 <div class="card-body  mx-auto">
                   <div class='cvp'>
                     <a href="{{ route('announcements.show', compact('announcement')) }}"  class="text-decoration-none text-black"  ><h5 class="card-title font-weight-bold">{{ $announcement->title }}</h5></a>
                     <p class="card-text">€ {{ $announcement->price }}</p>
                     {{-- <p class="card-text">Descrizione: {{ $announcement->body }}</p> --}}
                     <p class="text-black text-decoration-none mb-1 p-1">Pubblicato il: {{ date_format($announcement->created_at, 'd/m/Y H:i')}} User:{{ $announcement->user->name }} </p>
                     {{-- <button class="button-18 mt-2" role="button"><a href="{{ route('announcements.show', compact('announcement')) }}" class="button-18 text-white text-decoration-none">Visualizza Prodotto</a></button><br /> --}}
                     {{-- <p class="card-text fs-6 px-1"> User: {{ $announcement->user->name }}</p> --}}
                   </div>
                 </div>
           </div>
           @empty
           <div class="col-12">
             <div class="alert alert-warning py-3 shadow">
               <p class="lead">{{ __('ui.noAnnouncements') }}</p>
             </div>
           </div> 
           @endforelse
          </div>
          <div class="py-4">
           {{ $announcements->links() }} {{-- paginazione --}}
         </div> 
   </div>

     
    
  
 <div>
    <x-footer></x-footer>
  </div>
</x-layout>

    






