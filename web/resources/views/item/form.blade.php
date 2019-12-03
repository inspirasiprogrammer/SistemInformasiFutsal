@extends('main')

@section('title','Form Item')

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
                <form action={{ isset($data)
                    ?route("item.update",[$data->id])
                    :route("item.store") }}
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
        <label for="stok">Stok</label>
        <input type="text"
            class="form-control @error("stok") is-invalid @enderror"
            name="stok" value='{{ isset($data)?$data->stok:old("stok") }}'>
        @error("stok")
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="jenis_id">Jenis</label>
        <select name="jenis_id" id="jenis_id" class="form-control">
            @foreach ($jenis as $item)
                <option value="{{ $item->id }}"
                    {{ isset($data) && $data->jenis_id==$item->id?"selected":"" }}
                    >{{ $item->nama }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="satuan">Satuan</label>
        <input type="satuan"
            class="form-control @error("satuan") is-invalid @enderror"
            name="satuan" value='{{ isset($data)?$data->satuan:old("satuan") }}'>
        @error("satuan")
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="jual">Jual</label>
        <input type="satuan"
            class="form-control @error("jual") is-invalid @enderror"
            name="satuan" value='{{ isset($data)?$data->satuan:old("jual") }}'>
        @error("jual")
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="beli">Beli</label>
        <input type="beli"
            class="form-control @error("beli") is-invalid @enderror"
            name="beli" value='{{ isset($data)?$data->satuan:old("beli") }}'>
        @error("beli")
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
   
    <div class="form-group float-right">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-save"></i> Simpan
        </button>
        <a href="{{ route("item.index") }}" class="btn btn-danger">
            <i class="fa fa-arrow-left"></i> Batal
        </a>
    </div>
</form>
               </div>
           </div>
            
       </section> 
    </div>
    
@endsection