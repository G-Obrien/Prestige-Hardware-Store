<?php
require_once('control/configurations.php');
require_once('includes/component.php');
?>

<?php
$currentpage = 'collection';
include('includes/header.php');
?>

<main>
    <section id="collection">
        <div class="container py-5 ctn">

            <div class="grid py-2">
                <?php
                $result = $connect->query($querrypdts);
                while ($row = mysqli_fetch_assoc($result)) {
                    component2($row['product_name'], $row['product_type'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>

            </div>
        </div>
    </section>
</main>

<?php
include('includes/footer.php');
?>