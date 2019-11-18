@extends('admin.main')

@section('title','Akun')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Akun</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Akun</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header"><h4>List Akun</h4></div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                        <a href="{{route('admin.form')}}" class="btn btn-success float-right mb-2">+</a>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Level</th>
                            <th colspan="2" width=25%>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Admin</td>
                            <td>Admin</td>
                            <td>Admin@gmail.com</td>
                            <td>0812134111111</td>
                            <td>Admin</td>
                            <td><a href="" class="btn btn-warning btn-block">Ubah</a></td>
                            <td><a href="" class="btn btn-danger btn-block">hapus</a></td>  
                        </tr>
                        <tr>
                            <td>Kasir</td>
                            <td>Kasir</td>
                            <td>Kasir@gmail.com</td>
                            <td>0812134545563</td>
                            <td>Kasir</td>
                            <td><a href="" class="btn btn-warning btn-block">Ubah</a></td>
                            <td><a href="" class="btn btn-danger btn-block">hapus</a></td>  
                        </tr>
                        <tr>
                            <td>Fredi</td>
                            <td>FrediCancau</td>
                            <td>fredicancau@gmail.com</td>
                            <td>0812134578443</td>
                            <td>Customer</td>
                            <td><a href="" class="btn btn-warning btn-block">Ubah</a></td>
                            <td><a href="" class="btn btn-danger btn-block">hapus</a></td>  
                        </tr>
                                                     
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">Jumlah Akun</td>
                            <td colspan="2"> 3 Akun</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>

</div>


@endsection
