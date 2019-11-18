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
                        <li class="breadcrumb-item"><a href="{{ route("laporan.harian") }}">Hari</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("laporan.jam") }}">Jam</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header"><h4>Detail Laporan</h4></div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    
                    <thead>
                        <tr>
                            <th style="width:10%;">No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>@</th>
                            <th>Diskon</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lapangan A</td>
                            <td>150.000</td>
                            <td>1</td>
                            <td>0.00</td>
                            <td>150.000</td>
                        
                        </tr>              
                        <tr>
                            <td>2</td>
                            <td>Sepatu</td>
                            <td>10.000</td>
                            <td>5</td>
                            <td>0.00</td>
                            <td>50.000</td>
                        
                        </tr>              
                        <tr>
                            <td>3</td>
                            <td>Gatoiret</td>
                            <td>10.000</td>
                            <td>10</td>
                            <td>0.00</td>
                            <td>100.000</td>
                        
                        </tr>              
                                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">Total</td>
                            <td colspan="2">300.000</td>
                        </tr>
                    </tfoot>
                    
                </table>
            </div>
        </div>
    </section>
</div>

@endsection
