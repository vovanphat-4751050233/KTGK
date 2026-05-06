<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>

<!-- LINK CSS RIÊNG -->
<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="form">
    <h2>Đăng nhập</h2>

    <input type="text" id="username" placeholder="Username">
    <input type="password" id="password" placeholder="Password">

    <button onclick="login()">Đăng nhập</button>

    <p id="msg"></p>
</div>

<script>
function login() {
    var user = document.getElementById("username").value;
    var pass = document.getElementById("password").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onload = function () {
        document.getElementById("msg").innerHTML = this.responseText;
    };

    xhr.send("username=" + user + "&password=" + pass);
}
</script>

</body>
</html>