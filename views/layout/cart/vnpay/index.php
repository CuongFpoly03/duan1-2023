<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tạo mới đơn hàng</title>
    <!-- Bootstrap core CSS -->
    <link href="/vnpay_php/assets/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/vnpay_php/assets/jumbotron-narrow.css" rel="stylesheet">
    <script src="/vnpay_php/assets/jquery-1.11.3.min.js"></script>
</head>

<body>
    <?php require_once("./views/layout/cart/vnpay/config.php"); ?>
    <div class="container">
        <h3>Thông tin thanh toán</h3>
        <div class="table-responsive">
            <form action="./views/layout/cart/vnpay/vnpay_create_payment.php" id="frmCreateOrder" method="post">
                <div class="form-group">
                    <label for="amount">Họ tên</label>
                    <input class="form-control" name="username" type="text" value="Le Phu Cuong" />
                </div>
                <div class="form-group">
                    <label for="amount">Email</label>
                    <input class="form-control"  name="email" type="email" value="cuonglephu@gmail.com" />
                </div>
                <div class="form-group">
                    <label for="amount">Số điện thoại</label>
                    <input class="form-control"  name="email" type="number" value="0981477744" />
                </div>
                <div class="form-group">
                    <label for="amount">Địa chỉ</label>
                    <input class="form-control" name="address" type="text" value="Thanh Hoá" />
                </div>
                <h4>Thông tin đơn hàng</h4>
                <div class="form-group">
                    <label for="amount">Mã đơn hàng</label>
                    <input class="form-control" name="address" type="text" value="312" />
                </div>
                <div class="form-group">
                    <label for="amount">Tên dơn hàng</label>
                    <input class="form-control" name="address" type="text" value="Laptop" />
                </div>
                <div class="form-group">
                    <label for="amount">Số tiền</label>
                    <input class="form-control" data-val="true" data-val-number="The field Amount must be a number." data-val-required="The Amount field is required." id="amount" max="100000000" min="1" name="amount" type="number" value="10000" />
                </div>
                <div class="form-group">
                    <label for="amount">Người nhận</label>
                    <input class="form-control" name="address" type="text" value="Le hoa ha" />
                </div>
                <div class="form-group">
                    <label for="amount">Địa chỉ</label>
                    <input class="form-control" name="address" type="text" value="65, Hoaan, Dongthinh, Ngheam" />
                </div>
                <div class="form-group">
                    <label for="amount">Số điện thoại</label>
                    <input class="form-control" name="address" type="text" value="098765234" />
                </div>

                <h4>Chọn phương thức thanh toán</h4>
                <div class="form-group">
                    <input type="radio" id="bankCode" name="bankCode" value="VNPAYQR">
                    <label for="bankCode">Thanh toán bằng ứng dụng hỗ trợ VNPAYQR</label><br>

                    <input type="radio" id="bankCode" name="bankCode" value="VNBANK">
                    <label for="bankCode">Thanh toán qua thẻ ATM/Tài khoản nội địa</label><br>

                    <input type="radio" id="bankCode" name="bankCode" value="INTCARD">
                    <label for="bankCode">Thanh toán qua thẻ quốc tế</label><br>

                </div>
                <div class="form-group">
                    <h5>Chọn ngôn ngữ giao diện thanh toán:</h5>
                    <input type="radio" id="language" Checked="True" name="language" value="vn">
                    <label for="language">Tiếng việt</label><br>
                    <input type="radio" id="language" name="language" value="en">
                    <label for="language">Tiếng anh</label><br>

                </div>
                <button type="submit" class="btn btn-primary">Thanh toán</button>   
            </form>
        </div>
        <p>
            &nbsp;
        </p>
    </div>
</body>

</html>