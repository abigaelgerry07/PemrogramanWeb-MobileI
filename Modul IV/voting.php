<html>
<head>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="dules/accessibility.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Praktikum Pemrograman Web & Mobile</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Survei</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="voting.php">Pemilu</a>
        </li>
        </ul>
    </div>
  </nav>
  <br>
  <form method="post">
    <select name="nama">
      <option value="Akil">1. Akil</option>
      <option value="Satria">2. Satria</option>
      <option value="Oscar">3. Oscar</option>
      <option value="Cakra">4. Cakra</option>
      <option value="Mitchel">5. Mitchel</option>
    </select>
    <label>nim</label>
    <input type="number" name="nim"/>
    <button name="kirim" type="submit">kirim</button>
  <form>
  <div class="row">
        <div class = "column">
        <h1>Data Pemilu</h1>
        <br>
            <table border="1" align = "center">
                <thead>
                    <tr>
                        <th>NIM (Pemilih)</th>
                        <th>Nama</th>          
                    </tr>
                </thead>
                <?php
                    require 'koneksi.php';
                    $view = $koneksi -> query("SELECT * FROM voting");
                    while($row=$view->fetch_array()){
                ?> 
                <tr>
                    <td><?php echo $row['nim']; ?></td>  
                    <td><?php echo $row['nama']; ?></td>                                                                                                               
                </tr>						
                <?php 
                }?>
                </tbody>
            </table>
        </div>

  <?php 
  require './koneksi.php';
  if (isset($_POST["kirim"])) {
  // menangkap data yang di kirim dari form
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];

  $data1 = mysqli_query($koneksi,"select * from voting where nim='$nim'");

  // menghitung jumlah data yang ditemukan
  $cek = mysqli_num_rows($data1);
  
  if($cek <= 0){

  $data =mysqli_query($koneksi,"INSERT INTO `voting` (`nim`, `nama`) VALUES ('$nim', '$nama')");

  if ($data) {
  ?>

  <script language="javascript">
  alert("Data Berhasil Ditambah");
  </script>
  <?php

  }}else if ($cek >= 0){
      ?>
      <script language="javascript">
      alert("Maaf Id sudah digunakan ");
      
      </script>
      <?php  
  }
  }
  ?> 	
  </body>
</html>