@extends('main')

@section('title','Form User')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>User</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">Form User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form User</h3>
            </div>
            <div class="card-body">
                <form action={{ route("user.update") }}
                    method="POST" autocomplete="off"
                    enctype="multipart/form-data" class="row">
                    @csrf
                    <div class="col-md-3">
                        <img src="storage/profile/{{ $data->filename }}" alt="" class="img-thumbnail">
                    </div>
                   <div class="col-md-9">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text"
                            class="form-control @error("name") is-invalid @enderror"
                            name="name" value='{{ old("name",auth()->user()->name) }}'>
                        @error("name")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="profilepic">Profile Pic</label>
                        <input type="file" name="profilepic" id="profilepic"
                            class="form-control">
                    </div>
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                    </div>
                   </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection