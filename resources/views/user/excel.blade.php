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