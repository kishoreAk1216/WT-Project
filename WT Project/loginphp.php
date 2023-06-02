<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "watchshop";

$conn = mysqli_connect($server_name, $username, $password, $database_name);

// Check the connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $user_name = isset($_POST['name']) ? $_POST['name'] : '';
    $email= isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $sql_query = "INSERT INTO signup (name, email, password)
                  VALUES ('$user_name','$email','$password')";

    if (mysqli_query($conn, $sql_query)) {
        header("Location:Home.html");
    } else {
        echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>