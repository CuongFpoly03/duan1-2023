<?php

require_once "pdo.php";
function all_list_sanpham()
{
    $sql = "SELECT sp_laptop.*, ten_loai, nhu_cau, mau_sac, kich_thuoc FROM sp_laptop JOIN loai_laptop ON sp_laptop.ma_loai = loai_laptop.ma_loai ORDER BY ma_sp DESC";
    return  pdo_query($sql);
}
// function add_loai($ten_loai, $nhu_cau, $mau_sac, $kich_thuoc, $luot_xem, $trang_thai)
// {
//     $sql = "INSERT INTO loai_laptop(ten_loai, nhu_cau, mau_sac, kich_thuoc, luot_xem, trang_thai) VALUES('$ten_loai','$nhu_cau','$mau_sac','$kich_thuoc','$luot_xem','$trang_thai')";
//     pdo_execute($sql);
// }

// function delete_loai($ma_loai)
// {
//     $sql = "DELETE FROM loai_laptop WHERE ma_loai = $ma_loai";
//     pdo_execute($sql);
// }
// function delete_loai_item($ma_loai)
// {
//     $ml = "";
//     foreach ($ma_loai as $item) {
//         $ml .= $item . ", ";
//         $ml = rtrim($ml, ",");
//         $sql = "DELETE FROM loai_laptop WHERE ma_loai IN ($ml)";
//         pdo_execute($sql);
//     }
// }

// function list_one_loai($ma_loai)
// {
//     $sql = "SELECT * from loai_laptop WHERE ma_loai = $ma_loai";
//     return pdo_query_one($sql);
// }

// function update_loai($ma_loai, $ten_loai, $nhu_cau, $mau_sac, $kich_thuoc, $luot_xem, $trang_thai)
// {
//     $sql = "UPDATE loai_laptop SET ten_loai = '$ten_loai',  nhu_cau = '$nhu_cau',  mau_sac = '$mau_sac',  kich_thuoc = '$kich_thuoc',  luot_xem = '$luot_xem',  trang_thai = '$trang_thai' WHERE ma_loai = $ma_loai";
//     pdo_execute($sql);
// }
