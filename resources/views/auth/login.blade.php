<x-layout>
    <x-navbar></x-navbar>
        @if ($errors->any())
            <div class="alert alert-danger my-5">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 text-center my-5">
                        <h1 class="display-4 mt-3">Login</h1>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control 
                              @error('email') is-invalid @enderror" id="name" 
                              placeholder="Email" value="{{ old('email') }}">
                            <label for="name">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control 
                              @error('password') is-invalid @enderror" id="password" 
                              placeholder="Password" value="{{ old('password') }}">
                            <label for="name">Password</label>
                        </div>
                        <div class="mt-5">
                            <button class="button-18" type="submit">Accedi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </x-layout>