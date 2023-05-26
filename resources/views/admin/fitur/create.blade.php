@extends('layouts.admin')

@section('header', 'Tambah Fitur')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('fitur.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Fitur</label>
                    <input type="text" class="form-control" name="fitur" placeholder="Fitur">
                </div>
                @error('fitur')
                <small style="color:red">{{$message}}</small>
                @enderror
                
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="fitur_image">
                </div>
                @error('fitur_image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <a href="/admin/fitur" class="btn btn-primary mb-1">Kembali</a>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
