@extends('main')

@section('title','Jenis')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Jenis</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Jenis</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
            <div class="card">
                <div class="card-header"><h4>List Jenis</h4></div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                            <a href="{{route('jenis.form')}}" class="btn btn-success float-right mb-2">+</a>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Stok</th>
                                <th colspan="2" width=25%>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            <tr>
                                <td>01</td>
                                <td>Minuman</td>
                                <td>30</td>
                               
                            <td><a href="" class="btn btn-warning btn-block">Ubah</a></td>
                            <td><a href="" class="btn btn-danger btn-block">hapus</a></td>
                            </tr>                  
                            <tr>
                                <td>02</td>
                                <td>Makanan</td>
                                <td>20</td>
                                
                            <td><a href="" class="btn btn-warning btn-block">Ubah</a></td>
                            <td><a href="" class="btn btn-danger btn-block">hapus</a></td>
                            </tr>                  
                            <tr>
                                <td>03</td>
                                <td>Lapangan Vinyl</td>
                                <td>1</td>
                               
                            <td><a href="" class="btn btn-warning btn-block">Ubah</a></td>
                            <td><a href="" class="btn btn-danger btn-block">hapus</a></td>
                            </tr>                  
                            <tr>
                                <td>04</td>
                                <td>Lapangan Sintetis</td>
                                <td>1</td>
                               
                            <td><a href="" class="btn btn-warning btn-block">Ubah</a></td>
                            <td><a href="" class="btn btn-danger btn-block">hapus</a></td>
                            </tr>                  
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">Jumlah</td>
                                <td colspan="2">4 Jenis</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
                
</div>
@endsection
