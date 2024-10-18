<?php 
  echo date("l, d-m-Y");
  echo "<br/>";
  echo date("l, d M Y");
  echo "<br/>";
  echo time();
  echo "<br/>";
  echo date("d M Y", time()+60*60*24*100);
?>