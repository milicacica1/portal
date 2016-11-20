<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }else
    {
// Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $connection = mysqli_connect("localhost", "root", "", "fax");
// To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
//$bp, @$_POST["Broj_sati"]
        $username = mysqli_real_escape_string($connection, @$_POST["username"]);
        $password = mysqli_real_escape_string($connection, @$_POST["password"]);
//$password = mysqli_real_escape_string($password);
// Selecting Database
//$db = mysql_select_db("fax", $connection);
// SQL query to fetch information of registerd users and finds user match.
        $query = mysqli_query($connection, "select * from Login where password='$password' AND username='$username'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            if($username == "profesor" && $password == "profesor"){
                header("location: profesor_pocetna.php");
            }else{
                header("location: dodaj_studenta.html");
            }
        //$_SESSION['login_user']=$username; // Initializing Session
         // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }
    mysqli_close($connection); // Closing Connection
    }
}
?>
