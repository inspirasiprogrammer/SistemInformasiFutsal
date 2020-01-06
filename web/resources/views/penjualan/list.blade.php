@extends('main')

@section('title','Home')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Penjualan</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Penjualan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header"><h4>List Penjualan</h4></div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                        <a href="{{route('jual.create')}}" class="btn btn-success float-right mb-2">+</a>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Customer</th>
                            <th>Jumlah</th>
                            <th width=25%>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>                    
                                <td>{{$item->id}}</td>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->jumlah}}</td>
                                <td><a href="{{route('hapus.jual',[$item->id])}}" class="btn btn-danger btn-block">Hapus</a></td>
                            </tr>
                        @endforeach                  
                                      
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
    </section>
</div>

@endsection
