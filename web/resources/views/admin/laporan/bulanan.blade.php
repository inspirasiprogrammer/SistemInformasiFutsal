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
                        <li class="breadcrumb-item active">Bulan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header"><h4>Laporan PerBulan</h4></div>
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
                </div>
                    
                    <thead>
                        <tr>
                            <th>Bulan</th>
                            <th>Jumlah</th>
                            <th width=25%>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Januari</td>
                            <td>87.500.00</td>
                        <td><a href="{{route('laporan.harian')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>Februari</td>
                            <td>87.500.00</td>
                        <td><a href="{{route('laporan.harian')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>Maret</td>
                            <td>87.500.00</td>
                        <td><a href="{{route('laporan.harian')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>April</td>
                            <td>87.500.00</td>
                        <td><a href="{{route('laporan.harian')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>Mei</td>
                            <td>87.500.00</td>
                        <td><a href="{{route('laporan.harian')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>Juni</td>
                            <td>87.500.00</td>
                        <td><a href="{{route('laporan.harian')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>Juli</td>
                            <td>87.500.00</td>
                        <td><a href="{{route('laporan.harian')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>Agustus</td>
                            <td>87.500.00</td>
                        <td><a href="{{route('laporan.harian')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>September</td>
                            <td>87.500.00</td>
                        <td><a href="{{route('laporan.harian')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>Oktober</td>
                            <td>87.500.00</td>
                        <td><a href="{{route('laporan.harian')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>November</td>
                            <td>87.500.00</td>
                        <td><a href="{{route('laporan.harian')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                        <tr>
                            <td>Desember</td>
                            <td>87.500.00</td>
                        <td><a href="{{route('laporan.harian')}}" class="btn btn-info btn-block">Detail</a></td>
                        </tr>              
                                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2">Total</td>
                            <td colspan="2">1.050.000.000</td>
                        </tr>
                    </tfoot>
                    
                </table>
                
            </div>
        </div>
    </section>
</div>

@endsection
