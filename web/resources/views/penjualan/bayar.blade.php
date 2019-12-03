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
                    <input type="number" class="form-control " name="kembalian" id="kembalian" style="width:50%; pointer-events: none;">
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12"  style="margin-bottom:50px;">
                    <label for="bayar">Bayar</label>
                    <input type="text" class="form-control " name="bayar" id="bayar" style="width:50%;" value='0'>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12"  style="margin-bottom:50px;">
                    
                </div>
                <div class="col-md-3" style="margin-bottom:20px;">
                    <div class="card box-shadow">
                        <button class="btn btn-primary btn-block" onClick="testing(100000)">100000</button>
                    </div>          
                </div>
                <div class="col-md-3" style="margin-bottom:20px;">
                    <div class="card box-shadow">
                        <button class="btn btn-primary btn-block" onClick="testing(20000)">20000</button>
                    </div>          
                </div>
                <div class="col-md-3" style="margin-bottom:20px;">
                    <div class="card box-shadow">
                        <button class="btn btn-primary btn-block" onClick="testing(5000)">5000</button>
                    </div>          
                </div>
                <div class="col-md-3" style="margin-bottom:20px;">
                    <div class="card box-shadow">
                        <button class="btn btn-primary btn-block" onClick="testing(1000)">1000</button>
                    </div>          
                </div>
        
                <div class="col-md-3">
                    <div class="card box-shadow">
                        <button class="btn btn-primary btn-block" onClick="testing(50000)">50000</button>
                    </div>          
                </div>
                <div class="col-md-3">
                    <div class="card box-shadow">
                        <button class="btn btn-primary btn-block" onClick="testing(10000)">10000</button>
                    </div>          
                </div>
                <div class="col-md-3">
                    <div class="card box-shadow">
                        <button class="btn btn-primary btn-block" onClick="testing(2000)">2000</button>
                    </div>          
                </div>
                <div class="col-md-3">
                    <div class="card box-shadow">
                        <button class="btn btn-primary btn-block" onClick="testing(500)">500</button>
                    </div>          
                </div>
        
                <div class="col-md-6 col-sm-12 col-xs-12"  style="">
                    <input type="submit" class="btn btn-success" name="simpan" style="margin-top:35px;" value="Simpan">
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12"  style="">
                {{-- <input type="submit" class="btn btn-success" name="ulang" style="margin-top:35px;" value="Ulang"> --}}
                <button class="btn btn-success" onClick="ulang()" style="margin-top:35px;">Ulang</button>
                </div>
                
            
            
                
            </div>
        </div>
    </section>
</div>
    
@endsection
@section('script')
 <script>
 function testing(nilai) {
        document.getElementById("bayar").value=Number(document.getElementById("bayar").value)+Number(nilai);
        document.getElementById("kembalian").value=Number(document.getElementById("bayar").value)-Number(document.getElementById("total").value);
      }
    function ulang(){
        document.getElementById("bayar").value=0;
        document.getElementById("kembalian").value=0
    }
      </script>
@endsection
