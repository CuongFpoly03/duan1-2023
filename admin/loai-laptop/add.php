
<style>
    .add {
        margin: 20px 50px;
    }
    .form-label {
        margin-left: 10px;
    }
</style>
<section class="add">
    <legend>Thêm loại LapTop</legend>
    <form action="" method = "POST">
    <h5 style="color: red"><?= $thongbao ?? "" ?></h5>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Tên Loại:</label>
            <input type="text" class="form-control" name="ten_loai" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nhu Cầu:</label>
            <input type="text" class="form-control" name="nhu_cau" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Màu Sắc:</label>
            <input type="text" class="form-control" name="mau_sac" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Kích Thước:</label>
            <input type="text" class="form-control" name="kich_thuoc" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Lượt Xem:</label>
            <input type="text" class="form-control" name="luot_xem" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Trạng thái:</label>
            <input type="checkbox"  name="trang_thai" value="1" checked>
        </div>
        <button name="themmoi" class="btn btn-outline-success">Thêm mới</button>
        <a href="?act=loai"><button type="button" class="btn btn-outline-primary">Danh sách</button></a>
    </form>
</section>