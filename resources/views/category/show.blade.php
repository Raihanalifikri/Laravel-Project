@extends('admin.parent')
@section('content')

<div class="card p-4">
    <label for="">Name</label>
    <input type="text" value="{{ $category->name }}" class="from-control" >
</div>

<div class="card p-4">
    <label for="">Name</label>
    <input type="text" value="{{ $category->id }}" class="from-control" >
</div>
@endsection