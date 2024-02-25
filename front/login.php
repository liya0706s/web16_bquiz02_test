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
                <button onclick="login()">登入</button>
                <button onclick="clean()">清除</button>
            </td>
            <td>
                <a href="../front/forget.php">忘記密碼</a>
                <a href="../front/reg.php">尚未註冊</a>
            </td>
        </tr>
    </table>
</fieldset>