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
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    $id = $_GET["txt"];

    if ($_SESSION["email"]  === null) {
        $url = "./sub-action.php?print=" . $id;
        header('location: ./' . $url . '');
    }

    // $mail = $_SESSION["mail"];

    // get data from database
    if (isset($_GET['txt'])) {

        $id = $_GET["txt"];

        $query_check = "SELECT * FROM `notes` WHERE `id`='$id';";
        $query_check_run = mysqli_query($Connector, $query_check);

        while ($row = mysqli_fetch_array($query_check_run)) {
            $pv = "";
            $pb = "";
            $dis = "";

            $text = $row['text'];
            $mm = $row['mail'];
            $status = $row['status'];

            if ($_SESSION["email"] == $mm) {
                continue;
            } else {
                header('location: ../');
            }

            if (0 < $status) {
                $pb = " selected";
            } else {
                $pv = " selected";
                $dis = "disabled";
            }
        }

    }
    
    if (0 < $status) {
        $pb = " selected";
    } else {
        $pv = " selected";
        $dis = "disabled";
    }
    // update database
    if (isset($_POST['update'])) {

        $ed = $_POST["editor"];
        $status = $_POST["status"];

        $query = "UPDATE `notes` SET `text` = '$ed',`status` = '$status' WHERE `id` = $id;";
        $query_run = mysqli_query($Connector, $query);

        echo "
            <script>
            Swal.fire(
                'Suceess',
                'Your Idea Updated!',
                'success'
              ).then(function() {
                window.location.href = './user-home.php';
            })
            </script>
            ";
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
                <form method="post">
                    <div class="row justify-content-center">
                        <div class="col-11 col-sm-11 col-md-9 col-lg-6 col-xl-6 row justify-content-center">
                            <div class="col-12 col-sm-11 col-md-11 col-lg-3 col-xl-3">
                                <select name="status" id="status" class="btn btn-outline-warning" style="color: black;margin-bottom: 10px;">
                                    <option value="0" <?php echo "$pv"; ?>>private</option>
                                    <option value="1" <?php echo "$pb"; ?>>public</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-11 col-md-11 col-lg-9 col-xl-9" disabled>
                                <input class="btn btn-outline-secondary" <?php echo "$dis"; ?> type="text" value="<?php echo $url; ?>" id="myInput" readonly>
                                <button onclick="myFunction()" class="btn btn-primary" <?php echo "$dis"; ?>>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clipboard-plus-fill" viewBox="0 0 16 16">
                                        <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5zm4.5 6V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5a.5.5 0 0 1 1 0" />
                                    </svg>
                                </button>
                            </div>

                        </div>

                        <div class="col-11 col-sm-11 col-md-9 col-lg-6 col-xl-6 m-4">
                            <textarea name="editor" id="editor" cols="30" rows="10" placeholder="type heare your idea" style="min-height: 100px;" maxlength="2000" required> <?php echo "$text"; ?></textarea>
                            <div>
                                <button type="submit" name="update" class="btn btn-warning m-3"> Update Idea</button>

                            </div>
                        </div>
                    </div>
                </form>
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
    <!-- copy button -->
    <script>
        function myFunction() {
            // Get the text field
            var copyText = document.getElementById("myInput");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);
            Swal.fire("Copied!!");
        }
    </script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>