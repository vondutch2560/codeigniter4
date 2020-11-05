<?php
	$printSlide = '';
	$printDot   = '';
	foreach ($slide as $key => $value) {
		$printSlide .= '<a class="slide" target="_blank" href="'.$value['url'].'" style="background-image:url('.base_url('assets/upload/handmade/slide/'.$value['image']).')"></a>';
		$printDot .= '<span data-slide="'.($key+1).'"></span>';
	}
?>
<div class="container container-slideshow">
	<div class="row row-slideshow">
		<div class="slideshow">
			<?php echo $printSlide; ?>
			<a class="prev-slide">&#10094;</a>
			<a class="next-slide">&#10095;</a>
			<div class="dot-slide">
				<?php echo $printDot; ?>
			</div>
		</div>
	</div>
</div>