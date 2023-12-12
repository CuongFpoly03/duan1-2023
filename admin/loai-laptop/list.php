
<style>
    .loai-laptop {
        margin: 20px 50px;
    }
</style>
<section class="loai-laptop">
<h5 style="background-color: blue; color: white; padding: 5px 0px; text-align: center">Danh sách loại laptop</h5>
    <form action="" method="POST">
        <table class="table table-bordered border-primary" style="text-align: center">
            <tr>
                <th>Ma_loai</th>
                <th>Ten_loai</th>
                <th>Nhu_cau</th>
                <th>Mau_sac</th>
                <th>Kich_thuoc</th>
                <th>Ram</th>
                <th>Luot_xem</th>
                <th>Trang_thai</th>
                <th>Action</th>
            </tr>
            <?php foreach($listlaptop as $list): ?>
                <?php extract($list) ?>
            <tr>
                <td><?= $ma_loai ?></td>
                <td><?= $ten_loai ?></td>
                <td><?= $nhu_cau ?></td>
                <td><?= $mau_sac ?></td>
                <td><?= $kich_thuoc ?></td>
                <td><?= $ram ?>GB</td>
                <td><?= $luot_xem ?></td>
                <td><?= $trang_thai ? "hiển thị" : "ẩn" ?></td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không ?')" href="?act=loai&ma_loai=<?=$ma_loai ?>">xóa</a> -
                    <a class="btn btn-primary" href="?act=update&ma_loai=<?= $ma_loai ?>">sửa</a>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
        <div>
            <a href="?act=add"><button type="button" class="btn btn-outline-primary">Thêm mới</button></a>
        </div>
    </form>
</section>