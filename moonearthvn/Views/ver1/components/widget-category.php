<?php
	$printCategorySidebar = '';

	foreach ($categorySidebar as $key => $value) {
		$dataCategoryId = ($key == 0) ? 0  : $value['id'];
		$activeClass 	= ($categoryMatch['id'] == $value['id']) ? 'active' : '';

		$printCategorySidebar .= '<li><a href="javascript:;" class="js-category-sidebar '.$activeClass.'" data-category-id="'.$dataCategoryId.'">'.$value['name_vn'].'</a></li>';
	}

?>
<div class="widget-sidebar widget-category">
	<h3>Categories</h3>
	<ul>
		<?php echo $printCategorySidebar;?>
	</ul>
</div>