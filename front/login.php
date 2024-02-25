<fieldset>
    <legend>會員登入</legend>
    <table>
        <tr>
            <td class="clo">帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td class="clo">密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td>
                <input type="button" value="登入" onclick="login()">
                <input type="reset" value="清除" onclick="clean()">
            </td>
            <td>
                <a href="?do=forget">忘記密碼</a>
                <a href="?do=reg">尚未註冊</a>
            </td>
        </tr>
    </table>
</fieldset>
<script>
    /**
    登入的函式
    1. 取得帳號密碼的值
    2. 發送POST請求到chk_acc.php檢查帳號是否正確
    3. 如果回傳的值是0代表:查無此帳號
    
    4. 否則(帳號正確)再發送POST請求到chk_pw.php檢查密碼是否正確
    5. 如果回傳值是1代表密碼正確
    6. 如果帳號值是'admin'代表是管理者, 會導向back.php
    7. 否則導向首頁
    8. 判斷密碼不是1的否則，彈出視窗:密碼錯誤
     */

    function login() {
        let acc = $("#acc").val()
        let pw = $("#pw").val()
        $.post('./api/chk_acc.php',{acc},(res)=>{
            if(parseInt(res)==0){
                alert("查無帳號");
            }else{
                $.post('./api/chk_pw.php',{acc,pw},(res)=>{
                    if(parseInt(res)==1){
                        if($("#acc").val()=='admin'){
                            location.href="back.php"
                        }else{
                            location.href="index.php"
                        }
                    }else{
                        alert("密碼錯誤")
                    }
                })
            }
        })
    }
</script>