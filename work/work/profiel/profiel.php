<?php 
// geef een user_id mee in de querie
require_once('../includes/config.php');

$id = $_SESSION['ID'];
$userquery = "SELECT * FROM users where id=" . $id;
$arrayquery = mysqli_query($mysqli,$userquery);
$user = mysqli_fetch_assoc(mysqli_query($mysqli,$userquery));


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/includes/navbar_css.css">
    <link rel="stylesheet" href="/includes/profiel.css">

    <title>Document</title>
</head>
<body>
<?php 
    include('../includes/navbar_html.php'); ?>
<form action="update.php" method="POST" enctype="multipart/form-data" class="update-form">
        <h1>profiel</h1>
        <label>username:</label>

        <input type="text" name="username" value="<?= $user['username'];  ?>">

        <label>voornaam:</label>
        <input type="text" name="voornaam" value="<?= $user['voornaam'];  ?>">

        <label>achternaam:</label>
        <input type="text" name="achternaam" value="<?= $user['achternaam'];  ?>">

        <label>telefoon:</label>
        <input type="text" name="telefoon" value="<?= $user['telefoon'];  ?>">

        <label>email:</label>
        <input type="text" name="email" value="<?= $user['email'];  ?>">

        <label>beroep:</label>
        <input type="text" name="beroep" value="<?= $user['beroep'];  ?>">

        <label>expertise:</label>
        <input type="text" name="expertise" value="<?= $user['expertise'];  ?>">

        <label>avatar:</label>
        <input type="file" name="avatar" value="<?= $user['avatar'];  ?>">

        <label>beschrijving:</label>
        <textarea name="beschrijving"><?= $user['beschrijving'];  ?></textarea>

        <input type="submit" name="submit">
    </form>
</body>
</html>

