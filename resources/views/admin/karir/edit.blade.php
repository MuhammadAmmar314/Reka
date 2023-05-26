@extends('layouts.admin')

@section('header', 'Edit Karir')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('karir.update' , $karir->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Job Title</label>
                    <input type="text" class="form-control" name="job_title" placeholder="Job Title" value="{{ $karir->job_title }}">
                </div>
                @error('job_title')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Description">{{ $karir->description }}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                
                <div class="form-group">
                    <label for="">Requirements</label>
                    <textarea name="requirements" id="" cols="30" rows="5" class="form-control" placeholder="Requirements">{{ $karir->requirements }}</textarea>
                </div>
                @error('requirements')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Responsibilities</label>
                    <textarea name="responsibilities" id="" cols="30" rows="5" class="form-control" placeholder="responsibilities">{{ $karir->responsibilities }}</textarea>
                </div>
                @error('responsibilities')
                <small style="color:red">{{$message}}</small>
                @enderror

                <img src="/image/{{ $karir->job_image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Job Image</label>
                    <input type="file" class="form-control" name="job_image">
                </div>
                @error('job_image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <a href="/admin/karir" class="btn btn-primary mb-1">Kembali</a>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
