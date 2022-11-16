@extends('layout.main')

@section('content')
    <div class="container">
        <form action="/add-level" method="POST" class="col-6">
            @csrf
            <div class="form-group">
                <label for="level">Level</label>
                <select name="level" id="level" class="form-control @error('level') is-invalid @enderror">
                    <option value="">Level...</option>
                    <option value="admin">Admin</option>
                    <option value="kasir">Kasir</option>
                    <option value="manager">Manager</option>
                </select>
                @error('level')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
