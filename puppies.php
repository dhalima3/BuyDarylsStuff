<?php 
include("inc/items.php");

$pageTitle = "Daryl's Puppy List";
$section = "shirts";

include("inc/header.php"); ?>

	<div class ="section puppies page">

		<div class="wrapper">

			<h1> Daryl's Puppy List </h1>

			<ul class="products">
				<?php foreach($items as $item_id => $item){
						echo get_list_view_html($item_id, $item);
					}
				?>
			</ul>

		</div>

	</div>

<?php include("inc/footer.php"); ?>