<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">📉 Tổng doanh thu hôm nay</p>
                    <h6 class="mb-0">$ <?= $totalday ?> ⏫</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">📉 Tổng doanh thu 1 tuần</p>
                    <h6 class="mb-0">$ <?= $totalweek ?> ⏫</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-area fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">📉 Tổng doanh thu 1 tháng</p>
                    <h6 class="mb-0">$ <?= $totalmonth ?> ⏫</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">📉 Tổng doanh thu</p>
                    <h6 class="mb-0">Tổng: $ <?= $totaldoanhthu ?> ⏫</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Số lượng Latop bán được</p>
                    <h6 class="mb-0">Số lượng bán: <?= $totalsoluongban ?> ⏫</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Laptop bán được nhiều nhất</p>
                    <?php if ($sp_bannhieunhat !== null) : ?>
                        <h6 class="mb-0">Tên sp là: <?= $sp_bannhieunhat['ten_sp'] ?></h6>
                        <h6 class="mb-0">Số lượng là: <?= $sp_bannhieunhat['total_quantity'] ?> ⏫</h6>
                    <?php else : ?>
                        <p>Không có thông tin về sản phẩm bán nhiều nhất.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Số lượng khách hàng mới</p>
                    <?php if ($khachhangmoi > 0) : ?>
                        <h6 class="mb-0"><?= $khachhangmoi ?> khách hàng mới</h6>
                    <?php else : ?>
                        <p>Chưa có thông tin về khách hàng mới.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Thời gian mua hàng nhiều nhất</p>
                    <h6 class="mb-0">Ngày: <?= $thoigian['ngay_dh'] ?></h6>
                    <h6 class="mb-0">Số lượng đơn hàng: <?= $thoigian['total_ngaydh'] ?></h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Số lượng Laptop còn trong kho</p>
                    <?php foreach ($slctk as $ma_sp => $so_luong) : ?>
                        <h6 class="mb-0">Còn <?= $so_luong ?> Laptop <br> ➡️Mã sp là: (<?= $ma_sp ?>) </h6>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>