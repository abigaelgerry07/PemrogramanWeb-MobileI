<?php
require("function.php");
if (isset($_POST["insert"])) {
    if (insert($_POST > 0)) {
        echo "<script>
            alert('Data Ditambahkan');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Ditambahkan');
            document.location.href = 'index.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <a href="index.php">HOME</a>
    <form action="" method="POST">
        <label for="id_employe"><br>ID Employe<br></label>
        <input type="text" name="id_employe" id="id_employe"><br>
        <label for="nama"><br>Nama<br></label>
        <input type="text" name="nama" id="nama"><br>
        <label for="id_department"><br>ID Department<br></label>
        <input type="text" name="id_department" id="id_department"><br><br>
         <button type="submit" name="insert">OK</button>
    </form>
</body>
</html>