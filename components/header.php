<!doctype html>
<html lang="zh_TW">
  
  
<head>
  <meta charset="utf-8">
  <meta name="theme-color" content="#C89862">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>開運NOW</title>
  <meta name="description" content="A simple HTML5 Template for new projects.">
  <meta name="author" content="SitePoint">
  <meta property="og:title" content="開運NOW">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
  <meta property="og:description" content="A simple HTML5 Template for new projects.">
  <meta property="og:image" content="image.png">

  <link rel="icon" href="<?php site_url() ?>/imgs/icons/favicon.ico">
  <!-- <link rel="icon" href="/favicon.svg" type="image/svg+xml"> -->
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link rel="stylesheet" type="text/css" href="<?php site_url() ?>/assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?php site_url() ?>/assets/css/fontello.css">
  <script src="<?php site_url() ?>/assets/js/jquery-3.6.0.min.js"></script>

</head>
<body>
    <header class="header">
      <div class="outlayer">
        <div class="eslogo">
          <a href="<?php site_url() ?>">
            <img src="<?php site_url() ?>/imgs/icons/logo.png" alt="開運 Logo">
          </a>
        </div>
        <nav>
          <ul class="nav_category">
            <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">貴人桃花</a></li>
            <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">暴富財運</a></li>
            <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">事業興旺</a></li>
            <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">健康安泰</a></li>
          </ul>
          <ul>
            <li><a href="<?php site_url() ?>/pages/ecommerce/member/login.php"><i class="icon-icon_member memberlog"></i></a></li>
            <li><a href="<?php site_url() ?>/pages/ecommerce/cart.php"><i class="icon-icon_shopping_cart"></i></a></li>
            <li><a><i class="search_open icon-icon_search"></i></a></li>
            <li id="menu_open"><a><i class="icon-icon_menu"></i></a></li>
          </ul>
        </nav>
    </header>

        <div class="head_inner_bg">
          <div class="head_inner">
            <!-- <div class="head_in">
              <div class="eslogo desk_none">
                <a href="<?php site_url() ?>">
                  <img src="<?php site_url() ?>/imgs/icons/logo.png" alt="開運 Logo">
                </a>
              </div>
              <nav>
                <ul>
                  <li class="desk_none"><a href="<?php site_url() ?>/pages/ecommerce/member/profile.php"><i class="icon-icon_member memberlog"></i></a></li>
                  <li class="desk_none"><a href="<?php site_url() ?>/pages/ecommerce/cart.php"><i class="icon-icon_shopping_cart"></i></a></li>
                  <li class="desk_none"><a><i class="search_open icon-icon_search"></i></a></li>
                  <li><a><i id="menu_close" class="icon-icon_close"></i></a></li>
                </ul>
              </nav>
            </div> -->
            <div class="navs_wrap">
              <ul class="navs">
                <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">人氣商品</a></li>
                <li><a class="openN one">成願大法會<i class="icon-icon_arrow"></i></a>
                    <div class="sub">
                      <ul>
                        <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">全部商品</a></li>
                        <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">四面佛成願大法會</a></li>
                        <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">皇家大佛寺愛神大法會</a></li>
                        <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">2022虎年祈福法會</a></li>
                        <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">九陽轉運蠟燭大法會</a></li>
                        <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">超渡大法會</a></li>
                        <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">持續布施 ◆ 功德圓滿</a></li>
                      </ul>
                    </div>
                </li>
                <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">開運聖物</a></li>
                <li><a class="openN two">祈願指南<i class="icon-icon_arrow"></i></a>
                    <div class="sub">
                      <ul>
                        <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">全部商品</a></li>
                        <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">桃花</a></li>
                        <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">財運</a></li>
                        <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">事業</a></li>
                        <li><a href="<?php site_url() ?>/pages/ecommerce/products/list.php">健康</a></li>
                      </ul>
                    </div>
                </li>
                <li><a href="<?php site_url() ?>/pages/blog/list.php">祈願必看</a></li>
                <hr>
                <li>
                  <a href="<?php site_url() ?>/pages/about.php">
                    關於我們
                    <!-- <i class="icon-icon_arrow"></i> -->
                  </a>
                </li>
                <li>
                  <a href="<?php site_url() ?>/pages/shop.php">
                    購物說明
                    <!-- <i class="icon-icon_arrow"></i> -->
                  </a>
                </li>
                <li>
                  <a href="<?php site_url() ?>/pages/qa.php">
                    客服資訊
                    <!-- <i class="icon-icon_arrow"></i> -->
                  </a>
                </li>
                <hr>
              </ul>
              <div class="social">
                    <ul>
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="icon-icon_fb"></i></a></li>
                        <li><a href="https://line.me/zh-hant/" target="_blank"><i class="icon-icon_line"></i></a></li>
                    </ul>
                </div>
            </div>
          </div>
        </div>

        <div class="head_search_bg">
          <div class="head_search">
              <div class="head_in">
                <!-- <div class="eslogo">
                  <a href="<?php site_url() ?>">
                    <img src="<?php site_url() ?>/imgs/icons/logo.png" alt="開運 Logo">
                  </a>
                </div> -->
                <nav>
                  <ul>
                    <li><a><i id="search_close" class="icon-icon_close"></i></a></li>
                  </ul>
                </nav>
              </div>
              <div class="search_com">
                  <div class="search">
                      <input class="search_bar" type="text" name="search" id="search" placeholder="請輸入關鍵字" value="">
                      <button class="search_btn"><a href="<?php site_url() ?>/pages/ecommerce/products/search.php"><i class="icon-icon_search i_search"></i></a></button>
                  </div>
              </div>
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
          </div>
        </div>