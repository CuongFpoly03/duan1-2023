<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
// $ma_sp = $_REQUEST['ma_bl'];

$ma_sp = $_REQUEST['ma_sp'] ?? '';

$dsbl = loadall_binhluan($ma_sp);
//
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .binhluan table {
      width: 90%;
      margin-left: 5%;

    }

    .binhluan table td:nth-child(1) {
      width: 50%;
    }

    .binhluan table td:nth-child(2) {
      width: 20%;
    }

    .binhluan table td:nth-child(3) {
      width: 30%;
    }


    .form img {
      width: 50px;
      /* margin-top: 40px; */
    }

    .form .input {
      border: none;
      background-color: #F8F9FA;
      padding: 11px 20px;
      width: 600px;
    }

    .form .input-small {
      border-radius: 5px;
      background-color: #F8F9FA;
      padding: 8px 20px;
    }

    .form .input-small:hover {
      border-radius: 5px;
      background-color: black;
      padding: 8px 20px;
      color: white;
    }
  </style>
</head>

<body>
  <div class="mb">
    <div class="box_content2  product_portfolio binhluan ">
      <table>
        <?php
        foreach ($dsbl as $bl) : {
            extract($bl);
          }
        ?>
          <div style="margin-left: 100px">
            <div style="display: flex;">
              <img src="../imgs/tin1.jpg" alt="" width='40' height='45' style="border-radius: 60px">
              <h3>Mã khách hàng:<?= $ma_kh ?> </h3>
            </div>
            <span style="font-size: 18px; margin-left: 50px"><?= $noi_dung ?> </span>
            <span style="margin-right: 30px; float: right; font-weight: bold; opacity: 0.6;"><?= date("d/m/Y h:i:sa") ?></>
          </div>
        <?php endforeach ?>
      </table>
    </div>
    <div class="box_search">
      <form class="form" action="" method="POST">
        <input type="hidden" name="ma_sp" value="">
        <div style="display: flex; margin-left: 54px; margin-top: 30px">
          <img src="../imgs/logo.jpg" alt="" width='40px'>
          <input class="input" type="text" name="noi_dung" placeholder="viết bình luận..."> <br>
        </div>
        <div class="larg-button" style="margin-left: 520px;margin-top: 20px;">
          <input class="input-small" type="submit" name="guibinhluan" value="Gửi bình luận">
          <input class="input-small" type="reset" name="huy" value="Huỷ">
        </div>
      </form>
    </div>

    <?php
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
      if (!isset($_SESSION['ten_kh'])) {
        echo "<script>alert('Mời bạn đăng nhập.');</script>";
        header('location: views/layout/accounts/login.php'); // Chuyển hướng đến trang đăng nhập
        // echo '<script> window.location.href = "?act=login";</script>';
        // echo "<script>window.location.href = '?act=login';</script>";
        die;
      }
      extract($_POST);
      $ma_sp = $_GET['ma_sp'];
      // $noi_dung = $_POST['noi_dung'];
      // $ma_sp = $_POST['ma_sp'];
      // var_dump($_POST['ma_sp']);die; 
      $ma_kh = $_SESSION['ten_kh']['ma_kh'];
      $ngay_bl = date('d/m/Y h:i:sa');
      insert_binhluan($noi_dung, $ma_kh, $ma_sp, $ngay_bl);
      if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
      } else {
        echo "<h5>Không có trang trước để chuyển hướng.</h5>";
      }
    }
    ?>
  </div>
</body>

</html>