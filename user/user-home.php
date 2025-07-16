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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./src/style.css">

    <!-- Ajax js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
    <!-- nav -->
    <?php require_once './pg/nav.php'; ?>
    <!-- sec-02 -->
    <div class="container-fluid bg-white justify content center" id="sec-2" style="padding-bottom: 70px; padding-top: 30px;">
        <div>
            <style>
                h1 {
                    font-weight: bold;
                }

                .btn {
                    border-radius: 10px;
                    /* padding: 10px; */
                }
            </style>
            <center>
                <h1 class="col-12 col-sm-11 col-md-8 col-lg-6 col-xl-6">Notes</h1>

                <a href="./editor.php"><button type="button" class="btn btn-warning m-3"> + Start taking notes</button></a>

                <!-- 3 Radiob Button Line -->
                <div class="contain-fluid">
                    <center>
                        <div class="row justify-content-center">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <span class="rd-txt">Privet-Public</span>
                                <input type="radio" class="rd-btn" name="filter" id="pv" value="pv" onchange="FetchPv(this.value)">
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <span class="rd-txt">Public-Privet</span>
                                <input type="radio" class="rd-btn" name="filter" id="pb" value="pb" onchange="FetchPb(this.value)">
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <span class="rd-txt">Old-New</span>
                                <input type="radio" class="rd-btn" name="filter" id="old" value="old" onchange="FetchOld(this.value)">
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <span class="rd-txt">New-Old</span>
                                <input type="radio" class="rd-btn" name="filter" id="new" value="new" onchange="FetchNew(this.value)">
                            </div>
                        </div>
                    </center>
                </div>
                <hr>
                <!-- <p style="margin-top: 30px; font-weight: 200;" class="col-11 col-sm-11 col-md-9 col-lg-8 col-xl-7">Unlock a new level of productivity and creativity with Notesketch, the ultimate note-taking app. Embrace the power of effortless note-taking, seamlessly integrated sketching, and swift organization—all in one intuitive platform.</p> -->

                <!-- cards -->
                <div class="row justify-content-center" id="crd-note">



                    <?php
                    require_once '../config.php';
                    $mail = $_SESSION["email"];

                    $sql = "SELECT * FROM `notes` WHERE mail='$mail' ORDER BY time DESC;";
                    $result = mysqli_query($Connector, $sql);
                    $i = 0;

                    while ($row = mysqli_fetch_array($result)) {
                        $i++;

                        $id = $row['id'];
                        $text = $row['text'];
                        $status = $row['status'];
                        $time = $row['time'];

                        $text = substr($text, 0, 150);
                    ?>
                        <div class="col-11 col-sm-11 col-md-9 col-lg-4 col-xl-3 m-4">
                            <div class="card crd shadow" style="text-align: start;padding: 10px;border-radius: 15px;background-color: #EDEDED; min-height: 300px;">
                                <div class="card-body">
                                    <svg style="position: absolute;right: 27px;top: 34px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5" />
                                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                                    </svg>
                                    <h5 class="card-title" style="font-weight: bold;"><?php echo "$i"; ?></h5>
                                    <p class="card-text"><?php echo "$text"; ?></p>
                                </div>
                                <div class="col-12 text-center" style="padding-bottom: 5px;">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="./sub-action.php?print=<?php echo $id; ?>">
                                                <button type="button" class="btn btn-primary btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                                                        <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1" />
                                                        <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1" />
                                                    </svg>
                                                </button></a>
                                        </div>
                                        <div class="col-4">
                                            <a href="./edit-editor.php?txt=<?php echo "$id" ?>">
                                                <button type="button" class="btn btn-warning btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg>
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="./sub-action.php?del=<?php echo $id; ?>">
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                                    </svg>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12" style="padding-top: 10px;">
                                    <div class="row">
                                        <div class="col-3">
                                            <?php
                                            if ($status > 0) {
                                            ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                                </svg>
                                            <?php
                                            } else {
                                            ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                                    <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z" />
                                                    <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829" />
                                                    <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z" />
                                                </svg>
                                            <?php

                                            }
                                            ?>
                                        </div>
                                        <div class="col-9" style="text-align: end;">
                                            <?php echo "$time"; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    if ($i < 1) {
                    ?>
                        <h5>No notes in Here</h5>
                    <?php
                    }
                    ?>

                </div>
            </center>
        </div>

    </div>
    <!-- footer -->
    <?php require './pg/footer.php'; ?>

    <!-- Dynamic drop-down script -->
    <script type="text/javascript">
        function FetchPv(id) {
            $('#crd-note').html('');
            $.ajax({
                type: 'post',
                url: 'ajaxdata.php',
                data: {
                    pv_id: id
                },
                success: function(data) {
                    $('#crd-note').html(data);
                }

            })


        }

        function FetchPb(id) {
            $('#crd-note').html('');
            $.ajax({
                type: 'post',
                url: 'ajaxdata.php',
                data: {
                    pb_id: id
                },
                success: function(data) {
                    $('#crd-note').html(data);
                }

            })
        }

        function FetchOld(id) {
            $('#crd-note').html('');
            $.ajax({
                type: 'post',
                url: 'ajaxdata.php',
                data: {
                    old_id: id
                },
                success: function(data) {
                    $('#crd-note').html(data);
                }

            })
        }

        function FetchNew(id) {
            $('#crd-note').html('');
            $.ajax({
                type: 'post',
                url: 'ajaxdata.php',
                data: {
                    new_id: id
                },
                success: function(data) {
                    $('#crd-note').html(data);
                }

            })
        }
    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

</body>

</html>