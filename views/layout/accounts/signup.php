<style>
    .register {
        margin: 100px auto;
        background-color: white;
        width: 700px;
        height: 500px;
    }

    .register form {
        text-align: center;
    }

    .register form legend {
        font-size: 23px;
        font-weight: bold;
        margin: 20px 0px;
    }

    .register form .bodyform {
        text-align: left;
    }

    .register form .bodyform label {
        margin: 10px 150px;
    }

    .register form .bodyform input {
        width: 400px;
        padding: 15px 10px;
        height: 50px;
        margin: 0px 150px;
    }

    .register form .bodyform .bottomform button {
        margin-top: 50px;
        margin-left: 150px;
        padding: 8px 20px;
        background-color: black;
        color: wheat;
        border-radius: 5px;
    }

    .register form .bodyform .bottomform button:hover {
        background-color: white;
        color: black;
    }

    .register form .bodyform .bottomform a {
        text-decoration: none;
        border-radius: 5px;
        padding: 11px 20px;
        color: wheat;
        background-color: red;
        margin-left: 200px;
    }
</style>

<section class="register" id="register">
    <form class="buttons" action="?act=logup" method="POST" id ="logupForm">
        <h5 style="color: red"> <?= $thongbao ?? "" ?> </h5>
        <legend>ĐĂNG KÝ </legend>
        <aside class="bodyform">
            
            <label for="">Tên người dùng:</label><br>
            <input class="input" type="text" placeholder="user" name="ten_kh" id="usernameInput"> <br>
            <span style="margin-left: 150px;color: red;" id="usernameError"></span> <br>
            
            <label for="">Email:</label><br>
            <input class="input" type="email" placeholder="Email" name="email" id="emailInput"> <br>
            <span id="emailError" style="color: red;margin-left: 150px"></span> <br>
            
            <label for="">Mật khẩu:</label><br>
            <input class="input" type="password" placeholder="mat khau" name="mat_khau" id="passwordInput"> <br>
            <span id="passwordError" style="color: red;margin-left: 150px"></span> <br>


            <aside class="bottomform">
                <button class="button" onclick="validateForm2()" type="button">Đăng ký</button>
                <a href="?act=login">Trở về</a>
            </aside>
        </aside>
    </form>
</section>