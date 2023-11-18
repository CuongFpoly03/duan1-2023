<div class="all-category">
  <p>Thương hiệu<i class="fa-solid fa-caret-down"></i></p>
  <div class="function-lap" id="displays">
    <div class="displays">
      <input type="checkbox" checked />Tất cả <br>
      <?php foreach ($banner as $ldm) : ?>
        <?php extract($ldm) ?>
        <input type="checkbox" /><?= $ten_loai ?>
      <?php endforeach; ?>
    </div>
    <!-- <div class="displays">
            <input type="checkbox" />Dell <input type="checkbox" />HP
          </div> -->
  </div>
  <hr style="border: 2px soldi black" />
</div>
<div class="navbar-nhucau" id="displays">
  <p>Nhu cầu<i class="fa-solid fa-caret-down"></i></p>
  <div class="displays">
    <input type="checkbox" checked />Tất cả <br>
    <?php foreach ($banner as $ldm) : ?>
      <?php extract($ldm) ?>
      <input type="checkbox" /><?= $nhu_cau ?> <br>
    <?php endforeach; ?>
    <!-- <input type="checkbox" />Sinh viên <br />
          <input type="checkbox" />Đồ họa <br />
          <input type="checkbox" />Văn phòng <br />
          <input type="checkbox" />Mỏng nhẹ<br />
          <input type="checkbox" />Gaming<br /> -->
  </div>
  <hr style="border: 2px soldi black" />
</div>
<div class="all-category">
  <p>Màu sắc<i class="fa-solid fa-caret-down"></i></p>
  <div class="function-lap" id="displays">
    <div class="displays">
      <input type="checkbox" checked />Tất cả <br>
      <?php foreach ($banner as $ldm) : ?>
        <?php extract($ldm) ?>
        <input type="checkbox" /> Màu <?= $mau_sac ?> <br>
      <?php endforeach; ?>
    </div>
    <!-- <div class="displays">
      <input type="checkbox" />Vàng <input type="checkbox" />Trắng
    </div> -->
  </div>
  <hr style="border: 2px soldi black" />
</div>
<div class="all-category" id="displays">
  <p>Kích thước<i class="fa-solid fa-caret-down"></i></p>
  <div class="function-lap">
    <div class="displays">
    <input type="checkbox" checked />Tất cả <br>
      <?php foreach ($banner as $ldm) : ?>
        <?php extract($ldm) ?>
        <input type="checkbox" /><?= $kich_thuoc ?> Inch <br>
      <?php endforeach; ?>
    </div>
    <!-- <div class="displays">
      <input type="checkbox" />16 <input type="checkbox" />16,2
    </div> -->
  </div>
  <hr style="border: 2px soldi black" />
</div>
<div class="all-category" id="displays">
  <p>Ram<i class="fa-solid fa-caret-down"></i></p>
  <div class="function-lap">
    <div class="displays">
    <input type="checkbox" checked />Tất cả <br>
      <?php foreach ($banner as $ldm) : ?>
        <?php extract($ldm) ?>
        <input type="checkbox" /><?= $ram ?> GB <br>
      <?php endforeach; ?>
    </div>
    <!-- <div class="displays">
      <input type="checkbox" />16 <input type="checkbox" />16,2
    </div> -->
  </div>
</div>