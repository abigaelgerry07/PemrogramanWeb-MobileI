<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $x = false;

        if($user>7){
            echo "<script>alert('password lebih dari 7');</script>";
            $x = true;
        }
        if (!preg_match("/[A-Z]/", $password) ) {
            echo "<script>alert('password kapital');</script>";
            $x = true;
        }
        if (!preg_match("/[a-z]/", $password)) {
            echo "<script>alert('password kecil');</script>";
            $x = true;
        }

        if (!preg_match("/[^a-zA-Z\d]/", $password)) {
            echo "<script>alert('password special character');</script>";
            $x = true;
        }

        if (!preg_match("/[0-9]/", $password)) {
            echo "<script>alert('password digit');</script>";
            $x = true;
        }
        if($pass<10){
            echo "<script>alert('password kurang dari 10');</script>";
            $x = true;
        }
        if( $x == false ){
            echo "<script>alert('login berhasil');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Page</title>
</head>
<body>
<div class="border">
<h3>Login</h3>
<form action="" method="post" name="Login_Form">
            <lable class="un">Username</lable><br>
            <input class="pw" name="username" type="text" placeholder="username"><br>
            <lable class="un">Password</lable><br>
            <input class="pw" name="password" type="text" placeholder="password" ><br>
            <input class="lg" name="Submit" type="submit" value="Login">
    <h1>Syarat dan Ketentuan</h1>
    <p> Username yang dinputkan tidak boleh lebih dari 7 karakter.<br>
        Password yang dinputkan harus terdiri dari huruf kapital, huruf kecil, angka dan karakter khusus.<br>
        Jumlah karakter password tidak boleh kurang dari 10 karakter.
    </p>
    </form>
</div>
</body>
</html>