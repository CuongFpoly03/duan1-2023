<?php
include './views/layout/header.php';

$act = $_GET['act'] ?? "";
switch ($act) {
    case "":
        include "./views/layout/home.php";
        break;
    case 'sanphamct':
        include 'views/layout/chitietsp.php';
        break;
    case 'sanpham':
        include 'views/layout/sanpham.php';
        break;
    
    default : 
        echo "./404.php";
}
// include '$_VIEWS';
include './views/layout/footer.php';
