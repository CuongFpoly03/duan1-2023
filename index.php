<?php
<<<<<<< HEAD
session_start();
include "./model/pdo.php";
include "./model/loai_laptop.php";
include "./model/san_pham.php";
include "./model/khach_hang.php";
include "./model/cart.php";
include "./model/don_hang.php";
include "./model/checkonline.php";


$loaidanhmuc = all_list_loai();
$banner = all_list_namloai();
$contentdm = all_list_muoiloai();
$namsp = all_list_namsanpham();
$sp_noibat = all_list_sanphamnb();
=======
require_once "../model/loai_laptop.php";
require_once "../model/san_pham.php";
require_once "../model/khach_hang.php";
require_once "../model/binhluan.php";
require_once "../model/don_hang.php";
require_once "../model/donhang_ct.php";
require_once "../model/chart.php";
>>>>>>> 8f644f62229ff798a918a234665eb07297c20074



$act = $_GET['act'] ?? "";
switch ($act) {
    case "":
        $title = "Tổng Hợp";
        $title = "Tổng hợp";
        $totalday = total_ngay();
        $totalweek  = total_tuan();
        $totalmonth  = total_thang();
        $totaldoanhthu  = total_doanhthu();
        $totalsoluongban  = total_soLuongBan();
        $sp_bannhieunhat = sanPhamBanNhieuNhat();
        $slctk = soLuongConTrongKho();
        $khachhangmoi = soLuongKhachHangMoi();
        $thoigian = thoiGianMuaNhieuNhat();
        $VIEW = './layout/home.php';
        break;
<<<<<<< HEAD
    case 'ctsp':
        // $_SESSION['URI'] = $_SERVER['REQUEST_URI'];
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
=======
        //BAI LOAI
    case "loai":
        $title = "Danh Sách Loại";
        if (isset($_GET['ma_loai'])) {
>>>>>>> 8f644f62229ff798a918a234665eb07297c20074
            $ma_loai = $_GET['ma_loai'];
            delete_loai($ma_loai);
            $thongbao = "Xóa dữ liệu thành công!";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ma_loai = $_POST['ma_loai'];
            delete_loai_item($ma_loai);
            $thongbao = 'xóa dữ liệu thành công!';
        }

        $listlaptop = all_list_loai();
        $VIEW = "loai-laptop/list.php";
        break;
    case "add":
        $title = "Thêm Loại";
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $ten_loai = $_POST['ten_loai'];
            $nhu_cau = $_POST['nhu_cau'];
            $mau_sac = $_POST['mau_sac'];
            $kich_thuoc = $_POST['kich_thuoc'];
            $ram = $_POST['ram'];
            $luot_xem = $_POST['luot_xem'];
            $trang_thai = $_POST['trang_thai'] ?? 0;
            add_loai($ten_loai, $nhu_cau, $mau_sac, $kich_thuoc, $ram, $luot_xem, $trang_thai);
            setcookie("thongbao", "Thêm Loại thành công!", time() + 1);
            header("location: ?act=loai");
            die;
        }
        $VIEW = "loai-laptop/add.php";
        break;
    case "update":
        $title = "Update danh mục";
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $ten_loai = $_POST['ten_loai'];
            $nhu_cau = $_POST['nhu_cau'];
            $mau_sac = $_POST['mau_sac'];
            $kich_thuoc = $_POST['kich_thuoc'];
            $ram = $_POST['ram'];
            $luot_xem = $_POST['luot_xem'];
            $ma_loai = $_POST['ma_loai'];
            $trang_thai = $_POST['trang_thai'] ?? 0;
            update_loai($ma_loai, $ten_loai, $nhu_cau, $mau_sac, $kich_thuoc, $ram, $luot_xem, $trang_thai);
            $thongbao = "Cập nhập dữ liệu thành công";
        }
        if (isset($_GET['ma_loai'])) {
            $ma_loai = $_GET['ma_loai'];
            $loai = list_one_loai($ma_loai);
            extract($loai);
            $VIEW = "loai-laptop/update.php";
        }
        break;
        //BAI SẢN PHẨM LAPTOP
    case 'sanpham':
        $title = "Danh sách sản phẩm";
        if (isset($_GET['ma_sp'])) {
            $ma_sp = $_GET['ma_sp'];
            delete_sp($ma_sp);
            $thongbao = "Xóa dữ liệu thành công!";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ma_sp = $_POST['ma_sp'];
            delete_sp_item($ma_sp);
            $thongbao = 'xóa dữ liệu thành công!';
        }

        $sanpham = all_list_sanpham();
        $VIEW = "san-pham/list.php";
        break;
    case 'addsp':
        $title = "thêm sản phẩm";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
