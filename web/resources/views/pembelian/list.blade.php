@extends('main')

@section('title','Home')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Pembelian</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Pembelian</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
<section class="content">
    <div class="card">
        <div class="card-header"><h4>List Pembelian</h4></div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <a href="{{ route('beli.form') }}" class="btn btn-success float-right mb-2">+</a>
            </div>
        <thead>
            <tr>
                <th>Id</th>
                <th>Tanggal</th>
                <th>Kwitansi</th>
                <th>Supplier</th>
                <th>Total</th>
                <th colspan="2" width=25%>Action</th>
            </tr>
        </thead>

        <tbody>
                <tr>
                    <td>1</td>
                    <td>20.12.19</td>
                    <td>kw-nk-1211</td>
                    <td>Naiki</td>
                    <td>500.000</td>
                               
<td><a href="" class="btn btn-warning btn-block">Ubah</a></td>
<td><a href="" class="btn btn-danger btn-block">hapus</a></td>
                </tr>                 
                <tr>
                    <td>2</td>
                    <td>12.01.20</td>
                    <td>or-ad-0238</td>
                    <td>Adudi</td>
                    <td>2.000.000</td>
                               
<td><a href="" class="btn btn-warning btn-block">Ubah</a></td>
<td><a href="" class="btn btn-danger btn-block">hapus</a></td>
                </tr>                 
        </tbody>

    <tfoot>
        <tr>
            <td colspan="5">Jumlah Pembelian</td>
            <td colspan="2"> Pembelian</td>
        </tr>
    </tfoot>
    </table>
    </div>
</div>
@endsection