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
                        <div class="float-left">Naiki</div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                        <div class="float-left"><input type="text" placeholder="Kwitansi"></div>
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
                            <th style="width:7%;">@</th>
                            <th style="width:10%;">Diskon</th>
                            <th>Jumlah</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12</td>
                            <td>Baju</td>
                            <td>40.000</td>
                            <td>20</td>
                            <td>0.00</td>
                            <td>800.000</td>
                        <td><a href="" class="btn btn-danger btn-block">X</a></td>
                        </tr>                  
                        <tr>
                            <td>13</td>
                            <td>Celana</td>
                            <td>30.000</td>
                            <td>20</td>
                            <td>0.00</td>
                            <td>600.000</td>
                        <td><a href="" class="btn btn-danger btn-block">X</a></td>
                        </tr>                  
                        <tr>
                            <td>
                                <div class="form-group">
                                    <select class="select2" multiple="multiple" data-placeholder="Id Barang" style="width: 100%;">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                      <option>6</option>
                                      <option>7</option>
                                    </select>
                                  </div></td>
                            <td>
                                <div class="form-group">
                                    <select class="select2" multiple="multiple" data-placeholder="Nama Barang" style="width: 100%;">
                                        <option>Celana</option>
                                        <option>Gatorite</option>
                                        <option>Lapangan A</option>
                                        <option>Lapangan B</option>
                                        <option>Sepatu</option>
                                        <option>Seragam</option>
                                        <option>Pokari Set</option>
                                    </select>
                                </div>
                            </td>
                            <td></td>
                            <td><div class="form-group">
                                    <input type="number" style="width:100%;">
                                </div></td>
                            <td></td>
                            <td></td>
                        <td><a href="" class="btn btn-danger btn-block">+</a></td>
                        </tr>                  
                                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">Pajak</td>
                            <td>
                                <input type="text" placeholder="%" style="width:100%;">
                            </td>
                            <td colspan="2">0</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">Diskon</td>
                            <td>
                                <input type="text" placeholder="%" style="width:100%;">
                            </td>
                            <td colspan="2">0</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="3">Total</td>
                            <td colspan="2">1.400.000</td>
                        </tr>
                    </tfoot>
                    
                </table>
                <a href="" class="btn btn-success">Simpan</a>
            </div>
        </div>
    </section>
</div>

@endsection
