<?php 
    require_once('./includes/config.php');

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($mysqli, $username);
        $password = mysqli_real_escape_string($mysqli, $password);

        $result = mysqli_query($mysqli, "SELECT * FROM users WHERE username = '$username'")
            or die("failed to query database.");

        $row = mysqli_fetch_array($result);
        if(password_verify($password, $row['password'])) {
            $_SESSION['ID'] = $row['id'];
            $_SESSION['UN'] = $row['username'];

            header('Location:home.php');
        }
        else {
            echo "Login failed. <br>";
            header("Location: index.php");
        }
    ?>
