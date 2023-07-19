<?php include "db_conn.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
    <a href="Create1.php">&#8592;</a>
    <?php
    $sql = "SELECT * FROM event_details ORDER BY event_name";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res)>0){
        while($event_details = mysqli_fetch_assoc($res)){
            echo $event_details['poster']; 
            echo $event_details['date_time'];
            $s = explode(" ",$event_details['date_time']);
            $arr = strtotime($s[0]);
            $dmy = date("d-m-Y", $arr);
            echo $dmy;
            ?>
            <div class="alb">
                <img alt = "sry we r working on it" src="uploads/<?php echo $event_details['poster'];?>">
            </div>
            <?php
            }
        }
    ?>
</body>
</html>