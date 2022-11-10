@extends('layout.main')

@section('content')
    <div class="container">

        <a href="/menus" class="btn btn-primary">Back to Menus</a>

        <div class="row mt-3">
            <div class="col">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $menu->photo) }}" alt="{{ $menu->nama }}" class="card-img">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $menu->nama }}</h5>
                                <p class="card-text">Rp. {{ number_format($menu->harga, 2, ',', '.') }}</p>
                                <p class="card-text">{{ $menu->category->nama }}</p>
                                <p class="badge badge-{{ $menu->status == 'ready' ? 'success' : 'danger' }}">
                                    {{ $menu->status }}</p>
                                <br>
                                <a href="/menus/{{ $menu->id }}/edit" class="btn btn-primary">Edit</a>
                                <form action="/menus/{{ $menu->id }}" method="POST" class="d-inline">
                                    @method('Delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Kamu yakin?')">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
