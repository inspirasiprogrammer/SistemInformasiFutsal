@extends('admin.main')

@section('title','Home')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Laporan</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">Tahun</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header"><h4>Laporan Pendapatan</h4></div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                        
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Jumlah</th>
                            <th width=25%>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>2018</td>
                            <td>1.050.000.000</td>
                           
                        <td><a href="{{route('laporan.bulanan')}}" class="btn btn-warning btn-block">Detail</a></td>
                        
                        </tr>                    
                        <tr>
                            <td>02</td>
                            <td>2019</td>
                            <td>1.200.300.000</td>
                           
                        <td><a href="{{route('laporan.bulanan')}}" class="btn btn-warning btn-block">Detail</a></td>
                        
                        </tr>                    
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">Jumlah Pendapatan</td>
                            <td colspan="2">2.250.300.000</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>

@endsection
