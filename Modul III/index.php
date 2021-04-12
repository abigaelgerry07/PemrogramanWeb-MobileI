<?php
require("function.php");
$data = show("SELECT * FROM employee");
if (isset($_GET["delete"])) {
    if (delete($_GET > 0)) {
        echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal dihapus');
            document.location.href = 'index.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Pegawai | M3</title>
</head>
<body>
    <h1>Database Pegawai</h1><br>
    </form>
    <table border="1">
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }
    </style>
        <tr>
            <td>ID Employe</td>
            <td>Nama</td>
            <td>ID Department</td>
            <td>Menu</td>
        </tr>
        <?php
        foreach ($data as $d) {
        ?>
            <tr>
                <td><?php echo $d["id_employe"]; ?></td>
                <td><?php echo $d["nama"]; ?></td>
                <td><?php echo $d["id_department"]; ?></td>
                <td>
                    <form action="" method="GET">
                        <button type="submit" name="delete" value=<?php echo $d["id_employe"]; ?>>DELETE</button>
                    </form><br>
                    <form action="update.php" method="GET">
                        <button type="submit" name="update" value=<?php echo $d["id_employe"]; ?>>UPDATE</button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <form action="insert.php">
        <br><button>INSERT</button>
</body>
</html>