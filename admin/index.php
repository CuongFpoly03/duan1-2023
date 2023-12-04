<?php
require_once "../model/loai_laptop.php";
require_once "../model/san_pham.php";
require_once "../model/khach_hang.php";
require_once "../model/binhluan.php";
require_once "../model/don_hang.php";
require_once "../model/donhang_ct.php";
require_once "../model/chart.php";



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
        //BAI LOAI
    case "loai":
        $title = "Danh Sách Loại";
        if (isset($_GET['ma_loai'])) {
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
            extract($_POST);
            $file = $_FILES['hinh_sp'];
            $hinh_sp = $file['name'];
            move_uploaded_file($file['tmp_name'], "../views/imgs/" . $hinh_sp);
            add_sanpham($ten_sp, $gia_sp, $so_luong, $hinh_sp, $mo_ta, $ma_loai);
            header("location: ?act=sanpham");
            die;
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
                // Lấy giá trị trạng thái từ form
                $trang_thai = $_POST['trang_thai'];
                $trang_thai = ($_POST['trang_thai'] === '1' ? "Đang xử lí" : ($_POST['trang_thai'] === '2' ? "Đang giao hàng" : ($_POST['trang_thai'] === '3' ? "Đơn hàng thành công!" : ""))); 
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
    default:
        // include "../admin/404.php";
        echo "../404.php";
}



include './layout/header.php';
include $VIEW;
include './layout/footer.php';
