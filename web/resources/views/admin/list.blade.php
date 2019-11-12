@extends('admin.main')

@section('title','List Akun')

@section('content')
<div class="card">
    <div class="card-header"><h4>Data Akun</h4></div>
    <div class="card-body">
        <div class="float-right mb-2">
            <a href="{{ route("admin.form") }}" class="btn btn-success">
                <i class="fa fa-plus"></i>
            </a>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Level</th>
                    <th>Email</th>
                    <th colspan="2" width=25%>Action</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    {{-- @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->level=='a'?'Admin':'Kasir' }}</td>
                            <td>{{ $item->email }}</td>
                            <td><a href="" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i>Ubah</a></td>
                            <td>
                                <form action="" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-block">
                                            <i class="fa fa-trash">Hapus</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach --}}
                        <tr>
                            <td>Admin</td>
                            <td>Admin</td>
                            <td>admin@gmail.com</td>
                            <td><a href="" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i>Ubah</a></td>
                            <td>
                                <form action="" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-block">
                                            <i class="fa fa-trash">Hapus</i>
                                    </button>
                                </form>
                            </td>
                                
                        </tr>
                        <tr>
                                <td>Kasir</td>
                                <td>Kasir</td>
                                <td>kasir@gmail.com</td>
                                <td><a href="" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i>Ubah</a></td>
                                <td>
                                    <form action="" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-block">
                                                <i class="fa fa-trash">Hapus</i>
                                        </button>
                                    </form>
                                </td>
                        </tr>
                        <tr>
                                <td>Manajer</td>
                                <td>Manajer</td>
                                <td>manajer@gmail.com</td>
                                <td><a href="" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i>Ubah</a></td>
                                <td>
                                    <form action="" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-block">
                                                <i class="fa fa-trash">Hapus</i>
                                        </button>
                                    </form>
                                </td>
                        </tr>
                </tr>                 
            </tbody>
            {{-- <tfoot>
                <tr>
                    <td colspan="4">Jumlah Akun</td>
                    <td colspan="2"> 2 Akun</td>
                </tr>
            </tfoot> --}}
        </table>
    </div>
</div>
@endsection