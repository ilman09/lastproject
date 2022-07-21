<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('welcome')}}">
                <img src="{{asset('images/logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="d-flex">
                    <a href="{{route('login')}}" class="btn btn-master btn-secondary me-3">
                        Masuk
                    </a>
                    <a href="{{route('login')}}" class="btn btn-master btn-primary">
                        Daftar
                    </a>
                </div>
            </div>
    </nav>