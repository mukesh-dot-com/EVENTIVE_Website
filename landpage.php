<?php
session_start();
$_SESSION['usern'] = "";
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Eventive</title>
    <link rel="stylesheet" href="css/landingpage.css">
    <link
      rel="icon"
      href="https://idevs.io/works/img/blurb-logo.png"
      type="image/icon type"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gsticky.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/26f230bae0.js" crossorigin="anonymous"></script>
    <script src="dark.js"></script>
</head>
<?php
include ('include/logo.php');
?>
    <section class="header">
        <nav>
            <a href="landpage.html"><img src="https://upload.wikimedia.org/wikipedia/en/8/87/BMS_College_of_Engineering.svg"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()" id="cross"></i>
                <ul>
                    <li><a href="https://www.bmsce.ac.in/">BMSCE</a></li>
                    <li><a href="allevents.php">ALL EVENTS</a></li>
                    <li><a href="hostlogin.php">SIGN IN</a></li>
                    <li><a href="about us.php">ABOUT US</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
        <h1>EVENTIVE</h1>
            <p>ONE PLATFORM. ONE PROCESS. ALL EVENTS</p>
                <marquee><p>Meet the easiest event registering solution for virtual, and hybrid events represented by the college.</p></marquee>
            <a href="allevents.html" class="hero-btn">Visit to know more</a>
        </div>
    </section>
    <script>
        var navlinks = document.getElementById("navLinks");

        function showMenu() {
            navlinks.style.right = "0";
            navlinks.style.color = "rgb(42, 9, 73)";
        }

        function hideMenu() {
            navlinks.style.right = "-200px";
            navlinks.style.color = "white";
        }
    </script>
    <!----course---->
    <section class="course">
        <h1> OUR COLLABORATIONS</h1>
        <p>We have made some collaborations with some of the succesful clubs managed by our seniors.</p>
        <div class="row">
            <div class="course-col">
                <a href="https://aerobmsce.000webhostapp.com/"><img src="https://scontent.fblr24-1.fna.fbcdn.net/v/t1.18169-9/18193721_1462794043794543_1153685355517803622_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=Ifl4LOLaxNoAX9v_jzV&_nc_ht=scontent.fblr24-1.fna&oh=00_AT_7dHWZnCDP26esqV1OMNYldAmMfui_j6RnvCyXpxqR8A&oe=62821A3B"></a>
            </div>
            <div class="course-col">
                <a href="https://bmscerotaract.wordpress.com/"> <img src="data:image/jpeg;base64,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">
                </a>
            </div>
            <div class="course-col">
                <a href="https://phaseshift.bmsce.in/"> <img src="https://phaseshift.bmsce.in/pslogo.webp">
                </a>
            </div>
            <div class="course-col">
                <a href="https://bmsce.ac.in/home/BMSCE-Upagraha"> <img src="data:image/jpeg;base64,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">
                </a>
            </div>
            <div class="course-col">
                <a href="http://www.bmsceieee.com/home"><img src="https://avatars.githubusercontent.com/u/19934430?s=200&v=4"></a>
            </div>
        </div>
    </section>
    <section class="facilities">
        <h1>OUR GOALS
        </h1>
        <div class="row">
            <div class="facilities-col">
                <img src="https://media.istockphoto.com/photos/time-management-picture-id546018942?b=1&k=20&m=546018942&s=170667a&w=0&h=wmSvoVUySD1gOUNDx1JfMJVdzyX1VNzcBS-ebOZpWPY=">
                <h3>TIME MANAGEMENT</h3>
                <p>Be completely ready within the event schedule.</p>
            </div>
            <div class="facilities-col">
                <img src="https://icssindia.in/images/c7.jpg">
                <h3>INCREASED PARTICIPATION</h3>
                <p>Increase students participation in the events.</p>
            </div>
            <div class="facilities-col">
                <img src="https://c1.wallpaperflare.com/preview/598/752/914/hand-team-work-together.jpg">
                <h3>HELPING HAND</h3>
                <p>Education, training, skill development and volunteering programs.</p>
            </div>
        </div>
    </section>
    <!----comments----->
    <section class="comments">
        <h1>WHAT OUR STUDENT SAYS</h1>
        <div class="row">
            <div class="comments-col">
                <img src="https://guidetoiceland.imgix.net/318406/x/0/iurie-vestrahorn-brunnhorn-jpg">
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
                <img src="https://th.bing.com/th/id/OIP.QS92zhTUNyK1URo0mjOw2QHaEK?pid=ImgDet&rs=1">
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
    </div>
</body>
<?php
include ('include/footer.php');
?>