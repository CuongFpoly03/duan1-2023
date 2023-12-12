<?php
// include_once './pdo.php';
//hàm thêm sách vào giỏ
function add_to_cart($ma_sp, $ten_sp, $gia_sp, $so_luong, $hinh_sp) {
    $splaptop = [
        'ma_sp'=>$ma_sp,
        'ten_sp'=>$ten_sp,
        'gia_sp'=>$gia_sp,
        'so_luong'=>$so_luong,
        'hinh_sp'=>$hinh_sp,
        'thanh_tien' => $gia_sp * $so_luong
    ];
    //GIỏ hàng chưa có, thì thêm giỏ mới.
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'][$ma_sp] = $splaptop;
    } else {
        //GIỏ hàng đã có
        //Kiểm tra xem hàng đã có trong giỏ chưa, nếu có thì chỉ cần tăng số lượng lên
        if (isset($_SESSION['cart'][$ma_sp])) {
            $_SESSION['cart'][$ma_sp]["so_luong"] += 1;
        } else {
            $_SESSION['cart'][$ma_sp] = $splaptop;
        }
    }
}

//Tính tổng của đơn hàng
function sum_cart() {
    $carts = $_SESSION['cart'];
    $sum = 0;
    foreach ($carts as $cart) {
        $sum += $cart['gia_sp'] * $cart['so_luong'];
    }
    return $sum;
}

//tạo đơn hàng
function inser_donhang($ten_dh, $diachi_dh, $sodt_dh, $email_dh,$dh_pttt, $tong_tien,$ngay_dh, $trang_thai){
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date("Y-m-d H:i:s");
    // $ngay_dhh = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $ngay_dh)));
    $sql = "INSERT INTO don_hang(ten_dh, diachi_dh, sodt_dh, email_dh, dh_pttt, tong_tien, ngay_dh, trang_thai) VALUES ('$ten_dh', '$diachi_dh', '$sodt_dh', '$email_dh','$dh_pttt', '$tong_tien', '$date' , '$trang_thai')";
    // echo $sql; die;
    return pdo_execute_return_lastInsertId($sql);
}
//thm vào giỏ hàng
function insert_ct_donhang($ma_kh, $ma_dh, $ma_sp, $hinh_ct, $so_luong, $don_gia, $thanh_tien){
    $sql = "INSERT INTO ct_dh(ma_kh, ma_dh, ma_sp, hinh_ct, so_luong, don_gia, thanh_tien) VALUES ('$ma_kh', '$ma_dh', '$ma_sp', '$hinh_ct', '$so_luong', '$don_gia', '$thanh_tien')";
    return pdo_execute($sql);
}
// function load_one_dh($ma_dh){
//     $sql = "SELECT * FROM don_hang WHERE ma_dh = $ma_dh";
//     return pdo_query_one($sql);
// }
// function load_all_ctdh($ma_dh){
//     $sql = "SELECT * FROM chitiet_donhang WHERE ma_dh = $ma_dh";
//     return pdo_query($sql);
// }







