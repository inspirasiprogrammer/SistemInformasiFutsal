@extends('main')

@section('title','Form Supplier')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-6"><h1>Supplier</h1></div>
                    <div class="col-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                            <li class="breadcrumb-item active">List Supplier</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

       <section class="content">  
           <div class="card">
                <div class="card-header bg-primary text-white">
                        <h3 class="card-title">Form Supplier</h3>
                    </div>
               <div class="card-body">
                <form action={{ isset($data)
                    ?route("supplier.update",[$data->id])
                    :route("supplier.store") }}
    method="POST" autocomplete="off">
    @csrf
    @if (isset($data))
        @method("PUT")
    @endif
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text"
            class="form-control @error("nama") is-invalid @enderror"
            name="nama" value='{{ (isset($data)?$data->nama:old("nama")) }}'>
        @error("nama")
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text"
            class="form-control @error("alamat") is-invalid @enderror"
            name="alamat" value='{{ isset($data)?$data->alamat:old("alamat") }}'>
        @error("alamat")
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="telepon">Telepon</label>
        <input type="text"
            class="form-control @error("telepon") is-invalid @enderror"
            name="telepon" value='{{ isset($data)?$data->telepon:old("telepon") }}'>
        @error("telepon")
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
   
    <div class="form-group float-right">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-save"></i> Simpan
        </button>
        <a href="{{ route("supplier.index") }}" class="btn btn-danger">
            <i class="fa fa-arrow-left"></i> Batal
        </a>
    </div>
</form>
               </div>
           </div>
            
       </section> 
    </div>
    
@endsection