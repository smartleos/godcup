console.log("%c ✦  Made By ES design studio ✦ ", "background:#C89862;padding:5px 15px;border-radius:5px; color:#FFFFFF;");

// ------------------------
// 轉場動畫
// ------------------------
window.onpageshow = function() {
    setTimeout(() => {
        $('.page').addClass('show');
        $('.header').addClass('show');
        $('.footer').addClass('show');
        $('.carousel_con').addClass('show');
        $('.productmenu').addClass('show');
        $('.add_to_cart_btn').addClass('show');
        $('.cart_info').addClass('show');
    }, 500);
};

// ------------------------
// message pop 訊息彈窗
// ------------------------
function espopup (type, icon, message) {
    if (document.querySelector('.es_notification')) {return false}
    const div = document.createElement('div')
    div.innerHTML = '<div class="inner">' + icon + '<p>' + message + '</p></div>'
    div.classList.add('esNotification')
    div.classList.add(type)
    document.body.appendChild(div)

    setTimeout(() => {
        const noti = document.querySelector('.esNotification')
        noti.classList.add('out')
        setTimeout(() => {noti.remove()}, 200)
    }, 2000)
}

// ------------------------
// POP開啟時鎖定body
// ------------------------
function lockBody() {
    $('body').addClass('lock');
}

function onlockBody() {
    $('body').removeClass('lock');
}

// ------------------------
// header
// ------------------------
$("#menu_open").on('click', function(){
        $(".head_inner_bg").toggleClass("show");  
        $(".head_inner").toggleClass("show");
        $("#menu_open a i").toggleClass("icon-icon_menu");
        $("#menu_open a i").toggleClass("icon-icon_close");
        $('body').toggleClass('lock');
    }
);
// $("#menu_close").on('click', function(){
//         $(".head_inner").removeClass("show"); 
//         $(".head_inner_bg").removeClass("show"); 
//     }
// );

$(".search_open").on('click', function(){
        $(".head_search").addClass("show"); 
        $(".head_search_bg").addClass("show"); 
        $(".head_inner").removeClass("show"); 
        $(".head_inner_bg").removeClass("show");
        $("#menu_open a i").addClass("icon-icon_menu");
        $("#menu_open a i").removeClass("icon-icon_close");
        lockBody()
        // const headIn =  $(".head_inner")
        // console.log(headIn[0].classList.length)
        // setTimeout(() => {
        //     if (headIn[0].classList.length !== 1) {
        //         $("#menu_open a i").toggleClass("icon-icon_menu");
        //         $("#menu_open a i").toggleClass("icon-icon_close");
        //     }
        // }, 500);
    }
);
$("#search_close").on('click', function(){
        $(".head_search").removeClass("show");
        $(".head_search_bg").removeClass("show");
        $(".head_inner").removeClass("show"); 
        $(".head_inner_bg").removeClass("show");
        onlockBody()
    }
);
$(".search_bar").on('click', function(){
        $(".i_search").toggleClass("show");
    }
);

$('.sub').each((el)=> {
    const open = $('a.openN')
    $(el).parent('li').find(open).append('<i class="icon-icon_arrow"></i>')
    // if ($(el).parent('li').find('a.openN')) {
    //     $('a.openN').append('<i class="icon-icon_arrow"></i>')
    // } else {
    //     console.log('no')
    // }
})

$(".openN").on('click', function(e){
    let icon = e.target.parentElement.querySelector('.icon-icon_arrow')
    let content = e.target.parentElement.querySelector('.sub')
    // $(icon).toggleClass("show");
    if (icon.classList.contains('show')) {
        content.style.height = '0px'
        $(icon).toggleClass("show")
        // console.log("close")
    } else {
        let hei = e.target.parentElement.querySelector('ul').getBoundingClientRect().height + 'px'
        content.style.height = hei
        $(icon).toggleClass("show")
        // console.log("open")
    }
    
});

// ------------------------
// search 搜尋文字
// ------------------------
$('button.search_btn').on('click',function() {
    let searchVal = $(".search_bar").val()
    $("#searchname b").html(searchVal)
    console.log(searchVal)
});

// ------------------------
// footer
// ------------------------
$(".backtop ul li a").on('click', function(){
    console.log(this)
    $('html, body').animate({
        scrollTop: 0
    }, 750);
}
);

