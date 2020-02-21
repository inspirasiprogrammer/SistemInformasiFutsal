<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pendapatan</title>
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
<h1>Laporan Pendapatan</h1>
<table>
    <tr><td>Dari Tanggal</td><td>:</td><td>{{ $detail["daritanggal"] }}</td>
    <td>Sampai Tanggal</td><td>:</td><td>{{ $detail["sampaitanggal"] }}</td></tr>
</table>
<br>
<table class="bordered">
        <thead>
            <tr>
                <td>No.</td>
                <td>Customer</td>
                <td>Tanggal</td>
                <td>Jumlah</td>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_customer }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->jumlah }}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="3">Total</td>
            <td>{{ $total }}</td>
        </tr>
        </tbody>
    </table>
</body>
</html>