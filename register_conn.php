<?php
session_start();
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "eventive";
$conn = mysqli_connect($sname,$uname,$password,$db_name);
if(!$conn){
    echo "Connection Failed";
    exit();
}
else{
    if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $username = $_POST['fname'];
            $usn = $_POST['usn'];
            $branch = $_POST['branch'];
            $sem = $_POST['sem'];
            $event_name = $_SESSION['eventname'];
            $ph_num = $_POST['phnum'];
            $sql = "INSERT INTO participants(event_name,username,usn,branch,year,email,ph_num) VALUES('$event_name','$username','$usn','$branch','$sem','$email','$ph_num')";
            if(mysqli_query($conn, $sql)){
                header("Location: studupcoming.php");
            }
            else {
                echo "NOT UPLOADED";
            }
        }
}
?>