<<<<<<< HEAD
            $ten_dh = $_POST['ten_kh'];
            $email_dh = $_POST['email'];
            $diachi_dh = $_POST["dia_chi"];
            $sodt_dh = $_POST['dien_thoai'];
            $dh_pttt = isset($_POST['dh_pttt']) ? ($_POST['dh_pttt'] === 'one' ? "Thanh toán trực tiếp" : ($_POST['dh_pttt'] === 'two' ? "Thanh toán chuyển khoản" : "Thanh toán trực tiếp")) : "";
            $trang_thai = ($_POST['trang_thai'] === '1' ? "Đang xử lí" : ($_POST['trang_thai'] === '2' ? "Đang giao hàng" : ($_POST['trang_thai'] === '3' ? "Đơn hàng thành công!" : "")));
            $tong_tien = sum_cart();
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ngay_dh = date("Y-m-d H:i:s");
            $ma_dh = inser_donhang($ten_dh, $diachi_dh, $sodt_dh, $email_dh, $dh_pttt, $tong_tien, $ngay_dh, $trang_thai);
            // echo $ma_dh;die;
            // Lưu thông tin chi tiết đơn hàng vào CSDL
            foreach ($_SESSION['cart'] as $cart) {
                // Đảm bảo hàm insert_ct_donhang() đã được định nghĩa đúng.
                insert_ct_donhang($_SESSION['ten_kh']['ma_kh'], $ma_dh, $cart['ma_sp'], $cart['hinh_sp'], $cart['so_luong'], $cart['gia_sp'], $cart['thanh_tien']);
            }
            //Xóa giỏ hàng sau khi xử lý đơn hàng
            $carts = $_SESSION['cart'];
            $_SESSION['cart'] = [];
=======
            extract($_POST);
            $file = $_FILES['hinh_sp'];
            $hinh_sp = $file['name'];
            move_uploaded_file($file['tmp_name'], "../views/imgs/" . $hinh_sp);
            add_sanpham($ten_sp, $gia_sp, $so_luong, $hinh_sp, $mo_ta, $ma_loai);
            header("location: ?act=sanpham");
            die;
