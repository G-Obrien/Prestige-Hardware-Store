

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <title>header page</title>
</head>
<body>
     <!-- CSS BOOTSTRAP content delivery network- CDN-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Google fonts-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Jura&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
<!--FONT awesome CDN-->
<script src="https://kit.fontawesome.com/739d1d2ac7.js" crossorigin="anonymous"></script>
<!--CSS Links-->
<script src="js/modal.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slide.css">
</head>
<body>
    <!--COLORS
        Header> #315fb4, 
        foot-link > #0c39ac
        Footer> #03063b   
        bg color> #f9f9fd
        -->
        <!--Header-->
<header>
<div class="metal-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-12 text-left">
             <P class="greetings">
              Supplier of Hardware Products</P> 
             
<script>
    /* Dont mind of this codes */
    let getBody = document.body;
    let newElement = document.createElement("h1");
    let newElementTwo = document.createElement("h3");

    let date = new Date();
    let currentHour = date.getHours();

    let createTextSMS;
    let welcome;
    welcome = "You are most Welcome..! Feel Free to Shop Quality with Us.";
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
              
            </div>
           <div class="col-md-4 col-12 text-center">
           <H2 class="my-md-3 site-title"> PRESTIGE BUILDING & CONSTRUCTION HARDWARE (U) LIMITED</H2>
           </div> 
           <div class="col-md-4 col-12 text-right">
               <p class="my-md-4 header-links">
                    <a href="login.php"  class="px-2">Sign In</a>
                    <a href="signup.php" class="px-1">Create an Account</a>
               </p>
           </div> 
        </div>
    </div>
</div>

<div class="container-fluid menu-link">
    <div class="row">
        <div class="col-md-2 col-sm-12 col-12 text-left">
         <a href="index.php"><img src="assets/logo/Presti.png" alt="presti-logo"></a>
        </div> 
        
        <div class="col-md-6 col-sm-12 col-12 text-center" id="lft">
        <p class="search-bar">
          <input type="search" name="" id="find-items" placeholder="Search products/items by Categories & brand..." class="px-2"> 
            <button type="submit" class="sas px-2">Search</button>
         </p>
        </iv>
        <div id="nav" class="col-md-4 col-sm-12 col-12 text-right">
            <a href="index.php" class="px-2">Home</a>
            <a href="about.php" class="px-1">About</a>
            <a href="shop.php" class="px-2">Shop</a>
            <a href="help.php" class="px-2">Help</a>
            <a href="manage/admin.php" class="px-1">Admin</a>
            <a href="cart.php" class="px-1">Cart
                <div class="cart_container">
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
               </div>
          </a>
        </div> 
        <img src="assets/logo/menu.png" alt="menu-logo" class="menu-logo" onclick="menuToggle()">
        <div class="menu-logo">
            <h3 onclick="menuToggle()">MENU</h3>
        </div>
    </div>
</div> 
<!---JS for menu toggle--->
<script>

    var MenuItems = document.getElementById("nav");

    MenuItems.style.maxWidth = "0%";
    function menuToggle(){
        if (MenuItems.style.maxWidth == "0%") {
            MenuItems.style.maxWidth = "100%";
            
        }
        else{
            MenuItems.style.maxWidth = "0%"; 
        }
    }
</script>

</header>
<!--/Header-->
</body>
</html>