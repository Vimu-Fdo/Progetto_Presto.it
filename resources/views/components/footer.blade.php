{{ $slot }}
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Test</h4>
                <p class="lead mb-0">
                    Viale Antonio Gramsci, 18, 
                    <br />
                    80122 Napoli
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Seguci sui Social</h4>
                <i class=" fs-3 fa-brands fa-facebook"></i>
                <i class=" fs-3 fa-brands fa-twitter"></i>
                <i class=" fs-3 fa-brands fa-linkedin"></i>
                <i class=" fs-3 fa-brands fa-instagram"></i>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">Lavora con noi</h4>
                <p class="lead mb-0">Registrati cliccando qui</p>
                {{-- <a href="{{ route('become.revisor') }}">Diventa revisore</a> --}}
                
                <button class="button-18 mt-3" role="button" ><a href="{{ route('become.revisor') }}" class="text-white text-decoration-none ">Diventa revisore</a></button>
            </div>
        </div>
    </div>
</footer>
