<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/ecommerce/addToCart.php'); ?>
<!-- Header -->


<?php include('../../components/ecommerce/pointsPop.php'); ?>
<?php include('../../components/product/desciptionPop.php'); ?>
<!-- pop -->


<main class="page_cart cart_step3 page" id="cart_step3">

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
            <span>
                付款完成
                <i>
                    <b></b>
                </i>
            </span>
        </div>

        <div class="col_flex">
            <div class="container card col_6">
                <h2>您的訂單</h2>
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
                            <p>NT $268</p>
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
                            <p>NT $268</p>
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
                            <p>NT $268</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col_6">
                <div class="container">
                    <div class="cart_flex last">
                        <div class="qty">總計</div>
                        <div class="total">
                            <b>NT $864</b>
                            <p>(不含運費)</p>
                            <p>皆以TWD付款</p>
                        </div>
                    </div>
                </div>
                
                <form id="" method="post" action="complete.php" class="input_style">
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
                            <p class="remind">訂單資訊將用Email通知您，並更新會員Email資料</p>
                        </div>
                        <div>
                            <label for="note">備註</label>
                            <input type="text" name="note" id="note" placeholder="若有購買上的特別需求，請填寫備註" value="">
                        </div>
                    </div>
                    <div class="container">
                        <h2>付款方式</h2>
                        <p>ATM付款</p>
                    </div>
                    <div class="container terms">
                        <div>
                            <input type="checkbox" name="yes" value="信用卡付款" id="yes">
                            <label for="yes">假字假字假字假字假字假字假字假字假字</label>
                        </div>
                        <div>
                            <input type="checkbox" name="yes2" value="信用卡付款" id="yes">
                            <label for="yes2">若有購買法會之相關商品，請務必填寫祈福人資訊</label>
                        </div>
                        <div>
                            <input type="checkbox" name="yes3" value="信用卡付款" id="yes">
                            <label for="yes3">願意收到活動與優惠相關內容</label>
                        </div>
                        <div>
                            <input type="checkbox" name="yes4" value="信用卡付款" id="yes2">
                            <label for="yes4">我已經閱讀並同意以上購買須知、 會員權益聲明與 隱私權及網站使用條款</label>
                        </div>
                    </div>
                    <div class="container submitcom">
                        <div>
                            <input class="submit" type="submit" value="送出">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </main>

<!-- Footer -->
<?php include('../../components/footer.php'); ?>