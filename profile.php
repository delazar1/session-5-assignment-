<link rel="stylesheet" href="profile.css">
<?php
if (isset($_POST["user_name"])) {
    $username = $_POST["user_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $age = $_POST["age"];
    if ($_FILES["pro_img"]["name"] != "") {
        $path = "images/" . $_FILES["pro_img"]["name"];
        move_uploaded_file($_FILES["pro_img"]["tmp_name"], $path);
    }
} else {
    header('location: sign_up.php');
}
?>
<div class="container">
    <?php if (file_exists("images/" . $_FILES['pro_img']['name'])) { ?>
        <img height="300" src="<?= "images/" . $_FILES['pro_img']['name'] ?>" alt="your profile">
    <?php } ?>
    <p>User name: <?= $username; ?></p>
    <p>Email: <?= $email; ?></p>
    <p>Age: <?= $age; ?></p>
    <a href="delete.php?file_name=<?= $_FILES['pro_img']['name']?>">Delete File</a>
</div>