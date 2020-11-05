<?php
	$metaTitle = (isset($metaTitle)) ? $metaTitle.' - Moon&Earth Home Decor' : 'Moon&Earth Home Decor';
	$metaDescription = (isset($metaDescription)) ? $metaDescription : 'Moon&Earth được sáng lập dựa trên sự yêu thích được làm đẹp cho ngôi nhà bằng những vật dụng mộc mạc, giản dị nhưng tinh tế và sang trọng';

	if(!isset($metaImage))
		$metaImage = 'http://moonearthvn.com/assets/images/handmade/logo-300x300.jpg';

?>


<title><?php echo ucfirst($metaTitle); ?></title>

<meta name="title" 				 content="<?php echo ucfirst($metaTitle); ?>">
<meta name="viewport" 			 content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="author" 			 content="Moon & Earth">
<meta name="description" 		 content="<?php echo $metaDescription; ?>">
<meta name="robots" 			 content="index, follow">
<meta name="revisit-after" 		 content="3 days">
<meta http-equiv="content-type"  content="text/html; charset=UTF-8">
<meta http-equiv="cache-control" content="no-cache"/>

<!-- Open Graph / Facebook -->
<meta property="og:title" 		content="<?php echo ucfirst($metaTitle); ?>">
<meta property="og:url" 		content="<?php echo current_url(); ?>">
<meta property="og:description" content="<?php echo $metaDescription; ?>">
<meta property="og:image" 		content="<?php echo $metaImage; ?>">
<meta property="og:type" 		content="website">

<!-- <link rel="shortcut icon" type="image/jpg" href="http://moonearthvn.com/assets/images/handmade/logo-300x300.jpg"/> -->
