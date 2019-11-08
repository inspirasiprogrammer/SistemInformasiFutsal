@extends('main')

@section('title','Home')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Customer</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Customer</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header"><h4>list customer</h4></div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                        <a href="{{route('customer.form')}}" class="btn btn-success float-right mb-2">+</a>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Telepon</th>
        
                            <th colspan="2" width=25%>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>Fredi</td>
                        <td>FrediCancau</td>
                        <td>fredicancau@gmail.com</td>
                        <td>0812134578443</td>
                        <td><a href="" class="btn btn-warning btn-block">Ubah</a></td>
                        <td><a href="" class="btn btn-danger btn-block">hapus</a></td>                               
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">Jumlah Customer</td>
                            <td colspan="2"> Customer</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>

</div>


@endsection
