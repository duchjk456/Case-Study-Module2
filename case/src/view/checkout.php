<?php session_start();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background-image: url("image/checkoutbackground.jpg");
        height: 100vh;
    }
    #login .container #login-row #login-column #login-box {
        margin-top: 120px;
        max-width: 600px;
        height: 400px;
        border: 1px solid #9C9C9C;
        background-color: darkred;
        border-radius: 20px;
    }
    #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
    }
    #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
    }
</style>
<body>

<!------ Include the above in your HEAD tag ---------->
<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="index.php?page=send" method="post">
                        <h2 class="text-center text-info"><span style="color: white">Thông tin khách hàng</span></h2>
                        <div class="form-group">
                            <label for="customer" class="text-info"><span style="color: white">Tên khách hàng</span></label><br>
                            <input type="text" name="name" id="customer_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="customer_address" class="text-info"><span style="color: white">Địa chỉ</span></label><br>
                            <input type="text" name="address" id="customer_address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="customer_phone" class="text-info"><span style="color: white">Số điện thoại</span></label><br>
                            <input type="text" name="phone" id="customer_phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <p style="text-align: center"><span><button class="btn btn-success"> Gửi </button></span>
                                <span><a class="btn btn-success" href="index.php?page=menu&id=4">Quay lại trang chủ</a></span></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</body>
</html>
