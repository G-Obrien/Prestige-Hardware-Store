<?php

include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>prestige.co.ug</title>
 <!-- CSS BOOTSTRAP content delivery network- CDN-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Google fonts-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Jura&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
<!--FONT awesome CDN-->
<script src="https://kit.fontawesome.com/739d1d2ac7.js" crossorigin="anonymous"></script>
<!--CSS Links-->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/cart.css">
</head>
<body>

<main>
<!--Items Added to cart appear here..! -->
<div class="small-container cart-page">
<table>
    <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
    </tr>
    <tr>
        <td>
         <div class="cart-info">
           <img src="assets/products/1-harmer.jpg">
           <div>
            <p>Claw-Hammer</p>
            <small>Price: UGX: 10,000.00/=</small>
            <br>
            <a href="">Remove</a>
           </div>
        </div>
        </td>
        <td><input type="number" value="1" name="qnty-prod" id="prod-qty"></td>
        <td>UGX: 10,000.00/=</td>
    </tr>
    <tr>
        <td>
         <div class="cart-info">
           <img src="assets/products/3-screw.jpg">
           <div>
            <p>Ply-wood Screws</p>
            <small>Price: UGX: 5,000.00/=</small>
            <br>
            <a href="">Remove</a>
           </div>
        </div>
        </td>
        <td><input type="number" value="1" name="qnty-prod" id="prod-qty">Packets</td>
        <td>UGX: 5,000.00/=</td>
    </tr>
    <tr>
        <td>
         <div class="cart-info">
           <img src="assets/products/sofa-1.jpg">
           <div>
            <p>Sofa Set, with Table-Stool</p>
            <small>Price: UGX: 430.000.00/=</small>
            <br>
            <a href="">Remove</a>
           </div>
        </div>
        </td>
        <td><input type="number" value="1" name="qnty-prod" id="prod-qty"></td>
        <td>UGX: 430,000.00/=</td>
    </tr>
    <tr>
        <td>
         <div class="cart-info">
           <img src="assets/products/tile-stool.jpg">
           <div>
            <p>Tile Stool</p>
            <small>Price: UGX: 45.000.00/=</small>
            <br>
            <a href="">Remove</a>
           </div>
        </div>
        </td>
        <td><input type="number" value="1" name="qnty-prod" id="prod-qty"></td>
        <td>UGX: 45,000.00/=</td>
    </tr>   
</table>
<div class="total-price">
    <table>
        <tr>
            <td>Subtotal</td>
            <td>UGX: 490,000.00/=</td>
        </tr>
        <tr>
            <td>Tax</td>
            <td>UGX: 20,000.00/=</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>UGX: 470,000.00/=</td>
        </tr>
    </table>
</div>

</div>




</main>
<!--Main body ends here.. -->

<!--FOOTER-->
<?php

include 'footer.php';

?>

<!-- JS Bootstrap CDN -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
 integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>