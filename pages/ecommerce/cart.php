<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/ecommerce/addToCart.php'); ?>
<?php include('../../components/ecommerce/info.php'); ?>
<!-- Header -->


<?php include('../../components/ecommerce/pointsPop.php'); ?>
<?php include('../../components/product/desciptionPop.php'); ?>
<!-- pop -->


<main class="cart_step1 page_cart page" id="cart_step1">
    <div class="step_title">
        <span class="stepon">
            確認購物車
            <i>
                <b></b>
            </i>
        </span>
        <span>
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

    <form id='cart' method='POST' action='#'>
        <div class="col_12 col_flex">
            <div class="container col_6">
                <div class="product_home add_product">
                        <div class="addcart_card">
                            <i id="" class="icon-icon_close"></i>
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
                        <div class="addcart_card">
                            <i id="" class="icon-icon_close"></i>
                            <figure>
                                <img src="<?php site_url() ?>/imgs/testimg/06.jpeg" alt="bannerImg">
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
                </div>
                <div class="product_home add_product">
                        <h2>加購專區</h2>
                        <div class="addcart_card">
                            <div class="form-check">
                                    <input type="checkbox" name="add" value="add" id="add">
                            </div>
                            <figure>
                                <img src="<?php site_url() ?>/imgs/testimg/08.jpeg" alt="bannerImg">
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
            <div class="col_6">
                <div class="container">
                    <div class="points input_style">
                        <p>紅利折抵</p>
                        <b>目前共 5000點</b>
                        <div class="container">
                            <div>
                                <input type="number" name="point" id="point" placeholder="請輸入折抵點數" value="">
                                </input>
                            </div>                    
                            <div>
                                <input class="submit" type="submit" value="使用">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="conpop">
                        <span class="my_points" onclick="pointsPop()">
                            優惠券 & 優惠碼
                            <i class="icon-icon_arrow"></i>
                        </span>
                    </div>
                </div>
                <div class="container">
                    <h3>已選優惠券</h3>
                    <div class="coupon_cards">
                        <div class="addcart_card">
                            <figure>
                                <img src="<?php site_url() ?>/imgs/testimg/coupon.svg" alt="bannerImg">
                            </figure>
                            <div class="infos">
                                <div class="in">
                                    <h4>四月份免運券</h4>
                                    <h6>優惠券詳細說明優惠券詳細說明優惠券詳細說明優惠券詳細說明</h6>
                                </div>
                                <div class="price">
                                    <div class="add_btn">
                                        <p>有效期限至2022/12/1</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="cart_flex first">
                        <div class="subtotal">
                            <p>商品金額小計</p>
                            <p>折扣金額</p>
                        </div>
                        <div class="totalrad">
                            <p>NT $804</p>
                            <p><b>NT $60</b></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="cart_flex last">
                        <div class="qty">共計3項商品</div>
                        <div class="total">
                            <b>NT $804</b>
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

        <div class="container col_12">
            <div>
                <a href="<?php site_url() ?>/pages/ecommerce/products/list.php">
                    <button id="" class="btn big_btn black_btn">
                        繼續購物
                    </button>
                </a>
            </div>
            <div>
                <a href="<?php site_url() ?>/pages/ecommerce/member/traceSale.php">
                    <button id="" class="btn big_btn black_btn">
                        我的收藏
                    </button>
                </a>
            </div>
        </div>
    </form>
</main>

<!-- Footer -->
<?php include('../../components/footer.php'); ?>