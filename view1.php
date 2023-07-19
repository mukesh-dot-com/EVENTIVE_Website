<?php
session_start();
include ('db_conn.php');
include ('include/head.php');
?>
    <title>All Events</title>
    <link rel="stylesheet" href="css/allevents.css" type="text/css">
</head>
<body>
    <div class="header">
        <ul class="buttons">
            <li><a href = "hostlogin.php">Sign In</a></li>
            <li><a href = "about us.php">About us</a></li>
        </ul>
    </div>
    <div class = "middle">
        <ul class = "head">
            <li><a href="allevents.php">Upcoming</a></li>
            <li><a href="allprev.php">Previous</a></li>
        </ul>
    </div>
    <?php
    include ('include/logo.php');
    ?>
      <div class= "title">All Ongoing Events</div>
      <div class="main">
        <ul class="cards">
        <?php
        $sql = "SELECT * FROM event_details ORDER BY event_name";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res)>0){
            while($event_details = mysqli_fetch_assoc($res)){
                $s = explode(" ",$event_details['date_time']);
                ?>
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img src="uploads/<?php echo $event_details['poster'];?>"><div class="card_label"><?=$event_details['event_name']?></div></div>
              <div class="card_content">
                <p class="card_text"><?=$event_details['event_desc']?></p>
                <div class="maincontent">
                  <div class="date">Date: <br>
                    <?php
                    echo date("d-m-Y",strtotime($s[0])); 
                  ?>
                  </div>
                  <div class="venue">Venue: <?=$event_details['event_venue']?></div>
                  <div class="time">Time: 
                    <?php
                    echo date("g:ia",strtotime($s[1]));
                    ?>
                  </div>
                </div>
                <?php if(!isset($_SESSION['usern']) ||  $_SESSION['usern']== ""){ ?>
                    <button class="btn card_btn"><a href="#" onclick = "register()">Register</a></button>
                <?php } 
                else {?>
                  <button class="btn card_btn"><a href="registration.php?ev_name=<?php echo $event_details['event_name'];?>">Register</a></button>
                 <?php } ?>
                <button class="btn card_btn"><a href = "#" class = "card-link" data-toggle = "modal" data-target = "#modalId">Read More</a></button>
              </div>
            </div>
          </li>
          <?php
        }}?>
        </ul>
  </div>
</div>
<?php
include ('include/modal.php');
?>
            <hr>
            <button class="btn2 mt-2" style="width: 15%;color:var(--link-color);height: 40px;position:relative;top: 0px;left: 22rem;background-color: var(--header-color);border-radius: 15px;border: red;margin-top: 20px;"><a href="studentlogin.php">Register</a></button>
        </div>
        </div>
    </div>
</div>
<script src="js/alert2.js"></script>
</body>
<script src="js/modal.js"></script>
<?php
include ('include/footer.php');
?>