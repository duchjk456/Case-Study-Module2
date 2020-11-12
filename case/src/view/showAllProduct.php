<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trang chủ</title>

    <!-- Bootstrap core CSS -->
    <link href="vendora/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>
<style>
    .nav-link :hover{
        color: red;
    }
    body {
        background-color: whitesmoke;
    }
</style>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <form action="index.php?page=search" method="post">
            <input style="border-radius: 5px" type="text" name="search">
            <button style="font-size:12px; background-color: darkred;color: white;border-radius: 5px" class="btn btn-danger">Tìm Sản Phẩm</button>
        </form>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php foreach ($menus as $key => $value): ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?page=menu&id=<?= $value->getId() ?>"><h6><?= $value->getMenuName() ?></h6>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                <?php endforeach; ?>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?page=cart"><h6>Giỏ hàng</h6>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?page=login"><h6>Login</h6>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container"  >

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4"><img src="image/logo.png" alt="logo" style="width: 200px;height: 175px"></h1>
            <div class="list-group">
                <?php foreach ($menuColumn as $key => $value): ?>
                    <strong><a style="text-align: center;background-color: darkred; color: white; border-radius: 30px" href="index.php?page=show&id=<?= $value->getId() ?>" class="btn btn-warning list-group-item"><?= $value->getMenuName() ?></a>
                    </strong>
                <?php endforeach; ?>
            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img style="border-radius: 30px" class="d-block img-fluid" src="image/sk2.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img style="border-radius: 30px" class="d-block img-fluid" src="image/sk1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img style="border-radius: 30px" class="d-block img-fluid" src="image/sk3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row">
                <?php foreach ($products as $key => $item): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="index.php?page=detail&id=<?= $item['id']; ?>"><img class="card-img-top" src="image/<?= $item['image']; ?>.jpg" alt="Hinh anh san pham"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a style="color: darkred" href="index.php?page=detail&id=<?= $item['id']; ?>"><?= $item['productName']; ?></a>
                                </h4>
                                <h5><?= number_format($item['price'], 0, ",", "."); ?> VND</h5>
                                <p class="card-text">Xuất sứ: Nhật Bản</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendora/jquery/jquery.min.js"></script>
    <script src="vendora/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>