<?php 

// geef een user_id mee in de querie

require_once('../includes/config.php');

$naam = $_POST['project_naam'];
$beschrijving = $_POST['project_beschrijving'];
$id = $_SESSION['ID'];


// $naam = stripcslashes($naam);
// $beschrijving = stripcslashes($beschrijving);
// $naam = mysqli_real_escape_string($mysqli, $naam);
// $beschrijving = mysqli_real_escape_string($mysqli, $beschrijving);

// afbeelding
$output = '';
$afbeelding = $_FILES['afbeelding']['name'];
$afbeeldingPath = 'afbeeldingen/' . $afbeelding;
$afbeeldingPath = mysqli_real_escape_string($mysqli,$afbeeldingPath);

if(preg_match("!image!", $_FILES['afbeelding']['type'])){
    if(copy($_FILES['afbeelding']['tmp_name'],$afbeeldingPath)){

        $query = "INSERT INTO project (user_id,naam, beschrijving, afbeelding) VALUES ('$id','$naam','$beschrijving','$afbeeldingPath')";
        if(mysqli_query($mysqli,$query)){
            header("location: ../profiel");
        }else{
            echo "Dienst is NIET toegevoegd!";
        }
    }
}else{
    echo "Afbeelding upload fail!";
}



