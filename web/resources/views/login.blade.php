<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>

    <style>
   .container{
     margin-top:150px;
   }
   </style>
</head>
<body class="text-center">
    <div class="container">
        <form action="simpan.login" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" style="width:30%; margin:auto; margin-bottom:10px;" class="form-control text-center" name="username" placeholder="Username">
                <input type="text" style="width:30%; margin:auto;" class="form-control text-center" name="password" placeholder="Password">
            </div>
            <input type="submit" class="btn btn-success " name="simpan" value="Simpan">
        </form>
    </div>
</body>
</html>