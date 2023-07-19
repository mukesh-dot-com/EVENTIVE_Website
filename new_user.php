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
if(isset($_POST['submit']) && ($_POST['password']==$_POST['password2'])){
    $usn = $_POST['usn'];
    $username = $_POST['username'];
    $select = $_POST['select'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    /*$hash = password_hash($pass, 
    PASSWORD_DEFAULT);*/
    if($select == "Student")
        $select = 2;
    else
        $select = 1;

    $sql = "INSERT INTO user_details(usn,username,choice,email,passw) VALUES('$usn','$username','$select','$email','$pass')";
    if(mysqli_query($conn, $sql)){
        if($select==1)
            header("Location:hostlogin.php");
        else
            header("Location:studlogin.php");
        
    }
}
?>
