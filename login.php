<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="kotak_login">
        <p class="tulisan_login"> LOGIN ADMIN</p>
        <form action="ceklogin.php" method="post" role="form">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username" autocomplete="off">
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password" autocomplete="off">
            <input type="submit" class="tombol_login" value="Login">
        </form>
    </div>
</body>
</html>