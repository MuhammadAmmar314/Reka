@extends('layouts.admin')

@section('header', 'Fitur')

@section('content')

<div class="container">
    <a href="/admin/fitur/create" class="btn btn-primary mb-1">Tambah Data</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Fitur</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fiturs as $key => $fitur)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $fitur->fitur }}</td>
                    <td>
                        <img src="/image/{{ $fitur->fitur_image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{ route('fitur.edit', $fitur->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('fitur.destroy', $fitur->id) }}" method="POST">
                        @csrf    
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>      
</div>

@endsection