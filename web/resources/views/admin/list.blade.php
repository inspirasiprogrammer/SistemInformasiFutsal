@extends('admin.main')

@section('title','List Akun')

@section('content')
<div class="card">
    <div class="card-header"><h4>Data Akun</h4></div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
        <a href="" class="btn btn-success float-right mb-2">+</a>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Email</th>
                    <th colspan="2" width=25%>Action</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>Kasir</td>
                    <td>Kasir</td>
                    <td>Kasir</td>
                    <td>Kasir</td>
                    <td>
                        <a href="" class="btn btn-warning btn-block">Ubah</a>
                    </td>
                <td><a href="" class="btn btn-danger btn-block">Hapus</a></td>
                </tr>                 
                <tr>
                    <td>Admin</td>
                    <td>Admin</td>
                    <td>Admin</td>
                    <td>Admin</td>
                    <td>
                        <a href="" class="btn btn-warning btn-block">Ubah</a>
                    </td>
                <td><a href="" class="btn btn-danger btn-block">Hapus</a></td>
                </tr>                 
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">Jumlah Akun</td>
                    <td colspan="2"> 2 Akun</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection