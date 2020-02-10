<?php 

    require_once('../includes/config.php');
    $id = $_SESSION['ID'];
    $diensten_query = "SELECT * FROM dienst where user_id=" . $id;
    $dienstenArray = mysqli_query($mysqli,$diensten_query);
        
    $projecten_query = "SELECT * FROM project where user_id=" . $id;
    $projectenArray = mysqli_query($mysqli,$projecten_query);

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
    <link rel="stylesheet" href="../includes/profiel.css">
    <link rel="stylesheet" href="/includes/navbar_css.css">

    <title>Profiel</title>
</head>
<body>
<?php 
    include('../includes/navbar_html.php'); ?>

<div id="container">
		<div id="titel">
		<div id="mijnprofiel">
		 	<h1>MIJN PROFIEL</h1>	
            <h3><a href="/profiel/profiel.php">Bewerken</a></h3>
		</div>
		</div>
		<div id="profiel">
		<div id="profielkaart">
			<div id="leftcontent">
                 <img id="profielfoto" src="/profiel/<?= $user['avatar'] ?>" alt="avatar">
			</div>
			<div id="rightcontent">
				<h3 id="naam"><?= $user['voornaam'] ?> <?= $user['achternaam'] ?> </h3>
				<h4 id="beroep">Beroep: <?= $user['beroep'] ?></h4>
				<h3 id="over">Over Mij</h3>
				<p><?= $user['beschrijving'] ?></p>
			</div>
			</div>
        </div>

        <h1 class="profile-titel">PROJECTEN</h1>

            <div id="projecten">
            <section class="project">
                <?php while($row = $projectenArray->fetch_assoc()){
                    echo '<div class="projecten">';
                        echo '<h2>' . $row['naam'] . '</h2>';
                        echo '<img class="project" src= "../projecten/' . $row["afbeelding"] . '" alt="project1">';
                    echo '</div>';
                } ?>
            </section>
            <section class="new-project">
                <a href="../projecten/index.php"><img src="/profiel/afbeeldingen/plus.jpg" alt=""></a>
            </section>


            
	
		</div>
		<h1 class="profile-titel">DIENSTEN</h1>

            <div id="projecten">
            <section class="project">
                <?php while($row = $dienstenArray->fetch_assoc()){
                    echo '<div class="projecten">';
                        echo '<h2>' . $row['naam'] . '</h2>';
                        echo '<img class="project" src= "../diensten/' . $row["afbeelding"] . '" alt="project1">';
                    echo '</div>';
                } ?>
            </section>
            <section class="new-project">
                <a href="../diensten/index.php"><img src="/profiel/afbeeldingen/plus.jpg" alt=""></a>
            </section>
	</div>

</body>
</html>