@extends('layout.main')

@section('content')
    <div class="container">

        <form action="/menus" method="POST" enctype="multipart/form-data" class="col-6">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Menu</label>
                <input type="text" class="form-control @error('nama')is-invalid @enderror" name="nama" id="nama"
                    value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="harga">Harga Menu</label>
                <input type="number" class="form-control @error('harga')is-invalid @enderror" name="harga" id="harga"
                    value="{{ old('harga') }}">
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="kategori">Kategori Menu</label>
                <select class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="kategori">
                    <option value="">Kategori Menu...</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('kategori') == $category->id ? 'selected' : '' }}>
                            {{ $category->nama }}</option>
                    @endforeach
                </select>
                @error('kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-6">
                <img class="image-preview" style="max-width: 200px;">
            </div>
            <div class="form-group">
                <label for="image">Photo</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('photo') is-invalid @enderror" name="photo"
                        id="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                    @error('photo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                    <option value="">Status...</option>
                    <option value="ready" {{ old('status') == 'ready' ? 'selected' : '' }}>Ready</option>
                    <option value="sold out" {{ old('status') == 'sold out' ? 'selected' : '' }}>Sold Out</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
