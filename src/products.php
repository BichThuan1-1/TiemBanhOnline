<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logoc.png" />
        <title>Tiệm bánh ngọt</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div style="background-color: white;">
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron" style="background-color: white";>
                    <h1>Các Sản Phẩm Của Chúng Tôi</h1>
                    <p>Bánh của chúng tớ luôn được làm mới mỗi ngày đảm bảo chất lượng và không chưa chất bảo quản gây hại</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Mix 1.jpg" alt="Mix Fruit"style="height: 350px">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><b>Bánh Berry Burst</b></h3>
                                    <p>Giá : 450.000 VND</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-block" style="background-color:pink" >Mua Ngay
                                        </a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Đã Thêm Vào Giỏ </a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block" name="add" value="add" class="btn btn-block" style="background-color:pink">Thêm Vào Giỏ</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Mix 2.jpg" alt="Mix Fruit" style="height:350px">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><b>Bánh Berry Vanila</b></h3>
                                    <p>Giá: 460.000 VNĐ</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-block" style="background-color:pink"> Mua Ngay </a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled> Đã Thêm Vào Giỏ </a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block" name="add" value="add" class="btn btn-block" style="background-color:pink">Thêm vào giỏ</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Mix 4.jpg" alt="Mix Fruit" style="height: 350px ">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><b>Bánh Rose Berry</h3>
                                    <p>Giá: 500.000 VNĐ</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-block" style="background-color:pink">Mua Ngay</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Đã thêm vào giỏ</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block " name="add" value="add" class="btn btn-block" style="background-color:pink">Thêm Vào Giỏ</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Mix 3.jpg" alt="Fruit Cake" style="height:350px">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><b>Bánh Blue Berry</b></h3>
                                    <p>Giá: 550.000 VNĐ</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-block" style="background-color:pink">Mua Ngay</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled> Đã thêm vào giỏ </a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block " name="add" value="add" class="btn btn-block" style="background-color:pink">thêm vào giỏ</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Red 1.jpg" alt="Red Velvet" style="height:350px">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><b>Bánh Strawberry Red Velvet</b></h3>
                                    <p>Giá: 500.000 VNĐ</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-block" style="background-color:pink">Mua Ngay</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Đã thêm vào giỏ</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block " name="add" value="add" class="btn btn-block" style="background-color:pink">Thêm vào giỏ</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Red 2.jpg" alt="Red Velvet" style="height:350px">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><b>Bánh Mini Candy Crush</b></h3>
                                    <p>Giá: 100.000 VNĐ</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-block" style="background-color:pink">Mua Ngay</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Đã thêm vào giỏ</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block" name="add" value="add" class="btn btn-block" style="background-color:pink">Thêm vào giỏ</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Red 3.jpg" alt="Red Velvet" style="height: 350px">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><b>Bánh Rượu Vang Đỏ</b></h3>
                                    <p>Giá: 700.000 VNĐ</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-block">Mua Ngay</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Đã Thêm Vào Giỏ</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block" name="add" value="add" class="btn btn-block" style="background-color:pink">Thêm vào giỏ</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Red Velvet.jpg" alt="red velvet" style="height: 350px">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Bánh Promo Red </h3>
                                    <p>Giá: 800.000 VNĐ</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-block">Mua Ngay</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Đã Thêm Vào Giỏ</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block " name="add" value="add" class="btn btn-block" style="background-color:pink">Thêm vào giỏ</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/Truffle tarle.jpg" alt="Truffle tarle" style="height: 350px">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Bánh Truffle  Socola</h3>
                                    <p>Giá: 500.000 VNĐ</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-block" style="background-color:pink">Mua Ngay</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Đã Thêm Vào Giỏ</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block"  name="add" value="add" class="btn btn-block" style="background-color:pink">Thêm Vào Giỏ</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/truffel 1.jpeg" alt="truffle tarle" style="height: 350px">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><b>Bánh Cerry Truffle</b></h3>
                                    <p>Giá: 400.000 VNĐ</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-block" style="background-color:pink">Mua Ngay</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Đã Thêm Vào Giỏ</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block " name="add" value="add" class="btn btn-block" style="background-color:pink">Thêm Vào Giỏ</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/truffel 2.jpeg" alt="truffle tarle" style="height: 350px">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><b>Bánh Lichi Truffle</b></h3>
                                    <p>Giá: 440.000 VNĐ</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-block">Mua Ngay</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Đã thêm vào giỏ</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block " name="add" value="add" class="btn btn-block" style="background-color:pink">Thêm vào giỏ</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/truffle 3.jpeg" alt="truffel tarle" style="height: 350px">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><b>Bánh Cherri Mausse </b></h3>
                                    <p>Giá: 500.000 VNĐ</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-block" style="background-color:pink">Mua Ngay</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Đã Thêm Vào Giỏ</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block " name="add" value="add" class="btn btn-block" style="background-color:pink">Thêm Vào Giỏ</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>

            </div>
            </div>
            </div>
            </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <h6>All Rights Reserved.</h6>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
