<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="./includes/style.css"> -->
    
    <link rel="stylesheet" href="/includes/projecten.css">
    <link rel="stylesheet" href="/includes/navbar_css.css">
    
    <title>Diensten</title>
</head>
<body>
    <?php 
    require '../includes/config.php';
    include('../includes/navbar_html.php'); 
    
    ?>

    <form action="/diensten/dienst.php" method="POST" enctype="multipart/form-data" class="projecten-form">
        <h1>Diensten</h1>
        <div class="project-input">
            <label>Naam:</label>
            <input type="text" name="dienst_naam">
        </div>

        <div class="project-input">
            <label>beschrijving:</label>
            <input type="text" name="dienst_beschrijving">
        </div>

        <div class="project-input">
            <label>Afbeelding:</label>
            <input type="file" name="afbeelding">
        </div>

        <div class="project-input">
            <input type="submit" name="submit" value="opslaan">
        </div>

        <a href="../profiel/index.php">terug naar profiel</a>

    </form>
</body>
</html>