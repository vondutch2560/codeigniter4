<?php
	// $printMenuArticle = '';
	// $printMenuProduct = '<li class="drop-down"><a href="javascript:;">Sản phẩm</a> <ul>';
	// foreach ($categoryMenu as $key => $value) {
	// 	if($value['category_type_id'] == 1)
	// 		$printMenuProduct .= '<li><a href="'.base_url(slug_title($value['name_vn'])).'">'.$value['name_vn'].'</a></li>';
	// 	if($value['category_type_id'] == 2)
	// 		$printMenuArticle .= '<li class=""><a href="'.base_url(slug_title($value['name_vn'])).'">'.$value['name_vn'].'</a>';
	// }
	// $printMenuProduct .= '</ul></li>';
?>
<div class="menu">
	<div class="form-search-menu-fixed">
		<input type="text" spellcheck="false" name="fSearch" placeholder="Search...">
		<button><i class="fas fa-search"></i></button>
	</div>
	<ul>
		<li class="active-menu"><a href="<?php echo base_url(); ?>">home</a></li>
		<?php //echo $printMenuProduct; ?> 
		<?php //echo $printMenuArticle; ?>		
		<li><a href="<?php echo base_url('lien-he'); ?>">Liên hệ</a></li>
	</ul>
</div>