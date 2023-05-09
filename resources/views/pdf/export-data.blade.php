<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
    <center><h2>Data Registrasi Siswa</h4></center>
    <table border="1" cellspacing="0" cellpadding="5" align="center">
        <thead>
            <tr>
                <th scope="col" style="text-align: center; font-weight: bold; background-color: #f2f2f2; padding: 10px;">#</th>
                <th scope="col" style="text-align: center; font-weight: bold; background-color: #f2f2f2; padding: 10px;">No Registrasi</th>
                <th scope="col" style="text-align: center; font-weight: bold; background-color: #f2f2f2; padding: 10px;">Nama</th>
                <th scope="col" style="text-align: center; font-weight: bold; background-color: #f2f2f2; padding: 10px;">Jenis Kelamin</th>
                <th scope="col" style="text-align: center; font-weight: bold; background-color: #f2f2f2; padding: 10px;">Alamat</th>
                <th scope="col" style="text-align: center; font-weight: bold; background-color: #f2f2f2; padding: 10px;">Agama</th>
                <th scope="col" style="text-align: center; font-weight: bold; background-color: #f2f2f2; padding: 10px;">Asal Sekolah</th>
                <th scope="col" style="text-align: center; font-weight: bold; background-color: #f2f2f2; padding: 10px;">Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($index as $item)
            <tr>
                <td style="text-align: center; padding: 5px;">{{ $loop->iteration }}</td>
                <td style="text-align: center; padding: 5px;">{{$item->no_reg}}</td>
                <td style="text-align: center; padding: 5px;">{{$item->nama}}</td>
                <td style="text-align: center; padding: 5px;">{{$item->jk}}</td>
                <td style="text-align: center; padding: 5px;">{{$item->alamat}}</td>
                <td style="text-align: center; padding: 5px;">{{$item->agama}}</td>
                <td style="text-align: center; padding: 5px;">{{$item->asal_sekolah}}</td>
                <td style="text-align: center; padding: 5px;">{{$item->jurusan}}</
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>