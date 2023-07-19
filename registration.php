<?php
session_start();
include ('db_conn.php');
include ('include/head.php');
$_SESSION['eventname'] = $_GET['ev_name'];
?>
    <title>Create Event</title>
    <link rel="stylesheet" href="css/Create1.css" type="text/css">
    <style>
        .select {
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 14px;
        outline: none;
        height: 45px;
        width:100%;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
        background-color:var(--header2-color);
        padding: 5px;
        color: var(--text-color);
        }
    </style>
</head>
<?php
include ('include/stud.php');
include ('include/logo.php');
?>
<?php
    $que = "SELECT * FROM user_details";
    $res = $conn->query($que);
    if(mysqli_num_rows($res) > 0){
        while($user_details = mysqli_fetch_assoc($res)) {
            if($user_details['username']==$_SESSION['usern']){
                
?>
        <div class= "title"><?php echo $_GET["ev_name"]?> Registration</div>
            <form action="register_conn.php" method="POST" enctype="multipart/form-data">
                <div class="user-details">
                    <div class = "input-box">
                        <span class = "details">Full Name</span>
                        <input type="text" value = "<?php  echo $user_details['username'];?>" required name = "fname">
                    </div>
                    <div class = "input-box">
                        <span class = "details">USN</span>
                        <input type="text" value = "<?php echo $user_details['usn'];?>"maxlength="30" required name = "usn">
                    </div>
                    <div class = "input-box">
                        <span class = "details">Branch</span>
                        <select class = "select" name = "branch">
                            <option>Computer Science</option>
                            <option>Electronics and Communication</option>
                            <option>Information Science</option>
                            <option>Electronics and telecommunication</option>
                            <option>Civil Engineering</option>
                            <option>Aerospace Engineering</option>
                            <option>Mechanical Enginnering</option>
                            <option>Automobile Engineering</option>
                        </select>
                    </div>
                    <div class = "input-box">
                        <span class = "details">Year</span>
                        <select class = "select" name = "sem">
                            <option>1st Year</option>
                            <option>2nd Year</option>
                            <option>3rd Year</option>
                            <option>4th Year</option>
                        </select>
                    </div>
                    <div class = "input-box">
                        <span class = "details">Email</span>
                        <input type="email" value = "<?php echo $user_details['email'];?>" required name = "email">
                    </div>
                    <div class = "input-box">
                        <span class = "details">Phone Number</span>
                        <input type="text" name = "phnum" required id = "phnum">
                    </div>
                    <div class="button">
                    <input type="submit" class="submit" value = "Submit" name = "submit">
                    </div>
                </div>
            </form>
            <?php }}}?>
     </div>
     <script src="js/alert.js"></script>
</body>
<?php
include ('include/footer.php');
?>