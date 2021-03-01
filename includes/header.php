<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<!-- CSS BOOTSTRAP content delivery network- CDN-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Google fonts-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Jura&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
<!--FONT awesome CDN-->
<script src="https://kit.fontawesome.com/739d1d2ac7.js" crossorigin="anonymous"></script>
<!--CSS Links-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/boxicons.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slide.css">

    <link rel="icon" href="assets/favicon.ico">
    <title>Prestige Hardware Ug. Ltd</title>
</head>

<body>
    <header class="header">
        <script>
            /*Searching an item.. */
            function lightbg_clr() {
                $('#finder').val("");
                $('#textbox-clr').text("");
                $('#search-layer').css({
                    "width": "auto",
                    "height": "auto"
                });
                $('#locate-item').css({
                    "display": "none"
                });
                $("#finder").focus();
            };

            function fx(str) {
                var s1 = document.getElementById("finder").value;
                var xmlhttp;
                if (str.length == 0) {
                    document.getElementById("locate-item").innerHTML = "";
                    document.getElementById("locate-item").style.border = "0px";
                    document.getElementById("search-layer").style.width = "auto";
                    document.getElementById("search-layer").style.height = "auto";
                    document.getElementById("locate-item").style.display = "block";
                    $('#textbox-clr').text("");
                    return;
                }
                if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("locate-item").innerHTML = xmlhttp.responseText;
                        document.getElementById("search-layer").style.width = "100%";
                        document.getElementById("search-layer").style.height = "100%";
                        document.getElementById("locate-item").style.display = "block";
                        $('#textbox-clr').text("X");
                    }
                }
                xmlhttp.open("GET", "control/my-ajack.php?n=" + s1, true);
                xmlhttp.send();
            }
        </script>

        <!--Header-->
        <header>
<div class="metal-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-12 text-left">
             <h3 class="greetings">
              Supplier of Quality Hardware Products</h3>     
            </div>
           <div class="col-md-4 col-12 text-center">
           <H2 class="my-md-3 site-title"> PRESTIGE HARDWARE STORE </H2>
           </div> 
           <div class="col-md-4 col-12 text-right">
               <p class="my-md-4 header-links">
                    <?php
                        if (!isset($_SESSION['username'])) {
                            echo "<b  class=\"nav-item ml-md-3\">
                            <a class='px-2' class=\"btn btn-primary login-up\" href=\"signin.php\"><i class='fas fa-user-circle'></i> Log In /
                                Register</a>
                                </b>";
                        } else {
                            echo " <b  class=\"nav-item ml-md-3\">
                                <a class='px-1' class=\"btn btn-primary nav-link\" href=\"index.php?logout='1'\"><i class='fas fa-user-circle'></i>(" . $_SESSION['username'] . ") <b>Logout</b></a>
                                </b>";
                        }
                        ?>
               </p>
           </div> 
        </div>
    </div>
</div>

<div class="container-fluid menu-link">
    <div class="row">
        <div class="col-md-2 col-sm-12 col-12 text-left">
         <a href="index.php"><img src="assets/Presti.png" alt="presti-logo" id="logos"></a>
        </div> 
        
        <div class="col-md-6 col-sm-12 col-12 text-center" id="lft">

        <form class="form-inline my-2 my-lg-0 mx-auto" action="search.php" method="get">
        <input class="form-control px-2" type="text" onKeyUp="fx(this.value)" autocomplete="off" name="finder" id="finder" tabindex="1" placeholder="Search products/items by Categories & brand..." aria-label="Search">
       <div id="locate-item"></div>

        </div>
        <div id="nav" class="col-md-4 col-sm-12 col-12 text-right">
            <a href="index.php" class="px-2" title="Home"><i class="fas fa-home"></i></a>
            <a href="about.php" class="px-1" title="About-Us"><i class="fas fa-address-card"></i></a>
            <a href="help.php" class="px-2" title="Help-Line"><i class="far fa-question-circle"></i></a>
            <a href="shop.php" class="px-2" title="Shopping"><i class="fas fa-bullhorn"></i></a>
            <a href="cart.php" class="px-1" title="Cart"><i class="fas fa-cart-plus"></i>
                     <div class="cart_count ">
                      <?php

                       if (isset($_SESSION['cart'])) {
                               $count = count($_SESSION['cart']);
                           echo "<span id=\"cart_count\" class=\"text-success \">$count</span>";
                             } else {
                             echo "<span id=\"cart_count\" class=\"text-success\">0</span>";
                         }

                         ?>
                       </div>
                     </div>                 
          </a>
          
          <img src="assets/logo/menu.png" alt="menu-logo" class="menu-logo" onclick="menuToggle()">
        </div> 
       
    </div>
    
