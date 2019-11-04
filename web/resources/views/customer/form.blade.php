@extends('karyawan.main')

@section('title','Form Customer')

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control " name="nama" style="width:50%;" value="" maxlength="25">
        
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control " name="username" style="width:50%;" value="" maxlength="25">
        
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control " name="email" style="width:50%;" value="" maxlength="25">
        
        </div>

        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" class="form-control " name="telepon" style="width:50%;" value="" maxlength="15">
        
        </div>
        <input type="submit" class="btn btn-success" name="simpan" value="Simpan">
    </form>
    
@endsection