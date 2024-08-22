@extends('Layout')
@section('Content')


<a href="#"> + Add New Data</a>


<table border="1">
    <tr>
        <th>No Kontak</th>
        <th>Nama Kontak</th>
        <th>Opsi</th>
    </tr>
    @foreach($kontak as $Get)
    <tr>
        <td>{{ $Get->kd_kontak }}</td>
        <td>{{ $Get->nama_kontak }}</td>
        <td>
            <a href="/kontakController/edit/{{ $Get->kd_kontak }}">Update</a>
            |
            <a href="/kontakController/hapus/{{ $Get->kd_kontak }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>



@endsection
