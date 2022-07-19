
<?php include('../../../function.php'); ?>
<?php include('../../../components/header.php'); ?>
<?php include('../../../components/productmenu.php'); ?>
<?php include('../../../components/ecommerce/addToCart.php'); ?>
	<!-- Header -->

	
	<main class="page_list page">

		<div class="container select_menu">
			<div class="select" id="selclick">
				<h3 id="selname">店長推薦</h3>
				<i class="icon-icon_arrow" id="dropdown_icon"></i>
				<div class="dropdown">
					<div class="form-check">
						<input type="radio" name="top" value="店長推薦" id="menuone" onclick="getVal()" checked>
						<label for="menuone">店長推薦</label>
					</div>
					<div class="form-check">
						<input type="radio" name="top" value="最新上架" id="menutwo" onclick="getVal()">
						<label for="menutwo">最新上架</label>
					</div>
					<div class="form-check">
						<input type="radio" name="top" value="熱賣商品" id="menuthree" onclick="getVal()">
						<label for="menuthree">熱賣商品</label>
					</div>
					<div class="form-check">
						<input type="radio" name="top" value="最多人看" id="menufour" onclick="getVal()">
						<label for="menufour">最多人看</label>
					</div>
					<div class="form-check">
						<input type="radio" name="top" value="價格高到低" id="menufive" onclick="getVal()">
						<label for="menufive">價格高到低</label>
					</div>
					<div class="form-check">
						<input type="radio" name="top" value="價格低到高" id="menusix" onclick="getVal()">
						<label for="menusix">價格低到高</label>
					</div>					
				</div>
			</div>
			<div class="common_grid">
				<i id="icon_grid" class="icon-icon_grid1"></i>
			</div>
		</div>

		<div class="container con_tag">
			<div class="tag">
				<button>＃成願法會</button>
				<button>＃手環</button>
				<button>＃超渡</button>
				<button>＃人氣推薦</button>
				<button>＃免運</button>
				<button>＃熱銷排行</button>
			</div>
		</div>

		<div class="container">
			<div class="product_list">
				<ul class="product_post">

					<li class="product_card">
						<a href="<?php site_url() ?>/pages/ecommerce/products/single.php">
							<figure class="sold_out">
								<img src="<?php site_url() ?>/imgs/testimg/05.jpeg" alt="bannerImg">
							</figure>
							<div class="infos">
								<div>
									<h4>2022虎虎生風✦安太歲✦</h4>
									<h6>祈福法會</h6>
								</div>
								<div class="price">
									<p>NT $268</p>
								</div>
								<div class="button_cart"><i class="icon-icon_cart"></i></div>
							</div>
						</a>
						<div class="button_heart"><i id="heart" class="heart icon-icon_heart"></i></div>
					</li>
					<li class="product_card">
						<a href="<?php site_url() ?>/pages/ecommerce/products/single.php">
							<figure>
								<img src="<?php site_url() ?>/imgs/testimg/06.jpeg" alt="bannerImg">
							</figure>
							<div class="infos">
								<div>
									<h4>2022虎虎生風✦安太歲✦</h4>
									<h6>祈福法會</h6>
								</div>
								<div class="price">
									<p>NT $268</p>
								</div>
								<div class="button_cart"><i class="icon-icon_cart"></i></div>
							</div>
						</a>
						<div class="button_heart"><i id="heart" class="heart icon-icon_heart"></i></div>
					</li>
					<li class="product_card">
						<a href="<?php site_url() ?>/pages/ecommerce/products/single.php">
							<figure>
								<img src="<?php site_url() ?>/imgs/testimg/07.jpeg" alt="bannerImg">
							</figure>
							<div class="infos">
								<div>
									<h4>2022虎虎生風✦安太歲✦</h4>
									<h6>祈福法會</h6>
								</div>
								<div class="price">
									<p>NT $268</p>
								</div>
								<div class="button_cart"><i class="icon-icon_cart"></i></div>
							</div>
						</a>
						<div class="button_heart"><i id="heart" class="heart icon-icon_heart"></i></div>
					</li>
					<li class="product_card">
						<a href="<?php site_url() ?>/pages/ecommerce/products/single.php">
							<figure>
								<img src="<?php site_url() ?>/imgs/testimg/08.jpeg" alt="bannerImg">
							</figure>
							<div class="infos">
								<div>
									<h4>2022虎虎生風✦安太歲✦</h4>
									<h6>祈福法會</h6>
								</div>
								<div class="price">
									<p>NT $268</p>
								</div>
								<div class="button_cart"><i class="icon-icon_cart"></i></div>
							</div>
						</a>
						<div class="button_heart"><i id="heart" class="heart icon-icon_heart"></i></div>
					</li>
				</ul>
			</div>
		</div>

		<div class="container pagination_list">
			<ul>
				<li><a href=""><i class="icon-icon_arrow left"></i></a></li>
				<li><a class="t" href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li><a href="">5</a></li>
				<li><a href=""><i class=" icon-icon_arrow right"></i></a></li>
			</ul>
		</div>

	</main>
	

	<!-- Footer -->
	<?php include('../../../components/footer.php'); ?>







