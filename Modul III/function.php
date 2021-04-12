<?php 
$servername = "localhost";
$database = "bab3";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

function show($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function insert($data){
    global $conn;
    $id_employe = $_POST["id_employe"];
    $nama = $_POST["nama"];
    $id_department = $_POST["id_department$id_department"];

    mysqli_query($conn, "INSERT INTO employee VALUES('$id_employe','$nama','$id_department')");
    return mysqli_affected_rows($conn);
}

function delete($data){
    global $conn;
    $id_employe = $_GET["delete"];
    mysqli_query($conn, "DELETE FROM employee WHERE id_employe = $id_employe");
    return mysqli_affected_rows($conn);
}

function update($data){
    global $conn;
    $id_employe = $_POST["id_employe"];
    $nama = $_POST["nama"];
    $id_department = $_POST["id_department$id_department"];
    mysqli_query($conn, "UPDATE employee SET nama = '$nama', 
    id_department ='$id_department'
    WHERE id_employe = $id_employe");
    return mysqli_affected_rows($conn);
}

?>
