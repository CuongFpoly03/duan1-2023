<style>
    .loai-laptop {
        margin: 20px 50px;
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
                <th>Chọn</th>
                <th>Ma_dh</th>
                <th>Ten_dh</th>
                <th>dia chỉ đh</th>
                <th>sodt dh</th>
                <th>email dh</th>
                <th>dh pttt</th>
                <th>tong tien</th>
                <th>ngay dat hang</th>
                <th>Hoạt động</th>
            </tr>
            <?php foreach ($listdh as $dh) : ?>
                <?php extract($dh) ?>
                <tr>
                    <td><input type="checkbox" name="ma_dh[]" value=<?= $ma_dh ?> class="checkbox"></td>
                    <td><?= $ma_dh ?></td>
                    <td><?= $ten_dh ?></td>
                    <td><?= $diachi_dh ?></td>
                    <td><?= $sodt_dh ?></td>
                    <td><?= $email_dh ?></td>
                    <td><?= $dh_pttt ?></td>
                    <td><?= $tong_tien ?></td>
                    <td><?= date("d/m/Y h:i:sa") ?></td>
                    <td>
                        <a onclick="return confirm('Bạn có muốn xóa không ?')" href="?act=listdh&ma_dh=<?= $ma_dh ?>">xóa</a> -
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div>
            <button type="button" class="btn btn-outline-success">Chọn tất cả</button>
            <button type="button" class="btn btn-outline-danger">Xóa tất cả</button>
            <button type="button" class="btn btn-outline-warning">Bỏ chọn</button>
        </div>
    </form>
</section>