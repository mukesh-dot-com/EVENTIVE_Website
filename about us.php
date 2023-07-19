<?php
session_start();
include ('include/head.php');
?>
<title>About Us</title>
<link rel="stylesheet" href="css/about us.css" type="text/css">
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
p.log a:hover {
    background-color: var(--link-color);
    width:200px;
    color: var(--button-color);
}
p.log a {
    padding: 5px;
    width: 100px;
    border-radius: 7px;
    text-decoration: none;
    color:var(--link-color);
    transition: all 0.3s ease;
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
</style>
</head>
<script src="js/dark.js"></script>
<body>
    <div class="header">
        <ul class="buttons">
            <li><a href="allevents.php">All Events</a></li>
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
    <?php
    include ('include/logo.php');
    ?>
        <div class="title">About us</div>
        <form action="#">
            <div class="user-details">
                <p>Our event website works as the online representative of your event.</p>
                <br>
                <p>Not only is it the official point of contact for you and your attendees, it is also a reflection of what your event is all about and the ideologies getting it.</p>
                <br>
                <div class="title">OUR MISSION</div>
                <br>
                <h3><img width="4%" height="4%" src="data:image/png;base64,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">
                    <b> Increase student participation</b></h3>
                <p>Our event website is the main source to provide attendees with event info, sessions, speakers, agenda and more</p>
                <br>
                <h3><img height="4%" width="4%" src="https://image.shutterstock.com/image-vector/light-bulb-black-flat-icon-260nw-1670902546.jpg">
                    <b> Introducing new and challenging ideas</b></h3>
                <p>Attendees learn everything they need to know about the meeting or event, and in turn, you gather everything needed to carry it out with digital ease.</p>
                <br>
                <h3><img height="4%" width="4%" src="https://www.seekpng.com/png/detail/824-8247877_demonstrationicon-icon-training.png">
                    <b>Education, training and volunteering programmes</b></h3>
                <p>Attendees need to recieve a lot of data that will be important for making the most of the event. The registration specifics, fees, schedule, venue map, dates, types of activities, biographies of speakers all matter.</p>
                <br>
                <h3><img height="4%" width="4%" src="https://us.123rf.com/450wm/bsd555/bsd5552110/bsd555211001825/175754508-open-ear-wireless-headphones-black-glyph-icon-bone-conduction-earphones-headset-for-sport-and-active.jpg?ver=6">
                    <b>Smooth conduction of events</b></h3>
                <p>We also organise events with IEEE, NSS, NCC, etc snd many more clubs….</p>
                <br>
                <p>No keeping track of 1000 email responses or manually tallying up information. The time and money saved on data entry administrative tasks can be used to better than event, contact more sponsors, prepare more activities, or reply faster
                    to participants.</p>
                <br>
                <p>Having to send this information individually or print it out could potentially result in chaos, so to deal with this type of situation we have made this well organised website.</p>
        </form>
        </div>
    </div>
</body>
<script src="js/alert.js"></script>
<?php
include ('include/footer.php');
?>