<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
session_start();
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
    if (isset($_POST['login'])) {

        $email = $_POST["email"];
        $pw = $_POST["pw"];

        $sql = "SELECT * FROM `user` WHERE mail='$email';";
        $result = mysqli_query($Connector, $sql);
        $i = 0;

        while ($row = mysqli_fetch_array($result)) {
            $i++;

            $resuly_email = $row['mail'];
            $resuly_pw = $row['pw'];

            if ($email === $resuly_email && $pw === $resuly_pw) {
                $_SESSION["email"] = $resuly_email;
                $url = "./user/user-home.php";
                header('location: ./' . $url . '');
                ob_end_flush();
            } else {
                echo "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Invalid Login Details Check Again!'
                  })
                </script>
                ";
            }
        }
        if ($i < 1) {
            echo "
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Invalid Login Details Check Again!'
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
                    <h3 style="text-align: center;margin-bottom: 50px;">Login</h3>
                    <div class="form-group">
                        <label class="txt-lb" for="exampleInputPassword1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label class="txt-lb" for="exampleInputEmail1">Group ID</label>
                        <input type="password" class="form-control" id="pw" name="pw" required>
                    </div>
                    <a href="./create-acc.php" style="color: black;">Create new Account</a><br><br>
                    <button type="submit" name="login" class="btn btn-warning">Login</button>
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