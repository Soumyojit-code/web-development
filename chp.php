<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "soumyojit_cse";
$con = mysqli_connect($servername, $username, $password, $database);
//$con=mysqli_connect("localhost", "root", "", "soumyojit_cse");
if (!$con) {
    die("Error detected" . mysqli_error($con));

} else {
    echo "connected establis successfully";

}

?>

