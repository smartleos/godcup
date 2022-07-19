<?php include('function.php'); ?>
<?php include('components/header.php'); ?>
<?php include('components/productmenu.php'); ?>
<?php include('components/ecommerce/addToCart.php'); ?>
	<main class="page_home page">
		<div class="container">
			<div>
				<figure>
					<a href="">
						<img src="./imgs/testimg/01.jpg" alt="">
					</a>
				</figure>
			</div>
			<div class="index_carousel">
				<figure>
					<a href="">
						<img src="./imgs/testimg/02.jpg" alt="">
					</a>
				</figure>
				<figure>
					<a href="">
						<img src="./imgs/testimg/16.jpg" alt="">
					</a>
				</figure>
				<figure>
					<a href="">
						<img src="./imgs/testimg/17.jpg" alt="">
					</a>
				</figure>
			</div>

			<h2>改變你的能量場</h2>

			<div class="scroll_banner">
				<img src="./imgs/testimg/03.jpg" alt="bannerImg">
				<img src="./imgs/testimg/04.jpg" alt="bannerImg">
				<img src="./imgs/testimg/03.jpg" alt="bannerImg">
				<img src="./imgs/testimg/04.jpg" alt="bannerImg">
			</div>

			<figure class="v_iframe">
			<iframe width="1680" height="945"
			src="https://www.youtube.com/embed/8zSCw9opnjg">
			</iframe>
			</figure>

			<nav class="productmenu_home">
				<ul>
					<li>
						<a href="<?php site_url() ?>/pages/ecommerce/products/list.php">
							<img src="./imgs/icons/icon_peach.svg" alt="貴人桃花">
							<p>
								<img src="./imgs/icons/icon_shiny.svg" alt="閃亮亮">
								貴人桃花
								<img src="./imgs/icons/icon_shiny.svg" alt="閃亮亮">
							</p>
						</a>
					</li>
					<li>
						<a href="<?php site_url() ?>/pages/ecommerce/products/list.php">
							<img src="./imgs/icons/icon_money.svg" alt="暴富財運">
							<p>
								<img src="./imgs/icons/icon_shiny.svg" alt="閃亮亮">
								暴富財運
								<img src="./imgs/icons/icon_shiny.svg" alt="閃亮亮">
							</p>
						</a>
					</li>
					<li>
						<a href="<?php site_url() ?>/pages/ecommerce/products/list.php">
							<img src="./imgs/icons/icon_cause.svg" alt="事業興旺">
							<p>
								<img src="./imgs/icons/icon_shiny.svg" alt="閃亮亮">
								事業興旺
								<img src="./imgs/icons/icon_shiny.svg" alt="閃亮亮">
							</p>
						</a>
					</li>
					<li>
						<a href="<?php site_url() ?>/pages/ecommerce/products/list.php">
							<img src="./imgs/icons/icon_healthy.svg" alt="健康安泰">
							<p>
								<img src="./imgs/icons/icon_shiny.svg" alt="閃亮亮">
								健康安泰
								<img src="./imgs/icons/icon_shiny.svg" alt="閃亮亮">
							</p>
						</a>
					</li>
				</ul>
			</nav>

			<div class="product_home">
				<h2>熱銷商品</h2>
				<figure>
					<a href="">
						<img src="./imgs/testimg/02.jpg" alt="">
					</a>
				</figure>
				<?php include('components/templates/producttool.php'); ?>
			</div>
			<div class="product_home">
				<h2>系列商品</h2>
				<figure>
					<a href="">
						<img src="./imgs/testimg/09.jpg" alt="">
					</a>
				</figure>
				<?php include('components/templates/producttool.php'); ?>
			</div>

		</div>
	</main>
<?php include('components/footer.php'); ?>







