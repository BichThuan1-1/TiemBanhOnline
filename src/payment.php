<?php
include("connection.php");
    $user_id=$_GET['id'];
    $user_total=$_GET['total'];      

?>
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


        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    </head>
<body>
     
    <div style="background-color: White;">
           <?php
            require 'header.php';
           ?>
           <div id="">
               <div class="">
                   <center>
                   <img src="img/logo.png" hight=, width=250 alt="quality">
                </div>
            </center>
          </div>
  <body style="background-color: white;font-size: x-large;">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-md-4 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Chi tiết thanh toán
                    </h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                      <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">Tên chủ thẻ</label>
                                    <input type="text" class="form-control" name="couponCode" />
                                </div>
                            </div>                        
                        </div>
                      
                    <div class="form-group">
                        <label for="cardNumber"> Số thẻ </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Số thẻ hợp lệ" required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">Ngày Hết Hạn</label>
                                <div class="col-xs-12 col-lg-12">
                                  <div class="col-xs-6 col-lg-6 ">
                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 ">
                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required />
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode"> Mã CV</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active" ><a href="#"><span class="badge pull-right"><span class="glyphicon"></span><?php echo $user_total?>.000 VNĐ</span>Tổng thanh toán </a>
                </li>
                <li><a href="success.php?id=<?php echo $user_id?>"><button type="submit" class="btn btn-lg btn-block" role="button">Thanh Toán</a> </li>
            </ul>
            <br/>
        </div>
    </div>
</div>

    <footer class="footer"> 
               <div class="container">
               <center>
                   <h6> All Rights </h6>
               </center>
               </div>
           </footer>
  </body>
</html>
