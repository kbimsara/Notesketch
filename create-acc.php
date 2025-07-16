<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notesketch</title>
    <!-- Page Title bar -->
    <link rel="icon" type="image/png" href="./src/logo/title icon.png" />

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./src/style.css">

</head>

<body>
    <!-- navBar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #EFAD03;">
        <a class="navbar-brand" href="./index.php" style="margin-right: 25px;">
            <img src="./src/logo/note.png" alt="Logo" style="height: 30px; margin: 10px; padding: 0px;">
        </a>
    </nav>

    <?php
    require_once './config.php';
    if (isset($_POST['create'])) {

        $name = $_POST["nm"];
        $email = $_POST["email"];
        $pw = $_POST["pw"];

        //Check email exist
        $query_check = "SELECT * FROM `user` WHERE `mail`='$email';";
        $query_check_run = mysqli_query($Connector, $query_check);

        if (mysqli_num_rows($query_check_run) < 1) {

            $query_insert = "INSERT INTO `user` (`mail`, `name`, `pw`) VALUES ('$email', '$name','$pw');";
            $query_run = mysqli_query($Connector, $query_insert);

            echo "
            <script>
            Swal.fire(
                'Account Created!',
                'Please login New Account',
                'success'
              ).then(function() {
                window.location.href = './login.php';
            })
            </script>
            ";
        } else {
            echo "
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Email Already exist!'
          }).then(function() {
            window.location.href = './login.php';
        })
        </script>
        ";
        }
    }
    ?>
    <!-- sec-01 -->
    <div class="container" style="margin-top: 30px;">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-11 col-md-10 col-lg-7 col-xl-6 bg-white" style="border: 1px black solid;border-radius: 20px;padding: 20px;">
                <form method="POST">
                    <h3 style="text-align: center;margin-bottom: 50px;">Create Account</h3>
                    <div class="form-group">
                        <label class="txt-lb" for="exampleInputPassword1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label class="txt-lb" for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="nm" name="nm" required>
                    </div>
                    <div class="form-group">
                        <label class="txt-lb" for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" id="pw" name="pw" required>
                    </div>
                    <button type="submit" name="create" class="btn btn-warning">create Account</button>
                    <div style="margin-top: 50px;" class=" col-12 col-sm-11 col-md-8 col-lg-6 col-xl-6">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require './pg/footer.php'; ?>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>