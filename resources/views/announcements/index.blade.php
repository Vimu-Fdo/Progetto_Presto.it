<x-layout>
  <x-navbar></x-navbar>
  <div class="container index_announc_title">
    <div class="row align-content-center my-5 h-100">
      <div class="col-12">
        <h1 class="text-center">Tutti gli annunci</h1>
      </div>
    </div>
  </div>
  <div class="container index_announc">
  @forelse ($announcements as $announcement)
    <div class="row align-content-center h-100">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://www.typingpal.com/images/1/3/a/8/4/13a845e178cb05ecc149ffc850ad9a6eac19f85d-lorem-ipsum.png" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3 class="card-title font-weight-bold">{{ $announcement->title }}</h3>
        <p class="card-text">Descrizione: {{ $announcement->body }}</p>
        <p class="card-text">€ {{ $announcement->price }}</p>
        <p class="card-text">User: {{ $announcement->user->name }}</p>
        <p class="text-black">Pubblicato il: {{ date_format($announcement->created_at, 'd/m/Y H:i')}}</p>
        <a class="btn button-18" href="{{ route('announcements.show', compact('announcement')) }}">Visualizza</a>
        <a class="btn button-18" href="{{ route('categories.show',['category'=>$announcement->category]) }}">Categoria: {{ $announcement->category->name }}</a>
      </div>
    </div>
    <hr>
    @empty
    <div class="col-12">
      <div class="alert alert-warning py-3 shadow">
        <p class="lead">Non ci sono annunci per questa ricerca</p>
      </div>
    </div> 
    @endforelse
    <div class="py-4">
      {{ $announcements->links() }} {{-- paginazione --}}
    </div>  
</div>
</x-layout>
    
    





