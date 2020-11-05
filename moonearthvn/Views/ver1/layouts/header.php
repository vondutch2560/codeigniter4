<div class="container container-top-bar">
	<div class="row row-top-bar">

		<div class="top-bar-left">
<!-- 			<div class="language drop-down-list">
				<span>English</span>
				<ul>
					<li><a href="javascript:;">Vietnam</a></li>
				</ul>
			</div>

			<div class="forex drop-down-list">
				<span>USD</span>
				<ul>
					<li><a href="javascript:;">VND</a></li>
				</ul>
			</div> -->
		</div>

		<div class="top-bar-right">
			<ul>
				<li>Welcome to Moon & Earth Shop</li>
			</ul>
		</div>

	</div>
</div>

<header class="container container-header">
	<div class="row row-header">
		<div class="logo">
			<a href="<?=base_url()?>">
				<img src="assets/images/moonearthvn/logo-300x300.jpg">
			</a>
		</div>
		<?= view('ver1/components/menu') ?>
	</div>
</header>

<div class="container container-search-cart">
	<div class="row row-search-cart">
		<div class="search-box">
			<div class="form-search-left">
				<span>Categories</span>
				<ul>
					<li><span>Đồng hồ</span></li>
					<li><span>Góc chia sẽ</span></li>
				</ul>
			</div>
			<div class="form-search-right">
				<input type="text" name="fSearch" placeholder="Search">
				<button><i class="fas fa-search"></i></button>
			</div>
		</div>
		<div class="shopping-cart">
			<div class="phone"><a href="tel:0902790002"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> 090 279 00 02</a></div>
			<!-- <div class="cart"><i class="fas fa-shopping-cart"></i><span>$0.00</span></div> -->
		</div>
	</div>
</div>
<?php // $this->load->view('component/mobile-header'); ?>