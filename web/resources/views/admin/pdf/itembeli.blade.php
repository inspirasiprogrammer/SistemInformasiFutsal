<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pembelian</title>
    <style>
        table {
            width: 100%;
        }
        table.bordered {
            border-collapse: collapse;
            width : 100%;
        }
        table.bordered td {
            border: 1px solid black;
            padding: 5px;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Laporan Pembelian {{ $data[0]->nama_item}}</h1>
<table>
    <tr><td>Dari Tanggal</td><td>:</td><td>{{ $detail["daritanggal"] }}</td>
    <td>Sampai Tanggal</td><td>:</td><td>{{ $detail["sampaitanggal"] }}</td></tr>
</table>
<br>
<table class="bordered">
    <thead>
        <tr>
            <td>No.</td>
            <td>ID Beli</td>
            <td>Waktu</td>
            <td>Qty</td>
            <td>Total</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->beli_id}}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->qty }}</td>
                <td>{{ $item->total }}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="3">Total</td>
            <td>{{ $banyak }}</td>
            <td>{{ $jumlah }}</td>
        </tr>
    </tbody>
    </table>
</body>
</html>