<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengulangan</title>
</head>
<body>
  <?php
    // Pengulangan for
    for($i = 0; $i < 5; $i++){
      echo "<p>Ini pengulangan ke " . $i . "</p>";
    }
  ?>
  <hr/>
  <?php
    // Pengulangan while
    $a = 0;
    while($a < 5){
      echo "<p>Ini pengulangan ke " . $a . "</p>";
      $a++;
    }
  ?>
  <hr/>
  <?php
    // Pengulangan do while
    $b = 6;
    do{
      echo "<p>Ini pengulangan ke " . $b . "</p>";
      $b++;
    }while($b < 5);
  ?>
</body>
</html>