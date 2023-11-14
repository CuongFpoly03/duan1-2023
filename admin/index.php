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
        if(isset($_GET['ma_loai'])){
            $ma_loai = $_GET['ma_loai'];
            $loai = list_one_loai($ma_loai);
            extract($loai);
            $VIEW = "loai-laptop/update.php";
        }
        break;
        //BAI SẢN PHẨM LAPTOP
    case 'sanpham':
        $title = "Danh sách sản phẩm";
        $sanpham = all_list_sanpham();
        $VIEW = "san-pham/list.php";
        break;
    case 'addsp' :
        $title = "thêm sản phẩm";
        $VIEW = "san-pham/add.php";
        break;
    default:
        // include "../admin/404.php";
        echo "../404.php";
}



include './layout/header.php';
include $VIEW;
include './layout/footer.php';
