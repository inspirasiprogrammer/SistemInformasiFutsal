@extends('main')

@section('title','Akun Baru')

@section('content')
<div class="content-wrapper">
    <div class="content">
                
                    <div class="card">
                        <div class="card-body register-card-body">
                            <form action={{ isset($data)
                                ?route("user.update",[$data->id])
                                :route("user.store") }}
                                method="POST" autocomplete="off">
                            @csrf
                            @if (isset($data))
                                @method("PUT")
                            @endif
                                <div class="input-group mb-3">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value='{{ (isset($data)?$data->name:old("name")) }}' placeholder="Full name">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                    @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                                @if (Auth::user()->level=='k')
                                <div class="form-group">
                                    <input type="text" class="form-control " name="level" id="level" 
                                    style="pointer-events: none;" value="c" placeholder="Customer"> 
                                </div>
                                @else 
                                <div class="form-group">
                                    <label for="level">Level</label>
                                    <select name="level" id="level"
                                        class="form-control">
                                        <option value="a">
                                        Admin</option>
                                        <option value="m">
                                        Manajer</option>
                                        <option value="k" >
                                        Kasir</option>
                                    </select>
                                </div>
                                @endif
                                
                                
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value='{{ (isset($data)?$data->email:old("email")) }}' placeholder="Email">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                    <div class="col-4">
                                            <button type="submit" class="btn btn-success">
                                                    <i class="fa fa-save"></i> Simpan
                                                </button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                
                        </div>
                        <!-- /.form-box -->
                    </div><!-- /.card -->
    </div>
</div>

<!-- /.register-box -->
@endsection
