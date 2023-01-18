<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon"  href="img/sawit.jpg">
    <title>PT. Jaya Makmur</title>
    <style type="text/css">
        
        a{
            text-decoration: none;
            font-size: 25px;
            color:green;
        }

        body{
            background-image: url(img/pabriku.jpg);

        }
        a:hover{
            color: black;
        }
        table{
            color: white;
            background-color: rgb(112,130,56);
            text-align: center;
        }

        table:hover{
            color: white;
        }
h1{
    text-align: center;
    font-style: italic;
    font-family: serif;
}
.nav{
    background-color:white;
}

img{
    border-radius: 100px;
    width: 200px;
    height: 200px;
}


    </style>
  
  <body>
    <h1>Welcome To <br>
      <marquee> <b style="color:green"> PT. Jaya Makmur</b></marquee>
    </h1>
    <hr>
    <div class="nav">
    <a href="index.php">HOME</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page1')); ?>">ABOUT</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page2')); ?>">CONTACK</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page3')); ?>">HISTORY</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page4')); ?>">LOCATION</a> |
    <hr>
    </div>
    <?php 
    
    if (isset($_GET['page'])) :  
        $page= base64_decode(base64_decode(filter_var($_GET['page'],FILTER_SANITIZE_URL)));
        $a= include "halaman/".$page.".php";
        if ($a==false):
          header('location:index.php');
        endif;
        ?>
 <?php else: ?>

      <center><h1>PT Jaya Makmur</h1> <br>
<img src="img/logo.jpeg">          
      </center>
<?php endif; ?>
    
  </body>
</html>

<!--php://filter/convert.base64-encode/resource= ->
