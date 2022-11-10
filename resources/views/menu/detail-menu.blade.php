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
                                <p class="card-text">{{ $menu->harga }}</p>
                                <p class="card-text">{{ $menu->category->nama }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
