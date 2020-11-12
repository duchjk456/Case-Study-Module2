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
    <title>Cập nhật sản phẩm</title>
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


</style>
<body>
<h3 style="font-size: 40px;text-align: center;background-color:grey" >Cập nhật sản phẩm</h3>
<br>
<br>
<?php foreach ($product as $value): ?>
<form action="index.php?page=adminUpdate&id=<?= $value['id'] ?>" method="post">
    <table align="center" class="table" style="width: 50%;border-radius: 15px;">

        <tr>
            <td style="text-align: right"><h4>Tên sản phẩm:</h4></td>
            <td ><input type="text" name="name" value="<?= $value['productName'] ?>"></td>
        </tr>
        <tr>
            <td style="text-align: right"><h4>Giá:</h4></td>
            <td ><input type="number" name="price" value="<?= $value['price'] ?>"></td>
        </tr>
        <tr>
            <td style="text-align: right"><h4>Ảnh:</h4></td>
            <td ><input type="text" name="image" value="<?= $value['image'] ?>"></td>
        </tr>
        <tr>
            <td style="text-align: right"><h4>Nội dung:</h4>
            </td>
            <td ><textarea name="content" rows="5" ><?= $value['content'] ?></textarea></td>
        </tr>
        <tr>
            <td style="text-align: right"><h4>Dòng sản phẩm:</h4></td>
            <td ><select name="menu"  >
                    <option value="<?= $value['belongToMenu'] ?>">-------</option>
                    <option value="1">Sữa Rửa mặt</option>
                    <option value="2">Tẩy da chết</option>
                    <option value="3">Nước hoa hồng</option>
                    <option value="4">Serum</option>
                    <option value="5">Kem dưỡng</option>
                    <option value="6">Mặt nạ</option>
                    <option value="7">Máy rửa mặt</option>
                    <option value="8">kem trị mụn</option>
                </select></td>
        </tr>
        <tr><td style="text-align: right">
                <button class="btn btn-success">Update</button>
            </td>
            <td>
                <button onclick="return confirm('Bạn chắc chứ? Dữ liệu ở trang này sẽ không được lưu lại!')" class="btn btn-warning">Cancel</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</form>

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
