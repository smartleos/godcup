<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/ecommerce/addToCart.php'); ?>
<!-- Header -->


<?php include('../../components/ecommerce/addPrayPop.php'); ?>
<?php include('../../components/product/desciptionPop.php'); ?>
<!-- pop -->


<main class="page_cart cart_step4 page" id="cart_step4">

        <div class="step_title">
            <span class="stepon">
                確認購物車
                <i>
                    <b></b>
                </i>
            </span>
            <span class="stepon stepoline">
                付款與運送
                <i>
                    <b></b>
                </i>
            </span>
            <span class="stepon stepoline">
                進行付款
                <i>
                    <b></b>
                </i>
            </span>
            <span class="stepon stepoline">
                付款完成
                <i>
                    <b></b>
                </i>
            </span>
        </div>

        <div class="order_container">
            <div class="container order col_12">
                <h2>感謝您的訂購</h2>
                <p class="order_num">訂單編號 <b>#394839-30</b> 明細</p>
                <div>
                    <figure>
                        <img src="<?php site_url() ?>/imgs/icons/thank.svg" alt="thank">
                    </figure>
                </div>
            </div>

            <div class="col_flex">
                <div class="col_6">
                    <div class="container">
                        <div class="cart_flex">
                            <div class="total left gray order_info">
                                <p>付款方式</p>
                                <p>目前狀態</p>
                                <p>訂購商品</p>
                                <p>收件人</p>
                                <p>收件人電話</p>
                                <p>收件地址</p>
                            </div>
                            <div class="total order_info">
                                <p>ATM付款</p>
                                <p>訂單送出成功</p>
                                <p>共3項</p>
                                <p>王小明</p>
                                <p>+886 0912447656</p>
                                <p>114台北市內湖區港墘路</p>
                            </div>
                        </div>
                        <div class="cart_flex top">
                            <div class="total left gray order_info">
                                <p>使用紅利點數</p>
                                <p>使用優惠券</p>
                            </div>
                            <div class="total gray order_info">
                                <p>0點</p>
                                <p>-NT $60</p>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="cart_flex last">
                            <div class="qty">總計金額</div>
                            <div class="total">
                                <b>NT $804</b>
                            </div>
                        </div>
                    </div>

                    <div class="container atm_info">
                        <h2>ATM付款資訊</h2>
                        <div class="cart_flex atm">
                            <div class="total left gray order_info">
                                <p>轉帳銀行</p>
                                <p>轉帳帳號</p>
                                <p>繳款金額</p>
                                <p>繳款期限</p>
                            </div>
                            <div class="total order_info">
                                <p>國泰世華商業銀行  013</p>
                                <p>2834-2204-0906-7505</p>
                                <p><b>NT$804</b></p>
                                <p>2022/04/09 23:59</p>
                            </div>
                        </div>
                        <div class="atm_pre">
                            <b>此轉帳帳號僅供本次交易使用</b>
                            <p>※ 此繳款帳號若已過繳款期限為無效帳號，如需購買請重新訂購</p>
                            <p>※ 請於繳款期限前，透過網路銀行、任何一部銀行或郵局的[網路ATM]或[ATM自動提款機]轉帳，輸入轉帳帳號及金額就能輕鬆完成付款</p>
                            <p>※ 訂單金額若超過三萬元，請改選「轉帳繳費」功能，繳費上限依各金融機構規定</p>
                        </div>
                    </div>

                    <div class="container border">
                        <div>
                            <p class="remind"><i class="icon-icon_notice"></i>折價券最高折價金額 / 比例，依照各說明為主</p>
                            <p class="gray">
                                由於網路詐騙案件層出不窮，手法也不斷更新，在此特別提醒您，本商家與工作人員，均不會要求消費者至提款機操作任何功能，請小心勿上當。
                                <br>
                                如果接到不明人士來信或來電，應立即撥打165防詐騙專線查詢或透過客服專線查證 。 讓我們與您一起努力維護網路交易安全！
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col_6">
                <div class="container card">
                        <h2>訂購商品</h2>
                        <div class="addcart_card">
                            <figure>
                                <img src="<?php site_url() ?>/imgs/testimg/05.jpeg" alt="bannerImg">
                            </figure>
                            <div class="infos">
                                <div>
                                    <h4>2022虎虎生風✦安太歲✦</h4>
                                    <h6>祈福法會</h6>
                                </div>
                                <div class="price">
                                    <h6>規格：3盞</h6>
                                    <h6>數量：1</h6>
                                </div>
                                <div class="pray">
                                    <button class="btn add_pray" onclick="addprayPop()"><i class=" icon-icon_close"></i>新增祈福對象</button>
                                </div>
                            </div>
                        </div>
                        <div class="addcart_card">
                            <figure>
                                <img src="<?php site_url() ?>/imgs/testimg/06.jpeg" alt="bannerImg">
                            </figure>
                            <div class="infos">
                                <div>
                                    <h4>2022虎虎生風✦安太歲✦</h4>
                                    <h6>祈福法會</h6>
                                </div>
                                <div class="price">
                                    <h6>規格：3盞</h6>
                                    <h6>數量：1</h6>
                                </div>
                                <div class="pray">
                                    <button class="btn add_pray" onclick="addprayPop()"><i class=" icon-icon_close"></i>新增祈福對象</button>
                                </div>
                            </div>
                        </div>
                        <div class="addcart_card">
                            <figure>
                                <img src="<?php site_url() ?>/imgs/testimg/07.jpeg" alt="bannerImg">
                            </figure>
                            <div class="infos">
                                <div>
                                    <h4>2022虎虎生風✦安太歲✦</h4>
                                    <h6>祈福法會</h6>
                                </div>
                                <div class="price">
                                    <h6>規格：3盞</h6>
                                    <h6>數量：1</h6>
                                </div>
                                <div class="pray">
                                    <button class="btn add_pray" onclick="addprayPop()"><i class=" icon-icon_close"></i>新增祈福對象</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="cart_flex last">
                            <p class="remind"><i class="icon-icon_notice"></i>祈福對象也可至會員中心購買紀錄查詢填寫</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container col_12">
                <div>
                    <a href="<?php site_url() ?>">
                        <button id="" class="btn big_btn black_btn">
                            回首頁
                        </button>
                    </a>
                </div>
                <div>
                    <a href="member/order.php">
                        <button id="" class="btn big_btn black_btn">
                            訂單查詢
                        </button>
                    </a>
                </div>
                <div>
                    <a href="../qa.php">
                        <button id="" class="btn big_btn black_btn">
                            聯絡本店客服
                        </button>
                    </a>
                </div>
            </div>
        </div>

    </main>

<!-- Footer -->
<?php include('../../components/footer.php'); ?>