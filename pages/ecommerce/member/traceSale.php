<?php include('../../../function.php'); ?>
<?php include('../../../components/header.php'); ?>
<?php include('../../../components/ecommerce/addToCart.php'); ?>
	<!-- Header -->
<?php include('../../../components/member/message.php'); ?>

	
	<main class="page_member me_tracesale page">

        <div class="container con_tag member_nav">
			<div class="tag">
				<button><a href="profile.php">會員基本資料</a></button>
				<button><a href="order.php">訂單查詢</a></button>
                <button><a href="prayer.php">常用祈福人</a></button>
                <button><a href="coupon.php">優惠券專區</a></button>
                <button><a href="points.php">我的紅利</a></button>
                <button class="t"><a href="">我的收藏</a></button>
                <button><a href="<?php site_url() ?>">登出</a></button>
			</div>
		</div>

        <div class="container">
            <div class="chang">
                <h1>我的收藏</h1>
            </div>
        </div>           

        <div class="container another_product">
            <div class="add_product">
                <div class="addcart_card">
                    <i id="" class="icon-icon_close"></i>
                    <figure>
                        <img src="<?php site_url() ?>/imgs/testimg/05.jpeg" alt="bannerImg">
                    </figure>
                    <div class="infos">
                        <div>
                            <h4>2022虎虎生風✦安太歲✦</h4>
                            <h6>祈福法會</h6>
                        </div>
                        <div class="price">
                            <div class="add_btn">
                                <p>NT $268</p>
                            </div>
                        </div>
                        <div class="button_cart"><i class="icon-icon_cart"></i></div>
                    </div>
                </div>
                <div class="addcart_card">
                    <i id="" class="icon-icon_close"></i>
                    <figure>
                        <img src="<?php site_url() ?>/imgs/testimg/06.jpeg" alt="bannerImg">
                    </figure>
                    <div class="infos">
                        <div>
                            <h4>2022虎虎生風✦安太歲✦</h4>
                            <h6>祈福法會</h6>
                        </div>
                        <div class="price">
                            <div class="add_btn">
                                <p>NT $268</p>
                            </div>
                        </div>
                        <div class="button_cart"><i class="icon-icon_cart"></i></div>
                    </div>
                </div>
                <div class="addcart_card">
                    <i id="" class="icon-icon_close"></i>
                    <figure>
                        <img src="<?php site_url() ?>/imgs/testimg/07.jpeg" alt="bannerImg">
                    </figure>
                    <div class="infos">
                        <div>
                            <h4>2022虎虎生風✦安太歲✦</h4>
                            <h6>祈福法會</h6>
                        </div>
                        <div class="price">
                            <div class="add_btn">
                                <p>NT $268</p>
                            </div>
                        </div>
                        <div class="button_cart"><i class="icon-icon_cart"></i></div>
                    </div>
                </div>
            </div>
        </div>
		
	</main>
	

	<!-- Footer -->
	<?php include('../../../components/footer.php'); ?>
