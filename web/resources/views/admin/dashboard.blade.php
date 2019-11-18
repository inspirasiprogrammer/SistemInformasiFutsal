@extends('admin.main')

@section('title','Dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>Penjualan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{route('admin.jual.form')}}" class="small-box-footer">Masuk <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Pembelian</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="{{route('admin.beli.form')}}" class="small-box-footer">Masuk <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>Akun</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('admin.form')}}" class="small-box-footer">Masuk<i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Item</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-cube"></i>
                        </div>
                        <a href="{{route('admin.item.form')}}" class="small-box-footer">Masuk <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="card-title">List Lapangan</h4>
                </div>
                <div class="card-body">
                    <h5 class="font-weight-bold mb-4">12 Januari 2020</h5>
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-md-6 col-sm-12 col-xs-12"  style="">
                                <table class="table table-bordered table-striped">
                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <h5 class="m-0 text-success font-wight-bold">Lapangan A</h5>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5 class="m-0 text-info float-sm-right">Rp 150.000</h5>
                                         </div>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th>Jam</th>
                                            <th>Status</th>
                                            <th>Customer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>08.00</td>
                                            <td><a href="{{route("admin.contoh")}}" class="btn btn-success btn-block">Booked</a></td>
                                            <td>Deni</td>
                                        </tr>                                    
                                        <tr>
                                            <td>09.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>10.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>11.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>12.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>13.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>14.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>15.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>16.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>17.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>18.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>19.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>20.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>21.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>22.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12"  style="">
                                <table class="table table-bordered table-striped">
                                        <div class="row mb-3">
                                                <div class="col-sm-6">
                                                    <h5 class="m-0 text-primary font-wight-bold">Lapangan B</h5>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5 class="m-0 text-info float-sm-right">Rp 125.000</h5>
                                                 </div>
                                            </div>
                                    <thead>
                                        <tr>
                                            <th>Jam</th>
                                            <th>Status</th>
                                            <th>Customer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>08.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-warning btn-block">Pending</a></td>
                                            <td>Deni</td>
                                        </tr>                                    
                                        <tr>
                                            <td>09.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>10.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>11.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>12.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>13.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>14.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>15.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>16.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>17.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>18.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>19.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>20.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>21.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                        <tr>
                                            <td>22.00</td>
                                            <td><a href="{{route("admin.lapangan.sewa")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                            <td></td>
                                        </tr>                                    
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                                </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
