<?php
require_once('control/configurations.php');
require_once('includes/component.php');
?>

<?php
$currentpage = 'index';
include('includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slide.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/presti.png">
    <title>Prestige Hardware Store</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<body>
    
</body>
</html>
<body>

    <!--Slider Sections  -->
    <div class="site-slider-two px-md-4">
 <div class="slider">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active one">
        <img src="assets/slider-img/45.png" class="d-block w-100" alt="selfi">
        <div class="carousel-caption d-none d-md-block">
        
          <h2 class="slide-text1">We Provide Quality in Constructions</h2>
          <h3 class="slide-text2">Find us all time you want to construct.</h3>
        </div>
      </div>
      <div class="carousel-item two">
        <h2> Plumbing Materials</h2>
        <div class="carousel-caption d-none d-md-block">
          <h2 class="slide-text1">Attractive Glass Frames and Onaments.</h2>
          <h3 class="slide-text2">From China and Japan .</h3>
        
        </div>
      </div>
      <div class="carousel-item three">
        <img src="assets/slider-img/6.png" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="slide-text1">COMPLETE APPARTMENT ON SALE.</h2>
          <h3 class="slide-text2">Prestige Hardware uganda Store.</h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
  </div>
</div>
</div>
<br>


<main class="boomer">
    <div class="py-2"></div>
    <section id="footstools" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Latest Products This Week</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrylatest);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
            </div>
        </div>
    </section>

    <section id="armchairs" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Doors and Security hardware</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrysecure);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
            </div>
        </div>
    </section>

    <section id="chaiselongues" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Water and Plumbing Materials</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrywater);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
            </div>
        </div>
    </section>
  
    <section id="daybeds" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Tools and Equipments</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrytools);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="easychairs" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Construction Materials and prodcuts</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrymaterials);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
            </div>
        </div>
    </section>
    

</main>
</body>
<?php
include('includes/footer.php');
?>