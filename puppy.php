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

		<div class="breadcrumb"><a href="puppies.php">Puppies</a> &gt; <?php echo $puppy["name"]; ?></div>
		
		<div class="section page">

			<div class="wrapper">

				<div class="puppy-picture">
					<span>
						<img src="<?php echo $puppy["img"]; ?>" alt="<?php echo $puppy["name"]; ?>">
					</span>
				</div>

				<div class="puppy-details">

					<h1><span class="price">$<?php echo $puppy["price"]; ?></span> <?php echo $puppy["name"]; ?></h1>

					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
						<input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
						<table>
						<tr>
							<th>
								<input type="hidden" name="on0" value="Size">
								<label for="os0">Size</label>
							</th>
							<td>
								<select name="os0" id="os0">
									<?php foreach($puppy["sizes"] as $size) { ?>
									<option value="<?php $size; ?>"><?php echo $size ?></option>
									<?php } ?>
								</select>
							</td>
						</tr>
						</table>
						<input type="submit" value="Add to Cart" name="submit">
					</form>

				</div>

			</div>
		 
<?php include("inc/footer.php"); ?>
