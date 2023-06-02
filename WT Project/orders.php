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
    $mobile_no = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $door_no = isset($_POST['doorNo']) ? $_POST['doorNo'] : '';
    $area = isset($_POST['area']) ? $_POST['area'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';

    $sql_query = "INSERT INTO order_details ( name ,mobile, doorno, area, city)
                  VALUES ('$user_name','$mobile_no','$door_no','$area','$city')";

    if (mysqli_query($conn, $sql_query)) {
        header("Location: success.html");
    } else {
        echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>