<x-layout>
  <x-navbar></x-navbar>
    <div class="container-fluid index_announc_title">
      <div class="row align-content-center my-5 h-100">
        <div class="col-12">
          <form class="d-flex" action="{{ route('announcements.search') }}" method="GET">
            <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button type="submit" class="button-18">
              <i class="fas fa-search"></i>
            </button>
          </form>
          <h1 class="text-center mt-4">{{ __('ui.announcements') }}</h1>
        </div>
      </div>
    </div>
    <div class="container index_announc">
    @forelse ($announcements as $announcement)
      <div class="row align-content-center h-100">
        <div class="col-md-7">
          <a href="{{ route('announcements.show', compact('announcement')) }}">{{ __('ui.details') }}>
            <img class="img-fluid rounded mb-2 mb-md-0" src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://www.typingpal.com/images/1/3/a/8/4/13a845e178cb05ecc149ffc850ad9a6eac19f85d-lorem-ipsum.png'}}" alt="">
          </a>
        </div>
        <div class="col-md-5 mt-3 py-3">
          <h3 class="card-title font-weight-bold py-5">{{ $announcement->title }}</h3>
          <a class=" text-black text-decoration-none" href="{{ route('categories.show',['category'=>$announcement->category]) }}">{{ __('ui.category') }}: {{ $announcement->category->name }}</a>
          <p class="card-text py-2">{{ __('ui.description') }}: {{ $announcement->body }}</p>
          <p class="card-text">€ {{ $announcement->price }}</p>
         {{--  <p class="card-text">User: {{ $announcement->user->name }}</p> --}}
         <a class=" button-18 text-decoration-none" href="{{ route('announcements.show', compact('announcement')) }}">{{ __('ui.details') }}</a>
         <p class="text-black py-5">{{ __('ui.date') }}: {{ date_format($announcement->created_at, 'd/m/Y H:i')}} User:{{ $announcement->user->name }}</p>
        </div>
      </div>
      <hr>
      @empty
      <div class="col-12">
        <div class="alert alert-warning py-3 shadow">
          <p class="lead">{{ __('ui.noAnnouncements') }}</p>
        </div>
      </div> 
      @endforelse
      <div class="py-4">
        {{ $announcements->links() }} {{-- paginazione --}}
      </div> 
    <div>
      <x-footer></x-footer>
    </div>
  </div>
 
</x-layout>

    






