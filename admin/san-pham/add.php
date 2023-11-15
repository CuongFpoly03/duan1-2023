
<style>
    .add {
        margin: 20px 50px;
    }
    .form-label {
        margin-left: 10px;
    }
</style>
<section class="add">
    <legend>Thêm sản phẩm LapTop</legend>
    <form action="" method = "POST" enctype="multipart/form-data">
        <h5 style="color: red"><?= $thongbao ?? "" ?></h5>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Ten_sp:</label>
            <input type="text" class="form-control" name="ten_sp" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Gia_sp:</label>
            <input type="number " class="form-control" name="gia_sp" step="0.5" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Hinh_sp:</label>
            <input type="file" class="form-control" name="hinh_sp">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Mo_ta:</label><br>
            <textarea name="mo_ta" id="" cols="122" rows="2"></textarea>
        </div> <br>

        Tên Loại: <select name="ma_loai" id="" style="width:100%; border-radius: 5px; padding: 5px 10px">
            <option value="0">Chọn loại</option>
            <?php foreach($loai as $lo) :?>
                <option value="<?= $lo['ma_loai'] ?>"> <?= $lo['ten_loai'] ?></option>
            <?php endforeach;?>
        </select> <br>
        Nhu Cầu: <select name="ma_loai" id=""  style="width:100%; border-radius: 5px; padding: 5px 10px; margin: 20px 0">
            <option value="0">Chọn nhu cầu</option>
            <?php foreach($loai as $lo) :?>
                <option value="<?= $lo['ma_loai'] ?>"> <?= $lo['nhu_cau'] ?></option>
            <?php endforeach;?>
        </select> <br>
        Màu Sắc: <select name="ma_loai" id=""  style="width:100%; border-radius: 5px; padding: 5px 10px">
            <option value="0">Chọn màu sắc</option>
            <?php foreach($loai as $lo) :?>
                <option value="<?= $lo['ma_loai'] ?>"> <?= $lo['mau_sac'] ?></option>
            <?php endforeach;?>
        </select> <br>
        Kích Thước: <select name="ma_loai" id=""  style="width:100%; border-radius: 5px; padding: 5px 10px; margin: 20px 0">
            <option value="0">Chọn kích thước</option>
            <?php foreach($loai as $lo) :?>
                <option value="<?= $lo['ma_loai'] ?>"> <?= $lo['kich_thuoc'] ?></option>
            <?php endforeach;?>
        </select> <br>
        <button name="themmoi" class="btn btn-outline-success">Thêm mới</button>
        <a href="?act=sanpham"><button type="button" class="btn btn-outline-primary">Danh sách</button></a>
    </form>
</section>