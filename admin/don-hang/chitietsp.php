<style>
    .box {
        border: 1px solid black;
        width: 550px;
        height: px;
        margin: 10px auto;
    }

    .testimg {
        margin: 0 150px;
        width: 250px;
        height: 250px;
    }

    .box-lengend {
        background-color: yellowgreen;
        text-align: center;
        padding: 10px 0;
        font-size: 20px;
        color: white;
        font-weight: bold;
    }

    .box-text {
        margin-left: 140px;
        font-size: 18px;

    }
</style>
<div>
    <div class="box">
        <legend class="box-lengend">Chi tiết đơn hàng</legend>

        <img class="testimg" src="../views/imgs/<?= $hinh_ct ?>" alt="">
        <div class="box-text">
            <span><strong>Mã chi tiêt: <?= $ma_ct ?></strong></span><br>
            <span><strong>Tên khách hàng: <?= $ten_kh ?></strong></span><br>
            <span><strong>Tên đơn hàng: <?= $ten_dh ?></strong></span><br>
            <span><strong>Tên sản phẩm: <?= $ten_sp ?></strong></span><br>
            <span><strong>Số lượng: <?= $so_luong ?></strong></span><br>
            <span><strong>Đơn giá: <?= $don_gia ?></strong> </span><br>
            <span><strong>Thành tiền: <?= $thanh_tien ?></strong></span><br>
            <span><strong>Trạng thái hiện tại: <?= $trang_thai ?></strong></span><br>
            <span><strong>Thay đổi trạng thái: <div class="block" id="block">
                        <form action="?act=listdhct" method="POST">
                            <input type="hidden" name="ma_dh" value="<?= $ma_dh ?>">
                            <select name="trang_thai" id="trang_thai">
                                <option value="1">Xử lí đơn hàng</option>
                                <option value="2">Đang giao hàng</option>
                                <option value="3">Đơn hàng thành công!</option>
                                <option value="4">Huỷ đơn hàng!</option>
                            </select>
                            <button style="font-size: 10px" class="btn btn-dark">thay đổi</button>
                        </form>
                    </div></strong></span>
        </div>
        <div style="float: right; margin: 20px 5px">
            <a class="btn btn-primary" href="?act=listdh">thoát </a>
        </div>
    </div>
</div>