</div> 
<!---JS for menu toggle--->
<script>

    var MenuItems = document.getElementById("nav");

    MenuItems.style.maxWidth = "0%";
    function menuToggle(){
        if (MenuItems.style.maxWidth == "0%" || MenuItems.style.maxHeight == "0%") {
            MenuItems.style.maxWidth = "82%";
            MenuItems.style.maxHeight = "80%";
            
        }
        else{
            MenuItems.style.maxWidth = "0%"; 
        }
    }
</script>

<!--  Above is end of search bar and navigation bar..-->             

        <nav class="navbar navbar-expand-md navbar-light bg-light sub-menu">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbar">
   
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item <?php echo $currentpage == 'index' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo $currentpage == 'index' ? '#' : 'index.php' ?>">Building & Construction</a>
                        </li>
                        <li class="nav-item <?php echo $currentpage == 'electronic' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo $currentpage == 'electronic' ? '#' : 'electronic.php' ?>">Electrical & Wirring</a>
                        </li>
                        <li class="nav-item <?php echo $currentpage == 'water-plumb' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo $currentpage == 'water-plumb' ? '#' : 'water-plumb.php' ?>">Water & Plumbing</a>
                        </li>
                        <li class="nav-item <?php echo $currentpage == 'tools' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo $currentpage == 'tools' ? '#' : 'tools.php' ?>"> Tools & Furnitures</a>

                        </li>
                        <li class="nav-item <?php echo $currentpage == 'brands' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo $currentpage == 'brands' ? '#' : 'brands.php' ?>">Latest Products</a>
                        </li>
                        <li class="nav-item <?php echo $currentpage == 'contact' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo $currentpage == 'contact' ? '#' : 'contact.php' ?>">Contact</a>
                        </li>
                        <?php if (isset($_SESSION['username'])) : ?>
                            <li class="nav-item <?php echo $currentpage == 'account' ? 'active' : '' ?>">
                                <a class="nav-link" href="<?php echo $currentpage == 'account' ? '#' : 'account.php' ?>">Account</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-10 pl-0">
                            <?php
                            if (!isset($_SESSION['username'])) {
                                echo " <a class=\"btn btn-primary login-up\" href=\"signin.php\"><i class=\"bx bxs-user-circle mr-1 bx-sm\"></i> Log In /
                                Register</a>";
                            } else {
                                echo "<a class=\"btn btn-primary nav-link\" href=\"index.php?logout='1'\"><i class=\"bx bxs-user-circle mr-1 bx-sm\"></i>(" . $_SESSION['username'] . ") <b>Logout</b></a>";
                            }
                            ?>
                            <!-- <a class="btn btn-primary" href="signin.php"><i class="bx bxs-user-circle mr-1"></i> Log In</a> -->
                        </div>

                        <div class="col-2 text-left">
                            <button type="button" id="sidebarCollapseX" class="btn btn-link">
                                <i class="bx bx-x icon-single"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="list-unstyled components links">
                <li class=" <?php echo $currentpage == 'index' ? 'active' : '' ?>">
                    <a href="<?php echo $currentpage == 'index' ? '#' : 'index.php' ?>"><i class="bx bx-home mr-3"></i> Home</a>
                </li>
                <li class=" <?php echo $currentpage == 'electronic' ? 'active' : '' ?>">
                    <a href="<?php echo $currentpage == 'electronic' ? '#' : 'electronic.php' ?>"><i class="bx bx-carousel mr-3"></i> electronic</a>
                </li>
                <li class=" <?php echo $currentpage == 'water-plumb' ? 'active' : '' ?>">
                    <a href="<?php echo $currentpage == 'water-plumb' ? '#' : 'water-plumb.php' ?>">
                </li>
                <li class=" <?php echo $currentpage == 'tools' ? 'active' : '' ?>">
                    <a href="<?php echo $currentpage == 'tools' ? '#' : 'tools.php' ?>"><i class="bx bx-help-circle mr-3"></i> tools Us</a>
                </li>
                <li class=" <?php echo $currentpage == 'brands' ? 'active' : '' ?>">
                    <a href="<?php echo $currentpage == 'brands' ? '#' : 'brands.php' ?>"><i class="bx bx-crown mr-3"></i> Brands</a>
                </li>
                
                <li class=" <?php echo $currentpage == 'contact' ? 'active' : '' ?>">
                    <a href="<?php echo $currentpage == 'contact' ? '#' : 'contact.php' ?>"><i class="bx bx-phone mr-3"></i> Contact Us</a>
                </li>
            </ul>

            <h6 class="text-uppercase mb-1"><b>Categories</b></h6>
            <ul class="list-unstyled components mb-3">
                <li class="lnk">
                    <a href="index.php#armchairs">Armchairs</a>
                </li>
                <li>
                    <a href="index.php#chaiselongues">Chaise longues</a>
                </li>
                <li>
                    <a href="index.php#cushions">Cushions</a>
                </li>
                <li>
                    <a href="index.php#daybeds">Daybeds</a>
                </li>
                <li>
                    <a href="index.php#easychairs">Easychairs</a>
                </li>
                <li>
                    <a href="index.php#footstools">Footstools</a>
                </li>
                <li>
                    <a href="index.php#kidssofas">Kidssofas</a>
                </li>
                <li>
                    <a href="index.php#poufs">Poufs</a>
                </li>
                <li>
                    <a href="index.php#smallsofas">Smallsofas</a>
                </li>
                <li>
                    <a href="index.php#sofa">Sofa</a>
                </li>
            </ul>

            <ul class="social-icons">
                <li><a href="#" target="_blank" title=""><i class="bx bxl-github"></i></a></li>
                <li><a href="#" target="_blank" title=""><i class="bx bxl-twitter"></i></a></li>
                <li><a href="#" target="_blank" title=""><i class="bx bxl-facebook"></i></a></li>
                <li><a href="#" target="_blank" title=""><i class="bx bxl-instagram"></i></a></li>
            </ul>

        </nav>
