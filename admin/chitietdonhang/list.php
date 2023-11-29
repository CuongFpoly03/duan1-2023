<style>
    .loai-laptop {
        margin: 20px 50px;
    }
</style>
<section class="loai-laptop">
    <legend>Danh sách chi tiết đơn hàng</legend>
    <!-- BAILỌC TÊN SẢN PHẨM -->
    <div>

    </div>
    <form action="" method="POST">

        <table class="table table-bordered border-primary" style="text-align: center">
            <tr>
                <th>Chọn</th>
                <th>Ma_ct</th>
                <th>ma_kh</th>
                <th>ma_dh</th>
                <th>ma_sp</th>
                <th>hinh_ct</th>
                <th>so_luong</th>
                <th>don_gia</th>
                <th>Thanh_tien</th>
                <th>Hoạt động</th>
            </tr>
            <?php foreach ($listct as $dh) : ?>
                <?php extract($dh) ?>
                <tr>
                    <td><input type="checkbox" name="ma_dh[]" value=<?= $ma_ct ?> class="checkbox"></td>
                    <td><?= $ma_ct ?></td>
                    <td><?= $ma_kh ?></td>
                    <td><?= $ma_dh ?></td>
                    <td><?= $ma_sp ?></td>
                    <td><img src="../views/imgs/<?= $hinh_ct ?>" alt="" width="60"></td>
                    <td><?= $so_luong ?></td>
                    <td><?= $don_gia ?></td>
                    <td><?= $thanh_tien ?></td>
                    <td>
                        <a onclick="return confirm('Bạn có muốn xóa không ?')" href="?act=listdhct&ma_ct=<?= $ma_ct ?>">xóa</a> -
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