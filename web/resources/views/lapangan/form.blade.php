@extends('karyawan.main')

@section('title','Form Item')

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="customer">Customer</label>
            <input type="text" class="form-control " name="customer" style="width:50%;" value="" maxlength="25">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="">Kosong</option>
                <option value="">Booked</option>
            </select>
        </div>
        <div class="form-group">
            <label for="mode">Mode Bayar</label>
            <select name="mode" class="form-control">
                <option value="">Cash</option>
                <option value="">Debit</option>
                <option value="">Transfer</option>
            </select>
        </div>

        <input type="submit" class="btn btn-success" name="simpan" value="Simpan">
    </form>
    
@endsection