<style>
    .form {
        background-color: #3B283C;
        color: white;
        width: 100%;
        height: 100%;
    }

    .text {
        text-align: center;
        padding: 20px 0;
    }

    .table {
        border: 1px solid white;
        width: 96%;
        margin: auto;
        color: black;
        background-color: white;
        text-align: center;
    }

    .block {
        margin: 20px 30px;
        float: right;

    }
</style>

<div class="form">
    <h3 class=text>Quản lí đơn hàng đã đặt </h3>
    <!-- <div class="block" id="block">
        <form action="?act=qldonhang" method="POST">
            <input type="hidden" name="ma_dh" value="<?= $ma_dh ?>">
            <select name="trang_thai" id="trang_thai">
                <option value="1">Huỷ đơn hàng</option>
            </select>
            <button style="font-size: 10px" class="btn btn-dark">Huỷ</button>
        </form>
    </div> -->
    <table class="table">
        <tr>
            <th>STT</th>
            <th>Tên đơn hàng</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Tổng tiền</th>
            <th>Ngày đặt hàng</th>
            <th>Trạng thái</th>

        </tr>
        <?php foreach ($listdonhang as $stt => $ldh) : ?>
            <?php extract($ldh) ?>
            <tr class="testss">
                <td><?= $stt + 1 ?></td>
                <td><?= $ten_dh ?></td>
                <td><?= $diachi_dh ?></td>
                <td><?= $sodt_dh ?></td>
                <td><?= $tong_tien ?></td>
                <td><?= date("d/m/Y") ?></td>
                <td style="color: red; font-weight:bold ">
                    <form action="?act=qldonhang" method="POST">
                        <input type="hidden" name="ma_dh" value="<?= $ma_dh ?>">
                        <select name="trang_thai" id="trang_thai">
                            <option value="2"><?= $trang_thai ?></option>
                            <option value="1">Huỷ đơn hàng</option>
                        </select>
                        <button style="font-size: 10px" class="btn btn-danger">Huỷ</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

    <a href="?act="><button style="margin-left: 1220px; margin-top: 40px; margin-bottom: 20px" class="btn btn-danger">Thoát</button></a>
</div>