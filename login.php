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
else {
    if(isset($_POST['submit']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $_SESSION['usern'] = $username;
        $password = $_POST['password'];
        $flag = 0;
        $url = $_SERVER['HTTP_REFERER'];
        $string = explode("/",$_SERVER['HTTP_REFERER']);
        $sql = "SELECT * FROM user_details";
        $query = mysqli_query($conn,$sql);
        while($result = mysqli_fetch_array($query)){
            if($username == $result['username'] && $password == $result['passw']){
                $flag = 1;
                break;
            }
        }
        if($flag==1){
            if(($string[count($string)-1] == "studlogin.php" || $string[count($string)-1]=="studlogin.php?error=Invalid%20Username%20or%20Password")  && $result['choice']==2){
                header("Location:studupcoming.php");
            }
            else if(($string[count($string)-1] == "hostlogin.php" || $string[count($string)-1] == "hostlogin.php?error=Invalid%20Username%20or%20Password") && $result['choice']==1){
                header("Location: upcoming2.php");
            }
            else {
                if($string[count($string)-1] == "studlogin.php" || $string[count($string)-1]=="studlogin.php?error=Invalid%20Username%20or%20Password")
                    header("Location: studlogin.php?error=Invalid Username or Password");
                else
                    header("Location: hostlogin.php?error=Invalid Username or Password");
            }
        }
        else {
            if($string[count($string)-1] == "studlogin.php" || $string[count($string)-1]=="studlogin.php?error=Invalid%20Username%20or%20Password")
                    header("Location: studlogin.php?error=Invalid Username or Password");
            else
                    header("Location: hostlogin.php?error=Invalid Username or Password");
        }
    }
}
?>