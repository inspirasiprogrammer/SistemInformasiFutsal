@extends('admin.main')

@section('title','Form Kelas')

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
            <label for="level">Level</label>
            <select name="level" id="level"
                class="form-control" style="width:20%;">
                <option value="ksr" >
                    Kasir</option>
                <option value="mnj">
                    Manajer</option>
            </select>
        </div>
        
        
        <input type="submit" class="btn btn-success" name="simpan" value="Simpan">
    </form>
    
@endsection