@extends('main')

@section('title','Home')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Penjualan</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Penjualan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @csrf
                
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <label for="total">Total</label>
                    <input type="number" class="form-control " name="total" id="total" style="width:50%; pointer-events: none;" value="220000">
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <label for="kembalian">Kembalian</label>
                    <input type="number" class="form-control " name="kembalian" id="kembalian" style="width:50%; pointer-events: none;" value="30000">
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12"  style="margin-bottom:50px;">
                    <label for="bayar">Bayar</label>
                    <input type="text" class="form-control " name="bayar" id="bayar" style="width:50%;" >
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12"  style="margin-bottom:50px;">
                    
                </div>
                <div class="col-md-3" style="margin-bottom:20px;">
                    <div class="card box-shadow">
                        <a href="" class="btn btn-primary btn-block">100000</a>
                    </div>          
                </div>
                <div class="col-md-3" style="margin-bottom:20px;">
                    <div class="card box-shadow">
                        <a href="" class="btn btn-primary btn-block">20000</a>
                    </div>          
                </div>
                <div class="col-md-3" style="margin-bottom:20px;">
                    <div class="card box-shadow">
                        <a href="" class="btn btn-primary btn-block" onclick="testing()">5000</a>
                    </div>          
                </div>
                <div class="col-md-3" style="margin-bottom:20px;">
                    <div class="card box-shadow">
                        <a href="" class="btn btn-primary btn-block">1000</a>
                    </div>          
                </div>
        
                <div class="col-md-3">
                    <div class="card box-shadow">
                        <a href="" class="btn btn-primary btn-block">50000</a>
                    </div>          
                </div>
                <div class="col-md-3">
                    <div class="card box-shadow">
                        <a href="" class="btn btn-primary btn-block">10000</a>
                    </div>          
                </div>
                <div class="col-md-3">
                    <div class="card box-shadow">
                        <a href="" class="btn btn-primary btn-block">2000</a>
                    </div>          
                </div>
                <div class="col-md-3">
                    <div class="card box-shadow">
                        <a href="" class="btn btn-primary btn-block">500</a>
                    </div>          
                </div>
        
                <div class="col-md-6 col-sm-12 col-xs-12"  style="">
                    <input type="submit" class="btn btn-success" name="simpan" style="margin-top:35px;" value="Simpan">
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12"  style="">
                <input type="submit" class="btn btn-success" name="ulang" style="margin-top:35px;" value="Ulang">
                </div>
                
            
            
                
            </div>
        </div>
    </section>
</div>
    
@endsection
@section('script')
 <script>
 function testing() {
        document.getElementById("bayar").innerHTML='5000';
      }</script>
@endsection
