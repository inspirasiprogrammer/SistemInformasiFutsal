@extends('karyawan.main')

@section('title','Home')

@section('content')
    <div style="margin-bottom: 50px"></div>
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
<<<<<<< HEAD
            <div class="card box-shadow" style="margin:20px 50px; ">
                <a href="{{route ('customer.list')}}" class="btn btn-success btn-block" style="line-height:60px; height:80px; font-size:20px;">Customer</a>
=======
            <div class="card box-shadow" style="margin:60px 50px; ">
                <a href="" class="btn btn-success btn-block" style="line-height:60px; height:80px; font-size:20px;">Customer</a>
>>>>>>> c99f8bde03e4de8ffe09a4bf694650b7a4c3f1a1
            </div>          
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="card box-shadow" style="margin:60px 50px; ">
                <a href="" class="btn btn-success btn-block" style="line-height:60px; height:80px; font-size:20px;">Lapangan</a>
            </div>          
        </div>
        
    </div>
@endsection
