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
                <button class="t"><a href="points.php">我的紅利</a></button>
                <button><a href="traceSale.php">我的收藏</a></button>
                <button><a href="<?php site_url() ?>">登出</a></button>
			</div>
		</div>

        <div class="container select_menu">
			<div class="select" id="selclick">
				<h2 id="selname">紅利兌換</h2>
				<!-- <i class="icon-icon_arrow" id="dropdown_icon"></i> -->
				<!-- <div class="dropdown coupon_dro">
					<div class="form-check">
						<input type="radio" name="reward" value="我的優惠券" id="rewardone" onclick="" checked>
						<label for="rewardone"><a href="">紅利兌換</a></label>
					</div>
					<div class="form-check">
						<input type="radio" name="reward" value="領取優惠券" id="rewardtwo" onclick="">
						<label for="rewardtwo"><a href="pointsOrder.php">兌換訂單查詢</a></label>
					</div>
				</div> -->
			</div>
		</div>

        <div class="container con_tag member_nav coupon_nav">
			<div class="tag">
                <button class="t"><a>紅利兌換</a></button>
                <button><a href="pointsOrder.php">兌換訂單查詢</a></button>
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
                            <p>可使用</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container another_product">
                <div class="add_product">
                    <div class="addcart_card">
                        <div class="form-check">
                                <input type="checkbox" name="add" value="add" id="add">
                        </div>
                        <figure>
                            <img src="<?php site_url() ?>/imgs/testimg/07.jpeg" alt="bannerImg">
                        </figure>
                        <div class="infos">
                            <div>
                                <h4>2022虎虎生風✦安太歲✦</h4>
                                <h6>祈福法會</h6>
                            </div>
                            <div class="price">
                                <div class="">
                                    <p class="rewards">NT $268</p>
                                    <p class="negative"><b> 點數兌換 800</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="addcart_card">
                        <div class="form-check">
                                <input type="checkbox" name="add" value="add" id="add">
                        </div>
                        <figure>
                            <img src="<?php site_url() ?>/imgs/testimg/06.jpeg" alt="bannerImg">
                        </figure>
                        <div class="infos">
                            <div>
                                <h4>2022虎虎生風✦安太歲✦</h4>
                                <h6>祈福法會</h6>
                            </div>
                            <div class="price">
                                <div class="">
                                    <p class="rewards">NT $388</p>
                                    <p class="negative"><b> 點數兌換 1000</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="container">
            <form id="rewardForm" method="post" action="redeemRewardsPoints.php" class="input_style">
                <div class="container form">
                    <h2>收件人資訊</h2>
                    <div>
                        <label for="name">收件人姓名</label>
                        <input type="text" name="name" id="name" placeholder="請輸入真實姓名" value="">
                    </div>
                    <div>
                        <label for="phone">手機號碼</label>
                        <input type="tel" name="phone" id="phone" placeholder="請輸入手機號碼" value="">
                    </div>
                    <div>
                        <label for="address">地址</label>
                        <input type="text" name="address" id="address" placeholder="請輸入詳細地址" value="">
                    </div>
                    <div>
                        <label for="email">Email 信箱</label>
                        <input type="email" name="email" id="email" placeholder="請輸入聯絡Email" value="">
                    </div>
                </div>
                <div class="container form">
                    <h2>運送方式</h2>
                    <div class="form-check">
                        <input type="radio" name="send" value="全家取貨付款" id="sendone" onclick="getVal()" checked>
                        <label for="sendone">全家取貨付款</label>
                        <p class="remind">每筆NT$60，滿NT$1,000(含以上)免運費</p>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="send" value="7-11取貨付款" id="sendtwo" onclick="getVal()">
                        <label for="sendtwo">7-11取貨付款</label>
                        <p class="remind">每筆NT$60，滿NT$1,000(含以上)免運費</p>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="send" value="宅配" id="sendthree" onclick="getVal()">
                        <label for="sendthree">宅配</label>
                        <p class="remind">宅配（已滿 NT$1,000 免運）</p>
                    </div>
                </div>
                <div class="container submitcom">
                    <div>
                        <!-- <button class="btn big_btn"><a href="redeemRewardsPoints.php">確認兌換</a></button> -->
                        <input class="submit" type="submit" value="確認兌換">
                    </div>
                </div>
            </form>
        </div>

        
		
	</main>
	

	<!-- Footer -->
	<?php include('../../../components/footer.php'); ?>
