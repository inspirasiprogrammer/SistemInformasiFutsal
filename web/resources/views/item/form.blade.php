@extends('main')

@section('title','Form Customer')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-6"><h1>Item</h1></div>
                    <div class="col-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                            <li class="breadcrumb-item active">List Item</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

       <section class="content">  
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
       </section> 
    </div>
    
@endsection