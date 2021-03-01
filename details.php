
<?php

require_once('control/configurations.php');
require_once('includes/detail.php');
?>

<?php
$currentpage = 'details';
include('includes/header.php');
?>
<main>
    <?php
    $item_id = $_GET['product_id'];
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");
    } else {
    }
    foreach ($result as $item) :
        if ($item['product_id'] == $item_id) :
    ?>
            <section id="product" class="py-3">
                <div class="container">
                    <div class="row">
                    <div class="col-md-6">
                            <img src=" <?php echo $item['product_image'] ?>" alt="product" class="img-fluid">
                            <div class="form-row pt-4 font-size-16 font-baloo">
                                <div class="col">
                                    <button type="submit" class="btn btn-secondary form-control">Add to whishlist</button>
                                </div>
                                <div class="col">
                                    <form action="details.php" method="post">
                                        <?php if (in_array($item_id, $item_array_id ?? [])) : ?>
                                            <button type="submit" name="add" class="btn btn-warning font-size-16 form-control" disabled>Add to Cart</button>
                                        <?php else : ?>
                                            <button type="submit" name="add" class="btn btn-warning font-size-16 form-control">Add to Cart</button>
                                        <?php endif; ?>
                                        <input type='hidden' name='product_id' value='<?php echo $item_id ?>'>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 py-5">
                            <h5 class="font-baloo font-size-24"><b><?php echo $item['product_name'] ?></b></h5>
                            <small>From <?php echo $item['product_store']." Main Store" ?> </small>
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="bx bx-star"></i></span>
                                    <span><i class="bx bx-star"></i></span>
                                    <span><i class="bx bx-star"></i></span>
                                    <span><i class="bx bx-star"></i></span>
                                    <span><i class="bx bx-star"></i></span>
                                </div>
                                <a href="#" class="px-2 font-rale font-size-14"> 2034 Ratings Sales Weekly.</a>
                            </div>
                            <hr class="m-0">

                            <table class="my-3">
                                <br>
                                <tr class="font-rale font-size-14">
                                    <td>Product Cost:</td>
                                    <td class="font-size-20 ">  <span><b> UGX: <?php echo $item['product_price'] ?></b></span>/=
                                </td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td><p>Buy in Large Quantities to Save up to <span class="font-size-14 text-danger">35%</span></p></td>
                                </tr>
                            </table>

                        
                            <br>
                            <div class="col-8">
                                <div class="qty d-flex">
                                    <h6 class="font-baloo py-2"><b>Quantity:</b></h6>
                                    <div class="px-4 d-flex font-rale btn-bx">
                                        <input type="number" name="item-qty" id="" placeholder="1" class="increases-item-qty">
                                    <'lIR:
    �0       $ 0"       ! �     </div>
               �0  $ 0"`  �</&iv:
                        </div>  $             0 `(    |br<br>
       `               <div class="col-12">
                            <h6 class="font-rubik(fOjt-size-20">4b]me(,iybe InterEs�ud in the follgwIjg!</b.<o`6>
       `          �  b     <hr>
           `        $ 0"   <p class="font-rale font-size-14":Wt"�rovidd �ew modem �ith fse�h hoiw"dd!�ur customers with high quality construcui�n materiAl�,/p>
                            <div class="ma�er+a">
         �0  " (!               <div cdaSw=*pVjt�1"> 0"     $ 0"                " (!    <img src="awsuvs/products/materials/10.png2 1d5�2>
  $ 8" $                         $`0>Cuttol<[hwe for Viewing</button>
               (  $          $ 0?/�Iv�                         ( $�  <div class="prod-1">
                                 $ 0>im� s0c="assets/products/-atDrials/11.png" alt="">
        �0   0 d80b(         $ 0"   <button>Sav% fNv NkEsing</`u|ugn                                <�di4>
                              !��div clasq=jqrNd-1">
    `      0 `(            �0      <img src="assEt�?products/materials/12.png* Aht="">
                      0$`8"         <butpo~<Save for Viewing=?�5|ton>
              0 `(  p b	(  �    <'dIr>
      `     `  �0   0 `(       =d�v class="prod-1"~
                             ! �   <img src="as3etR/products/materials/9.pNg�0alt="">
               �0                   <button>Sava vmr Viewing</b5ttLn6   ! �              0           </div>

    (  $     �0             </div>
                        >�|hv> 0"        0  (    </div>
   " (!" (!     </�iv|�  j  $  �0 �  b <?php
         `     // detail($item['Pr�tuct_name'], $It�}[p�duct_store'U,  item['product_price'], $item['product_image'], $item['product_id']);
      ! �       ?>
    �0      </sectio.>
   <?php
        endif;
    e�df-reach;
    ?>
</la�n>

<?php
include('includes/footer.php');
?>