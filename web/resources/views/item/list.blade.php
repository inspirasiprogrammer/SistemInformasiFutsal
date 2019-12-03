@extends('main')

@section('title','Home')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Item</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Item</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
            <div class="card">
                <div class="card-header"><h4>list Item</h4></div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                            <a href="{{route('item.create')}}" class="btn btn-success float-right mb-2">+</a>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Stok</th>
                                <th>Jenis</th>
                                <th>Satuan</th>
                                <th>Jual</th>
                                <th>Beli</th>
                                <th colspan="2" width=25%>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration + (10*($data->currentPage()-1 )) }}</td>                    
                                <td>{{$item->nama}}</td>
                                <td>{{$item->stok}}</td>
                                <td>{{$item->jenis->nama}}</td>
                                <td>{{$item->satuan}}</td>
                                <td>{{$item->jual}}</td>
                                <td>{{$item->beli}}</td>
                                <td><a href="{{route('item.show',[$item->id])}}" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i>Ubah</a></td>
        
                                <td>
                                <form action="{{route("item.destroy",[$item->id])}}" method="POST">
                                                       
                                @method("DELETE")
                                    @csrf
                                <button type="submit" class="btn btn-danger btn-block">
                                    <i class="fa fa-trash"></i> Hapus
                                </button>
                                </form>
                                </td>
                            </tr>
                                @endforeach
                                  
                                    
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">Jumlah Item</td>
                                <td colspan="2">2 Item</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
                
</div>
@endsection
