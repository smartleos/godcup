<?php include('../../../function.php'); ?>
<?php include('../../../components/header.php'); ?>
	<!-- Header -->
<?php include('../../../components/member/message.php'); ?>
<?php include('../../../components/ecommerce/addPrayPop.php'); ?>

	
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
				<h2 id="selname">兌換訂單查詢</h2>
				<!-- <i class="icon-icon_arrow" id="dropdown_icon"></i> -->
				<!-- <div class="dropdown coupon_dro">
					<div class="form-check">
						<input type="radio" name="reward" value="我的優惠券" id="rewardone" onclick="">
						<label for="rewardone"><a href="rewardsPoints.php">紅利兌換</a></label>
					</div>
					<div class="form-check">
						<input type="radio" name="reward" value="領取優惠券" id="rewardtwo" onclick="" checked>
						<label for="rewardtwo"><a href="">兌換訂單查詢</a></label>
					</div>
				</div> -->
			</div>
		</div>

        <div class="container con_tag member_nav coupon_nav">
			<div class="tag">
                <button><a href="rewardsPoints.php">紅利兌換</a></button>
                <button class="t"><a>兌換訂單查詢</a></button>
			</div>
		</div>

        <div class="container">
            <form class="order_search" action="">
                <div class="ordertimes">
                    <div>
                        <input type="month" name="ordertime" id="ordertime" placeholder="2000-01" value="2000-01">
                    </div>
                    <p>～</p>
                    <div>
                        <input type="month" name="ordertime" id="ordertime" placeholder="2022-12" value="2022-12">
                    </div>
                </div>
                <div>
                    <input class="submit" type="submit" value="查詢">
                </div>
            </form>
        </div>           

        <div class="container">
            <div class="container order_list">
                <h3>訂單編號 <b>TG220407M00357</b></h3>
                <div class="cart_flex">
                        <div class="total left gray order_info">
                            <p>兌換日期</p>
                            <p>使用點數</p>
                            <p>訂單狀態</p>
                        </div>
                        <div class="total right order_info">
                            <p>2022/04/07</p>
                            <p>P 150</p>
                            <p><b>待付款</b></p>
                        </div>
                    </div>

                    <div class="status_btn">
                    <div class="conpop">
                        <span>
                            詳細內容
                            <i class="icon-icon_arrow"></i>
                        </span>
                    </div>
                    <div class="product_status">
                        <div class="status_com">
                            <div class="cart_flex">
                                <div class="total left gray order_info">
                                    <p>配送方式</p>
                                    <p>收件人</p>
                                    <p>配送地址</p>
                                    <p>聯絡電話</p>
                                </div>
                                <div class="total right order_info">
                                    <p>宅配</p>
                                    <p>王**</p>
                                    <p>114台北市內湖區***三段</p>
                                    <p>+886  0912****56</p>
                                </div>
                            </div>
                            <div class="add_product">
                                <h4>兌換商品</h4>
                                <div class="points_or_list">
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
                                                <h6>數量：1</h6>
                                                <h6>規格：3盞</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart_flex onborder status">
                                        <div><p>出貨狀態 <b>未出貨</b></p></div>
                                        <div class="pray">
                                            <button class="btn add_pray" onclick="addprayPop()"><i class=" icon-icon_close"></i>新增祈福對象</button>
                                            <p class="remind"><i class="icon-icon_notice"></i>尚未填寫祈福資訊</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
		
	</main>
	

	<!-- Footer -->
	<?php include('../../../components/footer.php'); ?>
