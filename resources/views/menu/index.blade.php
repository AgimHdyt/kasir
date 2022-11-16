@extends('layout.main')

@section('content')
    <div class="container">

        <a href="/menus/create" class="btn btn-primary my-4">Add Menu</a>

        <div class="row">
            @foreach ($menus as $menu)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('storage/' . $menu->photo) }}" class="card-img-top" alt="{{ $menu->nama }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $menu->nama }}</h5>
                            <p class="card-text">{{ 'Rp. ' . number_format($menu->harga, 2, ',', '.') }}</p>
                            <a href="/menus/{{ $menu->id }}" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
