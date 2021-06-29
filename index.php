<?php 
error_reporting(0);
session_start();
if($_SESSION['user']){
    $username = $_SESSION['user'];
}
else{
    $username = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T-shirt Selling</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/index_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="./assets/png/nav-home.png"/>
    
</head>
<body id="bodydiv">  
<header>
    <div class="headerdiv"  id="menu">
        <div id="head">I_am_engineer_co</div>
        <div class="headerele selected"><a href="#1">Home</a></div>
        <div class="headerele"><a href="#2">Shop</a></div>
        <div class="headerele"><a href="#3">About Us</a></div>
        <div class="headerele"><a href="#4">Contact Us</a></div>
        <div  class="dropdown">
                <div class="headerele dropdown"><a href="./PHP/login.php" class="">LogIn <i class="fa fa-caret-down"></i></a>
                <div class="dropdown-content">
                     <a href="./PHP/logout.php">LogOut</a>
                </div>
            </div>
        </div>
        <div class="headerele"><a href="./PHP/order.php">Orders</a></div>    
        <div class="headerele"><a href="./PHP/cart.php"><img src="./assets/png/cart.png" alt="Could'n find"></a></div>
        <div class="headerele" id="user"><?PHP echo $username; ?>
              </div>
        <div class="navmenu"><img src="./assets/png/menu.png" alt="Could'n find" onclick="navbar()"></div>
    </div>
    <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>  
</header>
<div class="home" id="1">
    <div class="homeimg"></div>
    <div class="outdiv">
        <h1>EASY START WITH I_AM_ENGINEER_CO</h1>
        <h2>We are team of talented designers and programmer making and selling t-shirts</h2>
        <a class="btn btn-1" href="#2">GET STARTED</a>
        <div class="social">
            <img src="./assets/png/instagram.png" alt="">
            <img src="./assets/png/facebook.png" alt="">
            <img src="./assets/png/twitter.png" alt="">
            <img src="./assets/png/linkedin.png" alt="">
        </div>  
    </div>
</div>
<div class="shop" id="2">
    <div class="shopimg"></div>
    <div class="shopoutdiv">
        <div class="imgmaindiv">

        </div>
        <div class="next">
            <a href="./PHP/shop.php"><button class="explore"><span>Explore more </span></button></a>
        </div>
    </div>
</div>
<div class="about" id="3">
    <div class="aboutimg"></div>
    <div class="aboutmain">
        <div class="aboutmaincontent" data-aos="zoom-out" data-aos-duration="1000">
             <p>We bring you the trendiest and most exclusive brands from around the world to your wardrobe. Forget scouring the net for what’s hot globally, we’ve got you  covered.</p>
                <p>Why let a world that loves to police your wardrobe and your exression get the upper hand, anyway?</p>
               <p>Our daily trend spotlight that lets you in on what’s hip and happening, and what you should be carting right now. Like they say, a trend each day keeps the blues away!</p>
        </div>    
        <div class="aboutsocial">
                <img src="./assets/png/instagram.png" alt="">
                <img src="./assets/png/facebook.png" alt="">
                <img src="./assets/png/twitter.png" alt="">
                <img src="./assets/png/linkedin.png" alt="">
            </div>   
    </div>
</div>
<div class="contact" id="4">
    <!-- <div class="contactimg"></div> -->
    <div class="contactoutdiv">
        <div>
            <h1 class="getin">GET IN TOUCH</h1>
        </div>     
            <div class="contactmaincontent">
                <div class="innercontact" data-aos="fade-right">
                    <span><img src="./assets/png/address.png" alt=""></span>
                    <h1>ADDRESS</h2>
                    <h2>Welfield Group Contracting</h2>
                    <font>146, Yamuna Street <br> Denver CO 8D223</font>
                    <h2>Northern Division Office</h2>
                    <font>1270 Automation Drive <br> Windsor CO 8D550</font>
                </div>
                <div class="innercontact" data-aos="fade-up">
                    <span><img src="./assets/png/call.png" alt=""></span>
                    <h1>PHONE</h1>
                    <h2>Welfield Group Contracting</h2>
                    <font>303,428,2011 Phone <br> 303,202,04866 Facsimile</font>
                    <h2>Welfield 24/7 Service Department</h2>
                    <font>303,428,2011 <br> Then press 3 for emergemcy called</font>
                    <h2>Northern Division Office</h2>
                    <font>303,428,2011 Phone <br> 303,202,04866 Facsimile</font>
                    <h2>Wyoming Office</h2>
                    <font>307,218,2012 Phone</font>
                </div>
                <div class="innercontact "data-aos="fade-left">
                    <span><img src="./assets/png/gmail.png" alt=""></span>
                    <h1>EMAIL</h1>
                    <h2>Request for proposal</h2>
                    <font>info@iamengineer.com</font>
                    <h2>Electrical Service call</h2>
                    <font>service@iamengineer.com</font>
                    <h2>Employment Opportunities</h2>
                    <font>careers@iamengineer.com</font>
                </div>
            </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw==" crossorigin="anonymous"></script>
<script type="text/javascript" src="javascript/index.js"></script>
<script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};
function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script>


<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
    hljs.initHighlightingOnLoad();
    $('.hero__scroll').on('click', function(e) {
        $('html, body').animate({
            scrollTop: $(window).height()
        }, 1200);
    });
</script>
<script>
    
function index(){
    $.post('PHP/shophome.php',function(data,status){
        document.getElementsByClassName("imgmaindiv")[0].innerHTML = data;
    })
}
index();
// window.history.forward(); 
//         function noBack() { 
//             window.history.forward(); 
//         } 
</script>
<script>
    function navbar(){
        var elems = document.getElementsByClassName("headerele");
        
            if((elems[0].style.visibility != 'visible') & (document.getElementById("menu").style.flexDirection != 'column')) {
                    for (var i=0; i<elems.length; i++){
                    document.getElementById("menu").style.flexDirection = 'column';     
                    elems[i].style.visibility = 'visible';
                    document.getElementById("head").style.visibility = 'hidden';
                    document.getElementById("menu").style.animation = 'fadeInAnimation ease 2s';
                    document.getElementById("menu").style.animationIterationCount = '1';
                    document.getElementById("menu").style.animationFillMode = 'forwards';
                }
            }
            else if((elems[0].style.visibility != 'hidden') & (document.getElementById("menu").style.flexDirection != 'row')){
                for (var i=0; i<elems.length; i++){
                    document.getElementById("menu").style.flexDirection = 'row';     
                    elems[i].style.visibility = 'hidden';
                    document.getElementById("head").style.visibility = 'visible';
                }
            }
            $('.headerele').on('click', function(e){
        var elems = document.getElementsByClassName("headerele");
        if((elems[0].style.visibility != 'hidden') & (document.getElementById("menu").style.flexDirection != 'row')){
                for (var i=0; i<elems.length; i++){
                    document.getElementById("menu").style.flexDirection = 'row';     
                    elems[i].style.visibility = 'hidden';
                    document.getElementById("head").style.visibility = 'visible';
                }
            }
    })
}
</script>
</body>
</html>