
<style>
    .loai-laptop {
        margin: 20px 50px;
    }
</style>
<section class="loai-laptop">
    <legend>Danh sách bình luận</legend>
    <form action="" method="POST">
        <table class="table table-bordered border-primary" style="text-align: center">
            <tr>
                <th>Chọn</th>
                <th>Ma_bl</th>
                <th>noi_dung</th>
                <th>ma_kh</th>
                <th>ma_sp</th>
                <th>ngay_bl</th>
                <th>Action</th>
            </tr>
            <?php foreach($listbinhluan as $list): ?>
                <?php extract($list) ?>
            <tr>
                <th><input type="checkbox" name="ma_bl[]"value= <?= $ma_bl ?> class="checkbox" ></th>
                <td><?= $ma_bl ?></td>
                <td><?= $noi_dung ?></td>
                <td><?= $ma_kh ?></td>
                <td><?= $ma_sp ?></td>
                <td><?= date("d/m/Y h:i:sa") ?></td>
                <td>
                    <a onclick="return confirm('Bạn có muốn xóa không ?')" href="?act=binhluan&ma_bl=<?=$ma_bl ?>">xóa</a> -
                </td>
            </tr>
            <?php endforeach;?>
        </table>
        <div>
            <button type="button" class="btn btn-outline-success">Chọn tất cả</button>
            <button type="button" class="btn btn-outline-danger">Xóa tất cả</button>
            <button type="button" class="btn btn-outline-warning">Bỏ chọn</button>
        </div>
    </form>
</section>