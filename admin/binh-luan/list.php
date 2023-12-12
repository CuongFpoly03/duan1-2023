
<style>
    .loai-laptop {
        margin: 20px 50px;
    }
</style>
<section class="loai-laptop">
<h5 style="background-color: blue; color: white; padding: 5px 0px; text-align: center">Danh sách bình luận</h5>
    <form action="" method="POST">
        <table class="table table-bordered border-primary" style="text-align: center">
            <tr>
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
                <td><?= $ma_bl ?></td>
                <td><?= $noi_dung ?></td>
                <td><?= $ma_kh ?></td>
                <td><?= $ma_sp ?></td>
                <td><?= date("d/m/Y h:i:sa") ?></td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không ?')" href="?act=binhluan&ma_bl=<?=$ma_bl ?>">xóa</a> -
                </td>
            </tr>
            <?php endforeach;?>
        </table>
      
    </form>
</section>