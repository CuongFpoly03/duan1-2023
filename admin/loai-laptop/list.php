
<style>
    .loai-laptop {
        margin: 20px 50px;
    }
</style>
<section class="loai-laptop">
    <legend>Danh sách loại LapTop</legend>
    <form action="" method="POST">
        <table class="table table-bordered border-primary" style="text-align: center">
            <tr>
                <th>Chọn</th>
                <th>Ma_loai</th>
                <th>Ten_loai</th>
                <th>Nhu_cau</th>
                <th>Mau_sac</th>
                <th>Kich_thuoc</th>
                <th>Luot_xem</th>
                <th>Trang_thai</th>
                <th>Action</th>
            </tr>
            <?php foreach($listlaptop as $list): ?>
                <?php extract($list) ?>
            <tr>
                <th><input type="checkbox" name="ma_loai[]"value= <?= $ma_loai ?> class="checkbox" ></th>
                <td><?= $ma_loai ?></td>
                <td><?= $ten_loai ?></td>
                <td><?= $nhu_cau ?></td>
                <td><?= $mau_sac ?></td>
                <td><?= $kich_thuoc ?></td>
                <td><?= $luot_xem ?></td>
                <td><?= $trang_thai ? "hiển thị" : "ẩn" ?></td>
                <td>
                    <a onclick="return confirm('Bạn có muốn xóa không ?')" href="?act=loai&ma_loai=<?=$ma_loai ?>">xóa</a> -
                    <a href="?act=update&ma_loai=<?= $ma_loai ?>">sửa</a>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
        <div>
            <a href="?act=add"><button type="button" class="btn btn-outline-primary">Thêm mới</button></a>
            <button type="button" class="btn btn-outline-success">Chọn tất cả</button>
            <button type="button" class="btn btn-outline-danger">Xóa tất cả</button>
            <button type="button" class="btn btn-outline-warning">Bỏ chọn</button>
        </div>
    </form>
</section>