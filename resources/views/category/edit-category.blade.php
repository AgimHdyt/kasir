@extends('layout.main')

@section('content')
    <div class="container">

        <form action="/categories/{{ $category->id }}" method="POST" class="col-6">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nama">Nama Kategori</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
                    value="{{ old('nama', $category->nama) }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>

    </div>
@endsection
