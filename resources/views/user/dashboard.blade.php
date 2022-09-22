@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card mt-3">
                @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <span>{{ $message }}</span>
                </div>
                @endif
                <div class="card-header">
                    My Data
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nis</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Tahun Masuk</th>
                                <th>Asal Kota</th>
                                <th>Asal Sekolah</th>
                                <th>Aksi</th>
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
                            <td>
                                <a href="{{route('input.edit',$input->id)}}" class="btn btn-info">Edit</a>
                                <form action="{{route('input.delete',$input->id)}}" method="POST" onsubmit="return confirm('Data anda akan dihapus oleh sistem!')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan"3">No Data</td>
                        </tr>
                        @endforelse
                    </table>
                    <div>
                        <a href={{route('grafik')}} class="w-10 btn btn-primary">Tampilkan Grafik</a>
                        <a href={{route('pdf')}} class="w-10 btn btn-bicit" target="_blank">Download PDF</a>
                        <a href={{route('excel')}} class="w-10 btn btn-bocot" target="_blank">Download Excel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row copyright">
    <div class="col-lg-12 col-12">
        <p>
            All Rights Reserved. Copyright <span class="text-blue">LAST PROJECT</span> by DAR.
        </p>
    </div>
</div>
@endsection