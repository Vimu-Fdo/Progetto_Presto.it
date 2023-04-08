<x-layout>
    <x-navbar></x-navbar>
    <div class="container index_announc_title">
      <div class="row align-content-end h-100">
        <div class="col-12">
            <h1>{{ $announcement_to_check ? 'Ecco l\'annuncio da revisionare:' : 'Non ci sono annunci da revisionare' }}</h1>
        </div>
      </div>
    </div>
    <div class="container index_announc">
     @if($announcement_to_check)
      <div class="row align-content-center h-100">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="https://www.typingpal.com/images/1/3/a/8/4/13a845e178cb05ecc149ffc850ad9a6eac19f85d-lorem-ipsum.png" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h5 class="card-title">Titolo: {{ $announcement_to_check->title }}</h5>
          <p>Descrizione: {{ $announcement_to_check->body }}</p>
          <p>Publicato il: {{ $announcement_to_check->created_at->format('d/m/Y') }}</p>
         <div class="d-flex">
            <form action="{{ route('revisor.accept_announcement', ['announcement'=>$announcement_to_check]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-success shadow">Accetta</button>
              </form>
              <form action="{{ route('revisor.reject_announcement', ['announcement'=>$announcement_to_check]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-success shadow ms-3">Rifiuta</button>
              </form>
         </div>
        </div>
      </div>
     @endif
  </div>
</x-layout>