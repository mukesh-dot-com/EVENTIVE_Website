<?php
session_start();
include ('db_conn.php');
include ('include/head.php');
?>
    <title>Upcoming Events</title>
    <link rel="stylesheet" href="css/upcoming2.css" type="text/css">
</head>
<script src="js/dark.js"></script>
<?php
include ('include/stud.php');
include ('include/logo.php');
?>
      <div class= "title">Your Previous Events</div>
      <div class="main">
        <ul class="cards">
        <?php
        include ('db_conn.php');
        $usn = "";
        $username = $_SESSION['usern'];
            $q = "SELECT * FROM user_details";
            $result = $conn->query($q);
            while($event = mysqli_fetch_assoc($result)){
                if($event['username']==$_SESSION['usern']){
                    $usn = $event['usn'];
                    break;
                }
            }
        $_SESSION['usn'] = $usn;
        $sql = "SELECT * FROM event_details";
        $res = $conn->query($sql);
        if(mysqli_num_rows($res) > 0){
            while($event_details = mysqli_fetch_assoc($res)) {
              if($usn == $event_details['usn']) {
                  $s = explode(" ",$event_details['date_time']);
                  if((strtotime($s[0])) < (strtotime(date("d-m-Y")))){
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
                <button class="btn card_btn"><a href = "#" class = "card-link" data-toggle = "modal" data-target = "#modalId">Read More</a></button>
              </div>
            </div>
            </li>
          <?php
         }
        } }}
         else {?>
        <div style = "text-align:center;margin:50px;">
            <h2 style = "font-family: 'Poppins',sans-serif;color:rgb(100,100,100);">You Haven't Created any Events2</h2>
        </div>
        <?php }?>
        </ul>
  </div>
</div>
<?php
include ('include/modal.php');
?>
            <hr>
        </div>
        </div>
    </div>
</div>
<script src="js/alert.js"></script>
</body>
<script src="js/modal.js"></script>
<?php
include ('include/footer.php');
?>