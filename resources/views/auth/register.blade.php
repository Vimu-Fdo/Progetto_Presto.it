<x-layout>
    <x-navbar/>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center my-5">
                <h1 class="display-4 mt-3">Registrati</h1>
                <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control 
                     @error('name') is-invalid @enderror" 
                     id="name" 
                     placeholder="Name" 
                     value="{{ old('name') }}">
                    <label for="name">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control 
                     @error('email') is-invalid @enderror" 
                     id="name" 
                     placeholder="Email" 
                     value="{{ old('email') }}">
                    <label for="name">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control 
                     @error('password') is-invalid @enderror" 
                     id="password"                            
                     placeholder="Password" value="{{ old('password') }}">
                    <label for="name">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password_confirmation" class="form-control 
                     @error('password_confirmation') is-invalid @enderror" 
                     id="password_confirmation"                                  
                     placeholder="Password Confirmation"                                                
                     value="{{ old('password_confirmation') }}">
                    <label for="name">Password Confirmation</label>
                </div>
                <div class="mt-5">
                <button class="btn btn-success" type="submit">Registrati</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    

</x-layout>