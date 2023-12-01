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
     
    <div style="background-color:white;">
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container" style="color:black">
                   <center>
                   <img src="img/logo.png" alt="quality">
                       <h1><b>Yêu thương trong từng lớp kem</b></h1>
                       <h4>"Tặng đi yêu thương, nhận lại niềm vui"</h4><br/>
                        <a href="view.php" class="btn btn-lg" style="background-color:pink; color: black"><b>Khám phá ngay</b> </a>
                   </div>
                   </center>
               </div>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <h6> All Rights </h6>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
               