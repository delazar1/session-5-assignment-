<?php include_once('asset.php');

unset($_SESSION["login"]);
header("location: index.php?logout=done");
