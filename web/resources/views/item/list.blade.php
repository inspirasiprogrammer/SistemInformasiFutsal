@extends('karyawan.main')

@section('title','Home')

@section('content')
<div class="card">
    <div class="card-header"><h4>list item</h4></div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
                <a href="{{route('item.form')}}" class="btn btn-success float-right mb-2">+</a>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Jual</th>
                    <th>Beli</th>
                    <th colspan="2" width=25%>Action</th>
                </tr>
            </thead>
            <tbody>
                
                
                <tr>
                    <td>01</td>
                    <td>Gatorite</td>
                    <td>30</td>
                    <td>10.000</td>
                    <td>5.000</td>
                   
                <td><a href="" class="btn btn-warning btn-block">Ubah</a></td>
                <td><a href="" class="btn btn-danger btn-block">hapus</a></td>
                </tr>                  
                <tr>
                    <td>02</td>
                    <td>Focari Sweat</td>
                    <td>20</td>
                    <td>10.000</td>
                    <td>5.000</td>
                   
                <td><a href="" class="btn btn-warning btn-block">Ubah</a></td>
                <td><a href="" class="btn btn-danger btn-block">hapus</a></td>
                </tr>                  
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">Jumlah Item</td>
                    <td colspan="2">2 Item</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
