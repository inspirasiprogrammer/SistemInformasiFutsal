<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="text-center">
    <div class="container">
        <form action="" method="POST">
            @csrf
            <div class="form-group text-center">
                <label for="todo">Login</label>
                <input type="text" class="form-control" name="todo" placeholder="Username">
            </div>
            <input type="submit" class="btn btn-success " name="simpan" value="Simpan">
        </form>
    </div>
</body>
</html>