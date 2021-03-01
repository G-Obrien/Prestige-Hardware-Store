<?php
include('configurations.php');

$bring=$_REQUEST["n"];
$showelect_query="select * from products where product_name like '%".$bring."%'";

$result = $connect->query($showelect_query);
$show="";
while ($row = mysqli_fetch_assoc($result))
{
	$show=$show."
	<a class='link-p-colr' href='details.php?product_id=".$row['product_id']."'>
		<div class='live-outer'>
            <div class='live-im px-2'>
            	<img src='".$row['product_image']."' height='50px'/>
            </div>
            <div class='live-product-det'>
            	<div class='live-product-name'>
                	<p><strong>".$row['product_name']."</strong> </p>
                </div>
                <div class='live-product-price'>
					<div class='live-product-price-text'><p>by: ".$row['product_store']."</p></div>
                </div>
            </div>
        </div>
	</a>
	"	;
}
echo $show;
