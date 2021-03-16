<?php include 'layouts/header.php';?>
    <?php
    include 'config.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $balance = $_POST['balance'];
        $sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
        }
    }
    ?>
<body>
    <h2 class="text-center pt-4" style="color : black;">Create a User</h2>
    <br>

    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <img class="img-fluid" src="images/user.jpg" style="border: none; border-radius: 50%;">
                    </div>
                    <div class="screen-body-item">
                        <form class="app-form" method="post">
                            <div class="app-form-group">
                                <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
                            </div>
                            <br>
                            <div class="app-form-group button">
                                <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                                <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "layouts/footer.php"?>
</body>

</html>