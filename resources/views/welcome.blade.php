@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <title>LAST PROJECT</title>
</head>

<body>

    <section class="banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 copywriting">
                            <h1 class="header">
                                Masukan <span class="text-blue">DATA</span> untuk <span>Menghasilkan Grafik</span>
                            </h1>
                            <p class="support">
                            <span class="text-blue">LAST PROJECT.</span> 
                            <p class="cta">
                                <a href="{{route('input.create')}}" class="btn btn-master btn-primary">
                                    Mulai Masukan Data
                                </a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <a href="#">
                                <img src="{{asset('images/banner.png')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row brands">
                <div class="col-lg-12 col-12 text-center">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        Keuntungan menggunakan <span class="text-blue">LAST PROJECT.</span>
                    </p>
                    <h2 class="primary-header">
                        Akurat & Fleksibel Mengatasi Perhitungan Data
                    </h2>
                </div>
            </div>

            <div class="row copyright">
                <div class="col-lg-12 col-12">
                        <p>
                            All Rights Reserved. Copyright <span class="text-blue">LAST PROJECT</span>  by DAR.
                        </p>
                </div>
            </div>
    </section>
 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>

@endsection
