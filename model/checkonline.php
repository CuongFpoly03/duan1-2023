<?php 
// tesst
    // function check(){
    //     if(isset($_GET['partnerCode'])){
    //         $data_momo = [
    //             'partnerCode' => $_GET['partnarCode'],
    //             'orderId' => $_GET['orderId'],
    //             'requestId' => $_GET['requestId'],
    //             'amount' => $_GET['amount'],
    //             'orderInfo' => $_GET['orderInfo'],
    //             'orderType' => $_GET['orderType'],
    //             'transId' => $_GET['transId'],
    //             'payType' => $_GET['payType'],
    //             'signature' => $_GET['signature'],
                
    //         ];
    //         return pdo_execute($data_momo);
    //     }elseif (isset($_GET['vnp_Amount'])){
    //         $data_vnpay = [
    //             'vnp_Amount' => $_GET['vnp_Amount'],
    //             'vnp_BankCode' => $_GET['vnp_BankCode'],
    //             'vnp_BankTranNo' => $_GET['revnp_BankTranNoquestId'],
    //             'vnp_CardType' => $_GET['vnp_CardType'],
    //             'vnp_OrderInfo' => $_GET['vnp_OrderInfo'],
    //             'vnp_PayDate' => $_GET['vnp_PayDate'],
    //             'vnp_ResponseCode' => $_GET['vnp_ResponseCode'],
    //             'vnp_TmnCode' => $_GET['vnp_TmnCode'],
    //             'vnp_TransactionNo' => $_GET['vnp_TransactionNo'],
    //             'vnp_TransactionStatus' => $_GET['vnp_TransactionStatus'],
    //             'vnp_TxnRef' => $_GET['vnp_TxnRef'],
    //             'vnp_SecureHash' => $_GET['vnp_SecureHash'],
    //         ];
    //         return pdo_execute($data_vnpay);
    //     }
    // }

    function insert_data($vnp_Amount, $vnp_BankCode, $vnp_BankTranNo, $vnp_CardType, $vnp_OrderInfo, $vnp_PayDate, $vnp_ResponseCode, $vnp_TmnCode, $vnp_TransactionNo, $vnp_TransactionStatus, $vnp_TxnRef, $vnp_SecureHash){
        $sql = "INSERT INTO vnpay(vnp_Amount, vnp_BankCode, vnp_BankTranNo, vnp_CardType, vnp_OrderInfo, vnp_PayDate, vnp_ResponseCode, vnp_TmnCode, vnp_TransactionNo, vnp_TransactionStatus, vnp_TxnRef, vnp_SecureHash)
        VALUES ('$vnp_Amount', '$vnp_BankCode', '$vnp_BankTranNo', '$vnp_CardType', '$vnp_OrderInfo', '$vnp_PayDate', '$vnp_ResponseCode', '$vnp_TmnCode', '$vnp_TransactionNo', '$vnp_TransactionStatus', '$vnp_TxnRef', '$vnp_SecureHash')
        ";
        return pdo_execute($sql);
    }
    // vnp_Amount=1000000
    // &vnp_BankCode=NCB
    // &vnp_BankTranNo=VNP14227268
    // &vnp_CardType=ATM
    // &vnp_OrderInfo=Thanh+toan+GD%3A3700
    // &vnp_PayDate=20231208004542
    // &vnp_ResponseCode=00
    // &vnp_TmnCode=INOSI7TE
    // &vnp_TransactionNo=14227268
    // &vnp_TransactionStatus=00
    // &vnp_TxnRef=3700
    // &vnp_SecureHash=5db5e58dfd4ec0d8457b710192c3bc281e68fd6ba80cca1e49ae3570799875499caf444d38caaf1a6510e033dce88d1c037708f8f903868b1cd6202e7c9015af
?>
