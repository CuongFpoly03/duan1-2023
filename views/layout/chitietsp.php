<div class="main">
    <div class="all-detail">
        <div class="left">

            <?php extract($sanphamct) ?>
            <div class="all-col">
                <img src="views/imgs/<?= $hinh_sp ?>" alt="" />
                <div class="text-detail">
                    <legend>
                        <?= $ten_sp ?>
                    </legend>
                    <p>Thương hiệu: <?= $ten_loai ?></p>
                    <span>Giá: <?= $gia_sp ?> đ</span>
                    <div class="submit">
                        <button>MUA NGAY</button>
                        <button>THÊM VÀO GIỎ HÀNG</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="right">
            <div class="top-detail">
                <img src="./views/imgs/asus2.jpg" alt="" />
                <p>CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ PHONG VŨ ✅</p>
            </div>
            <div class="info-nua">
                <legend>Chính sách bán hàng</legend>
                <p>🚒 Miễn phí giao hàng cho đơn hàng từ 5 triệu.</p>
                <p>🔰 Cam kết hàng chính hãng 100%.</p>
                <p>🔁 Đổi trả trong vòng 10 ngày.</p>

                <legend>Dịch vụ khác</legend>
                <p>⚙ Gói dịch vụ bảo hành/ Sửa chữa tận nơi.</p>
            </div>
        </div>
    </div>

    <div class="description">
        <legend>MÔ TẢ SẢN PHẨM</legend>
        <div class="small-des">
            <p>
               <?= $mo_ta ?>
                - CPU: Intel Core i3-N305
                - Màn hình: 14" IPS (1920 x 1080)
                - RAM: 8GB Onboard LPDDR5 5200MHz
                - Đồ họa: Onboard Intel UHD Graphics
                - Lưu trữ: 512GB SSD M.2 NVMe /
                - Hệ điều hành: Windows 11 Home
                - 40 Wh Pin liền
                - Khối lượng: 1.4kg
                - Chuẩn Non-EVO
            </p>
            <img src="./views/imgs/<?= $hinh_sp ?>" alt="" />
        </div>
    </div>

    <!-- BAI SP LIÊN QUAN -->
    <div class="pro-relate">
        <div class="text-laptop">
            <legend>SẢN PHẨM LIÊN QUAN</legend>
        </div>
        <hr style="color: white; border: 1.5px solid white" />
        <div class="sp-laptop">
            <?php foreach($sp_cungloai as $spcl): ?>
                <?php extract($spcl) ?>
            <div class="sp-one">
                <img src="./views/imgs/<?= $hinh_sp?>" alt="" />
                <div class="text-sp">
                    <legend><?= $ten_sp ?></legend>
                    <p>
                        <?= $mo_ta?>
                    </p>
                    <span><?= $gia_sp ?>đ</span>
                </div>
            </div>
            <?php endforeach; ?>

            <!-- <div class="sp-one">
                <img src="./views/imgs/acer1.jpg" alt="" />
                <div class="text-sp">
                    <legend>ACER</legend>
                    <p>
                        Laptop ASUS Vivobook X515EA-EJ3633W (i3-1115G4/RAM 8GB/512GB
                        SSD/ Windows 11)
                    </p>
                    <span>9.490.000đ</span>
                </div>
            </div>

            <div class="sp-one">
                <img src="./views/imgs/asus2.jpg" alt="" />
                <div class="text-sp">
                    <legend>ASUS</legend>
                    <p>
                        Laptop ASUS Vivobook X515EA-EJ3633W (i3-1115G4/RAM 8GB/512GB
                        SSD/ Windows 11)
                    </p>
                    <span>9.490.000đ</span>
                </div>
            </div>

            <div class="sp-one">
                <img src="./views/imgs/acer2.jpg" alt="" />
                <div class="text-sp">
                    <legend>ACER</legend>
                    <p>
                        Laptop ASUS Vivobook X515EA-EJ3633W (i3-1115G4/RAM 8GB/512GB
                        SSD/ Windows 11)
                    </p>
                    <span>9.490.000đ</span>
                </div>
            </div>

            <div class="sp-one">
                <img src="./views/imgs/acer3.jpg" alt="" />
                <div class="text-sp">
                    <legend>ACER</legend>
                    <p>
                        Laptop ASUS Vivobook X515EA-EJ3633W (i3-1115G4/RAM 8GB/512GB
                        SSD/ Windows 11)
                    </p>
                    <span>9.490.000đ</span>
                </div>
            </div> -->
        </div>
    </div