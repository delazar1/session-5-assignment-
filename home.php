<?php require_once("asset.php");
if (!is_loggedIn()) {
    header('location: index.php');
}


?>
<h1>Welcome to home page</h1>

<a href="logout.php">Logout</a>


