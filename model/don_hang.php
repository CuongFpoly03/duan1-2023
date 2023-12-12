<?php
function load_all_dh()
{
    $sql = "SELECT * FROM don_hang ORDER BY ma_dh desc";
    return pdo_query($sql);
}


function load_all_dhadnct()
{
    $sql = "SELECT don_hang.*, ma_ct FROM don_hang JOIN ct_dh ON don_hang.ma_dh = ct_dh.ma_dh ORDER BY ma_dh desc";
    return pdo_query($sql);
}

function load_all_dh_home()
{
    $sql = "SELECT * FROM don_hang ORDER BY ma_dh desc limit 0,5";
    return pdo_query($sql);
}

function updateDonHangStatus($trang_thai, $ma_dh) {
    $sql = "UPDATE don_hang SET trang_thai = '$trang_thai' WHERE ma_dh = $ma_dh";
    // echo $sql; die;
    pdo_execute($sql);
}


function updateDonHangStatuss($trang_thai, $ma_dh) {
    $sql = "UPDATE don_hang SET trang_thai = '$trang_thai' WHERE ma_dh = $ma_dh";
    pdo_execute($sql);
}

function load_one_dh($ma_dh){
    $sql = "SELECT * FROM don_hang WHERE ma_dh = $ma_dh";
    return pdo_query_one($sql);
}

function adddh($trang_thai){
    $sql = "INSERT INTO don_hang(trang_thai) VALUES ('$trang_thai')";
    return pdo_execute($sql);
}

// function load_one_ct($ma_ct){
//     $sql = "SELECT * FROM ct_dh WHERE ma_ct = $ma_ct";
//     return pdo_query_one($sql);
// }

function load_all_dhct()
{
    $sql = "SELECT * FROM ct_dh ORDER BY ma_ct desc";
    return pdo_query($sql);
}
function list_dh_ctdh($ma_ct){
    $sql = "SELECT ct_dh.*, trang_thai, ten_kh, ten_dh, ten_sp FROM ct_dh JOIN don_hang ON ct_dh.ma_dh = don_hang.ma_dh
                                                                  JOIN khach_hang ON ct_dh.ma_kh = khach_hang.ma_kh 
                                                                  JOIN sp_laptop ON ct_dh.ma_sp = sp_laptop.ma_sp WHERE ma_ct = $ma_ct";
    return pdo_query_one($sql);
}

// function delete_dh_item($ma_dh)
// {
//     $mdh = "";
//     foreach ($ma_dh as $item) {
//         $mdh .= $item . ", ";
//         $mdh = rtrim($mdh, ",");
//         $sql = "DELETE FROM don_hang WHERE ma_dh IN ($mdh)";
//         pdo_execute($sql);
//     }
// }
// function delete_dh($ma_dh)
// {
//     $sql = "DELETE FROM don_hang WHERE ma_dh = $ma_dh";
//     pdo_execute($sql);
// }