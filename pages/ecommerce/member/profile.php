<?php include('../../../function.php'); ?>
<?php include('../../../components/header.php'); ?>
	<!-- Header -->
<?php include('../../../components/member/message.php'); ?>
<?php include('../../../components/member/changePassword.php'); ?>

	
	<main class="page_member me_profile page">

        <div class="container con_tag member_nav">
			<div class="tag">
				<button class="t"><a href="">會員基本資料</a></button>
				<button><a href="order.php">訂單查詢</a></button>
                <button><a href="prayer.php">常用祈福人</a></button>
                <button><a href="coupon.php">優惠券專區</a></button>
                <button><a href="points.php">我的紅利</a></button>
                <button><a href="traceSale.php">我的收藏</a></button>
                <button><a href="<?php site_url() ?>">登出</a></button>
			</div>
		</div>
		<div class="container">
            <div class="chang">
                <h1>會員基本資料</h1>
                <button class="btn sm_btn" onclick="changepass()">修改密碼</button>
            </div>
            <form id="profileForm" method="post" action="">
                <div>
                    <label for="name">姓名</label>
                    <input type="text" name="name" id="name" placeholder="請輸入姓名" value="王小明">
                </div>
                <div>
                    <label for="birthday">生日</label>
                    <input type="date" name="birthday" id="birthday" placeholder="請輸入生日" value="1988-07-22">
                </div>
                <div>
                    <label for="phone">手機</label>
                    <input type="tel" name="phone" id="phone" placeholder="請輸入手機號碼" value="0912332888" disabled>
                    <p class="remind"><i class="icon-icon_notice"></i>如需修改請聯絡客服</p>
                </div>
                <div>
                    <label for="email">Email 信箱</label>
                    <input type="email" name="email" id="email" placeholder="請輸入聯絡Email" value="email@gmail.com" disabled>
                    <p class="remind"><i class="icon-icon_notice"></i>如需修改請聯絡客服</p>
                </div>
                <div class="password">
                    <label for="password">密碼</label>
                    <input type="password" name="password" id="password" placeholder="輸入6~12碼英文數字" value="00000000" disabled>
                        <!-- <i class="icon-icon_password"></i>
                        <i class="icon-icon_eye icon_eye"></i> -->
                    </input>
                </div>
                <div>
                    <label for="address">地址</label>
                    <input type="text" name="address" id="address" placeholder="請輸入詳細地址" value="台北市內湖區內湖路一段8號">
                    <p class="remind">※ 台港澳可用繁體中文輸入，其他地區請用英文輸入。</p>
                </div>
                <div>
                    <input class="submit" type="submit" value="儲存修改">
                </div>
            </form>
		</div>
	</main>
	

	<!-- Footer -->
	<?php include('../../../components/footer.php'); ?>
