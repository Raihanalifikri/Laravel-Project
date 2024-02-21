@extends('admin.parent')
@section('content')
Ini halaman admin index

<div class="container d-flex justify-content-end">
    <a href="{{ route('admin.create') }}" class="btn btn-primary">Create Admin</a>
</div>

{{-- table User --}}
<div class="container">
    <h5 class="fw-bold">Users</h5>
    <table class="table">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Gender</th>
            <th>action</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>

@endsection