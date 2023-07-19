<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en" id="top-page">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" url = "new_user.php"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp</title>
    <link
      rel="icon"
      href="https://idevs.io/works/img/blurb-logo.png"
      type="image/icon type"
    />
    <link
      rel="icon"
      href="https://idevs.io/works/img/blurb-logo.png"
      type="image/icon type"
    />
    <link rel="stylesheet" href="css/signup.css" type="text/css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      type="text/css"
    />
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
            <div class="content" id="form">
              <form  action = "new_user.php" id="form" method="post">
                <p class="hostlog">Signup</p>
                <div class="form-control">
                  <label for="username">USN</label>
                  <input
                    id="username"
                    name="usn"
                    type="text"
                    placeholder="USN"
                    autofocus=" "
                    required
                  />
                  <div class="error"></div>
                </div>
                <div class="form-control">
                  <label for="username">Username</label>
                  <input
                    id="username"
                    name="username"
                    type="text"
                    placeholder="User name"
                    autofocus=" "
                    required
                  />
                  <div class="error"></div>
                </div>
                <div class="form-control">
                  <p class="name">Type of user</p>
                  <select id="mySelect" name = "select">
                    <option>Choose Type</option>
                    <option>Student</option>
                    <option>Host</option>
                  </select>
                  <div class="error"></div>
                </div>
                <div class="form-control">
                  <label for="email">E-mail</label>
                  <input
                    id="email"
                    name="email"
                    type="text"
                    placeholder="user e-mail"
                    autofocus=" "
                  />
                  <div class="error"></div>
                </div>
                <div class="form-control">
                  <label for="password">Create Password</label>
                  <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Create Password"
                    autofocus=" "
                    required
                  />
                  <div class="error"></div>
                </div>
                <div class="form-control">
                  <label for="password2">Confirm Password</label>
                  <input
                    id="password2"
                    name="password2"
                    type="password"
                    placeholder="Confirm Password"
                    autofocus=" "
                    required
                  />
                  <div class="error"></div>
                </div>
                <button type="submit" class="submit" name = "submit">sign up</button>
              </form>
            </div>
            <div class="form-img">
              <img src="img/singaa.png" alt="" width="400" height="582" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="abovfoot">
      <p class="signup">Already have a account?<a href="hostlogin.php">Signin</a></p>
    </div>
  </body>
  <?php
  include ('include/footer.php');
  ?>