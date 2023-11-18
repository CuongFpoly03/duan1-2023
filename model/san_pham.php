<?php
require_once "pdo.php";

function all_list_sanpham()
{
    $sql = "SELECT sp_laptop.*, ten_loai, nhu_cau, mau_sac, kich_thuoc, ram FROM sp_laptop JOIN loai_laptop ON sp_laptop.ma_loai = loai_laptop.ma_loai ORDER BY ma_sp DESC";
    return  pdo_query($sql);
}
//loc sp kyw 
function loadall_sanpham($kyw = "", $ma_loai)
{
    $sql = "SELECT * FROM sp_laptop WHERE 1";
    if ($kyw != "") {
        $sql .= " AND ten_sp like '%" . $kyw . "%'";
    }
    if ($ma_loai > 0) {
        $sql .= " AND ma_loai = $ma_loai";
    }
    $sql .= " ORDER BY ma_sp DESC";
    return  pdo_query($sql);
}
function load_ten_loai($ma_loai)
{
    if ($ma_loai > 0) {
        $sql = "SELECT * FROM loai_laptop where ma_loai = $ma_loai";
        $loai = pdo_query_one($sql);
        extract($loai);
        return $ten_loai;
    } else {
        return "";
    }
}
// sp bán chạy
function sp_banchay()
{
    $sql = "SELECT * FROM sp_laptop  ORDER BY luot_xem DESC";
    return  pdo_query($sql);
}
// giá tăng dần
function sp_tangdan()
{
    $sql = "SELECT * FROM sp_laptop ORDER BY gia_sp ASC";
    return  pdo_query($sql);
}
function sp_giamdan()
{
    $sql = "SELECT * FROM sp_laptop ORDER BY gia_sp desc";
    return  pdo_query($sql);
}

//ctsp
function chitiet_sp($ma_sp)
{
    $sql = "SELECT sp_laptop.*, ten_loai FROM sp_laptop JOIN loai_laptop ON sp_laptop.ma_loai = loai_laptop.ma_loai WHERE ma_sp = $ma_sp";
    return pdo_query_one($sql);
}
//spcl
function sp_cungloai($ma_sp, $ma_loai)
{
    $sql = "SELECT * FROM sp_laptop WHERE ma_loai = $ma_loai AND ma_sp <> $ma_sp";
    // echo $sql; die;
    return  pdo_query($sql);
}

//laptop
function all_list_namsanpham()
{
    $sql = "SELECT * FROM sp_laptop  ORDER BY ma_sp DESC limit 0,5";
    return  pdo_query($sql);
}
//san pham noi bạt
function all_list_sanphamnb()
{
    $sql = "SELECT * FROM sp_laptop  ORDER BY luot_xem DESC limit 0,5";
    return  pdo_query($sql);
}

function add_sanpham($ten_sp, $gia_sp, $hinh_sp, $mo_ta, $ma_loai)
{
    $sql = "INSERT INTO sp_laptop(ten_sp, gia_sp, hinh_sp, mo_ta, ma_loai) VALUES('$ten_sp','$gia_sp','$hinh_sp','$mo_ta','$ma_loai')";
    // echo $sql; die;
    pdo_execute($sql);
}

function delete_sp($ma_sp)
{
    $sql = "DELETE FROM sp_laptop WHERE ma_sp = $ma_sp";
    pdo_execute($sql);
}
function delete_sp_item($ma_sp)
{
    $msp = "";
    foreach ($ma_sp as $item) {
        $msp .= $item . ", ";
        $msp = rtrim($msp, ",");
        $sql = "DELETE FROM sp_laptop WHERE ma_sp IN ($msp)";
        pdo_execute($sql);
    }
}

function list_one_sp($ma_sp)
{
    $sql = "SELECT * from sp_laptop WHERE ma_sp = $ma_sp";
    return pdo_query_one($sql);
}

function update_sp($ma_sp, $ten_sp, $gia_sp, $hinh_sp, $mo_ta, $ma_loai)
{
    $sql = "UPDATE sp_laptop SET ten_sp = '$ten_sp',  gia_sp = '$gia_sp',  hinh_sp = '$hinh_sp',  mo_ta = '$mo_ta',  ma_loai = '$ma_loai' WHERE ma_sp = $ma_sp";
    pdo_execute($sql);
}