// ------------------------
// button_heart 加入我的最愛
// ------------------------
$(".button_heart").on('click', function(e){
    const heart = e.target.parentElement.parentElement.querySelector("#heart")
    // console.log(heart)
        $(heart).toggleClass("icon-icon_heart"); 
        $(heart).toggleClass("icon-icon_add_heart");
    }
);

// ------------------------
// product_menu
// ------------------------
var page = document.querySelector('.page');

function menumove() {
    const winInnerH = window.innerHeight;
    const scrH = window.scrollY;
    const allH = document.documentElement.offsetHeight;
    const prMenu = document.getElementsByClassName("productmenu");
    const prH = prMenu[0].clientHeight;

    const sr = winInnerH + scrH;
    const all = allH - prH;

    // console.log("innerHeight",winInnerH)
    // console.log("scrollHeight",scrH)
    // console.log("offsetHeight",allH)
    // console.log("productmenu",prMenu)
    // console.log("productmenu Height",prH)
    // console.log("滾動總數",sr)
    // console.log("減掉footer高度",all)
    
    if (sr > all) {
        $('.productmenu').addClass("none")
    } else {
        $('.productmenu').removeClass("none")
    }

};

if (page.classList[0] == 'page_home' || page.classList[0] == 'page_list' ) {
    window.addEventListener("scroll", menumove);
}

// ------------------------
// product_dropdown
// ------------------------
$("#selclick").on('click', function() {
        $(".dropdown").toggleClass("show");
    }
);
// $("input[name='top']").on('click', function(){
//     var radioValue = $("input[name='top']:checked").val();
//     if(radioValue){
//         $("#selname").html(radioValue)
//     }
// });

function getVal() {
    let radioValue = $("input[name='top']:checked").val();
        if(radioValue){
            $("#selname").html(radioValue)
            $(".dropdown").toggleClass("show");
        }
}

// ------------------------
// product_list
// ------------------------
let iconGrid = document.querySelector('.common_grid');
let prMenu = document.getElementById("icon_grid");
$(".common_grid").on('click', function() {
        pageLoad()
        setTimeout(() => {
            switch (prMenu.classList[0]) {
                case 'icon-icon_grid1' :
                    $("#icon_grid").removeClass("icon-icon_grid1");
                    $("#icon_grid").addClass("icon-icon_grid2");
                    $(".product_list").addClass("style_b");
                    break;
                case 'icon-icon_grid2' :
                    $("#icon_grid").removeClass("icon-icon_grid2");
                    $("#icon_grid").addClass("icon-icon_grid3");
                    $(".product_list").removeClass("style_b");
                    $(".product_list").addClass("style_c");
                    break;
                case 'icon-icon_grid3' :
                    $("#icon_grid").removeClass("icon-icon_grid3");
                    $("#icon_grid").addClass("icon-icon_grid1");
                    $(".product_list").removeClass("style_c");
                    break;
            }    
        }, 300);
    }
);


function pageLoad() {
    $('.page').removeClass('show');
    setTimeout(() => {
        $('.page').addClass('show');
    }, 300);
}

// ------------------------
// add_to_cart 商品數量
// ------------------------
// var qty = $(".qty");
$(".qtyplus").on('click', function(e){
    const qty = e.target.parentElement.parentElement.querySelector("input[type=text]");
        const n = parseInt(qty.value)
        console.log(qty)
        console.log(n)
        qty.value = n + 1
        // qty.val(parseInt(qty.val())+1);
        $(".qtyminus").removeAttr("disabled");
        // setTotal();
    }
);
$(".qtyminus").on('click', function(e){
    const qty = e.target.parentElement.parentElement.querySelector("input[type=text]");
        const n = parseInt(qty.value)
        if (n>1) {                    //判斷數量值大於1時才可以減少
            qty.value = n - 1
        }else{
            $(".qtyminus").attr("disabled","disabled")  //當$("#min")為1時，$("#min")不可讀狀態
        }
        // setTotal();
    }
);
// 計算總價
// function setTotal(){
//     $("#total").html((parseInt(t.val())*3.95).toFixed(2));
// }

$(".button_cart").on('click', function(e){
        // e.stopPropagation();
        e.preventDefault();
        lockBody()
        $(".addcart_pop").addClass("show")
    }
);
$("#close_add_pop").on('click', function(){
        $(".addcart_pop").removeClass("show")
        onlockBody()
    }
);
$("#add_b").on('click', function(){
        $(".addcart_pop").removeClass("show")
        onlockBody()
    }
);

