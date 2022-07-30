<div>
    Data ini telah tervalidasi
</div>
    <style>
        font-family: 'Poppins', sans-serif;
        color: #666;
        border: #ccc 1px solid;
        }
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #e0e0e0;
            color: black;
        }
    </style>
                        <table>
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
                            @foreach ($inputs as $input)
                                    <tr>
                                        <td>{{$input->nis}}</td>
                                        <td>{{$input->nama_siswa}}</td>
                                        <td>{{$input->jenis_kelamin}}</td>
                                        <td>{{$input->tahun}}</td>
                                        <td>{{$input->asal_kota}}</td>
                                        <td>{{$input->asal_sekolah}}</td>
                                    </tr> 
                            @endforeach
                            </tbody>
                        </table>