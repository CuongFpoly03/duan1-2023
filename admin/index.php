<?php
require_once "../model/loai_laptop.php";
require_once "../model/san_pham.php";


$act = $_GET['act'] ?? "";
switch ($act) {
    case "":
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
            $luot_xem = $_POST['luot_xem'];
            $trang_thai = $_POST['trang_thai'] ?? 0;
            add_loai($ten_loai, $nhu_cau, $mau_sac, $kich_thuoc, $luot_xem, $trang_thai);
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
            $luot_xem = $_POST['luot_xem'];
            $ma_loai = $_POST['ma_loai'];
            $trang_thai = $_POST['trang_thai'] ?? 0;
            update_loai($ma_loai, $ten_loai, $nhu_cau, $mau_sac, $kich_thuoc, $luot_xem, $trang_thai);
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

            add_sanpham($ten_sp, $gia_sp, $hinh_sp, $mo_ta, $ma_loai);
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
        break;
    default:
        // include "../admin/404.php";
        echo "../404.php";
}



include './layout/header.php';
include $VIEW;
include './layout/footer.php';
