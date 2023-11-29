<style>
    .loai-cartshop {
        margin: 10px 50px;
    }

    .col-70 {
        background-color: white;
        width: 70%;
        float: left;
        border-radius: 5px;
        margin-bottom: 100px;
    }

    .tables {
        padding: 0px 40px;
    }

    .col-30 {
        background-color: white;
        width: 30%;
        border-radius: 5px;
        float: left;
        width: 350px;
        margin-left: 20px;
    }

    .success {
        width: 100%;
        border-radius: 4px;
        background-color: blue;
        color: white;
        font-weight: bold;
        padding: 8px 0;
        border: 1px solid blue;
    }

    .check {
        margin-top: 40px;
    }
</style>
<section class="loai-cartshop">
    <form class="cart" action="" method="POST">
        <h5 style="margin: 40px 0px">SẢN PHẨM GIỎ HÀNG</h5>
        <div class=col-70>
            <table class="table tables" style="text-align: center;">
                <tr>
                    <th>Chọn</th>
                    <th>STT</th>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
                <?php foreach ($carts as $stt => $cart) : ?>
                    <?php $i = 0; ?>
                    <tr>
                        <td><input type="checkbox" checked></td>
                        <td><?= $stt + 1 ?></td>
                        <td><img src="views/imgs/<?= $cart['hinh_sp'] ?>" alt="" width="150" height="150"></td>
                        <td><?= $cart['ten_sp'] ?></td>
                        <td><?= $cart['gia_sp'] ?></td>
                        <td><?= $cart['so_luong'] ?></td>
                        <td><?= $cart['thanh_tien'] ?></td>
                        <td><a style="text-decoration: none; font-size: 20px" onclick="return confirm('Bạn có muốn xóa không ?')" href="?act=xoacart&ma_sp=<?= $cart['ma_sp'] ?>">❎</a></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
        <div class="col-30">
            <div>
                <h5>Thanh toán</h5>
                <div style="margin-top: 20px">
                    <span class="check">Tổng tạm tính :</span>
                    <span style="float: right; font-weight: bold;"><?= $sums ?> đ</span> <br>
                </div>
                <div style="margin-bottom: 20px">
                    <span class="check">Tổng tiền :</span>
                    <span style="float: right; color: blue; font-weight: bold;"><?= $sums ?> đ</span> <br>
                </div>
                <span><a href="?act=donhang"><button type="button" class="success">Thanh toán</button></a></span>
                <div style="margin: 30px 0px; margin-left: 280px">
                    <a href="?act="><button type="button" class="btn btn-outline-primary">Thoát</button></a>
                </div>
            </div>
        </div>
    </form>

    <script>
        document.getElementById('deselect-all').addEventListener('click', function() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
        });
    </script>
</section>