function addTOCart(e) {
    lockBody()
    $(".addcart_pop").addClass("show")
}


$("label.speclabel").on('click', function(e){
        const spec = e.target.parentElement.parentElement.querySelector("label")
        const specAll = $("label.speclabel")
        const specValue = e.target.parentElement.querySelector("input[name='spec']")
        const specValueAll = $("input[name='spec']")

        // 全部取消選取
        if(specValueAll.checked !== true){
            $(specAll).removeClass("tag")
            console.log("ontag")
        }
        // 有checked的變色
        if(specValue.checked == true){
            $(spec).addClass("tag")
            console.log("tag")
        } else {
            $(spec).removeClass("tag")
        }
        // console.log(spec)
        // console.log(specValue.checked)
    }
);

// ------------------------
// add_to_cart_Btn
// ------------------------
function addmenumove() {
    const winInnerH = window.innerHeight;
    const scrH = window.scrollY;
    const allH = document.documentElement.offsetHeight;
    const addMenu = document.getElementsByClassName("add_to_cart_btn");
    const addH = addMenu[0].clientHeight;

    const sr = winInnerH + scrH;
    const addAll = allH - addH;

    // console.log(addMenu)   

    if (sr > addAll) {
        $('.add_to_cart_btn').addClass("none")
    } else {
        $('.add_to_cart_btn').removeClass("none")
    }
};
// console.log(page)
// console.log(page.classList[0])
if (page.classList[0] == 'page_single' ) {
    window.addEventListener("scroll", addmenumove);
}

// ------------------------
// cart_info
// ------------------------
    function addcartmove() {
        const winInnerH = window.innerHeight;
        const scrH = window.scrollY;
        const allH = document.documentElement.offsetHeight;
        const addMenu = document.getElementsByClassName("cart_info");
        const addH = addMenu[0].clientHeight;

        const sr = winInnerH + scrH;
        const addAll = allH - addH;

        // console.log(addMenu)   

        if (sr > addAll) {
            $('.cart_info').addClass("none")
        } else {
            $('.cart_info').removeClass("none")
        }
    };
    // console.log(page)
    // console.log(page.classList[0])

    if (page.classList[0] == 'cart_step1' || page.classList[0] == 'cart_step2' ) {
        // window.addEventListener("scroll", addcartmove);
        const wdth = $(window).width();
        if (wdth > 768) {
            $('.cart_info').addClass("none")
        } else {
            window.addEventListener("scroll", addcartmove);
            $('.cart_info').removeClass("none")
        }
        $(window).on('resize', function(){
                const wdth = $(window).width();
                if (wdth > 768) {
                    $('.cart_info').addClass("none")
                } else {
                    window.addEventListener("scroll", addcartmove);
                    $('.cart_info').removeClass("none")
                }
            }
        );
    }

// ------------------------
// All pop
// ------------------------
$("div.pop .popup").on('click', function (e) {
    e.stopPropagation();
    // alert('停止')
})
$("div.pop").on('click', function(e){
    // alert('觸發')
    $(this).removeClass("show")
        onlockBody()
        console.log('關閉')
    }
);

// ------------------------
// video_pop
// ------------------------
$(".video_btn").on('click', function(){
        lockBody()
        $(".video_pop").addClass("show")
    }
);
$(".video_pop").on('click', function(){
        $(".video_pop").removeClass("show")
        onlockBody()
    }
);

// ------------------------
// payment_pop
// ------------------------
$(".payment").on('click', function(){
        lockBody()
        $(".payment_pop").addClass("show")
    }
);
$("#close_pay_pop").on('click', function(){
        $(".payment_pop").removeClass("show")
        onlockBody()
    }
);

// ------------------------
// desciption_pop
// ------------------------
$(".desciption").on('click', function(){
        lockBody()
        $(".desciption_pop").addClass("show")
    }
);
$("#close_des_pop").on('click', function(){
        $(".desciption_pop").removeClass("show")
        onlockBody()
    }
);

// ------------------------
// payInfo_pop 付款資訊
// ------------------------
function payInfoPop(e) {
    lockBody()
    $(".payInfo_pop").addClass("show")
}
function closepayInfoPop(e) {
    $(".payInfo_pop").removeClass("show")
    onlockBody()
}

// ------------------------
// 常用祈福人點擊後，將資料帶入
// ------------------------
$("#close_payInfo_pop").on('click', function(){
        // $(".payInfo_pop").removeClass("show")
        // onlockBody()
    }
);