>>>>>>> 8f644f62229ff798a918a234665eb07297c20074
        }
        $loai = all_list_loai();
        $VIEW = "san-pham/add.php";
        break;
    case 'updatesp':
        $title = "Update sản phẩm";
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            extract($_POST);
            // var_dump($_POST);die;
            $file = $_FILES['hinh_sp'];
            //Lấy tên ảnh
            if ($file['size'] > 0) {
                $hinh_sp = $file['name'];
                //Upload ảnh
                move_uploaded_file($file['tmp_name'], "../views/images/" . $hinh_sp);
            } else {
                $hinh_sp = $_POST['hinh_sp'];
            }
            update_sp($ma_sp, $ten_sp, $gia_sp, $hinh_sp, $mo_ta, $ma_loai);

            $thongbao = "Cập nhập dữ liệu thành công";
        }
        if (isset($_GET['ma_sp'])) {
            $ma_sp = $_GET['ma_sp'];
            $sp = list_one_sp($ma_sp);
            extract($sp);
            $VIEW = "san-pham/update.php";
        }
        $loai = all_list_loai();
        break;
        //KHACH HANG
    case "listkh":
        $title = 'Danh sách khách hàng';
        if (isset($_GET['ma_kh'])) {
            $ma_kh = $_GET['ma_kh'];
            delete_kh($ma_kh);
            $thongbao = "Xóa dữ liệu thành công!";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ma_kh = $_POST['ma_kh'];
            delete_kh_item($ma_kh);
            $thongbao = 'xóa dữ liệu thành công!';
        }
        $khachhang = load_all_kh();
        $VIEW = "khach-hang/list.php";
        break;
    case "updatekh":
        $title = "Sửa khách hàng";
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $ten_kh = $_POST['ten_kh'];
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];
            $dia_chi = $_POST['dia_chi'];
            $dien_thoai = $_POST['dien_thoai'];
            $vai_tro = $_POST['vai_tro'];
            $ma_kh = $_POST['ma_kh'];
            update_kh($ma_kh, $ten_kh, $email, $mat_khau, $dia_chi, $dien_thoai, $vai_tro);
            $thongbao = "Cập nhập dữ liệu thành công";
        }
        if (isset($_GET['ma_kh'])) {
            $ma_kh = $_GET['ma_kh'];
            $kh = list_one_kh($ma_kh);
            extract($kh);
            $VIEW = "Khach-hang/update.php";
        }
        break;
        // binh luan
    case 'binhluan':
        $title = "bình luận";
        if (isset($_GET['ma_bl'])) {
            $ma_bl = $_GET['ma_bl'];
            delete_bl($ma_bl);
            $thongbao = "Xóa dữ liệu thành công!";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ma_bl = $_POST['ma_bl'];
            delete_bl_item($ma_bl);
            $thongbao = 'xóa dữ liệu thành công!';
        }
        $listbinhluan = list_binhluan();
        $VIEW = "binh-luan/list.php";
        break;
    case "listdh":
        $title = "Đơn hàng";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['trang_thai'])) {
<<<<<<< HEAD
                // var_dump($_POST);die;
                // $trang_thai = $_POST['trang_thai'];
                $trang_thai = ($_POST['trang_thai'] === '1' ? "Huỷ đơn hàng" : "");
=======
                // Lấy giá trị trạng thái từ form
                $trang_thai = $_POST['trang_thai'];
                $trang_thai = ($_POST['trang_thai'] === '1' ? "Đang xử lí" : ($_POST['trang_thai'] === '2' ? "Đang giao hàng" : ($_POST['trang_thai'] === '3' ? "Đơn hàng thành công!" : ""))); 
>>>>>>> 8f644f62229ff798a918a234665eb07297c20074
                $ma_dh = isset($_GET['ma_dh']) ? $_GET['ma_dh'] : $_POST['ma_dh'];
                updateDonHangStatus($trang_thai, $ma_dh);
                header("Location: ?act=listdh");
                exit();
            }
        }
        $listdh = load_all_dh();
        $VIEW = "don-hang/list.php";
        break;
    case "listdhct":
        $title = "chi tiết đơn hàng";
        if (isset($_GET['ma_ct'])) {
            $ma_ct = $_GET['ma_ct'];
            delete_ct($ma_ct);
            $thongbao = "Xóa dữ liệu thành công!";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ma_ct = $_POST['ma_ct'];
            delete_ctdh_item($ma_ct);
            $thongbao = 'xóa dữ liệu thành công!';
        }
        $listct = load_all_ctdh();
        // var_dump($listdh);
        $VIEW = "chitietdonhang/list.php";
        break;
    case "check_online":
        $title = "Thanh toán online";
        if (!isset($_SESSION['ten_kh'])) {
            echo "<script>alert('Mời bạn đăng nhập.');</script>";
            $VIEW = './views/layout/accounts/login.php'; // Chuyển hướng đến trang đăng nhập
            break;
        }
        if (isset($_GET['vnp_Amount'])) {
            $data_vnpay = [
                'vnp_Amount' => $_GET['vnp_Amount'],
                'vnp_BankCode' => $_GET['vnp_BankCode'],
                'vnp_BankTranNo' => $_GET['revnp_BankTranNoquestId'],
                'vnp_CardType' => $_GET['vnp_CardType'],
                'vnp_OrderInfo' => $_GET['vnp_OrderInfo'],
                'vnp_PayDate' => $_GET['vnp_PayDate'],
                'vnp_ResponseCode' => $_GET['vnp_ResponseCode'],
                'vnp_TmnCode' => $_GET['vnp_TmnCode'],
                'vnp_TransactionNo' => $_GET['vnp_TransactionNo'],
                'vnp_TransactionStatus' => $_GET['vnp_TransactionStatus'],
                'vnp_TxnRef' => $_GET['vnp_TxnRef'],
                'vnp_SecureHash' => $_GET['vnp_SecureHash'],
            ];
            insert_data($vnp_Amount, $vnp_BankCode, $vnp_BankTranNo, $vnp_CardType, $vnp_OrderInfo, $vnp_PayDate, $vnp_ResponseCode, $vnp_TmnCode, $vnp_TransactionNo, $vnp_TransactionStatus, $vnp_TxnRef, $vnp_SecureHash);
        }
        $VIEW = './views/layout/cart/vnpay/index.php';
        break;
    case "thank":
        $title = "Cảm ơn";
        $VIEW = "./views/layout/home.php";
        break;
    default:
        // include "../admin/404.php";
        echo "../404.php";
}



include './layout/header.php';
include $VIEW;
include './layout/footer.php';
