<body>
    <?php
    include "db_conn.php";
    ?>
    <div class="header">
        <ul class="buttons">
            <li><a href = "allevents.php">All events</a></li>
            <li><a href = "about us.php">About us</a></li>
        </ul>
    </div>
    <div class = "ele">
        <label><?php
                echo "Welcome, ".$_SESSION['usern'];
                ?>
            <img src="https://e7.pngegg.com/pngimages/522/207/png-clipart-profile-icon-computer-icons-business-management-social-media-service-people-icon-blue-company.png" alt="">
        </label>
        <p class="log"><a href = "#">Logout</a></p>
    </div>
    <div class = "middle">
        <ul class = "head">
            <?php
            $sql = "SELECT * FROM user_details";
            $que = $conn->query($sql);
            if(mysqli_num_rows($que)>0){
                while($detail = mysqli_fetch_assoc($que)){
                    if($detail['username']==$_SESSION['usern']){
                        $choice = $detail['choice'];
                        break;
                    }
                }
            }
            if($choice==1){?>
                <li><a href="upcoming2.php">Upcoming</a></li>
                <li><a href="previous2.php">Previous</a></li>
                <li><a href="Create1.php">Create</a></li>
            <?php }
            if($choice==2){?>
                <li><a href="studupcoming.php">Upcoming</a></li>
                <li><a href="studparticipated.php">Participated</a></li>
           <?php }
            ?>
        </ul>
    </div>