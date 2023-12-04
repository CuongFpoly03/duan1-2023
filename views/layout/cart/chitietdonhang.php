<style>
    .background {
        background-color: #5d1b5c;
        color: white;
        margin: 30px 0px;
    }
</style>

<div>
    <legend style="text-align: center;">Đơn hàng của quý khách đã đặt thành công cảm ơn quý khách đã tin tưởng và ủng hộ <strong>LAPTOP 24H</strong></legend>
</div>
<section style="margin: 50px auto; width: 80%">
    <!--  -->
    <div class=background>
        <h4 style="margin-left: 30px">Thông tin đơn hàng</h4>
        <table class="table " style="text-align: center; margin:0px 28px; width: 95%; ">
            <tr>
                <th>Mã đơn hàng</th>
                <th>Ngày đặt hàng</th>
                <th>Tổng đơn hàng</th>
                <th>Phương thức thanh toán</th>
            </tr>
            <tr>
                <td><?= $ma_dh ?></td>
                <td><?= $ngay_dh ?></td>
                <td><?= $tong_tien ?></td>
                <td><?= $dh_pttt ?></td>
            </tr>
        </table>
    </div>
    <div class=background>
        <h4 style="margin-left: 30px">Thông tin người đặt hàng</h4>
        <table class="table" style="text-align: center;margin:0px 28px; width: 95%;">
            <tr>
                <th>Họ Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
            </tr>
            <tr>
                <td><?= $ten_dh ?></td>
                <td><?= $email_dh ?></td>
                <td><?= $sodt_dh ?></td>
                <td><?= $diachi_dh ?></td>
            </tr>
        </table>
    </div>
    <div class=background>
        <table class="table" style="text-align: center;margin:0px 28px; width: 95%;">
            <h4 style="margin-left: 30px">Chi tiết giỏ hàng</h4>
            <tr>
                <th>STT</th>
                <th>Hình</th>
                <th>Tên sách</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
            <?php foreach ($carts as $stt => $cart) : ?>
                <?php $i = 0; ?>
                <tr>
                    <td><?= $stt + 1 ?></td>
                    <td><?= $cart['ten_sp'] ?></td>
                    <td><?= $cart['gia_sp'] ?></td>
                    <td><?= $cart['so_luong'] ?></td>
                    <td><img src="views/imgs/<?= $cart['hinh_sp'] ?>" alt="" width="60" height="60"></td>
                    <td><?= $cart['thanh_tien'] ?></td>

                </tr>
            <?php endforeach ?>
        </table>

    </div>
    <div style="margin:40px 55px">
        <!-- <button type="button" class="btn btn-outline-success">Chọn tất cả</button>
        <button type="button" class="btn btn-outline-danger">Xóa tất cả</button> -->
        <a href="?act="><button type="button" class="btn btn-outline-danger">Quay lại trang chủ</button></a>
        <a href="?act=qldonhang"><button type="button" class="btn btn-outline-primary">Quản lí đơn hàng</button></a>
    </div>
</section>