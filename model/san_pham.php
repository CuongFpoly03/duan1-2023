<?php

require_once "pdo.php";
function all_list_sanpham()
{
    $sql = "SELECT sp_laptop.*, ten_loai, nhu_cau, mau_sac, kich_thuoc FROM sp_laptop JOIN loai_laptop ON sp_laptop.ma_loai = loai_laptop.ma_loai ORDER BY ma_sp DESC";
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
