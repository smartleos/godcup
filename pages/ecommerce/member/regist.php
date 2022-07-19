<?php include('../../../function.php'); ?>
<?php include('../../../components/header.php'); ?>
	<!-- Header -->
<?php include('../../../components/member/message.php'); ?>

	
	<main class="page_regist page">

		<div class="container">
            <h1>註冊</h1>
            <form id="registForm" method="post" action="profile.php">
                <div>
                    <label for="name">姓名</label>
                    <input type="text" name="name" id="name" placeholder="請輸入姓名" value="">
                </div>
                <div>
                    <label for="birthday">生日</label>
                    <input type="date" name="birthday" id="birthday" placeholder="請輸入生日" value="1950-01-01">
                </div>
                <div>
                    <label for="phone">手機</label>
                    <input type="tel" name="phone" id="phone" placeholder="請輸入手機號碼" value="">
                </div>
                <div class="password">
                    <label for="password">密碼</label>
                    <input type="password" name="password" id="password" placeholder="輸入6~12碼英文數字" value="">
                        <i class="icon-icon_password"></i>
                        <i class="icon-icon_eye icon_eye"></i>
                    </input>
                </div>
                <div class="password confirm_password">
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="請再次輸入密碼" value="">
                        <i class="icon-icon_password"></i>
                        <i class="icon-icon_eye icon_eye"></i>
                    </input>
                </div>
                <div>
                    <input class="submit" type="submit" value="註冊" onclick="espopup('type','<i class=icon-icon_yes></i>','帳號註冊成功')">
                </div>
            </form>
		</div>
	</main>
	

	<!-- Footer -->
	<?php include('../../../components/footer.php'); ?>
