<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
    }
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
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <center>
            <div class="container" >
                <div class="row justify-content-md-center">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body" style="font-size: x-large;">
                                <head>
                                    <link rel="shortcut icon" href="img/lifestyleStore.png" />
                                    <title>Greeting Shopping System</title>
                                <body>
                                    <p>Thanh toán thành công. Đơn hàng của bạn đã được ghi nhận.</p>
                                    <img src="img/completed.png" alt="completed" width="250"/>
                                </body>
                           </div>
                        </div>

                        <a href="index.php" style="font-size: medium;">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
            </center>   
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
