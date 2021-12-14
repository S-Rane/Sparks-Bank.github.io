<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
    <style>
        .nav-link:hover {
            text-decoration: underline;
            background-color: lightblue;
        }
    </style>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid" style="background-position: cover;">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" style="position: center;">
                  <h3>Welcome to</h3>
                  <h1>SPARKS BANK</h1>
                </div>
              </div>
              <div class="slider"></div>
              <style type="text/css">
                body{
  margin: 0;
  padding: 0;
  height: 100%;
  width: 100%;
}
.slider
{
  width: 300px;
  height: 600px;
  background-image: url(img/sb.png);
  background-size: cover;
  box-sizing: border-box;
  padding-right: 1000px;
  padding-left: 600px;
}
@keyframes slide
{
  25%{
    background-image: url(img/bank.png);
    background-size: cover;
     }
  50%{
    background-image: url(img/transfer money.png);
    background-size: cover;
     }
  75%{
    background-image: url(img/sb.png);
    background-size: cover;
     }
}
              </style>
              <!--<div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-2">
              </div>-->
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <br>
                    <img src="img/money-transfer-wallet.jpg" class="img-fluid" style="height: 200px; width: 200px;">
                    <br><br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2" style="background-color: plum; color: black;">
        <p>#GripDec2021. Made by <b>Sarvesh Rane</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>