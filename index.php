<?php
session_start();
include "./model/pdo.php";
include "./model/loai_laptop.php";
include "./model/san_pham.php";
include "./model/khach_hang.php";


$loaidanhmuc = all_list_loai();
$banner = all_list_namloai();
$contentdm = all_list_muoiloai();
$namsp = all_list_namsanpham();
$sp_noibat = all_list_sanphamnb();



$act = $_GET['act'] ?? "";
switch ($act) {
    case "":
        $title = "Trang chủ";
        $VIEW = "./views/layout/home.php";
        break;
    case 'ctsp':
        $title = "Chi tiết sản phẩm";
        $ma_sp = $_GET['ma_sp'];
        $sanphamct = chitiet_sp($ma_sp);
        extract($sanphamct);
        $sp_cungloai = sp_cungloai($ma_sp, $ma_loai);
        $VIEW = './views/layout/chitietsp.php';
        break;
    case 'search':
        $title = "sản phẩm tìm kiếm";
        if (isset($_POST['kyw']) && (['kyw'] != "")) {
            $kyw = $_POST['kyw'];
        } else {
            $kyw = "";
        }
        if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
            $ma_loai = $_GET['ma_loai'];
        } else {
            $ma_loai = 0;
        }
        $listsanpham = loadall_sanpham("$kyw", $ma_loai); //lọc kyw
        $loaidanhmuc = all_list_loai($ma_loai);
        $VIEW = './views/layout/searchsp.php';
        break;
    case 'locloai':
        $title = "Loại";
        if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
            $ma_loai = $_GET['ma_loai'];
        } else {
            $ma_loai = 0;
        }
        $locsanpham = loadall_sanpham("", $ma_loai); //lọc kyw
        $loaidanhmuc = all_list_loai($ma_loai); //bảng loại
        $tenloai =  load_ten_loai($ma_loai); // mình tên loại đã extract rồi
        $VIEW = 'views/layout/locloai.php';
        break;
    case 'sanpham':
        $title = "Sản phẩm mới";
        $sanpham = all_list_sanpham();
        $VIEW = 'views/layout/sanpham.php';
        break;
    case 'tangdan':
        $title = "Giá tăng dần";
        $tangdan = sp_tangdan();
        $VIEW = 'views/layout/asc.php';
        break;
    case 'giamdan':
        $title = "Giá giảm dần";
        $giamdan = sp_giamdan();
        $VIEW = 'views/layout/desc.php';
        break;
    case 'banchay':
        $title = "SP bán chạy";
        $banchay = sp_banchay();
        $VIEW = 'views/layout/spbanchay.php';
        break;
        //login/logout
    case "logup":
        $title = "Đăng ký";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // var_dump($_POST); die;
            $email = $_POST['email'];
            $ten_kh = $_POST['ten_kh'];
            $mat_khau = $_POST['mat_khau'];
            add_khachhang($email, $ten_kh, $mat_khau);
            setcookie("thongbao", "Thêm Tài khoản thành công!", time() + 1);
            // header("location: ?act=login");
            // die;
        }
        $VIEW = 'views/layout/accounts/signup.php';
        break;
    case "login":
        $title = "Đăng Nhập";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // var_dump($_POST); die;
            $ten_kh = $_POST['ten_kh'];
            $mat_khau = $_POST['mat_khau'];
            $check_login = check($ten_kh, $mat_khau);
            if (is_array($check_login)) {
                $_SESSION['ten_kh'] = $check_login;
                header("location: ?act=");
                die;
            } else {
                $thongbao = "k tồn tại !";
            }
        }
        $VIEW = 'views/layout/accounts/login.php';
        break;
    case 'thoat':
        session_unset();
        header("location: ?act=login");
        break;
    case "quenmk":
        $title = "Quên mk";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // var_dump($_POST); die;
            $email = $_POST['email'];
            $check_email = check_email($email);
            if (is_array($check_email)) {
                $thongbao = "Mật khẩu của bạn là:" . $check_email['mat_khau'];
            } else {
                $thongbao = "email này k tồn tại";
            }
        }
        $VIEW = 'views/layout/accounts/quenmk.php';
        break;
    default:
        echo "./404.php";
}
include './views/layout/header.php';
include $VIEW;
include './views/layout/footer.php';
