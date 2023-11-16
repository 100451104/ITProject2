<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root"; 
    $database = "users";
    
    $conn = new mysqli($servername, $username, '', $database);

    if ($conn->connect_error) {
        die("Error to connect" . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['psw'];
    $nameSurname = $_POST['ns'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];

    $sql = "INSERT INTO users (username, password, name_surname, email, birthdate) 
            VALUES ('$username', '$password', '$nameSurname', '$email', '$birthdate')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit(); 
        echo "Error" . $conn->error;
    }


    // Cierra la conexión
    //$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="media/icons/l_logo_blue_ico.ico" type="image/x-icon">
    <title>Register</title>
    <link rel="stylesheet" href="style/rules.css">
</head>

<body>
    <div class="left_column_register">
        <form name="inputs_register" id="inputs_register" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="username">Username:</label>
            <input class="field" type="text" placeholder="  Enter username" name="username" id="username" required>
            <label for="psw">Password:</label>
            <input class="field" type="password" placeholder="  Enter password" name="psw" id="psw" required>

            <label for="ns">Name and Surname:</label>
            <input class="field" type="text" placeholder="  Enter Name and Surname" name="ns" required>
            <label for="email">Email:</label>
            <input class="field" type="email" placeholder="  Email" name="email" id="email" required>
            <label for="birthdate">Birthdate:</label>
            <input class="field" type="date" placeholder="  Birthdate" name="birthdate" id="birthdate" required>
            <label for="prof_pic">Profile:</label>
            <input type="file" placeholder="prof_pic" name="prof_pic" id="prof_pic" accept="image/png">
            <br>
            <div>
                <input class="cond" type="radio" id="conditions" name="conditions" value="true">
                <label class="cond" for="conditions">Privacy Policy</label>
            </div>
            <div class="login_google">
                <button type="button" class="inicio_g_f" id="i_google"><img src="media/icons/google_icon.png"
                        width="30" height="30" alt="image">Log in with google</button>
            </div>
            <br>
            <div class="login_facebook">
                <button type="button" class="inicio_g_f" id="i_facebook"><img src="media/icons/facebook_icon.png"
                        width="30" height="30" alt="image">Log in with facebook</button>
            </div>

            <br>
            <div>
                <button type="submit" class="f-cont">Sign Up</button>
            </div>
        </form>
    </div>
    <div class="left_column_responsive">
        <img class="logo_without_login" src="media/icons/logo.png" alt="image">
        <img class="menu_responsive" src="media/icons/l_logo_blue.png" alt="image">
    </div>
    <div class="right_column_register">

    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="script/main.js"></script>
</body>

</html>