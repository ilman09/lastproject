@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card mt-3">
                    <div class="card-header">
                        My Data
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nis</th>
                                    <th>Nama Siswa</th>
                                    <th>jenis Kelamin</th>
                                    <th>Tahun Masuk</th>
                                    <th>Asal Kota</th>
                                    <th>Asal Sekolah</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($inputs as $input)
                                    <tr>
                                        <td>{{$input->nis}}</td>
                                        <td>{{$input->nama_siswa}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No camps registered</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            <button type="submit" a href="/" class="w-10 btn btn-primary">Tampilkan Grafik</button>
                            <button type="submit" a href="/" class="w-10 btn btn-bicit">Download PDF</button>
                            <button type="submit" a href="/" class="w-10 btn btn-bocot">Download Excel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection