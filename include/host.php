<body>
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
            <img src="https://th.bing.com/th/id/OIP.q2VdmmRtaEpy4XZv4NUBAQHaHj?w=185&h=189&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
        </label>
        <p class="log"><a href = "#">Logout</a></p>
    </div>
    <div class = "middle">
        <ul class = "head">
            <li><a href="upcoming2.php">Upcoming</a></li>
            <li><a href="previous2.php">Previous</a></li>
            <li><a href="Create1.php">Create</a></li>
        </ul>
    </div>