@extends('main')

@section('title','Form Lapangan')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Lapangan</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("lapangan.list") }}">List Lapangan</a></li>
                        <li class="breadcrumb-item active">Form Lapangan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form Lapangan</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control " name="nama" style="width:50%;" value="" maxlength="25">
                    </div>
                    <div class="form-group">
                        <label for="status">Jenis</label>
                        <input type="text" class="form-control " name="jenis" style="width:50%;" value="" maxlength="25">
                    </div>
                    <div class="form-group">
                        <label for="normal">Normal</label>
                        <input type="number" class="form-control " name="normal" style="width:50%;" value="" maxlength="25">
                    </div>
                    <div class="form-group">
                        <label for="week">Weekend</label>
                        <input type="number" class="form-control " name="week" style="width:50%;" value="" maxlength="25">
                    </div>
            
                    <input type="submit" class="btn btn-success" name="simpan" value="Simpan">
                </form>
            </div>
        </div>
    </section>
</div>

    
@endsection