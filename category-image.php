<div class="grid_12">
	<?php
		$cat_image = z_taxonomy_image_url($cat->term_id);
		if (!empty($cat_image)) :
	?>
	<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" width="940" height="200" alt=""/>
	<?php endif; ?>
   <h2>Title</h2>
</div>