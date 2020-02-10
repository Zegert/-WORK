<?php 
require_once('../includes/config.php');

$username = $_POST['username'];
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$beroep = $_POST['beroep'];
$telefoon = $_POST['telefoon'];
$email = $_POST['email'];
$expertise = $_POST['expertise'];
$beschrijving = $_POST['beschrijving'];

// user id
$id = $_SESSION['ID'];

// afbeelding
$afbeelding = $_FILES['avatar']['name'];
$afbeeldingPath = 'afbeeldingen/' . $afbeelding;
$afbeeldingPath = mysqli_real_escape_string($mysqli,$afbeeldingPath);

if(preg_match("!image!", $_FILES['avatar']['type'])){
    if(copy($_FILES['avatar']['tmp_name'],$afbeeldingPath)){

        $query = "UPDATE users
                  SET username = '$username', voornaam = '$voornaam', achternaam = '$achternaam',email = '$email', telefoon = '$telefoon', beroep = '$beroep', expertise = '$expertise', beschrijving = '$beschrijving', avatar = '$afbeeldingPath'
                  WHERE id = $id";
        if(mysqli_query($mysqli,$query)){
            header("location: ../profiel/index.php");
            echo 'succes';
        }else{
            echo "NIET toegevoegd!";
            echo $mysqli->error;
        }
    }
}else{
    echo "Afbeelding upload fail!";
}