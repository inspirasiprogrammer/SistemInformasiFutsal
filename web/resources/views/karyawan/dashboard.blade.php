@extends('karyawan.main')

@section('title','Home')

@section('content')
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="card box-shadow" style="margin:20px 50px; ">
                <a href="" class="btn btn-success btn-block" style="line-height:60px; height:80px; font-size:20px;">Transaksi</a>
            </div>          
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="card box-shadow" style="margin:20px 50px; ">
                <a href="{{route('item.list')}}" class="btn btn-success btn-block" style="line-height:60px; height:80px; font-size:20px;">Item</a>
            </div>          
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="card box-shadow" style="margin:20px 50px; ">
                <a href="" class="btn btn-success btn-block" style="line-height:60px; height:80px; font-size:20px;">Customer</a>
            </div>          
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="card box-shadow" style="margin:20px 50px; ">
                <a href="" class="btn btn-success btn-block" style="line-height:60px; height:80px; font-size:20px;">Lapangan</a>
            </div>          
        </div>
        
    </div>
@endsection
