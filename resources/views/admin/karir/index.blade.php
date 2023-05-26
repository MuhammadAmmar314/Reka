@extends('layouts.admin')

@section('header', 'Karir')

@section('content')

<div class="container">
    <a href="/admin/karir/create" class="btn btn-primary mb-1">Tambah Data</a>

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
                    <th>Job Title</th>
                    <th>Description</th>
                    <th>Requirements</th>
                    <th>Responsibilties</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karirs as $key => $karir)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $karir->job_title }}</td>
                    <td>{{ $karir->description }}</td>
                    <td>{{ $karir->requirements }}</td>
                    <td>{{ $karir->responsibilities }}</td>
                    <td>
                        <img src="/image/{{ $karir->job_image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{ route('karir.edit', $karir->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('karir.destroy', $karir->id) }}" method="POST">
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