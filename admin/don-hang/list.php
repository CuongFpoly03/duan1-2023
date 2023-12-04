<style>
    .loai-laptop {
        margin: 20px 50px;
    }

    /* CSS để tùy chỉnh màu sắc dựa trên trạng thái */
    .trang-thai-1 {
        color: blue;
        /* Màu cho trạng thái 1 */
    }

    .trang-thai-2 {
        color: green;
        /* Màu cho trạng thái 2 */
    }

    .trang-thai-3 {
        color: red;
        /* Màu cho trạng thái 3 */
    }

    .block {
        margin: 20px 0;
        float: right;

    }
</style>
<section class="loai-laptop">
    <legend>Danh sách đơn hàng</legend>
    <!-- BAILỌC TÊN SẢN PHẨM -->
    <div>

    </div>
    <form action="" method="POST">

        <table class="table table-bordered border-primary" style="text-align: center">
            <tr>
                <th>Ma_dh</th>
                <th>Ten_dh</th>
                <th>dia chỉ đh</th>
                <th>sodt dh</th>
                <th>email dh</th>
                <th>dh pttt</th>
                <th>tong tien</th>
                <th>ngay dat hang</th>
                <th>Trạng thái</th>
                <th>Xem thêm</th>
            </tr>
            <?php foreach ($listdh as $dh) : ?>
                <?php extract($dh) ?>
                <tr>
                    <td><?= $ma_dh ?></td>
                    <td><?= $ten_dh ?></td>
                    <td><?= $diachi_dh ?></td>
                    <td><?= $sodt_dh ?></td>
                    <td><?= $email_dh ?></td>
                    <td><?= $dh_pttt ?></td>
                    <td><?= $tong_tien ?></td>
                    <td><?= date("d/m/Y h:i:sa") ?></td>
                    <td style="font-weight: bold">
                        <?= $trang_thai ?> <br>
                        <a class ="btn btn-primary" href="?act=listdh&ma_dh=<?= $ma_dh ?>">Đổi</a>
                    </td>
                    <td>
                        <a class ="btn btn-danger" href="?act=listdhct&ma_ct=<?= $ma_ct ?>">Chi tiết</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <div class="block" id="block">
                <form action="?act=listdh" method="POST">
                    <input type="hidden" name="ma_dh" value="<?= $ma_dh ?>">
                    <select name="trang_thai" id="trang_thai">
                        <option value="1">Xử lí đơn hàng</option>
                        <option value="2">Đang giao hàng</option>
                        <option value="3">Đơn hàng thành công!</option>
                    </select>
                    <button style="font-size: 10px" class="btn btn-dark">thay đổi</button>
                </form>
            </div>
        </table>
        <div>
            <button type="button" class="btn btn-outline-success">Chọn tất cả</button>
            <button type="button" class="btn btn-outline-danger">Xóa tất cả</button>
            <button type="button" class="btn btn-outline-warning">Bỏ chọn</button>
        </div>
    </form>
</section>