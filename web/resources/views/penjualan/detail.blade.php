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
            <div class="col-md-6 col-sm-12 col-xs-12">
                <input type="hidden" name="bayar" id="bayar" value="0">
            </div>
           
            <div class="card-body">
                    <table class="table table-bordered table-striped" id="tabeldetail">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                                <div class="float-left">12 November 2019</div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                                <div class="float-left">
                                    Panca
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                                <div class="float-left">01</div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                                <input type="hidden" name="namaitem" id="namaitem">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                                <div class="float-left">10.05 Wib</div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                            <input type="hidden" name="iditem" id="iditem" value="{{$row}}">
                            </div>
                        </div>
                            
                            <thead>
                                <tr>
                                    <th style="width:10%;">Id</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th style="width:9%;">@</th>
                                    <th>Diskon</th>
                                    <th>Jumlah</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>                
                                <tr>
                                    @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->item->id }}</td>
                                <td>{{ $item->item->nama }}</td>
                                <td>{{ $item->item->jual }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>0.00</td>
                                <td>{{ $item->qty * $item->item->jual}}</td>
                                
                                <td><a href="{{ route("jual.show",[$item->id]) }}" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i> Rubah</a></td>
                                <td>
                                    <form action="{{ route("jual.destroy",[$item->id]) }}"
                                        method="POST">
                                        @method("delete")
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-danger btn-block">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                                    <form action="{{ route('jual.store') }}" method="POST" autocomplete="off">
                                        @csrf
                                        <td><input type="text" class="form-control " name="idbarang" style="pointer-events: none;" id="idbarang"></td>
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
                                        <td><input type="text" class="form-control " name="diskon" style="pointer-events: none;" id="diskon"></td>
                                        <td><input type="text" class="form-control " name="jumlah" style="pointer-events: none;" id="jumlah"></td>
                                    <td colspan="2"><button class="btn btn-info btn-block" type="submit" disabled id="tbl">+</button></td>
                                    </form>
                                    
                                
                                </tr>                  
                                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6">Total</td>
                                    <td colspan="2">{{ $jual->jumlah }}</td>
                                </tr>
                            </tfoot>
                            
                        </table>
                        <a href="{{ route("jual.bayar") }}" class="btn btn-success">Bayar</a>
               
                
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
            $.get('/item/jual/'+itemid,function(data)
            {
                $("input[name='harga']").val(data.jual);
                $("input[name='namaitem']").val(data.nama);
            },'json');
            document.getElementById("idbarang").value=document.getElementById("namabarang").value
            document.getElementById("qty").disabled=false;
        });
    });
    // function addrow() {
    // document.getElementById("idbarang").value=23;
    // document.getElementById("harga").value=10000;
    // document.getElementById("qty").disabled=false;
    // }
function jlhbarang(){
    document.getElementById("jumlah").value=Number(document.getElementById("harga").value)*Number(document.getElementById("qty").value);
    
    document.getElementById("diskon").value='0.00';
    document.getElementById("tbl").disabled=false;
}
function tambah(){
    var table = document.getElementById("tabeldetail");
// inisialisasi row
var row = table.insertRow(Number(document.getElementById("iditem").value));
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
var cell7 = row.insertCell(6);
var cell8 = row.insertCell(7);

// input isi row 
cell1.innerHTML = document.getElementById("idbarang").value;
cell2.innerHTML = document.getElementById("namaitem").value;
cell3.innerHTML = document.getElementById("harga").value; 
cell4.innerHTML = document.getElementById("qty").value; 
cell5.innerHTML = document.getElementById("diskon").value; 
cell6.innerHTML = document.getElementById("jumlah").value; 
cell7.innerHTML = '<a href="" class="btn btn-info btn-block">Edit</a>'; 
cell8.innerHTML = '<a href="" class="btn btn-danger btn-block">Delete</a>'; 
document.getElementById("total").value=Number(document.getElementById("total").value) + Number(document.getElementById("jumlah").value);
document.getElementById("iditem").value=Number(document.getElementById("iditem").value) +1;

cel1.id=Number(document.getElementById("iditem").value)+100000;
cel2.id=Number(document.getElementById("iditem").value)+200000;
cel3.id=Number(document.getElementById("iditem").value)+300000;
cel4.id=Number(document.getElementById("iditem").value)+400000;
cel5.id=Number(document.getElementById("iditem").value)+500000;
cel6.id=Number(document.getElementById("iditem").value)+600000;
cel7.id=Number(document.getElementById("iditem").value)+700000;
cel8.id=Number(document.getElementById("iditem").value)+800000;

// default
document.getElementById("idbarang").value=0;
document.getElementById("namaitem").value=0; 
document.getElementById("harga").value=0; 
document.getElementById("qty").value=0; 
document.getElementById("diskon").value=0; 
document.getElementById("jumlah").value=0; 
document.getElementById("qty").disabled=true;
document.getElementById("tbl").disabled=true;
}
      </script>
@endpush
