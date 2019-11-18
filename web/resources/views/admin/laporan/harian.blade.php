@extends('admin.main')

@section('title','Laporan Bulanan')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Laporan</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("laporan.tahunan") }}">Tahun</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("laporan.bulanan") }}">Bulan</a></li>
                        <li class="breadcrumb-item active">Tanggal</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header"><h4>Laporan Perhari</h4></div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px; width:10%;">
                            <div class="form-group">
                                    <select class="select2" multiple="multiple" data-placeholder="Tahun" style="width: 25%;">
                                      <option selected>2018</option>
                                      <option>2019</option>
                                    </select>
                                  </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px; width:10%;">
                            <div class="form-group">
                                    <select class="select2" multiple="multiple" data-placeholder="Bulan" style="width: 25%;">
                                      <option selected>Januari</option>
                                      <option>Februari</option>
                                      <option>Maret</option>
                                      <option>April</option>
                                      <option>Mei</option>
                                      <option>Juni</option>
                                      <option>Juli</option>
                                      <option>Agustus</option>
                                      <option>September</option>
                                      <option>Oktober</option>
                                      <option>November</option>
                                      <option>Desember</option>
                                    </select>
                                  </div>
                    </div>
                </div>
                    
                    <thead>
                        <tr>
                            <th style="width:10%;">Tanggal</th>
                            <th>Jumlah</th>
                            <th width=25%>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2.900.000</td>
                        <td><a href="{{route('laporan.jam')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>1</td>
                            <td>2.900.000</td>
                        <td><a href="{{route('laporan.jam')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>1</td>
                            <td>2.900.000</td>
                        <td><a href="{{route('laporan.jam')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>1</td>
                            <td>2.900.000</td>
                        <td><a href="{{route('laporan.jam')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>1</td>
                            <td>2.900.000</td>
                        <td><a href="{{route('laporan.jam')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>1</td>
                            <td>2.900.000</td>
                        <td><a href="{{route('laporan.jam')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>1</td>
                            <td>2.900.000</td>
                        <td><a href="{{route('laporan.jam')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>1</td>
                            <td>2.900.000</td>
                        <td><a href="{{route('laporan.jam')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>1</td>
                            <td>2.900.000</td>
                        <td><a href="{{route('laporan.jam')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>1</td>
                            <td>2.900.000</td>
                        <td><a href="{{route('laporan.jam')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2">Total</td>
                            <td colspan="2">87.500.000</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2"><a href="" class="btn btn-success">1</a><a href="" class="btn btn-white">2</a><a href="" class="btn btn-white">3</a><a href="" class="btn btn-white">4</a></td>
                        </tr>
                    </tfoot>
                    
                </table>
            </div>
        </div>
    </section>
</div>

@endsection
