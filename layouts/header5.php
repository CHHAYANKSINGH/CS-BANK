<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/table.css" type="text/css">
    <link rel="stylesheet" href="bootstrap/css/navbar.css" type="text/css">
    <link rel="icon" href="images/cs-favicon.png">
    <meta name="theme-color" content="#7952b3"> 
    <!-- Favicons -->
    <link rel="icon" href="images/cs-favicon.png">
    <meta name="theme-color" content="#7952b3"> 
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
    .navbar-inverse {
        background-color: #3b173da8;
        border-color: #3b173da8; 
    }
    .navbar-inverse .navbar-brand {
        color: white;
    }
    a:hover{
        color: #50546d;
    }
    .navbar-inverse .navbar-nav>li>a {
        color: white;
    }
    body{
      display: flex;
      flex-direction: column;
      height: 100vh;
    }
    .footer{
      height: 5rem;
      background-color: #3b173da8;
      margin-top: auto;
    }
    .footer p{
      color: white;
      text-align: center;
      line-height: 5rem;
    }
    .BTT{
      float: right;
    }
    button {
            border: none;
            background: #d9d9d9;
        }

        button:hover {
            background-color: #777E8B;
            transform: scale(1.1);
            color: white;
        }
       
    </style>
    <title>Transaction History</title>

</head>
<body1>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">CS Bank</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="createuser.php"><span class="glyphicon glyphicon-pencil"></span> Create User</a></li>
        <li><a href="transfermoney.php"><span class="glyphicon glyphicon-user"></span> Users</a></li>
        <li><a href="transactionhistory.php"><span class="glyphicon glyphicon-transfer"></span> Transaction History</a></li>
      </ul>
    </div>
  </div>
</nav>
</body1>