
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logoc.png" />
        <title>Tiệm bánh ngọt</title>
        <meta charset="UTF-1">
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
        <div style="background-color: white">
           <?php
            require 'header.php';
           ?>
        <div id="bannerImage">
               <div class="container " style ="color:black;">
                   <center>
                       <h1><b>Mục tiêu của chúng tôi </b></h1>
                   </div>
                   </center>
               </div>
               
           <div style="background-color: white;">
                <div class="container" style ="padding-top: 30px">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail" style="padding-top: 20px; background-color: pink">
                            <img src="img/best.png" alt="quality" style="width:55px;height:55px;">
                           <center>
                           <div class="card-body" style="padding: 20px">
                                <h1 class="card-title"><i class="fas fa-shipping-fast"></i></h1>
                                <h2 class="card-title"><b>Chất lượng</b></h2>
                                <p class="card-text">Ưu tiên hàng đầu của chúng tôi là chất lượng sản phẩm mang đến tay bạn.</p>
                            </div>
                           </center>
                       </div>
                   </div>
                <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail" style="padding-top: 20px; background-color: pink">
                            <img src="img/f.png" alt="fresh" style="width:55px;height:55px;">
                           <center>
                           <div class="card-body" style="padding: 20px">
                                <h1 class="card-title"><i class="fas fa-shipping-fast"></i></h1>
                                <h2 class="card-title"><b>Mẫu mã mới lạ</b></h2>
                                <p class="card-text">Chúng tôi luôn cố gắng tạo ra các mẫu mã sản phẩm mới lạ để mang đến tay người tiêu dùng.</p>
                            </div>
                           </center>
                       </div>
                   </div>
                <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail" style="padding-top: 20px; background-color: pink">
                            <img src="img/sp.png" alt="delivery" style="width:60px;height:60px;">
                           <center>
                           <div class="card-body" style="padding: 20px">
                                <h1 class="card-title"><i class="fas fa-shipping-fast"></i></h1>
                                <h2 class="card-title"><b>Giao hàng</b></h2>
                                <p class="card-text">Chúng tôi mang dến dịch vụ giao hàng một cách nhanh chóng khách hàng của mình </p>
                            </div>
                           </center>
                       </div>
                   </div>
</div>  
<div id="bannerImage">
               <div class="container" style="color: black;">
                   <center>
                       <h1><b>Các dòng sản phẩm của shop</b></h1>
                   </div>
                   </center>
               </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/m.png" alt="Mini cakes" >
                           </a>
                           <center>
                                <div class="caption">
                                        <b><p id="autoResize">Bánh Mini</p></b>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/r.png" alt="Red Velvet">
                           </a>
                           <center>
                                <div class="caption">
                                   <b> <p id="autoResize">Bánh Red Velvet</p> </b>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/mo.png" alt="mousse">
                           </a>
                           <center>
                               <div class="caption">
                                   <b> <p id="autoResize">Bánh Mousse</p> </b>
                               </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/ti.png" alt="tiramisu">
                           </a>
                           <center>
                               <div class="caption">
                                   <b> <p id="autoResize">Bánh Tiramisu</p> </b>
                               </div>
                           </center>
                        </div>
                    </div>
                    <div class="col-xs-4">
                                <div class="thumbnail">
                                    <a href="products.php">
                                        <img src="img/thach.png" alt="banh thach">
                                    </a>
                                    <center>
                                        <div class="caption">
                                           <b> <p id="autoResize">Bánh Thạch</p></b>
                                        </div>
                                    </center>
                        </div>
                    </div> 
                    <div class="col-xs-4">
                                <div class="thumbnail">
                                    <a href="products.php">
                                        <img src="img/c.png" alt="cup cake">
                                    </a>
                                    <center>
                                        <div class="caption">
                                            <b><p id="autoResize">Bánh CupCake</p><b/>
                                        </div>
                                    </center>
                        </div>
                    </div>  
                    <div class="col-xs-4">
                                <div class="thumbnail">
                                    <a href="products.php">
                                        <img src="img/mcr.png" alt="macaron cake">
                                    </a>
                                    <center>
                                        <div class="caption">
                                           <b> <p id="autoResize">Bánh Macaron</p> </b>
                                        </div>
                                    </center>
                        </div>
                    </div>
                    <div class="col-xs-4">
                                <div class="thumbnail">
                                    <a href="products.php">
                                        <img src="img/d.png" alt="Donuts">
                                    </a>
                                    <center>
                                        <div class="caption">
                                            <b><p id="autoResize">Bánh Donuts</p></b>
                                        </div>
                                    </center>
                        </div>
                    </div>    
        </div>
    </div>               
            <br><br> <br><br><br><br>
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