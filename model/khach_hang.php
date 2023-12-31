<?php 

// require_once "./pdo.php";

function load_all_kh(){
    $sql = "SELECT * FROM khach_hang ORDER BY ma_kh desc";
    return pdo_query($sql);
}
function delete_kh($ma_kh)
{
    $sql = "DELETE FROM khach_hang WHERE ma_kh = $ma_kh";
    pdo_execute($sql);
}
function delete_kh_item($ma_kh)
{
    $mkh = "";
    foreach ($ma_kh as $item) {
        $mkh .= $item . ", ";
        $mkh = rtrim($mkh, ",");
        $sql = "DELETE FROM khach_hang WHERE ma_kh IN ($mkh)";
        pdo_execute($sql);
    }
}

function list_one_kh($ma_kh)
{
    $sql = "SELECT * from khach_hang WHERE ma_kh = $ma_kh";
    return pdo_query_one($sql);
}

function update_kh($ma_kh, $ten_kh, $email, $mat_khau, $dia_chi, $dien_thoai, $vai_tro)
{
    $sql = "UPDATE khach_hang SET ten_kh = '$ten_kh',  email = '$email',  mat_khau = '$mat_khau',  dia_chi = '$dia_chi',  dien_thoai = '$dien_thoai', vai_tro = '$vai_tro' WHERE ma_kh = $ma_kh";
    pdo_execute($sql);
}

function add_khachhang($email, $ten_kh, $mat_khau)
{
    $sql = "INSERT INTO khach_hang(email, ten_kh, mat_khau ) VALUES('$email','$ten_kh','$mat_khau')";
    pdo_execute($sql);
}

function check($ten_kh, $mat_khau){
    $sql = "SELECT * FROM khach_hang WHERE ten_kh = '".$ten_kh."' AND mat_khau = '".$mat_khau."'";
    $dn = pdo_query_one($sql);
    return $dn;
}

function check_email($email){
    $sql = "SELECT * FROM khach_hang WHERE email = '".$email."' ";
    $kh = pdo_query_one($sql);
    return $kh;
}
?>