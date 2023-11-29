<?php
session_start();
include "./model/pdo.php";
include "./model/loai_laptop.php";
include "./model/san_pham.php";
include "./model/khach_hang.php";
include "./model/cart.php";


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
        $_SESSION['URI'] = $_SERVER['REQUEST_URI'];
        // echo "<pre>";
        // echo $_SESSION['URI'];die;
        // echo "</pre>";
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
    case 'locnhucau':
        $title = "Nhu cầu";
        if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
            $ma_loai = $_GET['ma_loai'];
        } else {
            $ma_loai = 0;
        }
        $locsanpham = loadall_sanpham("", $ma_loai); //lọc kyw
        $loaidanhmuc = all_list_loai($ma_loai); //bảng loại

        $nhucau =  load_nhu_cau($ma_loai); // mình tên loại đã extract rồi
        $VIEW = 'views/layout/nhucau.php';
        break;
    case 'lockichthuoc':
        $title = "Kich thước";
        if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
            $ma_loai = $_GET['ma_loai'];
        } else {
            $ma_loai = 0;
        }
        $locsanpham = loadall_sanpham("", $ma_loai); //lọc kyw
        $loaidanhmuc = all_list_loai($ma_loai); //bảng loại
        $kichthuoc =  load_kich_thuoc($ma_loai); // mình tên loại đã extract rồi
        $VIEW = 'views/layout/kichthuoc.php';
        break;
    case 'locmausac':
        $title = "Màu sắc";
        if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
            $ma_loai = $_GET['ma_loai'];
        } else {
            $ma_loai = 0;
        }
        $locsanpham = loadall_sanpham("", $ma_loai); //lọc kyw
        $loaidanhmuc = all_list_loai($ma_loai); //bảng loại
        $mausac =  load_mau_sac($ma_loai); // mình tên loại đã extract rồi
        // var_dump($mausac);die;

        $VIEW = 'views/layout/mausac.php';
        break;
    case 'locram':
        $title = "Ram";
        if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
            $ma_loai = $_GET['ma_loai'];
        } else {
            $ma_loai = 0;
        }
        $locsanpham = loadall_sanpham("", $ma_loai); //lọc kyw
        $loaidanhmuc = all_list_loai($ma_loai); //bảng loại
        $rams =  load_ram($ma_loai); // mình tên loại đã extract rồi
        $VIEW = 'views/layout/ram.php';
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
        // gio hang
    case "cart":
        if (isset($_GET['ma_sp'])) {
            $ma_sp = $_GET['ma_sp'] ?? '';
            $sanpham =  list_one_sp($ma_sp);
            add_to_cart($sanpham['ma_sp'], $sanpham['ten_sp'], $sanpham['gia_sp'], $sanpham['so_luong'], $sanpham['hinh_sp']);
        }
        header("location: " . $_SERVER['HTTP_REFERER']);
        break;
    case "viewdonhang":
        $title = "Đơn hàng";
        $carts = $_SESSION['cart'];
        // var_dump($carts);
        // die;
        $sums = sum_cart();
        $VIEW = "views/layout/cart/viewdonhang.php";
        break;
    case 'xoacart':
        if (isset($_GET['ma_sp'])) {
            $xoacart = $_GET['ma_sp'];
            if (isset($_SESSION['cart'][$xoacart])) {
                unset($_SESSION['cart'][$xoacart]);
            }
            header('location: ?act=viewdonhang');
            break;
        }
    case 'donhang':
        $title = 'Thông tin thanh toán';
        $carts = $_SESSION['cart'];
        $sum = sum_cart();
        $VIEW = './views/layout/cart/donhang.php';
        break;
    case 'donhangconfirm':
        $title = 'Thông tin thanh toán';
        // tạo đơn hàng 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ten_dh = $_POST['ten_kh'];
            $email_dh = $_POST['email'];
            $diachi_dh = $_POST["dia_chi"];
            $sodt_dh = $_POST['dien_thoai'];
            $dh_pttt = isset($_POST['dh_pttt']) ? ($_POST['dh_pttt'] === 'one' ? "Thanh toán trực tiếp" : ($_POST['dh_pttt'] === 'two' ? "Thanh toán chuyển khoản" : "không có lựa chọn")):"";
            $tong_tien = sum_cart();
            $ngay_dh = date('d/m/Y h:i:sa');
            $ma_dh = inser_donhang($ten_dh, $diachi_dh, $sodt_dh, $email_dh, $dh_pttt, $tong_tien, $ngay_dh);
            // Lưu thông tin chi tiết đơn hàng vào CSDL
            foreach ($_SESSION['cart'] as $cart) {
                // Đảm bảo hàm insert_ct_donhang() đã được định nghĩa đúng.
                insert_ct_donhang($_SESSION['ten_kh']['ma_kh'], $ma_dh, $cart['ma_sp'], $cart['hinh_sp'], $cart['so_luong'], $cart['gia_sp'], $cart['thanh_tien']);
            }
            
            //Xóa giỏ hàng sau khi xử lý đơn hàng
            $carts = $_SESSION['cart'];
            $_SESSION['cart'] = [];
        }
        // var_dump($carts); die;
        $sum = sum_cart();
        $VIEW = './views/layout/cart/chitietdonhang.php';
        break;
    default:
        echo "./404.php";
        break;
}

include './views/layout/header.php';
include $VIEW;
include './views/layout/footer.php';
