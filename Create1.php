<?php
session_start();
include ('include/head.php');
?>
    <title>Create Event</title>
    <link rel="stylesheet" href="css/Create1.css" type="text/css">
</head>
<?php
include ('include/stud.php');
include ('include/logo.php');
?>
        <div class= "title">Create a New Event</div>
            <form action="conn.php" method="POST" enctype="multipart/form-data">
                <div class="user-details">
                    <div class = "input-box">
                        <span class = "details">Event Name</span>
                        <input type="text" required name = "event-name">
                    </div>
                    <div class = "input-box">
                        <span class = "details">Event Description</span>
                        <input type="text" maxlength="300" required name = "event-dec">
                    </div>
                    <div class = "input-box">
                        <span class = "details">Date and Time</span>
                        <input type="datetime-local" required name = "date-time">
                    </div>
                    <div class = "input-box">
                        <span class = "details">Event Venue</span>
                        <input type="text" required name = "venue">
                    </div>
                    <div class = "input-box">
                        <span class = "details">Host email(optional)</span>
                        <input type="email" name = "email">
                    </div>
                    <div class = "input-box">
                        <span class = "details">Host (or) Registration Website</span>
                        <input type="url" name = "link" id = "link">
                    </div>
                    <div class = "input-box">
                        <span class = "details">Event poster (or) Invitation</span>
                        <input type="file" name = "event_image" id ="poster">
                    </div>
                    <div class="button">
                    <input type="submit" class="submit" value = "Create" name = "submit">
                    </div>
                </div>
                
            </form>
     </div>
     <script src="js/alert.js"></script>
</body>
<?php
include ('include/footer.php');
?>