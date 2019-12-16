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
                <table class="table table-bordered table-striped" id="tabeldetail">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                        <div class="float-left">12 November 2019</div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                        <div class="float-left">Panca</div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                        <div class="float-left">01</div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
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
                            <th style="width:9%;">@</th>
                            <th>Diskon</th>
                            <th>Jumlah</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>                
                        <tr>
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
                        <td><button class="btn btn-info btn-block" onclick="tambah()" disabled id="tbl">+</button></td>
                        </tr>                  
                                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"></td>
                            <td colspan="2">Total</td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                            <td colspan="2">240.000</td>
                        </tr>
                    </tfoot>
                    
                </table>
                <a href="{{route("jual.bayar")}}" class="btn btn-success">Bayar</a>
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
                $("input[name='harga']").val(data);
            },'json');
        });
    });
    function addrow() {
    document.getElementById("idbarang").value=23;
    document.getElementById("harga").value=10000;
    document.getElementById("qty").disabled=false;
    }
function jlhbarang(){
    document.getElementById("jumlah").value=Number(document.getElementById("harga").value)*Number(document.getElementById("qty").value);
    document.getElementById("diskon").value='0.00';
    document.getElementById("tbl").disabled=false;
}
function tambah(){
    var table = document.getElementById("tabeldetail");
var row = table.insertRow(2);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
var cell7 = row.insertCell(6);
cell1.innerHTML = document.getElementById("idbarang").value;
cell2.innerHTML = document.getElementById("namabarang").value; 
cell3.innerHTML = document.getElementById("harga").value; 
cell4.innerHTML = document.getElementById("qty").value; 
cell5.innerHTML = document.getElementById("diskon").value; 
cell6.innerHTML = document.getElementById("jumlah").value; 
cell7.innerHTML = '<a href="" class="btn btn-danger btn-block">X</a>'; 
document.getElementById("idbarang").value=0;
document.getElementById("namabarang").value=0; 
document.getElementById("harga").value=0; 
document.getElementById("qty").value=0; 
document.getElementById("diskon").value=0; 
document.getElementById("jumlah").value=0; 
}
      </script>
@endpush
