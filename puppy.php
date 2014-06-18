<?php include('inc/items.php');

if (isset($_GET["id"])) {
	$puppy_id = $_GET["id"];
	if (isset($items[$puppy_id])) $puppy = $items[$puppy_id];
}

if (!isset($_GET["id"])){
	header("Location: puppies.php");
	exit();
}

$section = "puppy";
$pageTitle = $puppy["name"];
include("inc/header.php"); ?>

		<div class="container">

			<div class="breadcrumb"><a href="puppies.php">Puppies</a> &gt; <?php echo $puppy["name"]; ?></div>

			<div class="puppy-picture">
				<span>
					<img src="<?php echo $puppy["img"]; ?>" alt="<?php echo $puppy["name"]; ?>">
				</span>