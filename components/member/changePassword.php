<div class="changepass_pop memberlogin_pop pop">
    <div class="popup">
        <i id="close_pay_pop" class="icon-icon_close" onclick="onChangepass()"></i>

        <div class="container">
            <form id="changepass" method="post" action="">
                <div class="password">
                    <label for="password">原密碼</label>
                    <input type="password" name="password" id="password" placeholder="輸入6~12碼英文數字" value="">
                        <i class="icon-icon_password"></i>
                        <i class="icon-icon_eye icon_eye"></i>
                    </input>
                </div>
                <div class="password">
                    <label for="new_password">新密碼</label>
                    <input type="password" name="new_password" id="new_password" placeholder="輸入6~12碼英文數字" value="">
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
                    <input class="submit" type="submit" value="確認修改">
                </div>
            </form>
        </div>
        
    </div>
</div>