<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root"; 
    $database = "users";
    
    $conn = new mysqli($servername, $username, '', $database);

    if ($conn->connect_error) {
        die("Error to connect" . $conn->connect_error);
    }

    $input_username = $_POST['username'];
    $input_password = $_POST['psw'];

    $sql = "SELECT * FROM users WHERE username = '$input_username' AND password = '$input_password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('Successful login'); window.location = 'index.php';</script>";
    } else {
        echo "<script>alert('Username or password incorrect');</script>";
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="media/icons/l_logo_azul_ico.ico" type="image/x-icon">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="style/rules.css">
</head>


<body>
    <div class="left_column_login">

        <img class="logo_login" src="media/icons/whitelogo.png" alt="image">

        <form name="inputs_login" id="inputs_login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="username">Username:</label><br>
            <input  class="field" type="text" placeholder=" Enter username" name="username" id="username" required><br>
            <label for="psw">Password:</label><br>
            <input  class="field" type="password" placeholder=" Enter password" name="psw" id="psw" required><br>
            <br>
            <div class="login_google">
                <button type="button" class="inicio_g_f" id="i_google"><img src="media/icons/google_icon.png"
                        width="30" height="30" alt="image">Log in with google</button>
            </div>
            <div class="login_facebook">
                <button type="button" class="inicio_g_f" id="i_facebook"><img src="media/icons/facebook_icon.png"
                        width="30" height="30" alt="image">Log in with facebook</button>
            </div>
            <br>

            <button type="submit" class="btn" id="access">Access</button>
        </form>
        <div class="left_column_responsive">
            <img class="logo_without_login" src="media/icons/logo.png" alt="image">
            <img class="menu_responsive" src="media/icons/l_logo_blue.png" alt="image">
        </div>
    </div>

    <div class="right_column_login">

    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="script/main.js"></script>
</body>

</html>