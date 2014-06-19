<?php

function get_list_view_html($item_id, $item) {
	$output = "";

	$output = $output . '<div class="col-xs-6 col-md-3">';
	$output = $output . '<a href="puppy.php?id=' . $item_id . '" class="thumbnail">';
	$output = $output . '<img height="300" width="300" src="' . $item["img"] . '" alt="' . $item["name"] . '">';
	$output = $output . '</a>';
	$output = $output . '</div>';

	return $output;
}

$items = array();
$items[101] = array(
	"name" => "White Pomsky",
	"img" => "img/dogs/dog-101.jpg",
	"price" => 18,
	"paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$items[102] = array(
	"name" => "Pomeranian",
    "img" => "img/dogs/dog-102.jpg",
    "price" => 20,
    "paypal" => "SXKPTHN2EES3J",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$items[103] = array(
    "name" => "Bulldog",
    "img" => "img/dogs/dog-103.jpg",    
    "price" => 20,
    "paypal" => "7T8LK5WXT5Q9J",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$items[104] = array(
    "name" => "Husky",
    "img" => "img/dogs/dog-104.jpg",    
    "price" => 30,
    "paypal" => "YKVL5F87E8PCS",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$items[105] = array(
    "name" => "Pomsky",
    "img" => "img/dogs/dog-105.jpg",    
    "price" => 25,
    "paypal" => "4CLP2SCVYM288",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$items[106] = array(
    "name" => "Wiener Dog",
    "img" => "img/dogs/dog-106.jpg",    
    "price" => 20,
    "paypal" => "TNAZ2RGYYJ396",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$items[107] = array(
    "name" => "Pitbull",
    "img" => "img/dogs/dog-107.jpg",    
    "price" => 20,
    "paypal" => "S5FMPJN6Y2C32",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$items[108] = array(
    "name" => "Corgi",
    "img" => "img/dogs/dog-108.jpg",    
    "price" => 25,
    "paypal" => "JMFK7P7VEHS44",
    "sizes" => array("Large","X-Large")
);

?>