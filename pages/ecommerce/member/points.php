<?php include('../../../function.php'); ?>
<?php include('../../../components/header.php'); ?>
	<!-- Header -->
<?php include('../../../components/member/message.php'); ?>

	
	<main class="page_member me_points page">

        <div class="container con_tag member_nav">
			<div class="tag">
				<button><a href="profile.php">會員基本資料</a></button>
				<button><a href="order.php">訂單查詢</a></button>
                <button><a href="prayer.php">常用祈福人</a></button>
                <button><a href="coupon.php">優惠券專區</a></button>
                <button class="t"><a href="">我的紅利</a></button>
                <button><a href="traceSale.php">我的收藏</a></button>
                <button><a href="<?php site_url() ?>">登出</a></button>
			</div>
		</div>

        <div class="container">
            <div class="chang">
                <h1>我的紅利</h1>
            </div>
        </div>           

        <div class="container">
            <div class="add_product">
                <div class="addcart_card">
                    <figure>
                        <img src="<?php site_url() ?>/imgs/testimg/coupon.svg" alt="bannerImg">
                    </figure>
                    <div class="point">
                        <div>
                            <h2>1,5000</h2>
                            <p>目前累積</p>
                        </div>
                        <button class="btn sm_gold_btn"><a href="rewardsPoints.php">紅利兌換</a></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container con_tag point_nav">
            <div class="tag">
				<button><a value="#redeem">獲得紀錄</a></button>
				<button><a value="#used">使用紀錄</a></button>
			</div>
        </div>

        <div class="container points_re" id="redeem">
            <div class="points_record">
                <div class="cart_flex">
                    <div class="total left gray order_info">
                        <p>T0000000000</p>
                        <p>發送日 2022/04/10</p>
                    </div>
                    <div class="total right gray order_info">
                        <p><b>P 20</b></p>
                        <p>到期日 2022/12/20</p>
                    </div>
                </div>
            </div>
            <div class="points_record">
                <div class="cart_flex">
                    <div class="total left gray order_info">
                        <p>生日慶送禮</p>
                        <p>發送日 2022/04/10</p>
                    </div>
                    <div class="total right gray order_info">
                        <p><b>P 100</b></p>
                        <p>到期日 2022/12/20</p>
                    </div>
                </div>
            </div>
            <div class="points_record">
                <div class="cart_flex">
                    <div class="total left gray order_info">
                        <p>初見禮</p>
                        <p>發送日 2022/04/10</p>
                    </div>
                    <div class="total right gray order_info">
                        <p><b>P 50</b></p>
                        <p>到期日 2022/12/20</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container points_re" id="used">
            <div class="points_record">
                <div class="cart_flex">
                    <div class="total left gray order_info">
                        <p>T0000000000</p>
                        <p>發送日 2022/04/10</p>
                    </div>
                    <div class="total right gray order_info negative">
                        <p><b>P -2000</b></p>
                    </div>
                </div>
            </div>
            <div class="points_record">
                <div class="cart_flex">
                    <div class="total left gray order_info">
                        <p>T0000000000</p>
                        <p>發送日 2022/04/10</p>
                    </div>
                    <div class="total right gray order_info negative">
                        <p><b>P -100</b></p>
                    </div>
                </div>
            </div>
        </div>
		
	</main>
	

	<!-- Footer -->
	<?php include('../../../components/footer.php'); ?>
