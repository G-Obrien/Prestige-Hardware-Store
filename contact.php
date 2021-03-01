<?php
require_once('control/configurations.php');
?>

<?php
$currentpage = 'contact';
include('includes/header.php');
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="container py-5">
                        <h2>CONTACT US FOR HELP</h2>
                        <h6><i class="bx bx-current-location color-primary"></i><b> Address</b></h6>
                        <p>Nakawa Division, Opp URA Building, Kampala, UGANDA</p>
                        <h6><i class="bx bx-phone color-primary"></i><b> Phone</b></h6>
                        <p>+256 787702968 <b>|</b> +256 755700955</p>
                        
                    </div>
                </div>
               
            </div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="assets/products/materials/8.jpg" height="400px" alt="">
                </div>
                <div class="col-md-6">
                    <div class="container py-5">
                        <h2>CONTACT NOW</h2>
                        <form action="#">
                            <input class="form-control col-12 my-2" type="text" placeholder="Name">
                            <input class="form-control col-12 my-2" type="text" placeholder="Email">
                            <input class="form-control col-12 my-2" type="text" placeholder="Website">
                            <textarea class="form-control col-12 my-2 py-5" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-warning rounded-pill my-2"><b>SUBMIT</b></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section></section>
</main>

<?php
include('includes/footer.php');
?>