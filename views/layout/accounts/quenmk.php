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
    <form class="buttons" action="?act=quenmk" method="POST">
        <legend>QUÊN MẬT KHẨU </legend>
        <aside class="bodyform">
            <label for="">Email:</label><br>
            <input class="input" type="email" placeholder="Email" name="email" required> <br>
            
            <aside class="bottomform">
                <button class="button">Lấy mật khẩu</button>
                <a href="?act=login">Trở về</a>
            </aside>
        </aside>
    </form>
    <h5 style="color: red; border: 1px solid black; padding: 20px;margin: 40px auto; width: 70%"> <?= $thongbao ?? "" ?> </h5>
    
</section>