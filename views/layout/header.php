<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title ?></title>
  <link rel="stylesheet" href="./views/css/style.css" />
  <link rel="stylesheet" href="./views/fonts/fontawesome-free-6.3.0-web/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body class="body">
  <!-- BAI HEADER -->
  <div class="containers">
    <header>
      <section class="top">
        <img src="./views/imgs/top.jpg" alt="" />
        <div class="nav-top">
          <div class="func">
            <i class="fa-solid fa-snowflake"></i>
            <p>Khuyến mại</p>
          </div>
          <div class="func">
            <i class="fa-brands fa-centos"></i>
            <p>Hệ thống</p>
          </div>
          <div class="func">
            <i class="fa-solid fa-comment-medical"></i>
            <p>Tư vấn doanh nghiệp</p>
          </div>
          <div class="func">
            <i class="fa-solid fa-address-book"></i>
            <p>Liên hệ</p>
          </div>
          <div class="func">
            <i class="fa-solid fa-computer"></i>
            <p>Tin công nghệ</p>
          </div>
          <div class="func">
            <i class="fa-solid fa-print"></i>
            <p>Liên hệ cấu hình</p>
          </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
              <img src="./views/imgs/logo.jpg" alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px; font-weight: bold">
                     Danh mục
                  </a>
                  <ul class="dropdown-menu">
                    <?php foreach ($loaidanhmuc as $ldm) : ?>
                      <?php extract($ldm) ?>
                    <li><a class="dropdown-item" href="#"><?= $ten_loai ?></a></li>
                    <?php endforeach; ?>
                    <!-- <li><a class="dropdown-item" href="#">Lenovo</a></li>
                    <li><a class="dropdown-item" href="#">Hp</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Dell</a>
                    </li> -->
                  </ul>
                </li>
              </ul>
            </div>
            <!-- TEST search -->
            <form action="" class="search">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input type="search" placeholder="search..">
            </form>
            <?php {/*BAI sp yêu thích */
            } ?>
            <div class="favorite">
              <a href="#"><i class="fa-regular fa-heart"></i></a>
            </div>
            <?php {/*BAI giỏ hàng */
            } ?>
            <div class="shop">
              <a onclick="OpenCart()" href="#">
                <span id="shop">2</span>
                <i class="fa-solid fa-cart-shopping"></i>
              </a>
            </div>
            <section class="myshop" id="myshop">
              <button class="closeshop" onclick="CloseShop()">&times;</button>
              <aside class="overlay-content">
                <div class="imgshop">
                  <img src="views/imgs/banner1.jpg" alt="">
                  <p>test trước thôi nhé kakakaka hehehehw!<br> <strong>599.000đ</strong></p>
                </div>
                <div class="imgshop">
                  <img src="views/imgs/banner1.jpg" alt="">
                  <p>test trước thôi nhé kakakaka hehehehw!<br> <strong>599.000đ</strong></p>
                </div>

                <aside class="total">
                  <p>Tạm tính: <strong>1.118.000đ</strong></p>
                </aside>

                <aside class="button-cart">
                  <div class="view" href="">Xem giỏ hàng</div>
                  <div class="options" href="">Thanh toán</div>
                </aside>
              </aside>
            </section>
          </div>
          <!-- <?php // {/*BAI tài khoản */} 
                ?> -->
          <div class="account">
            <button class="butonss" id="login" onclick="loginopen()" href="">TÀI KHOẢN</button>
            <section id="forms" class="forms" style="display: none">
              <form class="" action="login.php" method="POST">
                <legend>ĐĂNG NHẬP</legend>
                <aside class="form-close">
                  <span class="close" onclick="loginclose()">&times;</span>
                </aside>
                <aside class="form-body">
                  <label for="username"><b>Tên khách hàng</b></label> <br>
                  <input type="text" placeholder="Username" name="name" required> <br>

                  <label for="Password"><b>Mật khẩu</b></label><br>
                  <input type="password" placeholder="Password" name="password" required><br>
                  <button type="submit">Đăng nhập</button>
                </aside>

                <label class="inputs" for="">
                  <input class="input" type="checkbox" checked="checked" name="remember"> Remember me
                </label>

                <aside class="bottom-form">
                  <span id="opensignup" onclick="registeropen()" class="">Tạo <a href="#">Tài khoản</a></span>
                  <span class="password">Quên <a href="#">Mật khẩu?</a></span>
                </aside>
              </form>
            </section>

            <section class="register" id="register">
              <form class="buttons" action="register.php" method="POST">
                <legend>RESGISTER</legend>
                <aside class="form-close">
                  <span id="closeform" class="close" onclick="registerclose()">&times;</span>
                </aside>

                <asid class="bodyform">
                  <label for="">Email</label><br>
                  <input class="input" type="email" placeholder="Email" name="email" required> <br>

                  <label for="">Mật Khẩu</label><br>
                  <input class="input" type="Mật khẩu" placeholder="Password" name="password" required> <br>

                  <label for="">Nhập lại mật khẩu</label><br>
                  <input class="input" type="text" placeholder="Nhập lại mk" name="rep-password" required> <br>
                  </aside>

                  <aside class="label">
                    <input type="checkbox" checked="checked" name="checkbox">Remember me
                  </aside>

                  <aside class="bottomform">
                    <button class="button">Đăng ký</button>
                  </aside>
              </form>
            </section>
          </div>
        </nav>
      </section>