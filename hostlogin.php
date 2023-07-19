<?php
session_start();
$_SESSION['usern'] = "";
include ('include/head.php');
?>
 <title>Host Login</title>
    <link rel="stylesheet" href="css/hostlogin.css" type="text/css" />
  </head>
  <body>
    <div class="header">
      <ul class="buttons">
        <li><a href="allevents.php">All events</a></li>
        <li><a href="about us.php">About us</a></li>
      </ul>
    </div>
    <div class="maincontainer">
      <div class="dark">
        <img src="img/night.png" alt="" id="icon" onclick="darkmode()">
      </div>
      <div class="top">
        <a href="#top-page"
          ><img
            src="img/UP.png"
            alt=""
            id="topicon"
        /></a>
      </div>
      <div class="login-form">
        <div class="container">
          <div class="main">
            <div class="content">
              <form action="login.php" method="post">
                <p class="hostlog">Host Signin</p>
                <?php if (isset($_GET['error'])) { ?>
                    <p class = "error"><?php echo $_GET['error'];?></p>
                  <?php } ?>
                <p class="name">Host name</p>
                <input
                  type="text"
                  name="username"
                  id="username"
                  placeholder="Host name"
                  required
                  autofocus=""
                />
                <p class>Password</p>
                <input
                  type="password"
                  name="password"
                  id="password"
                  placeholder="Password"
                  required
                  autofocus=""
                /><br />
                <button type="submit" name = "submit">Login</button>
                <p class="studentlog">
                  Are you a student?<a href="studlogin.php">Student Signin</a>
                </p>
              </form>
            </div>
            <div class="form-img">
              <img src="img/host.jpg" alt=""/>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="abovfoot">
      <p class="signup">Don't you have a account?<a href="signup.php">Signup</a></p>
    </div>
  </body>
  <script src="js/dark.js">
  </script>
<?php
include ('include/footer.php');
?>
