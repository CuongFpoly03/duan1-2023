//login
function validateForm() {
  var username = document.getElementById("usernameInput").value.trim();
  var password = document.getElementById("passwordInput").value.trim();
  var usernameError = document.getElementById("usernameError");
  var passwordError = document.getElementById("passwordError");

  if (username === "") {
    usernameError.innerText = "Vui lòng nhập Tên khách hàng";
    return;
  } else {
    usernameError.innerText = "";
  }

  // Kiểm tra trường Mật khẩu
  if (password === "") {
    passwordError.innerText = "Vui lòng nhập Mật khẩu";
    return;
  } else {
    passwordError.innerText = "";
  }

  document.getElementById("loginForm").submit();
}
//logup
function isValidEmail(email) {
  var re = /\S+@\S+\.\S+/;
  return re.test(email);
}
function validateForm2() {
  var username = document.getElementById("usernameInput").value.trim();
  var email = document.getElementById("emailInput").value.trim();
  var password = document.getElementById("passwordInput").value.trim();
  var usernameError = document.getElementById("usernameError");
  var emailError = document.getElementById("emailError");
  var passwordError = document.getElementById("passwordError");
  if (username === "") {
    usernameError.innerText = "Vui lòng nhập Tên Người Dùng";
    return;
  } else {
    usernameError.innerText = "";
  }
  if (username.length < 8) {
    usernameError.innerText = "Tên khách hàng cần ít nhất 8 ký tự";
    return;
  } else {
    usernameError.innerText = "";
  }

  // Kiểm tra trường eamil
  if (email === "") {
    emailError.innerText = "Vui lòng nhập email";
    return;
  } else {
    emailError.innerText = "";
  }
  if (!isValidEmail(email)) {
    emailError.innerText = "Email không hợp lệ";
    return;
  } else {
    emailError.innerText = "";
  }
  // Kiểm tra trường Mật khẩu
  if (password === "") {
    passwordError.innerText = "Vui lòng nhập Mật khẩu";
    return;
  } else {
    passwordError.innerText = "";
  }
  if (password.length < 8) {
    passwordError.innerText = "Mật khẩu cần ít nhất 8 ký tự";
    return;
  } else {
    passwordError.innerText = "";
  }

  document.getElementById("logupForm").submit();
}

function validateForm3(){
  var email = document.getElementById("emailInput").value.trim();
  var emailError = document.getElementById("emailError");
  
  // Kiểm tra trường eamil
  if (email === "") {
    emailError.innerText = "Vui lòng nhập email";
    return;
  } else {
    emailError.innerText = "";
  }
  if (!isValidEmail(email)) {
    emailError.innerText = "Email không hợp lệ";
    return;
  } else {
    emailError.innerText = "";
  }
  document.getElementById("quenmkForm").submit();
}
