<div class="top-rights">
  <legend>LAPTOP - MÁY TÍNH SÁCH TAY</legend>
</div>
<div class="function-rights">
  <button class="button">Xắp xếp theo</button>
  <a href="?act=tangdan"><button>Giá tăng dần</button></a>
  <a href="?act=giamdan"><button >Giá giảm dần</button></a>
  <button style="background-color: black; color: white">Sản phẩm mới nhất</button>
  <a href="?act=banchay"><button>Sản phẩm bán chạy nhất</button></a>
</div>
<div class="sp-laptop">
  <?php foreach ($sanpham as $sp) : ?>
    <?php extract($sp); ?>
    <a href="?act=ctsp&ma_sp=<?= $ma_sp ?>">
      <div class="sp-one">
        <img src="./views/imgs/<?= $hinh_sp ?>" alt="" />
        <div class="text-sp">
          <legend><?= $ten_sp ?></legend>
          <p>
            <?= $ten_loai ?>
          </p>
          <span><?= $gia_sp ?>đ</span>
        </div>
      </div>
    </a>
  <?php endforeach; ?>
  <!-- <div class="sp-one">
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