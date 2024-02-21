@extends('admin.parent')
@section('content')
<div class="card p-4">
    <h1>Category Index</h1>

    <hr>

    <div class="container d-flex justify-content-end">
        <a href="{{ route('category.create') }}" class="btn btn-success">Create Category</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <th>
           <td>No</td>
           <td>Name</td>
           <td>Action</td>
        </th>
        <tbody>
            @foreach ( $category as $row )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td>
                        <a href="{{ route('category.show', $row->id) }}" class="btn btn-primary">Laravel</a>
                        <form action="{{ route('category.destroy', $row->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection