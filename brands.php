<?php
require_once('control/configurations.php');
require_once('includes/component.php');
?>

<?php
$currentpage = 'brands';
include('includes/header.php');
?>
<main>
    <section id="collection">
        <div class="container py-5 ctn">
            <h4 class="text-center py-1"><b>New Products on Market This Week</b></h4>
            <hr>

            <div class="grid py-2">
                <?php
                $result = $connect->query($querrypdts);
                while ($row = mysqli_fetch_assoc($result)) {
                    component3($row['product_name'], $row['product_store'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>

            </div>
        </div>
    </section>
</main>

 <!-- foot-important -->
 <div class="col-12">
                            <h6 class="font-rubik font-size-20"><b>You maybe Interested in the following!</b></h6>
                            <hr>
                            <p class="font-rale font-size-14">We provide new model with fresh looks to our customers with high quality construction materials</p>
                            <div class="materia">
                                <div class="prod-1">
                                    <img src="assets/products/materials/10.png" alt="">
                                    <button>Save for Viewing</button>
                                </div>
                                <div class="prod-1">
                                    <img src="assets/products/materials/11.png" alt="">
                                    <button>Save for Viewing</button>
                                </div>
                                <div class="prod-1">
                                    <img src="assets/products/materials/12.png" alt="">
                                    <button>Save for Viewing</button>
                                </div>
                                <div class="prod-1">
                                    <img src="assets/products/materials/9.png" alt="">
                                    <button>Save for Viewing</button>
                                </div>

                            </div>
                        </div>

<?php
include('includes/footer.php');
?>