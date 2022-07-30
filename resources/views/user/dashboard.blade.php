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
                            </tbody>
                            @forelse ($inputs as $input)
                                    <tr>
                                        <td>{{$input->nis}}</td>
                                        <td>{{$input->nama_siswa}}</td>
                                        <td>{{$input->jenis_kelamin}}</td>
                                        <td>{{$input->tahun}}</td>
                                        <td>{{$input->asal_kota}}</td>
                                        <td>{{$input->asal_sekolah}}</td>
                                    </tr> 
                                @empty
                                    <tr>
                                        <td colspan"3">No Data</td>
                                    </tr>
                            @endforelse
                        </table>
                        <div>
                            <a href="/" class="w-10 btn btn-primary" target="_blank">Tampilkan Grafik</a>
                            <a href={{route('pdf')}} class="w-10 btn btn-bicit" target="_blank">Download PDF</a>
                            <a href={{route('excel')}} class="w-10 btn btn-bocot" target="_blank">Download Excel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
