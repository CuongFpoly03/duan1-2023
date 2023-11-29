<div class="main">
    <!-- BAI all sp -->
    <div class="sanpham">
        <div class="lefts">
            <?php include "leftsp.php" ?>
        </div>

        <div class="rights">
            <div class="top-rights">
                <legend>MÀU SẮC <?= $mausac ?></legend>
            </div>
            <div class="function-rights">
                <button class="button">Xắp xếp theo</button>
                <a href="?act=tangdan" ><button >Giá tăng dần</button></a>
                <a href="?act=giamdan" ><button >Giá giảm dần</button></a>
                <button style="background-color: black; color: white">Sản phẩm mới nhất</button>
                <a href="?act=banchay" ><button>Sản phẩm bán chạy nhất</button></a>
            </div>
            <div class="sp-laptop">
                <?php foreach ($locsanpham as $sp) : ?>
                    <?php extract($sp); ?>  
                    <a href="?act=ctsp&ma_sp=<?= $ma_sp ?>">
                        <div class="sp-one">
                            <img src="./views/imgs/<?= $hinh_sp ?>" alt="" />
                            <div class="text-sp">
                                <legend><?= $ten_sp ?></legend>
                                <p>
                                    Màu sắc: <?= $mausac ?>
                                </p>
                                <span><?= $gia_sp ?>đ</span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>