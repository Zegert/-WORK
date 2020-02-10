<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/includes/navbar_css.css">
    
    <link rel="stylesheet" href="/includes/projecten.css">
    <!-- <link rel="stylesheet" href="/includes/style.css"> -->

    <title>Projecten</title>
</head>
<body>

    <?php 
    require '../includes/config.php'; 
    include('../includes/navbar_html.php'); ?>

    <form action="/projecten/project.php" method="POST" enctype="multipart/form-data" class="projecten-form">
        <h1>Projecten</h1>
        <div class="project-input">
            <label>Naam:</label>
            <input type="text" name="project_naam">
        </div>

        <div class="project-input">
            <label>beschrijving:</label>
            <input type="text" name="project_beschrijving">
        </div>

        <div class="project-input">
            <label>Afbeelding:</label>
            <input type="file" name="afbeelding">
        </div>

        <div class="project-input">
            <input type="submit" name="submit" value="opslaan">
        </div>

    </form>

    <a href="../profiel/index.php">Terug naar profiel</a>

</body>
</html>