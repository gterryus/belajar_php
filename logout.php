<?php
//Memulai sesi
session_start();

//Dihapus sesinya
session_destroy();

header("Location: login.php");
exit();
?>