</header>
    <!--Greeting texts... -->
    <script>
    /* Dont mind of this codes */
    let getBody = document.main;
    let newElement = document.createElement("h5");
    let newElementTwo = document.createElement("h6");

    let date = new Date();
    let currentHour = date.getHours();

    let createTextSMS;
    let welcome;
    welcome = "You are most Welcome to Quality Hardware Store.";
    if (currentHour >= 0 && currentHour < 12) {
        createTextSMS = "Good Morning dear";
    } else if (currentHour >= 12 && currentHour < 15) {
        createTextSMS = "Good Afternoon dear";
    }
    else if (currentHour >= 15 && currentHour < 21) {
        createTextSMS = "Good Evening dear";
    }
    else if (currentHour >= 21 && currentHour < 23.59) {
        createTextSMS = "Good Night dear";
    }
    else {
        createTextSMS = "Hi dear..! Are You from a different Plannet?:0";
    }
    //this is the text message to be echoed out.
    let createEleText = document.createTextNode(createTextSMS);
    let welcomeText = document.createTextNode(welcome);
    newElement.appendChild(createEleText);
    newElementTwo.appendChild(welcomeText);
    //now i will display the text in the web page using the following
    getBody.appendChild(newElement);
    getBody.append(newElementTwo);
</script>
<!--/Header-->

    <div id="search-layer" onclick="lightbg_clr()"></div>
