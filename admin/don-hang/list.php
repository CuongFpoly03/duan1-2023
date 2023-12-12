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
<h5 style="background-color: blue; color: white; padding: 5px 0px; text-align: center">Danh sách đơn hàng</h5>
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
                <?php extract($dh);
                // date_default_timezone_set('Asia/Ho_Chi_Minh');
                // $date = date('d/m/Y h:i:sa'); ?>
                
            <tr>
                    <td><?= $ma_dh ?></td>
                    <td><?= $ten_dh ?></td>
                    <td><?= $diachi_dh ?></td>
                    <td><?= $sodt_dh ?></td>
                    <td><?= $email_dh ?></td>
                    <td><?= $dh_pttt ?></td>
                    <td><?= $tong_tien ?></td>
                    <td><?= $ngay_dh ?></td>
                    <td style="font-weight: bold; color: red">
                        <?= $trang_thai ?> <br>
                    </td>
                    <td>
                        <a class ="btn btn-danger" href="?act=listdhct&ma_ct=<?= $ma_ct ?>&ma_dh=<?= $ma_dh ?>">Chi tiết</a>
                    </td>
                </tr>
                <?php endforeach; ?>
           
        </table>
    </form>
</section>