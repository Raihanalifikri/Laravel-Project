@extends('admin.parent')
@section('content')
    <div class="card p-4">
        <h1>Create Buah</h1>

        <form action="{{ route('buah.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-floating mb-3">
                <input type="" class="form-control" id="floatingInput" placeholder="Buah" name="name">
                <label for="floating-input">Nama Buah</label>
            </div>

            <div class="form-floating mb-3">
                <input type="" class="form-control" id="floatingInput" placeholder="Buah" name="harga">
                <label for="floating-input">Harga Buah</label>
            </div>

            <div class="form-floating mb-3">
                <input type="" class="form-control" id="floatingInput" placeholder="Buah" name="warna">
                <label for="floating-input">Warna Buah</label>
            </div>

            <button type="submit" class="btn btn-primary">Craete</button>
        </form>
    </div>
@endsection
