    <section class="update-banner">
        <div class="col-70">
            <div class="box-banner">
                <button class="button">Laptop theo thương hiệu</button>
                <div class="small-update th">
                    <?php foreach ($banner as $bn) : ?>
                        <?php extract($bn) ?>
                        <a class="banner-text" href="?act=locloai&ma_loai=<?=$ma_loai?>"><?= $ten_loai ?></a>
                    <?php endforeach; ?>
                    <!-- <a href="?act=del">Dell</a>
                    <a href="">Hp</a>
                    <a href="">Lenovo</a>
                    <a href="">Asus</a> -->
                </div>
            </div>
            <div class="box-banner">
                <button class="button">Laptop kích thước</button>
                <div class="small-update kt">
                    <?php foreach ($banner as $bn) : ?>
                        <?php extract($bn) ?>
                        <a href="?act=lockichthuoc&ma_loai=<?=$ma_loai?>"><?= $kich_thuoc ?>Inch</a>
                    <?php endforeach; ?>
                    <!-- <a href="">trên 15 inch</a>
                    <a href="">Laptop 14 inch</a>
                    <a href="">Laptop 15.6 vinch</a>
                    <a href="">Laptop 16 inch</a> -->
                </div>
            </div>
            <div class="box-banner">
                <button class="button">Laptop màu sắc</button>
                <div class="small-update kt">
                    <?php foreach ($banner as $bn) : ?>
                        <?php extract($bn) ?>
                        <a href="?act=locmausac&ma_loai=<?=$ma_loai?>"><?= $mau_sac ?></a>
                    <?php endforeach; ?>
                    <!-- <a href="">trên 15 inch</a>
                    <a href="">Laptop 14 inch</a>
                    <a href="">Laptop 15.6 vinch</a>
                    <a href="">Laptop 16 inch</a> -->
                </div>
            </div>
            <div class="box-banner">
                <button class="button">Laptop theo theo nhu cầu</button>
                <div class="small-update nc">
                    <?php foreach ($banner as $bn) : ?>
                        <?php extract($bn) ?>
                        <a href="?act=locnhucau&ma_loai=<?=$ma_loai?>"><?= $nhu_cau ?></a>
                    <?php endforeach; ?>
                    <!-- <a href="">Đồ họa</a>
                    <a href="">Văn phòng</a>
                    <a href="">Mỏng nhẹ</a>
                    <a href="">Gaming</a> -->
                </div>
            </div>
            <div class="box-banner">
                <button class="button">Laptop theo Ram</button>
                <div class="small-update tg">
                    <?php foreach ($banner as $bn) : ?>
                        <?php extract($bn) ?>
                        <a href="?act=locram&ma_loai=<?=$ma_loai?>"><?= $ram ?> GB</a>
                    <?php endforeach; ?>
                    <!-- <a href="">10-15 triệu</a>
                    <a href="">15-20 triệu</a>
                    <a href="">20-25 triệu</a>
                    <a href="">25-30 triệu</a> -->
                </div>
            </div>
        </div>
        <div class="col-30">
            <div><img src="./views/imgs/unnamed.gif" alt="" /></div>
            <div><img src="./views/imgs/unnamed (1).gif" alt="" /></div>
        </div>
    </section>
    <section class="banner">
        <aside class="down">
            <p class="btn--scroll-to">
                <i class="fa-solid fa-angles-down"></i>
            </p>
        </aside>
        <aside class="img-banner banner">
            <img src="views/imgs/banner1.jpg" alt="" width="100%" />
        </aside>
        <aside class="img-banner banner">
            <img src="views/imgs/banner2.jpg" alt="" width="100%" />
        </aside>
        <aside class="img-banner banner">
            <img src="views/imgs/banner3.jpg" alt="" width="100%" />
        </aside>
        <aside class="img-banner banner">
            <img src="views/imgs/banner4.jpg" alt="" width="100%" />
        </aside>
        <p class="prev" onclick="slide(-1)">❮</p>
        <p class="next" onclick="slide(1)">❯</p>
    </section>
    </header>

    <div class="main">
        <?php //BAI tin tức banner 
        ?>
        <div class="all-tt-banner">
            <div class="info-tech">
                <div class="info">
                    <img src="./views/imgs/new1.jpg" alt="">
                </div>
                <div class="info">
                    <img src="./views/imgs/new2.jpg" alt="">
                </div>
                <div class="info">
                    <img src="./views/imgs/new3.jpg" alt="">
                </div>
                <div class="info">
                    <img src="./views/imgs/new4.jpg" alt="">
                </div>
            </div>
        </div>
        <?php //BAI DANH MỤC LAP 
        ?>
        <div class="all-category-nb">
            <div class="text-tech">
                <legend>DANH MỤC NỖI BẬT</legend>
            </div>
            <div class="info-tech">
                <?php foreach ($contentdm as $ctdm) : ?>
                    <?php extract($ctdm) ?>
                    <div class="info">
                        <img src="./views/imgs/dm1.jpg" alt="">
                        <p style="font-weight: bold"><?= $ten_loai ?></p>
                    </div>
                <?php endforeach; ?>
                <!-- <div class="info">
                    <img src="./views/imgs/dm1.jpg" alt="">
                    <p>Acer</p>
                </div>
                <div class="info">
                    <img src="./views/imgs/dm1.jpg" alt="">
                    <p>Lap To</p>
                </div>
                <div class="info">
                    <img src="./views/imgs/dm1.jpg" alt="">
                    <p>Acer</p>
                </div>
                <div class="info">
                    <img src="./views/imgs/dm1.jpg" alt="">
                    <p>Lap To</p>
                </div>
                <div class="info">
                    <img src="./views/imgs/dm1.jpg" alt="">
                    <p>Lap To</p>
                </div>
                <div class="info">
                    <img src="./views/imgs/dm1.jpg" alt="">
                    <p>Acer</p>
                </div>
                <div class="info">
                    <img src="./views/imgs/dm1.jpg" alt="">
                    <p>Lap To</p>
                </div>
                <div class="info">
                    <img src="./views/imgs/dm1.jpg" alt="">
                    <p>Acer</p>
                </div>
                <div class="info">
                    <img src="./views/imgs/dm1.jpg" alt="">
                    <p>Lap Top</p>
                </div> -->
            </div>
        </div>



        <?php //BAI SẢN PHẨM LAP 
        ?>
        <div class="box-all">
            <div class="text-laptop">
                <legend>LAPTOP</legend>
                <a href="index.php?act=sanpham">Xem tất cả >>> </a>
            </div>
            <hr style="color: white; border: 1.5px solid white" />
            <div class="sp-laptop">
                <?php foreach ($namsp as $nsp) : ?>
                    <?php extract($nsp) ?>
                    <a href="?act=ctsp&ma_sp=<?= $ma_sp ?>">
                        <div class="sp-one">
                            <img src="./views/imgs/<?= $hinh_sp ?>" alt="" />
                            <div class="text-sp">
                                <legend><?= $ten_sp ?></legend>
                                <p>
                                    <?= $mo_ta ?>
                                </p>
                                <span><?= $gia_sp ?>đ</span>
                            </div>
                            
                        </div>
                    </a>

                <?php endforeach ?>

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
        </div>

        <!-- BAISẢN  PHẨM NỖI BẬT  -->
        <div class="box-spnb">
            <div class="text-laptop">
                <legend>SẢN PHẨM NỖI BẬT</legend>
            </div>
            <hr style="color: white; border: 1.5px solid white" />
            <div class="sp-laptop">
                <?php foreach ($sp_noibat as $spnb) : ?>
                    <?php extract($spnb) ?>
                    <a href="?act=ctsp&ma_sp=<?= $ma_sp ?>">
                        <div class="sp-one">
                            <img src="./views/imgs/<?= $hinh_sp ?>" alt="" />
                            <div class="text-sp">
                                <legend><?= $ten_sp ?></legend>
                                <p>
                                    <?= $mo_ta ?>
                                </p>
                                <span><?= $gia_sp ?>đ</span>
                            </div>
                        </div>
                    </a>
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

            <!-- BAI DÀNH CHO BẠN -->
            <div class="product-your" id="product-your--">
                <div class="text-laptop">
                    <legend>DÀNH CHO BẠN</legend>
                </div>
                <hr style="color: white; border: 1.5px solid white" />
                <p class="prev" onclick="slides(-1)">❮</p>
                <p class="next" onclick="slides(1)">❯</p>
                <div class="sp-laptops" id="sp-laptops">
                    <?php foreach ($namsp as $nsp) : ?>
                        <?php extract($nsp) ?>
                        <a href="?act=ctsp&ma_sp=<?= $ma_sp ?>">
                            <div class="sp-one">
                                <img src="./views/imgs/<?= $hinh_sp ?>" alt="" />
                                <div class="text-sp">
                                    <legend><?= $ten_sp ?></legend>
                                    <p>
                                        <?= $mo_ta ?>
                                    </p>
                                    <span><?= $gia_sp ?>đ</span>
                                </div>
                            </div>
                        </a>
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

                <div class="sp-laptops" id="sp-laptops">
                    <?php foreach ($sp_noibat as $nsp) : ?>
                        <?php extract($nsp) ?>
                        <a href="?act=ctsp&ma_sp=<?= $ma_sp ?>">
                            <div class="sp-one">
                                <img src="./views/imgs/<?= $hinh_sp ?>" alt="" />
                                <div class="text-sp">
                                    <legend><?= $ten_sp ?></legend>
                                    <p>
                                        <?= $mo_ta ?>
                                    </p>
                                    <span><?= $gia_sp ?>đ</span>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>

                    <!-- <div class="sp-one">
                        <img src="./views/imgs/acer3.jpg" alt="" />
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
                        <img src="./views/imgs/asus1.jpg" alt="" />
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
                        <img src="./views/imgs/acer3.jpg" alt="" />
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
                        <img src="./views/imgs/acer1.jpg" alt="" />
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

                <div class="sp-laptops" id="sp-laptops">
                    <?php foreach ($namsp as $nsp) : ?>
                        <?php extract($nsp) ?>
                        <a href="?act=ctsp&ma_sp=<?= $ma_sp ?>">
                            <div class="sp-one">
                                <img src="./views/imgs/<?= $hinh_sp ?>" alt="" />
                                <div class="text-sp">
                                    <legend><?= $ten_sp ?></legend>
                                    <p>
                                        <?= $mo_ta ?>
                                    </p>
                                    <span><?= $gia_sp ?>đ</span>
                                </div>
                            </div>
                        </a>
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
                    </div> -->
                </div>
            </div>
            <!-- //BAITIN CÔNG NGHỆ -->

            <div class="technogory">
                <div class="text-tech">
                    <legend>TIN CÔNG NGHỆ</legend>
                </div>
                <div class="info-tech">
                    <div class="info">
                        <img src="./views/imgs/tin1.jpg" alt="">
                        <p>Review laptop ASUS ROG Strix G15: Giảm mạnh 4 triệu, nâng cấp RAM miễn phí!</p>
                    </div>
                    <div class="info">
                        <img src="./views/imgs/tin2.jpg" alt="">
                        <p>Top 5 lý do học sinh sinh viên nên mua laptop gaming Nitro 16 Phoenix, RTX 4050</p>
                    </div>
                    <div class="info">
                        <img src="./views/imgs/tin3.jpg" alt="">
                        <p>Review laptop ASUS Vivobook Go 15: chip AMD Ryzen 7000 mới nhất, giá dưới 14 triệu</p>
                    </div>
                    <div class="info">
                        <img src="./views/imgs/tin4.jpg" alt="">
                        <p>Top 3+ tựa game PC khủng ra mắt trong tháng 11 này</p>
                    </div>
                </div>
            </div>
        </div>