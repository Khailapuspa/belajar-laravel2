@extends('Layout')
@section('Content')


<a href="#"> + Add New Data</a>


<table border="1">
    <tr>
        <th>No Profile</th>
        <th>Nama Profile</th>
        <th>Opsi</th>
    </tr>
    @foreach($profile as $Get)
    <tr>
        <td>{{ $Get->kd_profile }}</td>
        <td>{{ $Get->nama_profile }}</td>
        <td>
            <a href="/profileController/edit/{{ $Get->kd_profile }}">Update</a>
            |
            <a href="/profileController/hapus/{{ $Get->kd_profile }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>



@endsection
