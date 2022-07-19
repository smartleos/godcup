<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/ecommerce/addToCart.php'); ?>
<?php include('../../components/ecommerce/info.php'); ?>
<!-- Header -->


<?php include('../../components/ecommerce/pointsPop.php'); ?>
<?php include('../../components/product/desciptionPop.php'); ?>
<!-- pop -->


<main class="cart_step2 page_cart page" id="cart_step2">

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
            <span>
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
        
        <form id="" method="post" action="" class="inp_style">
            <div class="col_flex">
                <div class="col_6">
                    <div class="container form">
                        <h2>付款方式</h2>
                        <div class="form-check">
                            <input type="radio" name="pay" value="LINE Pay" id="payone" onclick="getVal()">
                            <label for="payone">LINE Pay</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="pay" value="超商貨到付款" id="paytwo" onclick="getVal()">
                            <label for="paytwo">超商貨到付款</label>
                        </div>
                        <div class="form-check ECpay">
                            <input type="radio" name="pay" value="信用卡付款" id="paythree" onclick="getVal()">
                            <label for="paythree">信用卡付款</label>
                            <img src="<?php site_url() ?>/imgs/testimg/ECpay.png" alt="ECpay">
                        </div>
                        <div class="form-check">
                            <input type="radio" name="pay" value="ATM付款" id="four" onclick="getVal()">
                            <label for="four">ATM付款</label>
                            <p class="remind">帳號將於訂單送出後提供</p>
                        </div>		
                    </div>
                    <div class="container form">
                        <h2>運送方式</h2>
                        <div class="form-check">
                            <input type="radio" name="send" value="全家取貨付款" id="sendone" onclick="getVal()">
                            <label for="sendone">全家取貨付款</label>
                            <p class="remind">每筆NT$60，滿NT$1,000(含以上)免運費</p>
                            <p class="remind bg">已選擇 金信店</p>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="send" value="7-11取貨付款" id="sendtwo" onclick="getVal()">
                            <label for="sendtwo">7-11取貨付款</label>
                            <p class="remind">每筆NT$60，滿NT$1,000(含以上)免運費</p>
                            <p class="remind bg">已選擇 內湖店</p>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="send" value="宅配" id="sendthree" onclick="getVal()">
                            <label for="sendthree">宅配</label>
                            <p class="remind">宅配（已滿 NT$1,000 免運）</p>
                        </div>
                    </div>
                    <div class="container form">
                        <h2>發票開立資訊</h2>
                        <div class="form-check">
                            <input type="radio" name="receipt" value="儲存在會員載具" id="one" onclick="getVal()" checked>
                            <label for="one">儲存在會員載具</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="receipt" value="儲存在手機條碼" id="two" onclick="getVal()">
                            <label for="two">儲存在手機條碼</label>
                            <div>
                                <input type="number" name="phonreceipt" id="phonreceipt" placeholder="請輸入手機條碼" value="">
                                </input>
                            </div> 
                        </div>
                        <div class="form-check">
                            <input type="radio" name="receipt" value="三聯式發票" id="three" onclick="getVal()">
                            <label for="three">三聯式發票</label>
                            <div>
                                <input type="number" name="receipt" id="company" placeholder="公司抬頭" value="">
                                </input>
                            </div> 
                            <div>
                                <input type="number" name="receipt" id="receiptnum" placeholder="統一編號" value="">
                                </input>
                            </div> 
                        </div>
                        <div class="form-check">
                            <input type="radio" name="receipt" value="捐贈發票" id="two" onclick="getVal()">
                            <label for="two">捐贈發票</label>
                            <div>
                                <input type="number" name="number" id="number" placeholder="請輸入愛心碼" value="">
                                </input>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="col_6">
                    <div class="container">
                        <div class="cart_flex">
                            <div class="total left">
                                折扣後小計
                                <p class="subtotal">運費</p>
                            </div>
                            <div class="total">
                                NT $804
                                <p class="subtotal">NT $60</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="cart_flex last">
                            <div class="qty">共計3項商品</div>
                            <div class="total">
                                <b>NT $864</b>
                                <p>(不含運費)</p>
                                <p>皆以TWD付款</p>
                            </div>
                        </div>
                    </div>
                    <div class="container desk_cart">
                        <div class="desk_cart_info">
                            <div class="info">
                                <p>運送地區：台灣</p>
                                <p>小計：<b>NT$ 804</b></p>
                            </div>
                            <button class="next" onclick="cartStep()"><a class="cart_step" href="#">下一步</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </main>

<!-- Footer -->
<?php include('../../components/footer.php'); ?>