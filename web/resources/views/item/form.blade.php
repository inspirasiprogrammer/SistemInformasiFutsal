@extends('karyawan.main')

@section('title','Form Kelas')

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control " name="nama" style="width:50%;" value="" maxlength="25">
        
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" class="form-control " name="stok" style="width:50%;" value="" maxlength="25">
        
        </div>
        <div class="form-group">
            <label for="jual">Jual</label>
            <input type="text" class="form-control " name="jual" style="width:50%;" value="" maxlength="25">
        
        </div>
        <div class="form-group">
            <label for="beli">Beli</label>
            <input type="text" class="form-control " name="beli" style="width:50%;" value="" maxlength="25">
        
        </div>
        
        
        <input type="submit" class="btn btn-success" name="simpan" value="Simpan">
    </form>
    
@endsection