<?php session_start();
$products=!empty($_SESSION['cart'])?$_SESSION['cart']:[];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giỏ hàng</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="https://use.fontawesome.com/c560c025cf.js"></script>
</head>
<style>


    .quantity {
        float: left;
        margin-right: 15px;
        background-color: #eee;
        position: relative;
        width: 80px;
        overflow: hidden
    }

    .quantity input {
        margin: 0;
        text-align: center;
        width: 15px;
        height: 15px;
        padding: 0;
        float: right;
        color: #000;
        font-size: 20px;
        border: 0;
        outline: 0;
        background-color: #F6F6F6
    }

    .quantity input.qty {
        position: relative;
        border: 0;
        width: 100%;
        height: 40px;
        padding: 10px 25px 10px 10px;
        text-align: center;
        font-weight: 400;
        font-size: 15px;
        border-radius: 0;
        background-clip: padding-box
    }

    .quantity .minus, .quantity .plus {
        line-height: 0;
        background-clip: padding-box;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
        -webkit-background-size: 6px 30px;
        -moz-background-size: 6px 30px;
        color: #bbb;
        font-size: 20px;
        position: absolute;
        height: 50%;
        border: 0;
        right: 0;
        padding: 0;
        width: 25px;
        z-index: 3
    }

    .quantity .minus:hover, .quantity .plus:hover {
        background-color: #dad8da
    }

    .quantity .minus {
        bottom: 0
    }
    .shopping-cart {
        margin-top: 20px;
    }
</style>
<body>

<div class="container">
    <div class="card shopping-cart">
        <div class="card-header bg-dark text-light">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Shopping cart
            <a href="index.php?page=menu&id=4" class="btn btn-outline-info btn-sm pull-right">Continue Shopping</a>
            <div class="clearfix"></div>
        </div>
        <div class="card-body">
            <!-- PRODUCT -->
            <div class="row">

                <?php
                echo $display;
                if ($products==null && $display==null){
                    echo "<h2>Giỏ hàng rỗng!</h2>";
                }
                $total= 0;
                foreach ($products as $item):
                    ?>
                <div class="col-12 col-sm-12 col-md-2 text-center">
                    <img style="height: 200px;width: 153px" src="image/<?= $item['image']?>.jpg" alt="prewiew" width="120" height="80">
                </div>
                <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                    <h4 class="product-name"><strong><?= $item['name'] ?></strong></h4>
                </div>
                <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                    <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                        <h6><strong><?= number_format($item['price'],0,",",".")?> VND<span class="text-muted"> x </span></strong></h6>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                        <div class="quantity">
                            <form action="index.php?page=cart&action=update&id=<?=$item['id']?>" method="post">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="id" value="<?=$item['id']?>">
                                <input name="quantity" type="number" step="1" max="99" min="1" value="<?=$item['quantity']?>" title="Qty" class="qty"
                                       size="7">
                                <button class="btn btn-success">Cập nhật</button>
                            </form>

                        </div>

                    </div>
                    <div class="col-2 col-sm-2 col-md-2 text-right">
                        <form action="index.php?page=cart&action=delete&id=<?=$item['id']?>" method="post">
                            <button class="btn btn-outline-danger btn-xs">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <?php
                $total+=$item['quantity']*$item['price'];
                endforeach; ?>
            </div>
            <hr>
            <!-- END PRODUCT -->
            <!-- PRODUCT -->

            <!-- END PRODUCT -->
            <div class="pull-right">
                <a href="index.php?page=cart&action=clear" class="btn btn-outline-secondary pull-right">Clear All
                </a>
            </div>
        </div>
        <div class="card-footer">
            <div class="pull-right" style="margin: 10px">
                <a href="index.php?page=check_out" class="btn btn-success pull-right">Checkout</a>
                <div class="pull-right" style="margin: 5px">
                    Total price: <b><?= number_format($total,0,",",".")?> VND</b>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>




