@extends('layouts.app')

@section('content')

<section class="checkout">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <h2 class="primary-header">
                        Masukan Data
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="item-bootcamp">
                                <img src="{{asset('images/item_data.png')}}" alt="" class="cover">
                            </div>
                        </div>
                        <div class="col-lg-1 col-12"></div>
                        <div class="col-lg-6 col-12">
                            <form action="{{route('input.store')}}" class="basic-form" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Nis</label>
                                    <input name="nis" type="number" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                                    <input name="nama_siswa" type="text" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                    <input name="jenis_kelamin" type="text" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Tahun Masuk</label>
                                    <input name="tahun_masuk" type="month" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Asal Kota</label>
                                    <input name="asal_kota" type="text" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Asal Sekolah Sebelumnya</label>
                                    <input name="asal_sekolah" type="text" class="form-control">
                                </div>
                                <button type="submit" class="w-100 btn btn-primary">Masukan</button>
                                <p class="text-center subheader mt-4">
                                    <img src="{{asset('images/ic_secure.svg')}}" alt=""> Data Anda aman dan terenkripsi.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection