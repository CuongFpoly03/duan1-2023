//ddonhang
function isValidEmail(email) {
  var re = /\S+@\S+\.\S+/;
  return re.test(email);
}
function donhangForm() {
  var ten_kh = document.getElementById("ten_kh").value.trim();
  var dien_thoai = document.getElementById("dien_thoai").value.trim();
  var dien_thoais = document.getElementById("dien_thoais").value.trim();
  var email = document.getElementById("email").value.trim();
  var ten_khs = document.getElementById("ten_khs").value.trim();
  var dia_chi = document.getElementById("dia_chi").value.trim();
  var ten_khErr = document.getElementById("ten_khErr");
  var dien_thoaiErr = document.getElementById("dien_thoaiErr");
  var dien_thoaiErrs = document.getElementById("dien_thoaiErrs");
  var dia_chiErr = document.getElementById("dia_chiErr");
  var emailErr = document.getElementById("emailErr");
  var ten_khErrs = document.getElementById("ten_khErrs");

  var regex_phone  = /((09|03|07|08|05)+([0-9]{8})\b)/g;
  var regex_phones  = /((09|03|07|08|05)+([0-9]{8})\b)/g;
  //trường tên khách hàng
  if (ten_kh === "") {
    ten_khErr.innerText = "Vui lòng nhập ho ten!";
    return;
  } else {
    ten_khErr.innerText = "";
  }
  if (ten_kh.length < 8) {
    ten_khErr.innerText = "Nhập hơn 8 ký tự !";
    return;
  } else {
    ten_khErr.innerText = "";
  }
  //trường email
  if (email === "") {
    emailErr.innerText = "vui lòng k để trống email !";
    return;
  } else {
    emailErr.innerText = "";
  }
  if (!isValidEmail(email)) {
    emailErr.innerHTML = "Email k hợp lệ !";
    return;
  } else {
    emailErr.innerText = "";
  }

  //trường số điện thoại
  if (dien_thoai === "" ) {
    dien_thoaiErr.innerText = "vui lòng nhập số đt!";
    return;
  }else {
    dien_thoaiErr.innerText ="";
  }

  if (dien_thoai !== "") {
    if(regex_phone.test(dien_thoai) == false){
        dien_thoaiErr.innerText = "vui lòng nhập đúng định dạng!";
        return;
    } else {
      dien_thoaiErr.innerText = "";
    }
  }

   //trường đia chi
   if (dia_chi === "") {
    dia_chiErr.innerText = "Vui lòng nhập địa chỉ!";
    return;
  } else {
    ten_khErr.innerText = "";
  }

   //trường tenkh
   if (ten_khs === "") {
    ten_khErrs.innerText = "Vui lòng nhập ho ten!";
    return;
  } else {
    ten_khErrs.innerText = "";
  }
  if (ten_khs.length < 8) {
    ten_khErrs.innerText = "Nhập hơn 8 ký tự !";
    return;
  } else {
    ten_khErrs.innerText = "";
  }

  // trường điẹn thOẠI
  if (dien_thoais === "" ) {
    dien_thoaiErrs.innerText = "vui lòng nhập số đt!";
    return;
  }else {
    dien_thoaiErrs.innerText ="";
  }

  if (dien_thoais !== "") {
    if(regex_phones.test(dien_thoais) == false){
        dien_thoaiErrs.innerText = "vui lòng nhập đúng định dạng!";
        return;
    } else {
      dien_thoaiErrs.innerText = "";
    }
  }
  document.getElementById("formdonhang").submit();
}