// ------------------------
// addpray_pop 新增祈福對象
// ------------------------
function addprayPop(e) {
    lockBody()
    $(".addpray_pop").addClass("show")
}
$("#close_addpray_pop").on('click', function(){
        $(".addpray_pop").removeClass("show")
        onlockBody()
    }
);
// $(".pray_btn").on('click', function(){
//         $(".addpray_pop").removeClass("show")
//         onlockBody()
//     }
// );

// ------------------------
// addprayers_pop 會員區 新增祈福對象
// ------------------------
function addprayersPop(e) {
    lockBody()
    $(".addprayers_pop").addClass("show")
}
$("#close_addprayers_pop").on('click', function(){
        $(".addprayers_pop").removeClass("show")
        onlockBody()
    }
);

// ------------------------
// addprayers_pop 會員區 編輯祈福對象
// ------------------------
function editprayersPop(e) {
    lockBody()
    $(".editprayers_pop").addClass("show")
}
$("#close_editprayers_pop").on('click', function(){
        $(".editprayers_pop").removeClass("show")
        onlockBody()
    }
);

// ------------------------
// me_points tab切換
// ------------------------
function editprayersPop(e) {
    lockBody()
    $(".editprayers_pop").addClass("show")
}
$("#close_editprayers_pop").on('click', function(){
        $(".editprayers_pop").removeClass("show")
        onlockBody()
    }
);

// ------------------------
// QA
// ------------------------
$(".openQA").on('click', function(e){
    let qaicon = e.target.parentElement.parentElement.querySelector('.icon-icon_arrow')
    let qacontent = e.target.parentElement.parentElement.querySelector('.qa_in')
    // $(icon).toggleClass("show");
    if (qaicon.classList.contains('show')) {
        qacontent.style.height = '0px'
        console.log("close")
        $(qaicon).toggleClass("show")
    } else {
        let qahei = e.target.parentElement.parentElement.querySelector('.qas').getBoundingClientRect().height + 'px'
        qacontent.style.height = qahei
        console.log("open")
        $(qaicon).toggleClass("show")
    }
    
    console.log(qacontent)
    console.log(qaicon)
});

// ------------------------
// login
// ------------------------
$(".icon_eye").on('click', function(e){
        let passwordEye = e.target.parentElement.querySelector(".password input[type='password']");
        let passwordNoEye = e.target.parentElement.querySelector(".password input[type='text']");
        $(passwordEye).attr('type', 'text');
        $(passwordNoEye).attr('type', 'password');
    }
);

// ------------------------
// Member login 會員登入
// ------------------------
function memberLogin() {
    $(".memberlog").addClass("icon-icon-icon_memberlog"); 
    $(".memberlog").removeClass("icon-icon_member");
}
if (page.classList[0] == 'page_member' ) {
    memberLogin();
}

// 判斷是否為會員
$('.login_submit').on('click', function (e) {
    const loginToken = document.getElementById('loginPassword')
    const loginEmail = document.getElementById('loginEmail')
    if (loginToken.value == '000000') {
        $('form#loginForm').attr('action' ,  'profile.php')
    } 
    if(loginEmail.value !== '' && loginToken.value !== '000000') {
        e.preventDefault()
        $(".email_pop").addClass("show"); 
    }
    // alert(loginToken.value)
})

// ------------------------
// forget_pop
// ------------------------
$("#forget_btn").on('click', function(){
        lockBody()
        $(".forget_pop").addClass("show"); 
    }
);
// $(".forget_pop").on('click', function(){
//         $(".forget_pop").removeClass("show");
//         onlockBody() 
//     }
// );

// ------------------------
// points_pop
// ------------------------
function pointsPop() {
    lockBody()
    $(".points_pop").addClass("show"); 
}
$("#close_points_pop").on('click', function(){
        $(".points_pop").removeClass("show"); 
        onlockBody()
    }
);

// ------------------------
// resetpass_pop
// ------------------------
function resetpass() {
    lockBody()
    $(".forget_pop").removeClass("show");
    $(".resetpass_pop").addClass("show");
    $(".message").toggleClass("show"); 
    setTimeout(() => {
        $(".message").toggleClass("show"); 
    }, 3000);
}

