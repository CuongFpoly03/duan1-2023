<style>
  .buttons {
    border: none;
    background-color: #101037;
    border: 1px solid #101037;
    color: white;
    font-size: 15px;
    border-radius: 4px;
    padding: 1px 0;
    width: 100%;
    text-align: left;
  }

  .small-update {
    font-size: 15px;
    margin: 10px 15px;
    display: block;
  }

  .small-update a {
    color: black;
    text-decoration: none;
    padding: 2px 10px;
  }

  .buttons i {
    float: right;
    margin-right: 5px;
  }

  .small-update a:active {
    background-color: white;
    color: black;
    border: 1px solid black;
  }
</style>


<div class="box-banners">
  <button class="buttons">Laptop theo theo nhu cầu <i class="fa-solid fa-caret-down"></i></button>
  <div class="small-update nc" id="nhucau">
    <?php foreach ($banner as $bn) : ?>
      <?php extract($bn) ?>
      <a href="?act=locnhucau&ma_loai=<?= $ma_loai ?>"><?= $nhu_cau ?></a><br>
    <?php endforeach; ?>
  </div>
</div>
<hr style="border: 2px soldi black" />

<div class="box-banners">
  <button class="buttons">Laptop màu sắc <i class="fa-solid fa-caret-down"></i> </button>
  <div class="small-update kt" id="mausac">
    <?php foreach ($banner as $bn) : ?>
      <?php extract($bn) ?>
      <a href="?act=locmausac&ma_loai=<?= $ma_loai ?>"><?= $mau_sac ?></a> <br>
    <?php endforeach; ?>
  </div>
</div>
<hr style="border: 2px soldi black" />

<div class="box-banners">
  <button class="buttons">Laptop kích thước <i class="fa-solid fa-caret-down"></i></button>
  <div class="small-update kt" id="kichthuoc">
    <?php foreach ($banner as $bn) : ?>
      <?php extract($bn) ?>
      <a href="?act=lockichthuoc&ma_loai=<?= $ma_loai ?>"><?= $kich_thuoc ?>Inch</a>
    <?php endforeach; ?>
  </div>
</div>
<hr style="border: 2px soldi black" />
<div class="box-banner">
  <button class="buttons">Laptop theo Ram <i class="fa-solid fa-caret-down"></i></button>
  <div class="small-update tg">
    <?php foreach ($banner as $bn) : ?>
      <?php extract($bn) ?>
      <a href="?act=locram&ma_loai=<?= $ma_loai ?>"><?= $ram ?> GB </a><br>
    <?php endforeach; ?>
  </div>
</div>