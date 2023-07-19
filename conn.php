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
    if(isset($_FILES['event_image']) && isset($_POST['submit'])){
            $img_name = $_FILES['event_image']['name'];
            $tmp_name = $_FILES['event_image']['tmp_name'];
            $error = $_FILES['event_image']['error'];
            $tmp_size = $_FILES['event_image']['size'];
            $event_name = $_POST['event-name'];
            $event_desc = $_POST['event-dec'];
            $date_time = $_POST['date-time'];
            $venue = $_POST['venue'];
            $email = $_POST['email'];
            $link = $_POST['link'];
            $username = $_SESSION['usern'];
            $usn = $_SESSION['usn'];
            if($error === 0){
                if($tmp_size>1250000){
                    $em = "Sorry, your file is too large.";
                    header("Location:Create1.php?error=$em");
                }
                else {
                $img_ex = explode('.',$img_name);
                $img_ex_lc = strtolower(end($img_ex));

                $allowed_exs = array("jpg", "jpeg", "png");

                if(in_array($img_ex_lc, $allowed_exs)){
                    $new_img_name = uniqid("IMG-",true).".".$img_ex_lc;
                    $img_upload_path = 'uploads/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
                    
                    $sql = "INSERT INTO event_details(usn,event_name,event_desc,date_time,event_venue,host_mail,website,poster) VALUES('$usn','$event_name','$event_desc','$date_time','$venue','$email','$link','$new_img_name')";
                    if(mysqli_query($conn, $sql)){
                        header("Location: upcoming2.php");
                    }
                    else {
                        echo "NOT UPLOADED";
                    }
                }
                else{
                    $em = "You can't upload files of this type";
                    header("Location: Create1.php?error=$em");
                }
            }
            }
            else{
                echo "Error Incurred";
            }
        }
}
?>