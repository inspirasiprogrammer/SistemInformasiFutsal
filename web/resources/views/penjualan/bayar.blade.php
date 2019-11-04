@extends('karyawan.main')

@section('title','Home')

@section('content')
    <div class="row">
        @csrf
        
        <div class="col-md-6 col-sm-12 col-xs-12">
            <label for="total">Total</label>
            <input type="text" class="form-control " name="total" style="width:50%; pointer-events: none;" value="220000">
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <label for="kembalian">Kembalian</label>
            <input type="text" class="form-control " name="kembalian" style="width:50%; pointer-events: none;" value="30000">
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12"  style="margin-bottom:50px;">
            <label for="bayar">Bayar</label>
            <input type="text" class="form-control " name="bayar" style="width:50%; pointer-events: none;" value="250000">
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
                <a href="" class="btn btn-primary btn-block">5000</a>
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
@endsection
