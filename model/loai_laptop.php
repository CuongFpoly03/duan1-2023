<?php

require_once "pdo.php";
function all_list_loai()
{
    $sql = "SELECT * FROM loai_laptop ORDER BY ma_loai DESC";
    return pdo_query($sql);
}
//LẤY 5 SP
function all_list_namloai()
{
    $sql = "SELECT * FROM loai_laptop ORDER BY ma_loai DESC limit 0,4";
    return pdo_query($sql);
}

function all_list_muoiloai()
{
    $sql = "SELECT * FROM loai_laptop ORDER BY ma_loai DESC limit 0,10";
    return pdo_query($sql);
}



function add_loai($ten_loai, $nhu_cau, $mau_sac, $kich_thuoc, $ram, $luot_xem, $trang_thai)
{
    $sql = "INSERT INTO loai_laptop(ten_loai, nhu_cau, mau_sac, kich_thuoc, ram, luot_xem, trang_thai) VALUES('$ten_loai','$nhu_cau','$mau_sac','$kich_thuoc','$ram', '$luot_xem','$trang_thai')";
    pdo_execute($sql);
}

function delete_loai($ma_loai)
{
    $sql = "DELETE FROM loai_laptop WHERE ma_loai = $ma_loai";
    // echo $sql; die;
    pdo_execute($sql);
}
function delete_loai_item($ma_loai)
{
    $ml = "";
    foreach ($ma_loai as $item) {
        $ml .= $item . ", ";
        $ml = rtrim($ml, ",");
        $sql = "DELETE FROM loai_laptop WHERE ma_loai IN ($ml)";
        pdo_execute($sql);
    }
}

function list_one_loai($ma_loai)
{
    $sql = "SELECT * from loai_laptop WHERE ma_loai = $ma_loai";
    return pdo_query_one($sql);
}

function update_loai($ma_loai, $ten_loai, $nhu_cau, $mau_sac, $kich_thuoc, $ram, $luot_xem, $trang_thai)
{
    $sql = "UPDATE loai_laptop SET ten_loai = '$ten_loai',  nhu_cau = '$nhu_cau',  mau_sac = '$mau_sac',  kich_thuoc = '$kich_thuoc', ram = '$ram',  luot_xem = '$luot_xem',  trang_thai = '$trang_thai' WHERE ma_loai = $ma_loai";
    pdo_execute($sql);
}
