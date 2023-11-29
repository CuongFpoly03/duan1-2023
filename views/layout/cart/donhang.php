<style>
    .info-pay {
        margin: 50px auto;
        /* border: 1px solid black; */
        border-radius: 10px;
    }

    .pay-one {
        margin: 30px 50px;
        display: flex;
    }

    .pay-one select {
        margin-left: 280px;
    }

    .small-pay-one input {
        margin: 10px 15px;
        border-radius: 10px;
    }

    .pay-two {
        margin: 20px 50px;
    }

    .pay-two input {
        padding: 7px 20px;
        margin: 10px 15px
    }

    .small-pay-two {
        background-color: #F6F7F9;
        border-radius: 10px;
    }

    .small-pay-two input {
        margin: 20px 15px;
        border-radius: 5px;
        padding: 7px 20px;
    }

    form {
        width: 90%;
        margin: 0 auto;
        /* margin-top: 140px; */
    }

    .table {
        width: 90%;
        margin: 0px auto;
    }

    .col-70 {
        width: 70%;
        float: left;
        margin-bottom: 100px;
        background-color: white;
        border-radius: 20px;
    }

    .col-30 {
        background-color: white;
        width: 30%;
        width: 330px;
        margin-left: 30px;
        border-radius: 20px;
        float: left;
    }
    .success {
        width: 100%;
        border-radius: 4px;
        background-color: blue;
        color: white;
        font-weight: bold;
        padding: 8px 0;
        border: 1px solid blue;
    }
</style>

<form action="?act=donhangconfirm" method="POST">
    <h5 style="margin: 40px 0px">THÔNG TIN THANH TOÁN ĐƠN HÀNG</h5>
    <div class="col-70">
        <div class="info-pay">
            <div class="pay-one">
                <h5>Hình thức thanh toán </h5>
                <select name="dh_pttt" id="">
                    <option value="0">chọn hình thức thanh toán</option>
                    <option value="one">Thanh toán trực tiếp</option>
                    <option value="two">Thanh toán chuyển khoản</option>
                </select>
            </div>
            <?php if (isset($_SESSION['ten_kh'])) {
                $ten_kh = $_SESSION['ten_kh']['ten_kh'];
                $email = $_SESSION['ten_kh']['email'];
                $dien_thoai = $_SESSION['ten_kh']['dien_thoai'];
                $dia_chi = $_SESSION['ten_kh']['dia_chi'];
            } else {
                $ten_kh = "";
                $email = "";
                $dien_thoai = "";
                $dia_chi = "";
            } ?>
            <div class="pay-two">
                <h5>Thông tin người đặt</h5>
                <div class="small-pay-two">
                    <div style="display: flex">
                        <div>
                            <label for="">Tên khách hàng:</label>
                            <input type="text" name="ten_kh" placeholder="Ho ten" pattern=".{8,}" title="8 ký tự trở lên!" required value="<?= $ten_kh ?>">
                            <label for="">Số điện thoại:</label>
                            <input type="text" name="dien_thoai" placeholder="So dt" value="<?= $dien_thoai ?>">
                        </div>
                        <div>
                            <label for="">Email:</label>
                            <input type="email" name="email" placeholder="email" pattern=".{8,}" title="8 ký tự trở lên!" required value="<?= $email ?>">
                            <label for="">Địa chỉ</label>
                            <input type="text" name="dia_chi" placeholder="dia chi:" pattern=".{8,}" title="8 ký tự trở lên!" required value="<?= $dia_chi ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pay-two">
                <h5>Thông tin người nhận</h5>
                <div class="small-pay-two">
                    <div>
                        <label for="">Tên khách hàng:</label>
                        <input type="text" name="ten_kh" placeholder="Ho ten" pattern=".{8,}" title="8 ký tự trở lên!" required value="<?= $ten_kh ?>">
                        <label for="">Số điện thoại:</label>
                        <input type="text" name="dien_thoai" placeholder="So dt" pattern=".{8,}" title="8 ký tự trở lên!" required value="<?= $dien_thoai ?>">
                    </div>
                </div>
                <input type="checkbox" checked>Tôi đồng ý, với các điều khoản dịch vụ trên.
            </div>
        </div>

        <table class="table" style="text-align: center">
            <h5 style="margin: 20px 55px">Sản phẩm cần thành toán</h5>
            <tr>
                <th>Chọn</th>
                <th>STT</th>
                <th>Tên sách</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Hình</th>
                <th>Ngày đặt hàng</th>
                <th>Thành tiền</th>
            </tr>
            <?php foreach ($carts as $stt => $cart) : ?>
                <?php $i = 0; ?>
                <tr>
                    <td><input type="checkbox" checked></td>
                    <td><?= $stt + 1 ?></td>
                    <td><?= $cart['ten_sp'] ?></td>
                    <td><?= $cart['gia_sp'] ?></td>
                    <td><?= $cart['so_luong'] ?></td>
                    <td><img src="views/imgs/<?= $cart['hinh_sp'] ?>" alt="" width="60" height="60"></td>
                    <td><?= (date('d/m/Y h:i:sa')) ?></td>
                    <td><?= $cart['thanh_tien'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    <div class="col-30">
        <div class="">
            <h5 style="margin: 20px 0">Tổng của đơn hàng</h5>
            <div>
                <div>
                    <span>Thanh toán 💵:</span>
                    <span style="float: right;"><strong>Tất cả sản phẩm</strong></span>
                </div>
                <div  style="margin: 10px 0px;">
                    <span>Tổng sl sản phẩm 🔢:</span>
                    <span  style="float: right;"><strong><?php
                            if (isset($_SESSION['cart'])) {
                                echo count($_SESSION['cart']);
                            }
                            ?>
                            </strong>
                        </span>
                </div>
                <div>
                    <span>Tổng tạm tính 💵:</span>
                    <span  style="float: right;"><strong><?= $sum ?>đ</strong></span>
                </div>
                <div style="margin: 10px 0;">
                    <span>Thành tiền 💵:</span>
                    <span  style="float: right;"><strong><?= $sum ?>đ</strong></span>
                </div>
                <td><button type="submit" class="success">Đồng ý thanh toán</button></td>
                <div style="margin:40px 0px; margin-left: 240px">
                    <a href="?act=viewdonhang"><button type="button" class="btn btn-outline-primary">Quay lại</button></a>
                </div>
            </div>
        </div>
    </div>
</form>