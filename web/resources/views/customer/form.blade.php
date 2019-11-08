@extends('main')

@section('title','Form Customer')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-6"><h1>Customer</h1></div>
                    <div class="col-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                            <li class="breadcrumb-item active">List Customer</li>
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
           </section>
    </div>
   <section class="content">
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
   </section>
   
    
@endsection