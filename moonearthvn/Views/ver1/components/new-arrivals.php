<?php
	$printNewProduct = '';

	foreach ($newProduct as $key => $value) {
		$imageProduct = $this->Handmade_model->get_image_product($value['id']);

		$printNewProduct .= '<div class="products-item" data-item="'.($key+1).'">';
		$printNewProduct .=   '<a class="wrap-thumb-image" href="'.base_url(category_parent_highest($allCategory, $value['category_id']).'/'.$value['id'].'-'.slug_title($value['product_name'])).'">';
		$printNewProduct .=     '<div class="thumb-primary" style="background-image:url('.base_url($imageProduct[0]['url'].'thumbnail/'.$imageProduct[0]['name']).');"></div>';
		if(isset($imageProduct[1]))
			$printNewProduct .=     '<div class="thumb-secondary" style="background-image:url('.base_url($imageProduct[1]['url'].'thumbnail/'.$imageProduct[1]['name']).');"></div>';
		$printNewProduct .=   '</a>';
		$printNewProduct .=   '<div class="promotion-products-item">';
		// $printNewProduct .=     '<span class="promotion-item discount-pd">12.5%</span>';
		// $printNewProduct .=     '<span class="promotion-item new-pd">NEW</span>';
		// $printNewProduct .=     '<span class="promotion-item hot-pd">HOT</span>';
		$printNewProduct .=   '</div>';
		$printNewProduct .=   '<h4><a href="javascript:;">'.$value['product_name'].'</a></h4>';
		$printNewProduct .=   '<span class="price-pd">'.number_format($value['sale_price']).' đ</span>';
		$printNewProduct .= '</div>';


	}
	function category_parent_highest($allCategory, $category_parent_id){
		foreach ($allCategory as $key => $value) {
			if($value['id'] == $category_parent_id){
				if($value['parent_id'] == 0){
					return slug_title($value['name_vn']);
				}else{
					return category_parent_highest($allCategory, $value['parent_id']);
				}
			}
		}
	}
?>
<div class="container container-arrivals">
	<div class="row row-arrivals">
		<h2>New Arrivals</h2>
		<div class="arrivals grid-products">
			<?php echo $printNewProduct; ?>
		</div>
	</div>
</div>