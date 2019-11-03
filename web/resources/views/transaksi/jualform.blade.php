@extends('karyawan.main')

@section('title','Home')

@section('content')
<div class="card">
    <div class="card-header"><h4>List Penjualan</h4></div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
                <div href="" class="float-left mb-2">12 November 2019</div>
                <div href="" class="float-right mb-2">Panca</div>
                <br>
                <div href="" class="mb-2">01</div><br>
                <div href="" class="mb-2">10.05</div>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>@</th>
                    <th>Diskon</th>
                    <th>Jumlah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lapangan A</td>
                    <td>120.000</td>
                    <td>1</td>
                    <td>0.00</td>
                    <td>120.000</td>
                <td><a href="" class="btn btn-danger btn-block">X</a></td>
                </tr>                  
                <tr>
                    <td>Gatorite</td>
                    <td>10.000</td>
                    <td>12</td>
                    <td>0.00</td>
                    <td>120.000</td>
                <td><a href="" class="btn btn-danger btn-block">X</a></td>
                </tr>                  
                                
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4"></td>
                    <td colspan="2">Total</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td colspan="2">240.000</td>
                </tr>
            </tfoot>
            
        </table>
        <a href="" class="btn btn-success">Bayar</a>
    </div>
</div>
@endsection