// ------------------------
// canceloreder_pop
// ------------------------
function canceloreder() {
    lockBody()
    $(".canceloreder_pop").addClass("show");
}
function onCanceloreder() {
    $(".canceloreder_pop").removeClass("show");
    onlockBody()
}

// ------------------------
// changepass_pop
// ------------------------
function changepass() {
    lockBody()
    $(".changepass_pop").addClass("show");
}
function onChangepass() {
    $(".changepass_pop").removeClass("show");
    onlockBody()
}

// ------------------------
// page_member me_order
// ------------------------
// $(".another_btn").on('click', function(e){
//     const icon = e.target.parentElement.querySelector('.icon-icon_arrow')
//     const qacontent = e.target.parentElement.parentElement.parentElement.querySelector('.another_product')
//     if (icon.classList.contains('show')) {
//         qacontent.style.height = '0px'
//         console.log("close")
//         $(icon).toggleClass("show")
//     } else {
//         const qahei = e.target.parentElement.parentElement.parentElement.querySelector('.add_product').getBoundingClientRect().height + 'px'
//         qacontent.style.height = qahei
//         console.log("open")
//         $(icon).toggleClass("show")
//     }
// });

$(".status_btn").on('click', function(e){
    const icon = e.target.parentElement.querySelector('.icon-icon_arrow')
    const qacontent = e.target.parentElement.parentElement.parentElement.querySelector('.product_status')
    const line = e.target.parentElement.parentElement.parentElement.querySelector('.conpop')
    if (icon.classList.contains('show')) {
        qacontent.style.height = '0px'
        console.log("close")
        $(icon).toggleClass("show")
        $(line).toggleClass("show")
    } else {
        const qahei = e.target.parentElement.parentElement.parentElement.querySelector('.status_com').getBoundingClientRect().height + 'px'
        qacontent.style.height = qahei
        console.log("open")
        $(icon).toggleClass("show")
        $(line).toggleClass("show")
    }
    // console.log(icon)
    // console.log(qacontent)
});

// ------------------------
// addpray_pop
// ------------------------
// $(".addprays_btn").on('click', function(e){
//     const icon = e.target.parentElement.querySelector('.icon-icon_arrow')
//     const content = e.target.parentElement.parentElement.parentElement.querySelector('.pray_status')
//     if (icon.classList.contains('show')) {
//         content.style.height = '0px'
//         console.log("close")
//         $(icon).toggleClass("show")
//     } else {
//         const hei = e.target.parentElement.parentElement.parentElement.querySelector('.pray_com').getBoundingClientRect().height + 'px'
//         content.style.height = hei
//         console.log("open")
//         $(icon).toggleClass("show")
//     }
//     // console.log(icon)
//     // console.log(content)
// });

var pray = [].slice.call(document.getElementsByClassName("addprays_btn"));
pray.forEach(function (element, index){
    const numPra = element.querySelector('.numPra')
    $(numPra).html(index + 1)
    element.addEventListener("click", function(e){
        const icon = e.target.parentElement.querySelector('.icon-icon_arrow')
        const content = e.target.parentElement.parentElement.querySelector('.pray_status')
        if (icon.classList.contains('show')) {
            content.style.height = '0px'
            console.log("close")
            $(icon).toggleClass("show")
        } else {
            const hei = e.target.parentElement.parentElement.querySelector('.pray_status .pray_com').getBoundingClientRect().height + 'px'
            content.style.height = hei
            console.log(hei)
            console.log("open")
            $(icon).toggleClass("show")
        }
        // console.log(element)
        // console.log(icon);
        // console.log(content);
        // console.log(index);
    });

    // 祈福人輸入完成，表單收合
    const praySub = element.querySelector('.pray_status .pray_com .input_style form.prayForm')
    const prayBtn = element.querySelector('.pray_status .pray_com .input_style form.prayForm div .praysubmit')
    const pray1 = element.querySelector('.pray_status .pray_com .input_style form.prayForm div #name')
    const pray2 = element.querySelector('.pray_status .pray_com .input_style form.prayForm div #birthday')
    const pray3 = element.querySelector('.pray_status .pray_com .input_style form.prayForm div #note')
    // console.log(praySub)
    // console.log(prayBtn)
    $(prayBtn).on('click', function (e){
        if (pray1.value !== '' && pray2.value !== '' && pray3.value !== '') {
            const icon = e.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.querySelector('.icon-icon_arrow')
            const content = e.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.querySelector('.pray_status')
            const addSucc = e.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.querySelector('.add_pray_success')
            $("#addPary").ajaxSubmit(function(message) {
                content.style.height = '0px'
                $(icon).toggleClass("show")
                $(addSucc).addClass("shows")
            });
            return false;            
        }
    })
    // console.log(element + index);
});


