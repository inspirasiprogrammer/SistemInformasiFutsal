@extends('main')

@section('title','Home')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Form Pembelian</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("beli.list") }}">List Pembelian</a></li>
                        <li class="breadcrumb-item active">Form Pembelian</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                        <div class="float-left">12 November 2019</div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                        <div class="float-left">
                            <select class="select2" data-placeholder="Nama Kustomer" style="width: 100%;"  id="kustomer" name="kustomer" onchange="idkustomer()">
                                @foreach ($supplier as $item)
                                        <option value="{{ $item->id }}" >
                                        {{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                        <div class="float-left">10.05 Wib</div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                    </div>
                </div>
                    
                    <thead>
                        <tr>
                            <th style="width:10%;">Id</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th style="width:7%;">@</th>
                            <th>Jumlah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @if (isset($data))
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->item->id }}</td>
                                    <td>{{ $item->item->nama }}</td>
                                    <td>{{ $item->item->beli }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->qty * $item->item->beli}}</td>
                                    
                                   
                                    <td>
                                        <form action="{{ route("beli.destroy",[$item->id]) }}"
                                            method="POST">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-danger btn-block">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach  
                            @endif
                                 
                        <form action="{{ route('beli.store') }}" method="POST" autocomplete="off">
                            @csrf
                        <td><input type="hidden" id="supid" name="supid" value="6">
                                <input type="text" class="form-control " name="idbarang" style="pointer-events: none;" id="idbarang"></td>
                            <td>
                                <div class="form-group">
                                    <select class="select2" data-placeholder="Nama Barang" style="width: 100%;"  id="namabarang" name="namabarang">
                                        @foreach ($barang as $item)
                                            <option value="{{ $item->id }}">
                                            {{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td><input type="text" class="form-control " name="harga" style="pointer-events: none;" id="harga"></td>
                            <td><div class="form-group">
                                    <input type="number" class="form-control" name="qty" id="qty" style="width:100%;" onkeyup="jlhbarang()" disabled>
                                </div></td>
                            <td><input type="text" class="form-control " name="jumlah" style="pointer-events: none;" id="jumlah"></td>
                        <td><button class="btn btn-info btn-block" type="submit" disabled id="tbl">+</button></td>
                        </form>              
                                        
                    </tbody>
                    <tfoot>
                       
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="3">Total</td>
                            <td colspan="2">{{ $jumlah }}</td>
                        </tr>
                    </tfoot>
                    
                </table>
                <form action="{{ route('beli.simpan') }}" method="POST">
                    @csrf
                    <input type="hidden" id="hiddensupplier" name="hiddensupplier" value="6">
                    <button class="btn btn-success" type="submit" id="tblsimpan">Simpan</button>
                </form>
            </div>
        </div>
    </section>
</div>

@endsection

@push('scripts')
 <script>
    $(document).ready(function(){
            $('select#namabarang').change(function(){
                var itemid=$(this).val();
                $.get('/item/beli/'+itemid,function(data)
                {
                    $("input[name='harga']").val(data.beli);
                    $("input[name='namaitem']").val(data.nama);
                },'json');
                document.getElementById("idbarang").value=document.getElementById("namabarang").value
                document.getElementById("qty").disabled=false;
            });
        });
        function idkustomer() {
        document.getElementById("hiddensupplier").value=Number(document.getElementById("kustomer").value);
        }
    function jlhbarang(){
        document.getElementById("jumlah").value=Number(document.getElementById("harga").value)*Number(document.getElementById("qty").value);
        
        document.getElementById("tbl").disabled=false;
    }
    function ubahbanyak(){
        document.getElementById("banyakbarang").value=Number(document.getElementById("banyakitem").value);
    }

    
</script>
@endpush
