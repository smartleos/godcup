<?php include('../../../function.php'); ?>
<?php include('../../../components/header.php'); ?>
	<!-- Header -->
    <?php include('../../../components/member/emailVerification.php'); ?>
    <?php include('../../../components/member/forgetEmail.php'); ?>
    <?php include('../../../components/member/resetPassword.php'); ?>
    <?php include('../../../components/member/message.php'); ?>

	
	<main class="page_login page">

		<div class="container">
            <h1>登入或註冊</h1>
			<form id="loginForm" method="post" action="">
                <div>
                    <label for="email">Email 信箱</label>
                    <input type="email" name="email" id="loginEmail" placeholder="請輸入聯絡Email" value="">
                </div>
                <div class="password">
                    <label for="password">密碼</label>
                    <input type="password" member-password name="password" id="loginPassword" placeholder="輸入6~12碼英文數字" value="">
                        <i class="icon-icon_password"></i>
                        <i class="icon-icon_eye icon_eye"></i>
                    </input>
                </div>
                <div>
                    <a id="forget_btn">忘記密碼？</a>
                </div>            
                <!-- 這裡要放I'm not a robot -->
                <!-- <div></div> -->
                <div>
                    <!-- 暫時href -->
                    <input class="login_submit" type="submit" value="登入或註冊">
                    <!-- <button id="" class="btn big_btn"><a style="color: white" href="<?php site_url() ?>/pages/ecommerce/member/regist.php">登入或註冊</a></button> -->
                </div>
            </form>
            <div class="seperate_title">
                <span>OR</span>
            </div>
            <div>
                <p>以其他方式登入</p>
            </div>
            <div>
                <a href="https://www.facebook.com/" target="_blank">
                    <button id="" class="btn big_btn fb">
                        <img src="<?php site_url() ?>/imgs/icons/fb.png" alt="FB">
                        Facebook
                    </button>
                </a>
            </div>
            <div>
                <a href="https://mail.google.com/" target="_blank">
                    <button id="" class="btn big_btn google">
                        <img src="<?php site_url() ?>/imgs/icons/google.png" alt="google">
                        Google
                    </button>
                </a>
            </div>
            <div>
                <p class="note">✦ 擁有帳號即表示你同意 ✦<br> <a>會員隱私條款</a> 與 <a>隱私權及網站使用條款</a>
                </p>
            </div>
		</div>
	</main>
	

	<!-- Footer -->
	<?php include('../../../components/footer.php'); ?>







