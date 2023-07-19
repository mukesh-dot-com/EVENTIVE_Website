<?php
session_start();
include ('db_conn.php');
include ('include/head.php');
?>
    <title>All Events</title>
    <link rel="stylesheet" href="css/allevents.css" type="text/css">
<style>
      .ele {
    position: sticky;
    position: -webkit-sticky;
    top: 0;
    width: 100%;
    margin: 0 0 auto 0;
    z-index: 1024!important;
    height: 58px;
    background-color: var(--header2-color);
    opacity: 1;
    transition: position .4s,opacity .2s!important;
    padding-top: 20px;
    border:2px solid var(--header2-color);
} 
.ele label {
    margin-left: 8px;
    text-align: right;
    color: var(--text-color);
}
p.log {
        font-size: 12px;
        border-radius: 20px !important;
        margin: 0px;
        width:60px;
        height: 30px;
        float: right;
        text-align: center;
        padding-right: 100px;
}
p.log a {
    border:2px solid rgb(42, 9, 73);

}
.ele img {
    padding-left: 10px;
    width: 30px;
    height: 25px;
    text-align: right;
}
.ele .log a {
    border-radius: 22px;
}
.row {
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
}
.comments {
    background-color: var(--body-color);
    width: 80%;
    margin: auto;
    padding-top: 100px;
    text-align: center;
}
.comments .row {
    display: flex;
}

.comments-col {
    flex-basis: 35%;
    border-radius: 10px;
    margin-bottom: 5%;
    text-align: left;
    background-color:rgb(155, 218, 233) !important;
    padding: 25px;
    cursor: pointer;
    display: flex;
}

.comments-col img {
    width: 40px;
    height: 40px;
    margin-left: 5px;
    margin-right: 30px;
    border-radius: 50%;
}

.comments-col p {
    padding: 0;
}
@media (max-width: 670px) {
    .comments .row{
        display: block;
    }
  }
@media (max-width: 840px)
{
    .comments .row {
        display: block;
        width: 75%;
        margin: auto;
        padding: 10px;
    }
}
      </style>
</head>
<body>
    <div class="header">
        <ul class="buttons">
            <li style="margin-left:230px;"><a href = "about us.php">About us</a></li>
        </ul>
    </div>
    <?php if(isset($_SESSION['usern']) && $_SESSION['usern']!="") { ?>
    <div class = "ele">
        <label><?php
                echo "Welcome, ".$_SESSION['usern'];
                ?>
            <img src="https://e7.pngegg.com/pngimages/522/207/png-clipart-profile-icon-computer-icons-business-management-social-media-service-people-icon-blue-company.png" alt="">
        </label>
        <p class="log"><a href = "#">Logout</a></p>
    </div>
    <?php } ?>
    <div class = "middle">
        <ul class = "head">
            <li><a href="allevents.php">Upcoming</a></li>
            <li><a href="allprev.php">Previous</a></li>
        </ul>
    </div>
    <?php
    include ('include/logo.php');
    ?>
      <div class= "title" style = "margin-top:10px;">All Ongoing Events</div>
      <div class="main">
        <ul class="cards">
        <?php
        $sql = "SELECT * FROM event_details ORDER BY event_name";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res)>0){
            while($event_details = mysqli_fetch_assoc($res)){
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
         }
        } }
         else {?>
        <div style = "text-align:center;margin:50px;">
            <h2 style = "font-family: 'Poppins',sans-serif;color:rgb(100,100,100);">You Haven't Registered For Any Of The Ongoing Events</h2>
        </div>
        <?php }?>
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
<script src="js/alert.js"></script>
<script src="js/alert2.js"></script>
<section class="comments">
        <h1>WHAT OUR STUDENT SAYS</h1>
        <div class="row">
            <div class="comments-col">
                <div>
                    <p>Hello everyone, this website is so awesome and smooth to use and I really loved it. </p>
                    <h3>Nithin BS</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="comments-col">
                <div>
                    <p>Fantastic!!! too cool to use ,and do share with your classmates as much.</p>
                    <h3>Alex</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="comments-col">
                <div>
                    <p>Fantastic!!! too cool to use ,and do share with your classmates as much.</p>
                    <h3>Alex</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>
</section>
</body>
<script src="js/modal.js"></script>
<?php
include ('include/footer.php');
?>