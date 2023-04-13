<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="login_page.css">
</head>
<body>

<h2 class="center">Login Page</h2>
<form method="POST" action="">
    <label>Username:</label><br>
    <input type="text" name="username"><br><br>
    <label>Password:</label><br>
    <input type="password" name="password"><br><br>
    <?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "admission form";
        $conn = mysqli_connect($host, $username, $password, $database);
        if (!$conn) {
            echo "Server Error";
            exit;
        }

        $email = $_POST['username'];
        $_SESSION["email"]=$email;
        $query = "SELECT email, password FROM admission WHERE email='$email'";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "Query Error";
        }

        $user = mysqli_fetch_assoc($result);
        if (!$user) {
            echo "Incorrect Email<br>";
        }

        $password = $_POST["password"];
        $hash_passw = $user["password"];
        if (password_verify($password, $hash_passw)) {
            session_start();
            $_SESSION["email"] = $email;
            header("Location: dashboard.php");
        } else {
            echo "Incorrect Password<br>";
        }
    }
    ?>
    <input type="submit" value="Login">
</form>

<style>
    .center {
        text-align: center;
    }
</style>

</body>
</html>
