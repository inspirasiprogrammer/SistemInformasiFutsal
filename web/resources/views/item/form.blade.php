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
           <div class="card">
                <div class="card-header bg-primary text-white">
                        <h3 class="card-title">Form Item</h3>
                    </div>
               <div class="card-body">
                    <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control " name="nama" style="width:50%;" value="" maxlength="25">
                            
                            </div>
                            <div class="form-group" style="width:50%;">
                                    <label for="jenis">Jenis</label>
                                    <select name="jenis" id="jenis"
                                        class="form-control">
                                        <option value=>
                                        Seragam</option>
                                        <option value=>
                                        Minuman</option>
                                        <option value=>
                                        Makanan</option>
                                    </select>
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
               </div>
           </div>
            
       </section> 
    </div>
    
@endsection