@extends('main')

@section('title','Form Jenis')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-6"><h1>Jenis Item</h1></div>
                    <div class="col-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                            <li class="breadcrumb-item active">List Jenis</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

       <section class="content">  
           <div class="card">
                <div class="card-header bg-primary text-white">
                        <h3 class="card-title">Form Jenis</h3>
                    </div>
               <div class="card-body">
                    <form action="{{isset($data)?route("jenis.update",[$data->id]):route("jenis.store")}}" method="POST" autocomplete="off">
                            @csrf
                            @if (isset($data))
                            @method("PUT")
                        @endif
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control " name="nama" style="width:50%;" value="" maxlength="25">
                            
                            </div>
                            
                            <input type="submit" class="btn btn-success" name="simpan" value="Simpan">
                            </form>
               </div>
           </div>
            
       </section> 
    </div>
    
@endsection