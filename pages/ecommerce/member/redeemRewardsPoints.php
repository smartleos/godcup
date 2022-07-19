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

        <div class="container order">
            <h2>兌換成功</h2>
            <p class="order_num">訂單編號 <b>#394839-30</b> 明細</p>
            <div>
                <figure>
                    <img src="<?php site_url() ?>/imgs/icons/thank.svg" alt="thank">
                </figure>
            </div>
        </div>

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
                        <p><b>已出貨</b></p>
                    </div>
                </div>
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
                                <div class="pray">
                                    <button class="btn add_pray" onclick="addprayPop()"><i class=" icon-icon_close"></i>新增祈福對象</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="container bottom">
            <button id="" class="btn big_btn black_btn">
                <a href="pointsOrder.php">兌換訂單查詢</a>
            </button>
        </div>

        
		
	</main>
	

	<!-- Footer -->
	<?php include('../../../components/footer.php'); ?>
