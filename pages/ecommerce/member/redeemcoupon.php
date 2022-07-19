<?php include('../../../function.php'); ?>
<?php include('../../../components/header.php'); ?>
	<!-- Header -->
<?php include('../../../components/member/message.php'); ?>
	
	<main class="page_member me_coupon page">

        <div class="container con_tag member_nav">
			<div class="tag">
				<button><a href="profile.php">會員基本資料</a></button>
				<button><a href="order.php">訂單查詢</a></button>
                <button><a href="prayer.php">常用祈福人</a></button>
                <button class="t"><a href="">優惠券專區</a></button>
                <button><a href="points.php">我的紅利</a></button>
                <button><a href="traceSale.php">我的收藏</a></button>
                <button><a href="<?php site_url() ?>">登出</a></button>
			</div>
		</div>

        <div class="container select_menu">
			<div class="select" id="selclick">
				<h2 id="selname">領取優惠券</h2>
				<!-- <i class="icon-icon_arrow" id="dropdown_icon"></i> -->
				<!-- <div class="dropdown coupon_dro">
					<div class="form-check">
						<input type="radio" name="top" value="我的優惠券" id="one" onclick="">
						<label for="one"><a href="coupon.php">我的優惠券</a></label>
					</div>
					<div class="form-check">
						<input type="radio" name="top" value="領取優惠券" id="two" onclick="" checked>
						<label for="two"><a href="">領取優惠券</a></label>
					</div>
					<div class="form-check">
						<input type="radio" name="top" value="優惠紀錄" id="three" onclick="">
						<label for="three"><a href="coupAfterUse.php">優惠紀錄</a></label>
					</div>
				</div> -->
			</div>
		</div>

        <div class="container con_tag member_nav coupon_nav">
			<div class="tag">
                <button><a href="coupon.php">我的優惠券</a></button>
                <button class="t"><a>領取優惠券</a></button>
			</div>
		</div>

        <div class="container">
            <div class="input_style">
                <form id="" method="post" action="">
                    <div>
                        <input type="number" name="point" id="point" placeholder="輸入專屬優惠碼" value="">
                        </input>
                    </div>                    
                    <div>
                        <input class="submit" type="submit" value="使用">
                    </div>
                </form>
                <p class="remind"><i class="icon-icon_notice"></i>折價券最高折價金額 / 比例，依照各說明為主</p>
            </div>
        </div>

        <div class="container another_product bortop">
            <div class="redeem_all">
                <button class="btn gold_btn">全部領取</button>
            </div>
            <div class="add_product">
                <div class="addcart_card">
                    <figure>
                        <img src="<?php site_url() ?>/imgs/testimg/coupon.svg" alt="bannerImg">
                    </figure>
                    <div class="infos">
                        <div>
                            <h4>四月份免運券</h4>
                            <h6>優惠券詳細說明優惠券詳細說明優惠券詳細說明優惠券詳細說明</h6>
                        </div>
                        <div class="price">
                            <div class="term">
                                <p>有效期限至2022/12/1</p>
                            </div>
                            <button class="btn gold_btn">領取</button>
                        </div>
                    </div>
                </div>
                <div class="addcart_card">
                    <figure>
                        <img src="<?php site_url() ?>/imgs/testimg/coupon.svg" alt="bannerImg">
                    </figure>
                    <div class="infos">
                        <div>
                            <h4>四月份免運券</h4>
                            <h6>優惠券詳細說明優惠券詳細說明優惠券詳細說明優惠券詳細說明</h6>
                        </div>
                        <div class="price">
                            <div class="term">
                                <p>有效期限至2022/12/1</p>
                            </div>
                            <button class="btn gold_btn">領取</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
		
	</main>
	

	<!-- Footer -->
	<?php include('../../../components/footer.php'); ?>
