<?php  include "layouts/header.php";?>
<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/cs-bank.jpg" alt="CS BANK">
      <div class="carousel-caption">
        <h3 style="color: yellow;font-size:200%;">Welcome to our CS-Bank</h3>
        <p style="font-weight: bold;font-size:100%;">Your personal bank</p>
      </div>
    </div>

    <div class="item">
      <img src="images/home11.jpg" alt="Global network">
      <div class="carousel-caption">
        <h3 style="color: yellow;font-size:200%;">Access across globe</h3>
        <p style="font-weight: bold;font-size:90%;">Access your account across globe</p>
      </div>
    </div>

    <div class="item">
      <img src="images/home3.jpg" alt="Versatile">
      <div class="carousel-caption">
        <h3 style="color: yellow;font-size:250%;">Versatile Site</h3>
        <p  style="font-weight: bold;font-size:100%;">Easy to use on Computer as well as Mobile phones</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<section class="jumbotron text-center">
    <div class="container">
        <img src="images/cs4.png" alt="logo" width="160">
        <h1 class="jumbotron-heading"><span id="typed"></span></h1>
        <p style="font-weight: bold;font-size:300%;color:purple">Steps for using our Site</p>
        <p style="font-size:200%;">You can create new account if you are new user</p>
        <a href="createuser.php" class="btn btn-primary my-2"><span class="glyphicon glyphicon-pencil"></span>Create Account</a>
        <p style="font-size:200%;">You can view our users and can also do operation's like transferring money</p>
        <a href="transfermoney.php" class="btn btn-success my-2"><span class="glyphicon glyphicon-user">Users</a>
        <p style="font-size:200%;">You can view transaction history</p>
        <a href="transactionhistory.php" class="btn btn-danger"><span class="glyphicon glyphicon-transfer">Transaction History</a>
        </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.9/typed.min.js" async defer></script>
<script>
    window.onload = function () {
        console.log("loaded")
        var typed = new Typed('#typed', {
            strings: ["Welcome to our CS-Bank", "Your personal bank"],
            backSpeed: 15,
            smartBackspace: true,
            backDelay: 1200,
            startDelay: 1000,
            typeSpeed: 25,
            loop: true,
        });
    };
</script>
<?php include "layouts/footer.php"?>
</body>
</html>

