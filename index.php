<?php
include "./model/pdo.php";
include "./model/loai_laptop.php";
include "./model/san_pham.php";


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
    default:
        echo "./404.php";
}
include './views/layout/header.php';
include $VIEW;
include './views/layout/footer.php';
