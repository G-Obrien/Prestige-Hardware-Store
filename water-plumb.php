<?php
require_once('control/configurations.php');
require_once('includes/component.php');
?>

<?php
$currentpage = 'latest';
include('includes/header.php');
?>

<main>
<div class="py-2"></div>
    <section id="latest" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Our latest Additions</b></h4>
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
</main>

<?php
include('includes/footer.php');
?>