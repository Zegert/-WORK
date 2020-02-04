<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@WORK</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="navbar_css.css">
</head>
<?php 
    include('navbar_html.php');
?>
<body>
    <!-- <form action="form.php" method="POST">
        username
        <input type="text" name="username">
        wachtwoord
        <input type="text" name="password">

        <input type="submit" value="opslaan">
    </form> -->
    <main>
        <!-- Login -->
    <div id="login">
            <form id="loginForm" action="form.php">
                <br><br>
                <label for="username"><b>Gebruikersnaam:</b></label><br>
                <input type="text" placeholder="Voer uw gebruikersnaam in" name="username" minlength="4" maxlength="18" required>
                <br>
                <br>
                <label for="password"><b>Wachtwoord:</b></label><br>
                <input type="password" placeholder="Voer uw wachtwoord in" name="password" required>
                <br>
                <br>
                <button type="submit" style="padding: 5px 10px 5px 10px;">Login</button>
                <div id="registreerHier">Nog geen account? registreer u hier!</div>
            </form>
        </div>
        <!-- Registreer -->
        <div id="registreerForm">
            <form action="registreer.php">
                <br><br>
                <label for="username"><b>Gebruikersnaam:</b></label><br>
                <input type="text" placeholder="Voer een gebruikersnaam in" name="username" minlength="4" maxlength="18" required>
                <br>
                <br>
                <label for="password"><b>Wachtwoord:</b></label><br>
                <input type="password" placeholder="Voer een wachtwoord in" name="password" required>
                <br>
                <br>
                <label for="herhaalpassword"><b>Herhaal wachtwoord:</b></label><br>
                <input type="password" placeholder="Herhaal wachtwoord" name="herhaalpassword" required>
                <br>
                <button type="submit" style="padding: 5px 10px 5px 10px;">Login</button>
                <div id="LoginHier">Heeft u al een account? Log hier in!</div>

            </form>
        </div>
    </main>
</body>
<script src="javascript.js"></script>
</html>