<style>
    .loai-laptop {
        margin: 20px 50px;
    }
</style>
<section class="loai-laptop">
<h5 style="background-color: blue; color: white; padding: 5px 0px; text-align: center">Danh sách sản phẩm laptop</h5>
    <!-- BAILỌC TÊN SẢN PHẨM -->
    <div>

    </div>
    <form action="" method="POST">

        <table class="table table-bordered border-primary" style="text-align: center">
            <tr>
                <th>Ma_sp</th>
                <th>Ten_sp</th>
                <th>Gia_sp</th>
                <th>So_luong</th>
                <th>Hinh_sp</th>
                <th>Ten_loai</th>
                <th>Nhu_cau</th>
                <th>Mau_sac</th>
                <th>Kich_thuoc</th>
                <th>Ram</th>
                <th>Mo_ta</th>
                <th>thông tin</th>
            </tr>
            <?php foreach ($sanpham as $sp) : ?>
                <?php extract($sp) ?>
                <tr>
                    <td><?= $ma_sp ?></td>
                    <td><?= $ten_sp ?></td>
                    <td><?= $gia_sp ?></td>
                    <td><?= $so_luong ?></td>
                    <td><img src="../views/imgs/<?= $hinh_sp ?>" alt="" width="90"></td>
                    <td><?= $ten_loai ?></td>
                    <td><?= $nhu_cau ?></td>
                    <td><?= $mau_sac ?></td>
                    <td><?= $kich_thuoc ?></td>
                    <td><?= $ram ?>GB</td>
                    <td><?= $mo_ta ?></td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không ?')" href="?act=sanpham&ma_sp=<?= $ma_sp ?>">xóa</a> -
                        <a class="btn btn-primary" href="?act=updatesp&ma_sp=<?= $ma_sp ?>">sửa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div>
            <a href="?act=addsp"><button type="button" class="btn btn-outline-primary">Thêm mới</button></a>
        </div>
    </form>
</section>