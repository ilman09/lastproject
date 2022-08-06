@extends('layouts.app')

@section('content')

<section class="input">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-12">
                    <img src="{{asset('images/ic_success.png')}}" height="400" class="mb-5" alt=" ">
                </div>
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <h2 class="primary-header ">
                        Data Berhasil Di Simpan
                    </h2>
                    <a href="{{route('welcome')}}" class="btn btn-primary mt-3">
                        Halaman Utama
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection