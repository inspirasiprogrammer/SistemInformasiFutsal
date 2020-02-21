@extends('main')

@section('title','Laporan Kerja per Deadline')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Laporan Pembelian</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Pembelian</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header bg-warning">
                <h3 class="card-title">Report Dialog</h3>
            </div>
            <div class="card-body">
                <form action="{{ route("report.semuabeli") }}" method="GET" class="row">
                    <div class="form-group col-md-6">
                        <label for="daritanggal">Dari Tanggal</label>
                        <input type="date" class="form-control"
                            name="daritanggal"
                            value="{{ isset($_GET["daritanggal"])?$_GET["daritanggal"]:"" }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sampaitanggal">Sampai Tanggal</label>
                        <input type="date" class="form-control"
                            name="sampaitanggal"
                            value="{{ isset($_GET["sampaitanggal"])?$_GET["sampaitanggal"]:"" }}">
                    </div>
                    <div class="form-group col-md-6 offset-md-6">
                        <button class="btn btn-success btn-block mt-auto">
                            Generate</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Preview</h3>
            </div>
            <div class="card-body">
                @if ($data->count() > 0 )
                    <a href="{{ url("laporan/semuabeli?jenis=pdf&".$_SERVER["QUERY_STRING"]) }}"
                        class="btn btn-danger float-right mb-2" target="_blank">
                        <i class="fa fa-print"></i> Cetak
                    </a>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Supllier</td>
                            <td>Tanggal</td>
                            <td>Jumlah</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_supplier }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->jumlah }}</td>
                        </tr>
                    @endforeach
                        <tr>
                            <td colspan="3">Total</td>
                            <td>{{ $total }}</td>
                        </tr>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
