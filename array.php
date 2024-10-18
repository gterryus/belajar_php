<?php
  // Cara baru
  $arr2 = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"];

  // echo hanya bekerja untuk string / int
  // Khusus debugging / Developer
  // var_dump() / print_r

  // var_dump($arr2);
  // echo "<br/>";
  // print_r($arr2);
  // echo "<br/>";
  // echo $arr2[1];

  // cara 1
  for($i = 0; $i < count($arr2); $i++){
    echo $arr2[$i] . "<br/>";
  }

  echo "<hr/>";
  
  // cara 2
  foreach($arr2 as $hari){
    echo $hari . "<br/>";
  }
?>