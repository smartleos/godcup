<?php include('../../../function.php'); ?>
<?php include('../../../components/header.php'); ?>
<?php include('../../../components/ecommerce/addToCart.php'); ?>
<?php include('../../../components/ecommerce/addToCartBtn.php'); ?>
<!-- Header -->


<?php include('../../../components/product/paymentPop.php'); ?>
<?php include('../../../components/product/desciptionPop.php'); ?>
<!-- pop -->


<main class="page_single page">
        <div class="productcon_over">
            <?php include('../../../components/product/imageCarousel.php'); ?>
            <div class="container productcon">
                <div>
                    <h1>皇家大佛寺愛神法會❤️心想事成(大眾場)</h1>
                    <div class="infos">
                        <h4>祈福法會</h4>
                        <div>宅配免運</div>
                    </div>
                    <div class="price">
                        <p>NT $268</p>
                    </div>
                    <p>客約商品：請於結帳時在備註欄位填寫可收貨日期</p>
                </div>

                <div class="conpopss">
                    <div class="conpop">
                        <span class="payment">
                            <i class="icon-icon_deliver"></i>
                            付款與運送方式
                            <i class="icon-icon_arrow"></i>
                        </span>
                    </div>

                    <div class="conpop">
                        <span class="desciption">
                            商品介紹
                            <i class="icon-icon_arrow"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container conimg">
            <figure>
                <img src="<?php site_url() ?>/imgs/testimg/10.jpeg" alt="">
                <img src="<?php site_url() ?>/imgs/testimg/11.jpeg" alt="">
            </figure>
        </div>

        <div class="container conimg">
            <figure>
                <img src="<?php site_url() ?>/imgs/testimg/12.jpeg" alt="">
                <img src="<?php site_url() ?>/imgs/testimg/13.jpeg" alt="">
            </figure>
        </div>

        <div class="container foot_social">
                <ul class="foot_share">
                    <li><a class="facebook" target="_blank"><i class="icon-icon_fb"></i></a>分享</li>
                    <li><a class="line" target="_blank"><i class="icon-icon_line"></i></a>分享</li>
                    <li><a href=""><i class="icon-icon_service"></i></a>客服</li>
                </ul>
        </div>

        <div class="container">
           <div class="product_home">
                <h2>加購專區</h2>
                <div class="addcart_card">
                    <div class="form-check">
                            <input type="checkbox" name="add" value="add" id="add">
					</div>
                    <figure>
                        <img src="<?php site_url() ?>/imgs/testimg/05.jpeg" alt="bannerImg">
                    </figure>
                    <div class="infos">
                        <div>
                            <h4>2022虎虎生風✦安太歲✦</h4>
                            <h6>祈福法會</h6>
                        </div>
                        <div class="price">
                            <div class="add_btn">
                                <p>NT $268</p>
                                <!-- <form id='quantity' method='POST' action='#'> -->
                                    <div class="qty_button">
                                        <div>
                                            <input type='button' value='-' class='qtyminus' field='quantity' />
                                        </div>
                                        <input type='text' name='quantity' value='1' class='qty'/>
                                            <div>
                                                <input type='button' value='+' class='qtyplus' field='quantity' />
                                            </div>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>

        <div class="container">
            <div class="product_home">
				<h2>瀏覽紀錄</h2>
				<?php include('../../../components/templates/producttool.php'); ?>
			</div>
            <div class="product_home">
                <div class="container con_tag blog_nav">
                    <div class="tag">
                        <button><a value="#bestseller">本分類熱銷</a></button>
                        <button><a value="#topp">全站排行</a></button>
                    </div>
                </div>
				<div class="product_top" id="bestseller">
                    <?php include('../../../components/templates/producttool.php'); ?>
                </div>
                <div class="product_top" id="topp">
                    <?php include('../../../components/templates/producttool.php'); ?>
                </div>
			</div>
        </div>
        <div class="container">
            <h2>熱門標籤</h2>
            <div class="con_tag">
                <div class="tag">
                <button>＃成願法會</button>
                <button>＃手環</button>
                <button>＃超渡</button>
                <button>＃人氣推薦</button>
                <button>＃免運</button>
                <button>＃熱銷排行</button>
                </div>
            </div>
        </div>
    </main>

<!-- Footer -->
<?php include('../../../components/footer.php'); ?>