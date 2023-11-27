<style>
    .forms {
        margin: 100px auto;
        background-color: white;
        width: 700px;
        height: 500px;
    }

    .forms form {
        text-align: center;
    }

    .forms form legend {
        font-size: 23px;
        font-weight: bold;
        margin: 20px 0px;
    }

    .forms form .form-body {
        text-align: left;
        margin-left: 155px;
    }

    .forms form .form-body label {
        margin: 10px 0px;
    }

    .forms form .form-body input {
        width: 400px;
        padding: 15px 10px;
        height: 50px;
    }

    .forms form .form-body button {
        margin-top: 50px;
        padding: 8px 20px;
        background-color: black;
        color: wheat;
        border-radius: 5px;
    }

    .forms form .form-body button:hover {
        background-color: white;
        color: black;
    }

    .forms form .bottom-form {
        margin-top: 40px;
    }

    .forms form .bottom-form span {
        margin: 0px 80px;
        font-size: 14px;
        color: blue;
    }

    .forms form .bottom-form span a {
        text-decoration: none;
        color: blue;
    }
</style>

<section id="forms" class="forms">
    <form class="" action="?act=login" method="POST">
        <legend>ĐĂNG NHẬP</legend>

        <aside class="form-body">
            <label for="username"><b>Tên khách hàng</b></label> <br>
            <input type="text" placeholder="Username" name="ten_kh" pattern=".{8,}" title="8 ký tự trở lên!" required> <br>

            <label for="Password"><b>Mật khẩu</b></label><br>
            <input type="password" placeholder="Password" name="mat_khau" pattern=".{8,}" title="Mật khẩu không hợp lệ !" required><br>
            <button type="submit">Đăng nhập</button>
        </aside>



        <aside class="bottom-form">
            <span id="opensignup" class="">Tạo<a href="?act=logup">Tài khoản</a></span>
            <span class="password">Quên <a href="?act=quenmk">Mật khẩu?</a></span>
        </aside>
    </form>
</section>