<?php
include_once "src/controller/UserController.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lí sản phẩm</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    body {
        background-image: url("image/checkoutbackground.jpg");
        background-repeat: unset;
        background-position: left top;
        background-attachment: fixed;
    }

    .table {
        background-color: white
    }

    a {
        color: white;
    }

    th {
        text-align: center;
    }

    h1 {
        color: white;
        font-family: -apple-system;
        font-size: 50px;
        text-align: center;
    }
</style>
<body>
<h1>
    <button style="font-size: 50px" class="btn btn-info">Danh sách sản phẩm</button>
</h1>
<br>
<div align="center">
    <a class="btn btn-success" href="index.php?page=adminAdd">Thêm sản phẩm</a>
    <form style="display: inline; width: 100px; height: 50px" class="form-inline my-2 my-lg-0" method="post"
          action="index.php?page=adminSearch">
        <input name="search" class="form-control" type="search" placeholder="Tìm kiếm sản phẩm"
               aria-label="Search">
        <button style="background-color: lightskyblue" class="btn btn-success" type="submit">Search</button>
    </form>
    <a class="btn btn-danger" href="index.php?page=menu&id=4">Đăng xuất</a>
</div>
<br>
<table align="center" class="table" style="width: 90%;border-radius: 15px">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th style="width: 300px" scope="col">Tên sản phẩm</th>
        <th scope="col">Giá</th>
        <th scope="col">Ảnh</th>
        <th scope="col">Chức năng</th>
        <th scope="col">Tùy chọn</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $value): ?>
        <tr>
            <td style="text-align: center"><?php echo ++$key; ?></td>
            <td><?php echo $value['productName']; ?></td>
            <td><?php echo number_format($value['price'], 0, ",", "."); ?> VND</td>
            <td style="text-align: center"><img style="width: 150px;height: 200px" src="image/<?php echo $value['image']; ?>.jpg" alt="Hình ảnh sản phẩm"></td>
            <td style="text-align: center"><?php echo $value['belongToMenu'];?></td>
            <td style="text-align: center">
                <a class="btn btn-primary" href="index.php?page=adminUpdate&id=<?php echo $value['id']; ?>">Cập nhật</a>
                <a class="btn btn-warning" onclick="return confirm('Đây là dữ liệu gốc! Bạn thật sự muốn xóa nó?')"
                   href="index.php?page=adminDelete&id=<?php echo $value['id']; ?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>