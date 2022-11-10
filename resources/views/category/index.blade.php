@extends('layout.main')

@section('content')
    <div class="container">

        <a href="/categories/create" class="btn btn-primary">Add Category</a>

        <div class="card py-3 col-7">
            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->nama }}</td>
                            <td>
                                <a href="/categories/{{ $category->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                <form action="/categories/{{ $category->id }}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Aku nanya nih Kamu yakin??')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
