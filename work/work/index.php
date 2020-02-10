<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@WORK</title>
    <script src="/includes/script.js"></script>
    <link rel="stylesheet" href="/includes/style.css">
    <link rel="stylesheet" href="/includes/navbar_css.css">
    <link rel="stylesheet" href="/includes/inlog.css">

</head>
<body>
<?php 
    require 'includes/config.php';
    include('./includes/navbar_html.php');
?>
    <main>
    <div id="container">
        <div id="toggle1" class="zichtbaar ">
		<div class ="form">
		  <h1>Inloggen</h1>
            <form class="loginForm" action="login_verwerk.php" method="POST">
                <label for="email"><b>E-mail</b></label><br>
                <input class="input" type="text" name="username" placeholder="email" required><br>
                <label for="password"><b>Wachtwoord:</b></label><br>
                <input class="input" type="password" name="password" placeholder="Wachtwoord" required><br>
                <input class="submit" type="submit" name="submit" value="Inloggen">
            </form>
            <button onclick="toggle()">Nog geen gebruiker? Meld je aan!</button>
       </div>
		</div>
        <div id="toggle2" class="onzichtbaar ">
		<div class="form">
			  <h1>Aanmelden</h1>
            <form class="registreerForm" action="registeer_verwerk.php" method="POST">
                <label for="username"><b>Gebruikersnaam:</b></label><br>
                <input class="input" type="text" name="username" placeholder="Gebruikersnaam" required><br>
                <label for="herhaalpassword"><b>Voer een wachtwoord in:</b></label><br>
                <input class="input" type="password" name="password" placeholder="Wachtwoord" required><br>
                <label for="herhaalpassword"><b>Herhaal wachtwoord:</b></label><br>
                <input class="input" type="password" name="password" placeholder="Wachtwoord" required><br>
                <input class="submit" type="submit" name="submit" value="Registreren">
            </form>
        </div>
	</div>		
        <!-- <div id="toggle1" class="zichtbaar">
            <form class="loginForm" action="login_verwerk.php" method="POST">
                <label for="username"><b>Gebruikersnaam:</b></label><br>
                <input type="text" name="username" placeholder="Gebruikersnaam" required><br>
                <label for="password"><b>Wachtwoord:</b></label><br>
                <input type="password" name="password" placeholder="Wachtwoord" required><br>
                <input type="submit" name="submit" value="Inloggen">
            </form>
            <button onclick="toggle()">Nog geen gebruiker? Meld je aan!</button>
        </div>
        <div id="toggle2" class="onzichtbaar">
            <form class="registreerForm" action="registeer_verwerk.php" method="POST">
                <label for="username"><b>Gebruikersnaam:</b></label><br>
                <input type="text" name="username" placeholder="Gebruikersnaam" required><br>
                <label for="herhaalpassword"><b>Voer een wachtwoord in:</b></label><br>
                <input type="password" name="password" placeholder="Wachtwoord" required><br>
                <label for="herhaalpassword"><b>Herhaal wachtwoord:</b></label><br>
                <input type="password" name="password" placeholder="Wachtwoord" required><br>
                <input type="submit" name="submit" value="Registreren">
            </form>
            <button onclick="toggle()">Al een gebruiker? Log in!</button>
        </div> -->
    </main>
</body>
</html>