// ------------------------
// page_member me_points
// ------------------------
var tag = $('.point_nav div.tag button');
$(tag.eq(0) .addClass('t').find('a').attr('value')).siblings('.points_re').hide();
tag.click(function(){
    $($(this).find('a'). attr ('value')).show().siblings ('.points_re').hide();
    $(this).addClass('t'). siblings ('.t').removeClass('t');
});

// ------------------------
// page_single 本分類熱銷＆全站排行 tab 
// ------------------------
var bltag = $('.blog_nav div.tag button');
$(bltag.eq(0) .addClass('t').find('a').attr('value')).siblings('.product_top').hide();
bltag.click(function(){
    $($(this).find('a'). attr ('value')).show().siblings ('.product_top').hide();
    $(this).addClass('t'). siblings ('.t').removeClass('t');
});

// ------------------------
// specification 商品規格
// ------------------------
$('#buy').on('click', function (e) {
    $('form#specification').attr('action' ,  '../cart.php')
    $('form#specification').addClass("checkout")
})
$('#checkout').on('click', function (e) {
    e.preventDefault()
    const form = e.target.parentElement.parentElement.parentElement.querySelector('form#specification')
    // console.log(form)
    if (form.classList[0] == 'checkout') {
        $('form#specification').submit()
    } else {
        $(".addcart_pop").removeClass("show")
        espopup('type','<i class=icon-icon_yes></i>','已加入購物車')
        onlockBody()
    }
})

// ------------------------
// 暫時使用的購物流程step
// ------------------------
function cartStep() {

    switch (page.id) {
        case 'cart_step1' :
            $(".cart_step").attr("href", "checkoutConfirm.php");
            break;
        case 'cart_step2' :
            $(".cart_step").attr("href", "pay.php");
            break;
    } 
    
    console.log(page.id)
    console.log($(".cart_step"))
    if (page.classList[0] == 'cart_step1' || page.classList[0] == 'cart_step2' ) {
        window.addEventListener("scroll", cartStep);
    }
}










/*
 ✦---------------------✦
 | Login&Regist表單驗證 |
 ✦---------------------✦
        _　　　　_  
     　| ＼　　／ |  
     　ヽ_)>―<(_ノ  
     　ミ ヽ　ｒ ミ  ✦ 
     　ﾐ (●　　●)ﾐ   ✦
     　　 ヽ(◆)ノ  
     　✦  / ￣ ＼  
     ✦ 　｜　　　＼ノ) ))  
　     　｜|｜|(⌒ Ｙ  
     　　(ノ(ノ⊂＿ﾉ
 ✦---------------------✦
 | Login&Regist表單驗證 |
 ✦---------------------✦
 */

// ------------------------
// Login Form
// ------------------------
$("#loginForm").validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 6,
        maxlength: 12,
      },
    //   agree: "required"
    },
    messages: {
        email: {
            required: "請輸入信箱",
            email: "信箱格式不正確"
        },
        password: {
            required: "請輸入密碼",
            minlength: "密碼長度不可小於6位數",
            maxlength: "密碼長度不可大於12位數"
        }
    }
})

// ------------------------
// Regist Form
// ------------------------
$("#registForm").validate({
    rules: {
      name: {
          required: true
      },
      birthday: {
        required: true
      },
      phone: {
        required: true,
        number: true,
        minlength: 10,
        maxlength: 10
      },
      password: {
        required: true,
        minlength: 6,
        maxlength: 12,
      },
      confirm_password: {
        required: true,
        minlength: 6,
        maxlength: 12,
        equalTo: "#password"
      },
    //   agree: "required"
    },
    messages: {
        name: {
            required: "請輸入姓名"
        },
        birthday: {
          required: "請選擇生日"
        },
        phone: {
            required: "請輸入手機",
            number: "手機格式不正確",
            minlength: "手機格式不正確",
            maxlength: "手機格式不正確"
        },
        password: {
            required: "請輸入密碼",
            minlength: "密碼長度不可小於6位數",
            maxlength: "密碼長度不可大於12位數"
        },
        confirm_password: {
            required: "請再次輸入密碼",
            minlength: "兩次密碼輸入不相同",
            maxlength: "兩次密碼輸入不相同",
            equalTo: "兩次密碼輸入不相同"
        }
    },
    // submitHandler: function() {
    //     $('.message p').html('<i class="icon-icon_yes"></i>註冊成功');
    //     $(".message").toggleClass("show"); 
    //       setTimeout(() => {
    //           $(".message").toggleClass("show"); 
    //     }, 3000);
    // }
})

