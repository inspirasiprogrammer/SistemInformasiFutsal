@extends('main')

@section('title','Lapangan')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Lapangan</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Lapangan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title">List Lapangan</h4>
            </div>
            <div class="card-body">
                <h5>12 Januari 2020</h5>
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-6 col-sm-12 col-xs-12"  style="">
                            <table class="table table-bordered table-striped">
                                <h5>Lapangan A</h5>
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
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-success btn-block">Booked</a></td>
                                        <td>Deni</td>
                                    </tr>                                    
                                    <tr>
                                        <td>09.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>10.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>11.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>12.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>13.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>14.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>15.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>16.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>17.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>18.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>19.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>20.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>21.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>22.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12"  style="">
                            <table class="table table-bordered table-striped">
                                <h5>Lapangan B</h5>
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
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-warning btn-block">Pending</a></td>
                                        <td>Deni</td>
                                    </tr>                                    
                                    <tr>
                                        <td>09.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>10.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>11.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>12.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>13.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>14.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>15.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>16.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>17.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>18.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>19.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>20.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>21.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
                                        <td></td>
                                    </tr>                                    
                                    <tr>
                                        <td>22.00</td>
                                        <td><a href="{{route("lapangan.form")}}" class="btn btn-primary btn-block">Kosong</a></td>
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
    </section>
</div>

@endsection
