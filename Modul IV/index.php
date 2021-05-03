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
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Survei</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="voting.php">Pemilu</a>
      </li>
      </ul>
  </div>
</nav>
<br>
    <div class="row">
        <div class = "column">
        <h1>Data Survei Umur</h1>
        <br>
            <table border="1" align = "center">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Umur</th>            
                    </tr>
                </thead>
                <?php
                    require 'koneksi.php';
                    $view = $koneksi -> query("SELECT * FROM data");
                    while($row=$view->fetch_array()){
                ?> 
                <tr>
                    <td><?php echo $row['nim']; ?></td>  
                    <td><?php echo $row['nama']; ?></td>                                                      
                    <td><?php echo $row['umur']; ?></td>                                                          
                </tr>						
                <?php 
                }?>
                </tbody>
            </table>
        </div>
    </div>
    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description"> Hasil Dari Umur</p>
        <table id="datatable">
            <thead>
                <tr>
                    <th>Umur</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require 'koneksi.php';
                $view = $koneksi -> query("SELECT umur,COUNT(*) AS hasil FROM `data` GROUP BY umur");
                while($row=$view->fetch_array()){ ?> 
                <tr>
                    <td><?php echo $row['umur']; ?></td>  
                    <td><?php echo $row['hasil']; ?></td>                                                      
                </tr>						
                <?php }?>
             </tbody>
        </table>
    </figure>
<script>
Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data extracted from a HTML table in the page'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
</script>
</body>
</html>
</body>
</html>