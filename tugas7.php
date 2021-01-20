<?php
  $angka = array(1,2,3,4,5,6,7,8,9,10);
  $i = 0;

  function cek($x){
    if ($x%2 == 0) {
      return "Bilangan Genap";
    } else {
      return "Bilangan Ganjil";
    }
  }
?>

<h1>Tabel Bilangan</h1>
<table border="1">
  <tr>
    <td>Bilangan</td>
    <td>Jenis</td>
  </tr>
  <?php
    while($i < count($angka)){
      echo "<tr>
        <td>" . $angka[$i] . "</td>
        <td>" . cek($angka[$i]) . "</td>
      </tr>";
      $i++;
    }
  ?>
</table>
