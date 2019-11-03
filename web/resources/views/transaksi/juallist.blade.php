@extends('karyawan.main')

@section('title','Home')

@section('content')
<div class="card">
    <div class="card-header"><h4>List Penjualan</h4></div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
                <a href="{{route('jual.form')}}" class="btn btn-success float-right mb-2">+</a>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Waktu</th>
                    <th>Customer</th>
                    <th>Jumlah</th>
                    <th colspan="2" width=25%>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>08.00</td>
                    <td></td>
                    <td>120.000</td>
                   
                <td><a href="" class="btn btn-warning btn-block">Ubah</a></td>
                <td><a href="" class="btn btn-danger btn-block">Hapus</a></td>
                </tr>                  
                <tr>
                    <td>02</td>
                    <td>08.05</td>
                    <td>Dennis</td>
                    <td>150.000</td>
                   
                <td><a href="" class="btn btn-warning btn-block">Ubah</a></td>
                <td><a href="" class="btn btn-danger btn-block">Hapus</a></td>
                </tr>                  
                <tr>
                    <td>03</td>
                    <td>09.00</td>
                    <td>TeamBuaya</td>
                    <td>130.000</td>
                   
                <td><a href="" class="btn btn-warning btn-block">Ubah</a></td>
                <td><a href="" class="btn btn-danger btn-block">Hapus</a></td>
                </tr>                  
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">Jumlah Item</td>
                    <td colspan="2">3 Item</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
