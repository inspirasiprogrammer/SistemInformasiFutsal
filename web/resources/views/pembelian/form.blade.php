@extends('main')

@section('title','Form Pembelian')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Pembelian</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Pembelian</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
            <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="jam">Jam</label>
                        <input type="text" class="form-control " name="jam" style="width:50%;" value="" maxlength="25">
                    
                    </div>
                    <div class="form-group">
                        <label for="kwitansi">Kwitansi</label>
                        <input type="text" class="form-control " name="kwitansi" style="width:50%;" value="" maxlength="25">
                    
                    </div>
                    <div class="form-group">
                        <label for="supplier">Supplier</label>
                        <input type="text" class="form-control " name="supplier" style="width:50%;" value="" maxlength="25">
                    
                    </div>
            
                    <div class="form-group">
                        <label for="total">Total</label>
                        <input type="number" class="form-control " name="total" style="width:50%;" value="" maxlength="15">
                    
                    </div>
                    <input type="submit" class="btn btn-success" name="simpan" value="Simpan">
                </form>
    </section>

</div>
    
    
@endsection