// ------------------------
// Email verification Form
// ------------------------
$("#verificationForm").validate({
    rules: {
        emailVer: {
            required: true,
            number: true,
            minlength: 4,
            maxlength: 4
        }
    },
    messages: {
        emailVer: {
            required: "請輸入驗證碼",
            number: "驗證碼不正確",
            minlength: "驗證碼不正確",
            maxlength: "驗證碼不正確"
        }
    }
})

// ------------------------
// forgetEmail Form
// ------------------------
$("#forgetEmail").validate({
    rules: {
      email: {
        required: true,
        email: true
      }
    },
    messages: {
        email: {
            required: "請輸入信箱",
            email: "信箱格式不正確"
        }
    }
})

// ------------------------
// resetpass Form
// ------------------------
$("#resetpass").validate({
    rules: {
        password: {
            required: true,
            minlength: 6,
            maxlength: 12,
          },
        confirm_password: {
            required: true,
            minlength: 6,
            maxlength: 12,
            equalTo: "#password"
        }
    },
    messages: {
        password: {
            required: "請輸入密碼",
            minlength: "密碼長度不可小於6位數",
            maxlength: "密碼長度不可大於12位數"
        },
        confirm_password: {
            required: "請再次輸入密碼",
            minlength: "兩次密碼輸入不相同",
            maxlength: "兩次密碼輸入不相同",
            equalTo: "兩次密碼輸入不相同"
        }
    },
    submitHandler: function() {
        $('.message p').html('<i class="icon-icon_yes"></i>密碼已修改');
        $(".message").toggleClass("show"); 
        $(".resetpass_pop").removeClass("show"); 
          setTimeout(() => {
              $(".message").toggleClass("show"); 
        }, 3000);
    }
})

// ------------------------
// Profile Form
// ------------------------
$("#profileForm").validate({
    rules: {
      name: {
          required: true
      },
      birthday: {
        required: true
      },
      phone: {
        required: true,
        number: true,
        minlength: 10,
        maxlength: 10
      },
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 6,
        maxlength: 12,
      }
    //   agree: "required"
    },
    messages: {
        name: {
            required: "請輸入姓名"
        },
        birthday: {
          required: "請選擇生日"
        },
        phone: {
            required: "請輸入手機",
            number: "手機格式不正確",
            minlength: "手機格式不正確",
            maxlength: "手機格式不正確"
        },
        email: {
            required: "請輸入信箱",
            email: "信箱格式不正確"
        },
        password: {
            required: "請輸入密碼",
            minlength: "密碼長度不可小於6位數",
            maxlength: "密碼長度不可大於12位數"
        }
    },
    submitHandler: function() {
        $('.message p').html('<i class="icon-icon_yes"></i>已儲存修改');
        $(".message").toggleClass("show"); 
          setTimeout(() => {
              $(".message").toggleClass("show"); 
        }, 3000);
    }
})

// ------------------------
// resetpass Form
// ------------------------
$("#changepass").validate({
    rules: {
        password: {
            required: true,
            minlength: 6,
            maxlength: 12,
          },
          new_password: {
            required: true,
            minlength: 6,
            maxlength: 12,
          },
        confirm_password: {
            required: true,
            minlength: 6,
            maxlength: 12,
            equalTo: "#new_password"
        }
    },
    messages: {
        password: {
            required: "請輸入密碼",
            minlength: "密碼錯誤",
            maxlength: "密碼錯誤"
        },
        new_password: {
            required: "請輸入密碼",
            minlength: "密碼長度不可小於6位數",
            maxlength: "密碼長度不可大於12位數"
        },
        confirm_password: {
            required: "請再次輸入密碼",
            minlength: "兩次密碼輸入不相同",
            maxlength: "兩次密碼輸入不相同",
            equalTo: "兩次密碼輸入不相同"
        }
    },
    submitHandler: function() {
        $('.message p').html('<i class="icon-icon_yes"></i>密碼已修改');
        $(".message").toggleClass("show"); 
        $(".changepass_pop").removeClass("show"); 
        onlockBody()
          setTimeout(() => {
              $(".message").toggleClass("show"); 
        }, 3000);
    }
})

