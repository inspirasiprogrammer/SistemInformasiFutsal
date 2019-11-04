@extends('karyawan.main')

@section('title','Home')

@section('content')
<div class="card">
    <div class="card-header"><h4>List Lapangan</h4></div>
    <div class="card-body">
        <h4>12 Januari 2020</h4>
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
@endsection
