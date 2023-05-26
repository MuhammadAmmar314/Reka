@extends('layouts.admin')

@section('header', 'Edit Fitur')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('fitur.update' , $fitur->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Fitur</label>
                    <input type="text" class="form-control" name="fitur" placeholder="Fitur" value="{{ $fitur->fitur }}">
                </div>
                @error('fitur')
                <small style="color:red">{{$message}}</small>
                @enderror
                
                <img src="/image/{{ $fitur->fitur_image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="fitur_image" value="{{ $fitur->fitur_image }}">
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
