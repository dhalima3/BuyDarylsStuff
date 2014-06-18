<?php
$pageTitle = "Random stuff sold by Daryl";
$section = "home";
include('inc/header.php'); ?>

      <div class="section-banner">
      	<div class="container">
	      	<!-- <a href="#" class="button button-3d-highlight button-circle">Click here!</a> -->
	    </div>  	
      </div>

      <div class="latest-items">
      	
      	<div class="container">

			<h2>Daryl&rsquo;s Latest Items</h2>
      	
	      	<?php include("inc/items.php"); ?>
	      	<!--First row of items -->
	      	<div class="row">

	      		<?php
	      			$count_items = count($items);
	      			$position = 0;
	      			$list_view_html = "";
	      			foreach($items as $item_id => $item){
	      				$position++;
	      				if ($count_items - $position < 8){
	      					$list_view_html =get_list_view_html($item_id, $item). $list_view_html;
	      				}
	      			}
	      			echo $list_view_html;
	      		?>
				    		
			</div>
		</div>
	</div>

<?php
include('inc/footer.php') ?>