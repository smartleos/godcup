<?php include('../../../function.php'); ?>
<?php include('../../../components/header.php'); ?>
	<!-- Header -->
<?php include('../../../components/member/message.php'); ?>
<?php include('../../../components/ecommerce/addPrayersPop.php'); ?>
<?php include('../../../components/ecommerce/editPrayersPop.php'); ?>

	
	<main class="page_member me_prayer page">

        <div class="container con_tag member_nav">
			<div class="tag">
				<button><a href="profile.php">會員基本資料</a></button>
				<button><a href="order.php">訂單查詢</a></button>
                <button class="t"><a href="">常用祈福人</a></button>
                <button><a href="coupon.php">優惠券專區</a></button>
                <button><a href="points.php">我的紅利</a></button>
                <button><a href="traceSale.php">我的收藏</a></button>
                <button><a href="<?php site_url() ?>">登出</a></button>
			</div>
		</div>

        <div class="container">
            <div class="chang">
                <h1>常用祈福人</h1>
            </div>
        </div>           

        <div class="container">
            <div class="onborder prayToCart">
                <div class="prayTo">
                    <i id="" class="icon-icon_close"></i>
                    <div>
                        <p>詹小華</p>
                        <div>
                            <p class="gray">1920/3/21</p>
                            <button class="btn cancel_btn" onclick="editprayersPop()">編輯</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="onborder prayToCart">
                <div class="prayTo">
                    <i id="" class="icon-icon_close"></i>
                    <div>
                        <p>王小美</p>
                        <div>
                            <p class="gray">1997/5/10</p>
                            <button class="btn cancel_btn" onclick="editprayersPop()">編輯</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container add">
            <div class="pray">
                <button class="btn add_pray" onclick="addprayersPop()"><i class=" icon-icon_close"></i>新增祈福對象</button>
            </div>
        </div>           
		
	</main>
	

	<!-- Footer -->
	<?php include('../../../components/footer.php'); ?>
