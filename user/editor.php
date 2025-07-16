<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

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
    <!-- editor -->
    <script src="./ckeditor5-build-classic/ckeditor.js"></script>

</head>

<body>
    <!-- nav -->
    <?php require_once './pg/nav.php'; ?>

    <?php
    require_once '../config.php';
    // echo  $_SERVER['REQUEST_URI'];

    $mail = $_SESSION["email"];

    if (isset($_POST['save'])) {

        $ed = $_POST["editor"];
        $status = $_POST["status"];

        if (0 < strlen($ed)) {
            $query_insert = "INSERT INTO `notes` (`text`, `mail`, `status`) VALUES ('$ed','$mail', '$status');";
            $query_run = mysqli_query($Connector, $query_insert);

            echo "
            <script>
            Swal.fire(
                'Suceess',
                'Your Idea saved!',
                'success'
              ).then(function() {
                window.location.href = './user-home.php';
            })
            </script>
            ";
        } else {

                echo "
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Note Area is Empty!!!'
              })
            </script>
            ";
        }


        //Check email exist
        // $query_check = "SELECT * FROM `user` WHERE `mail`='$email';";
        // $query_check_run = mysqli_query($Connector, $query_check);

        // if (mysqli_num_rows($query_check_run) < 1) {
        // } else {
        //     echo "
        // <script>
        // Swal.fire({
        //     icon: 'error',
        //     title: 'Oops...',
        //     text: 'Email Already exist!'
        //   }).then(function() {
        //     window.location.href = './login.php';
        // })
        // </script>
        // ";
        // }
    }
    ?>
    <!-- sec-02 -->
    <div class="container-fluid bg-white justify content center" id="sec-2" style="padding-bottom: 70px; padding-top: 30px;">
        <div>
            <style>
                h1 {
                    font-weight: bold;
                }

                .ck-editor__editable_inline {
                    min-height: 100px !important;
                }
            </style>
            <center>
                <h1 class="col-12 col-sm-11 col-md-8 col-lg-6 col-xl-6">Text Editor</h1>
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-11 col-md-9 col-lg-6 col-xl-6 m-4">
                        <form method="post">
                            <textarea name="editor" id="editor" cols="30" rows="10" placeholder="type heare your idea" style="min-height: 100px;" maxlength="2000"></textarea>
                            <div>
                                <button type="submit" name="save" class="btn btn-warning m-3"> Save</button>

                                <select name="status" id="status" class="btn btn-outline-warning" style="color: black;">
                                    <option value="0">private</option>
                                    <option value="1">public</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </center>
        </div>

    </div>
    <!-- footer -->
    <?php require './pg/footer.php'; ?>


    <!-- editor -->
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>