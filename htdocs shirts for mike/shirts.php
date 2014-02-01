<?php
$products = array();

$products[101] = array(
    "name" => "Logo Shirt, Red",
    "img" => "img/shirts/shirt-101.jpg",
    "price" => 18,
    "paypal" => "RKG9QUFH6FYS8"   
);
$products[102] = array(
    "name" => "Mike the Frog Shirt, Black",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20,
    "paypal" => "S6NRDHC3NRAS4" 
);
$products[103] = array(
    "name" => "Mike the Frog Shirt, Blue",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20,
    "paypal" => "K9L3ER6W4FM58"
);
$products[104] = array(
    "name" => "Logo Shirt, Green",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18,
    "paypal" => "L3KCTBSD6CMSW"
);
$products[105] = array(
    "name" => "Mike the Frog Shirt, Yellow",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25,
    "paypal" => "QNRWKJHVLPRCN"
);
$products[106] = array(
    "name" => "Logo Shirt, Gray",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 20,
    "paypal" =>  "SH92XRMLSW3CL"
);
$products[107] = array(
    "name" => "Logo Shirt, Turquoise",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 20,
    "paypal" => "NZSW7H72C259N"
);
$products[108] = array(
    "name" => "Logo Shirt, Orange",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 25,
    "paypal" => "Q4D49WBHRWWG8"
);

?>

<?php
$pageTitle = "Mike's Full Catalog of Shirts";
$section = "shirts";
include('inc/header.php'); ?>

<div class="section shirts page">

	<div class="wrapper">
		<h1>Mike &rsquo;s Full Catalog Of Shirts</h1>

		<ul class="products">
			<?php foreach ($products as $product) { 
					echo "<li>";
					echo "<a href='#'>";
					echo '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';					
					echo "<p>View Details</p>";
					echo "</a>";						
					echo "</li>";
				} 
			?>

		</ul>

	</div>
	
</div>


<?php include('inc/footer.php'); ?>