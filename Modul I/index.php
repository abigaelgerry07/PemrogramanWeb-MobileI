<?php
    $names= ["mauren", "amanda", "thea", "stefani","grace"];
    function vokal($kalimat) {
        $a = substr_count($kalimat, 'a');
        $i = substr_count($kalimat, 'i');
        $u = substr_count($kalimat, 'u');
        $e = substr_count($kalimat, 'e');
        $o = substr_count($kalimat, 'o');
        $A = substr_count($kalimat, 'A');
        $I = substr_count($kalimat, 'I');
        $U = substr_count($kalimat, 'U');
        $E = substr_count($kalimat, 'E');
        $O = substr_count($kalimat, 'O');
        $count = ($A+$I+$U+$E+$O+$a+$i+$u+$e+$o);
        return $count;
    }
    function konsonan($kalimat) {
        $jumlah = strlen($kalimat);
        $a = substr_count($kalimat, 'a');
        $i = substr_count($kalimat, 'i');
        $u = substr_count($kalimat, 'u');
        $e = substr_count($kalimat, 'e');
        $o = substr_count($kalimat, 'o');
        $A = substr_count($kalimat, 'A');
        $I = substr_count($kalimat, 'I');
        $U = substr_count($kalimat, 'U');
        $E = substr_count($kalimat, 'E');
        $O = substr_count($kalimat, 'O');
        $count = $jumlah - ($a+$i+$u+$e+$o+$A+$I+$U+$E+$O) - substr_count($kalimat, ' ');
        return $count;
    }
    function TanpaSpasi($kalimat){
        return strlen($kalimat) - substr_count($kalimat, ' ');
        }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jumlah Huruf</th>
                <th>Jumlah Kata</th>
                <th>Kebalikan Nama</th>
                <th>Vokal</th>
                <th>Konsonan</th>
            </tr>
        </thead>
        <?php foreach ($names as $name) :  ?>
            <tr>
                <td><?php echo $name."<br>"; ?></td>
                <td align="center"><?php echo strlen($name)."<br>"; ?></td>
                <td align="center"><?php echo str_word_count($name)."<br>"; ?></td>
                <td><?php echo strrev($name)."<br>"; ?></td>
                <td align="center"><?= vokal(  $name);  ?></td>
                <td align="center"><?= konsonan( $name);  ?></td>
                </tr>
            <?php endforeach; 
        ?>
    </table>
</body>
</html>