// ------------------------
// Reward Form
// ------------------------
$("#rewardForm").validate({
    rules: {
      name: {
          required: true
      },
      phone: {
        required: true,
        number: true,
        minlength: 10,
        maxlength: 10
      },
      address: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      send: {
        required: true,
      }
    //   agree: "required"
    },
    messages: {
        name: {
            required: "請輸入姓名"
        },
        phone: {
            required: "請輸入手機",
            number: "手機格式不正確",
            minlength: "手機格式不正確",
            maxlength: "手機格式不正確"
        },
        address: {
            required: "請輸入地址"
        },
        email: {
            required: "請輸入信箱",
            email: "信箱格式不正確"
        },
        send: {
            required: "",
        }
    },
    // submitHandler: function() {
    //     $('.message p').html('<i class="icon-icon_yes"></i>已儲存修改');
    //     $(".message").toggleClass("show"); 
    //       setTimeout(() => {
    //           $(".message").toggleClass("show"); 
    //     }, 3000);
    // }
})

// ------------------------
// Pray Form
// ------------------------
$(".prayForm").validate({
    rules: {
      name: {
          required: true
      },
      birthday: {
        required: true
      },
      note: {
        required: true
      }
    },
    messages: {
        name: {
            required: "此欄位為必填"
        },
        birthday: {
          required: "此欄位為必填"
        },
        note: {
            required: "此欄位為必填"
        }
    },
    // submitHandler: function() {
    //     $('.message p').html('<i class="icon-icon_yes"></i>註冊成功');
    //     $(".message").toggleClass("show"); 
    //       setTimeout(() => {
    //           $(".message").toggleClass("show"); 
    //     }, 3000);
    // }
})













/*
     _ _      _       _
 ___| (_) ___| | __  (_)___
/ __| | |/ __| |/ /  | / __|
\__ \ | | (__|   < _ | \__ \
|___/_|_|\___|_|\_(_)/ |___/
                   |__/

 */

// ------------------------
// Product Carousel
// ------------------------
var $status = $('.curid');
var $slickElement = $('.product_carousel');
$slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
  //更換數字
  var i = (currentSlide ? currentSlide : 0) + 1;
  $status.text(i + ' / ' + slick.slideCount);

  console.log($slickElement)
  console.log($slickElement.slick)
});

$('.product_carousel').slick({
    centerMode:true,
    centerPadding: '0px',
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 3000,  
    dots: true,
    arrows: false,
    lazyLoad: 'ondemand',
    customPaging: function(slider, i) {
        var targetImage = slider.$slides.eq(i).find('img').attr('src');
        return '<img src="'+targetImage+'">';
    },
});

// ------------------------
// index Carousel
// ------------------------
$('.index_carousel').slick({
    centerMode:true,
    centerPadding: '0px',
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,  
    dots: true,
    dotsClass: 'slick-dots',
    arrows: false,
    lazyLoad: 'ondemand',
});




// 文章單頁分享至社群
var shareData = [].slice.call($(".foot_share li a"));
shareData.forEach(function (element, index){
    element.addEventListener("click", function(e) {
        console.log(e)
        console.log(e.target.parentElement.parentElement.querySelector('a'))
        
        const link = e.target.parentElement.parentElement.querySelector('a')
        switch (link.classList[0]) {
            case 'facebook':
                link.href = "https://facebook.com/sharer.php?u=" + page.baseURI;//文章網址
                break;
        
            case 'line':
                link.href = "https://social-plugins.line.me/lineit/share?url=" + page.baseURI + '&amp;via=esdesign';//文章網址
        }
    });
});

// function share() {
//     const shareData = $(".foot_share li a")
//     console.log(shareData)
//     for (let i = 0; i < shareData.length; i++) {
//         switch (shareData[i].classList[0]) {
//             case 'facebook':
//                 shareData.attr("href", "https://facebook.com/sharer.php?u=");//文章網址
//                 break;
        
//             case 'line':
//                 shareData.attr("href", "https://social-plugins.line.me/lineit/share?url=" + '&amp;via=esdesign');//文章網址
//         }
//     }
//     window.open(shareUrl, 'shareWindow', 'menubar=0,location=0,toolbar=0,status=0,scrollbars=1,width=800,height=600');
// }
