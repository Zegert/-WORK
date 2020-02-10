<?php 

    require_once('../includes/config.php');
 
        
    $projecten_query = "SELECT * FROM project";
    $projectenArray = mysqli_query($mysqli,$projecten_query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="work/includes/style.css"> -->
    <link rel="stylesheet" href="../includes/style.css">
    <!-- <link rel="stylesheet" href="/includes/navbar_css.css"> -->

</head>
<body>
<?php 
    require '../includes/config.php'; 
    include('../includes/navbar_html.php'); ?>

<main>
    
    
    
    <div class="feed-container">
        <h1 id="feedheader">FEED</h1>
        <?php
        
            while($row = $projectenArray->fetch_assoc()){
                echo '<div class="feed">';
                    $projecten_query = "SELECT * FROM project";
                    $project = mysqli_fetch_assoc(mysqli_query($mysqli,$projecten_query));
                    // var_dump($project);
                    $userquery = "SELECT * FROM users where id=" . $project['user_id'];
                    $user = mysqli_fetch_assoc(mysqli_query($mysqli,$userquery));

                    echo '<h1 style="color: #4E7B86;">' . $row['naam'] . '</h1>';
                    echo '<p style="font-weight:bold;color:#C99590;margin-bottom: 20px;">'. $user['voornaam'] . ' ' . $user['achternaam'] .'</p>';
                    echo '<p>Beschrijving: ' . $row['beschrijving']; '</p>';
                    echo '<img src="../projecten/' . $row["afbeelding"] . '" alt="test">';
                    echo '</div>';

            
                } ?>

    </div>

</div>
</main>
</body>
</html>