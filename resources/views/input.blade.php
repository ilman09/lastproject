@extends('layouts.app')

@section('content')

<section class="input">
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
                        <div class="item-input">
                            <img src="{{asset('images/item_data.png')}}" alt="" class="cover">
                        </div>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="{{route('input.store')}}" class="basic-form" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Nis</label>
                                <input name="nis" type="number" class="form-control {{$errors->has('nis') ? 'is-invalid' : ''}}">
                                @if ($errors->has('nis'))
                                <p class="text-danger">{{$errors->first('nis')}}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                                <input name="nama_siswa" type="text" class="form-control {{$errors->has('nama_siswa') ? 'is-invalid' : ''}}">
                                @if ($errors->has('nama_siswa'))
                                <p class="text-danger">{{$errors->first('nama_siswa')}}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" type="text" class="form-control {{$errors->has('nama_siswa') ? 'is-invalid' : ''}}">
                                    <option value="pilih">Pilih</option>
                                    <option value="laki laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                                @if ($errors->has('jenis_kelamin'))
                                <p class="text-danger">{{$errors->first('jenis_kelamin')}}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Tahun Masuk</label>
                                <input name="tahun" type="month" placeholder="Y-M-D" class="form-control {{$errors->has('nama_siswa') ? 'is-invalid' : ''}}">
                                @if ($errors->has('tahun'))
                                <p class="text-danger">{{$errors->first('tahun')}}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Asal Kota</label>
                                <select name="asal_kota" type="text" class="form-control {{$errors->has('nama_siswa') ? 'is-invalid' : ''}}">
                                    <option value="pilih">Pilih</option>
                                    <option value="banten">Banten</option>
                                    <option value="kota tangerang">Kota Tangerang</option>
                                    <option value="kabupaten tangerang">Kabupaten Tangerang</option>
                                    <option value="tangerang selatan">Kota Selatan</option>
                                    <option value="jakarta pusat">Jakarta Pusat</option>
                                    <option value="jakarta selatan">Jakarta Selatan</option>
                                    <option value="jakarta barat">Jakarta Barat</option>
                                    <option value="jakarta utara">Jakarta Utara</option>
                                    <option value="bengkulu">Bengkulu</option>
                                    <option value="aceh">Aceh</option>
                                </select>
                                @if ($errors->has('asal_kota'))
                                <p class="text-danger">{{$errors->first('asal_kota')}}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Asal Sekolah Sebelumnya</label>
                                <input name="asal_sekolah" type="text" class="form-control {{$errors->has('nama_siswa') ? 'is-invalid' : ''}}">
                                @if ($errors->has('asal_sekolah'))
                                <p class="text-danger">{{$errors->first('asal_sekolah')}}</p>
                                @endif
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

