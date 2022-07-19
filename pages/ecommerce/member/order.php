<?php include('../../../function.php'); ?>
<?php include('../../../components/header.php'); ?>
	<!-- Header -->
<?php include('../../../components/member/message.php'); ?>
<?php include('../../../components/ecommerce/addPrayPop.php'); ?>
<?php include('../../../components/ecommerce/editPrayersPop.php'); ?>
<?php include('../../../components/ecommerce/payInfoPop.php'); ?>
<?php include('../../../components/ecommerce/cancelOrederPop.php'); ?>

	
	<main class="page_member me_order page">

        <div class="container con_tag member_nav">
			<div class="tag">
				<button><a href="profile.php">會員基本資料</a></button>
				<button class="t"><a href="">訂單查詢</a></button>
                <button><a href="prayer.php">常用祈福人</a></button>
                <button><a href="coupon.php">優惠券專區</a></button>
                <button><a href="points.php">我的紅利</a></button>
                <button><a href="traceSale.php">我的收藏</a></button>
                <button><a href="<?php site_url() ?>">登出</a></button>
			</div>
		</div>

        <div class="container">
            <div class="chang">
                <h1>訂單查詢</h1>
            </div>
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
                        <p>付款方式</p>
                        <p>付款狀態</p>
                        <p>訂單狀態</p>
                        <p>訂購日期</p>
                        <p>訂購總金額</p>
                    </div>
                    <div class="total right order_info">
                        <p>ATM付款</p>
                        <p><b>未付款</b></p>
                        <p><b>待付款</b></p>
                        <p>2022/04/07</p>
                        <p><b>NT$804 </b>(含運費)</p>
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
                            <div class="cart_flex cancel_oreder">
                                <button class="btn cancel_btn" onclick="canceloreder()">取消訂單</button>
                                <button class="btn add_pray" onclick="payInfoPop()">ATM付款資訊</button>
                            </div>

                            <div class="pro_card">
                                <div class="cart_flex num">
                                    <p>貨品編號 <p class="gray">#394839-30</p></p>
                                </div>
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
                                            <h6>數量：1</h6>
                                            <h6>規格：3盞</h6>
                                            <p>NT $268</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart_flex onborder status">
                                    <div><p>出貨狀態 <b>已出貨</b></p></div>
                                </div>
                                <div class="onborder prayToCart">
                                    <p class="gold">祈福對象</p>
                                    <div class="prayTo">
                                        <div>
                                            <p>詹小華</p>
                                            <p class="gray">1920/3/21</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pro_card">
                                <div class="cart_flex num">
                                    <p>貨品編號 <p class="gray">#394839-30</p></p>
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
                                            <h6>數量：1</h6>
                                            <h6>規格：3盞</h6>
                                            <p>NT $268</p>
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
                            <div class="pro_card">
                                <div class="cart_flex num">
                                    <p>貨品編號 <p class="gray">#394839-30</p></p>
                                </div>
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
                                            <h6>數量：1</h6>
                                            <h6>規格：3盞</h6>
                                            <p>NT $268</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart_flex onborder status">
                                    <div><p>出貨狀態 <b>已出貨</b></p></div>
                                </div>
                                <div class="onborder prayToCart">
                                    <p class="gold">祈福對象</p>
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

                            <div class="another_product">
                                <div class="add_product">
                                    <h2>加購專區</h2>
                                    <form id='quantity' method='POST' action='#'>
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
                                                    <div class="add_btn">
                                                        <p>NT $268</p>
                                                        <div class="qty_button">
                                                            <div>
                                                                <input type='button' value='-' class='qtyminus' field='quantity' />
                                                            </div>
                                                            <input type='text' name='quantity' value='1' class='qty'/>
                                                            <div>
                                                                <input type='button' value='+' class='qtyplus' field='quantity' />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button id="" class="btn big_btn black_btn">
                                                <a href="<?php site_url() ?>/pages/ecommerce/cart.php">我要加購</a>
                                            </button>
                                        </div>
                                    </form>
                                </div>     
                            </div>

                            <div class="cart_flex top_line">
                                <div class="total left gray order_info">
                                    <p>商品小計</p>
                                    <p>運費</p>
                                    <p>折扣金額</p>
                                    <p>商品總金額</p>
                                </div>
                                <div class="total right order_info">
                                    <p>NT $804</p>
                                    <p>NT $60</p>
                                    <p>-NT $60</p>
                                    <p>NT $804</p>
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
