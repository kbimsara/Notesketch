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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./src/style.css">

</head>

<body>
    <!-- nav -->
    <?php require_once './pg/nav.php'; ?>
    <!-- sec-01 -->
    <div class="container-fluid text-light justify content center" id="sec-1" style="height: 650px; background: #1E1E1E; padding-top: 70px;">
        <div>
            <style>
                h1 {
                    font-weight: bold;
                }
            </style>
            <center>
                <h1 class="col-12 col-sm-11 col-md-8 col-lg-6 col-xl-6">Capture Ideas, Share Insights, and Stay Organized</h1>
                <p style="margin-top: 50px; font-weight: 200;" class="col-11 col-sm-11 col-md-9 col-lg-8 col-xl-7">Notesketch, offers a seamless and intuitive note-taking experience. With Notesketch, users can effortlessly capture their thoughts, ideas, and sketches on the go. The app's user-friendly interface and innovative features make it easy to organize and retrieve notes quickly.</p>
                <div style="margin-top: 50px;" class=" col-12 col-sm-11 col-md-8 col-lg-6 col-xl-6">
                    <a href="./login.php" style="border-radius: 15px;">
                        <button type="button" class="btn btn-warning cst-btn m-3 cst-bg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                                <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                            </svg>Start taking notes
                        </button>
                    </a>
                </div>
            </center>
        </div>

    </div>
    <!-- sec-02 -->
    <div class="container-fluid bg-white justify content center" id="sec-2" style="padding-bottom: 70px; padding-top: 70px;">
        <div>
            <style>
                h1 {
                    font-weight: bold;
                }
            </style>
            <center>
                <h1 class="col-12 col-sm-11 col-md-8 col-lg-6 col-xl-6">Effortless Note-Taking and Seamless Sketching</h1>
                <p style="margin-top: 30px; font-weight: 200;" class="col-11 col-sm-11 col-md-9 col-lg-8 col-xl-7">Unlock a new level of productivity and creativity with Notesketch, the ultimate note-taking app. Embrace the power of effortless note-taking, seamlessly integrated sketching, and swift organization—all in one intuitive platform.</p>

                <div class="row justify-content-center">

                    <div class="col-11 col-sm-11 col-md-9 col-lg-4 col-xl-3 m-4">
                        <div class="card crd shadow" style="text-align: start;padding: 10px; padding-bottom: 35px;border-radius: 15px;background-color: #EDEDED;">
                            <div class="card-body">
                                <svg style="position: absolute;right: 27px;top: 34px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5" />
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                                </svg>
                                <h5 class="card-title" style="font-weight: bold;">Effortless <br>Note Taking.</h5>
                                <p class="card-text">Quickly capture your thoughts and ideas on the go with Notesketch's user-friendly interface.
                                    The app ensures a smooth and efficient note-taking experience, helping you stay productive wherever inspiration strikes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-sm-11 col-md-9 col-lg-4 col-xl-3 m-4">
                        <div class="card crd shadow" style="text-align: start;padding: 10px;border-radius: 15px;background-color: #EDEDED;">
                            <div class="card-body">
                                <svg style="position: absolute;right: 27px;top: 34px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                </svg>
                                <h5 class="card-title" style="font-weight: bold;">Seamless <br>Sketching.</h5>
                                <p class="card-text">Elevate your creativity with Notesketch's seamless sketching feature. Whether you're brainstorming concepts or expressing ideas visually,
                                    the app provides a fluid canvas for your sketches, making the creative process intuitive and enjoyable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-sm-11 col-md-9 col-lg-4 col-xl-3 m-4">
                        <div class="card crd shadow" style="text-align: start;padding: 10px;border-radius: 15px;background-color: #EDEDED;">
                            <div class="card-body">
                                <svg style="position: absolute;right: 27px;top: 34px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
                                    <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z" />
                                    <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5" />
                                </svg>
                                <h5 class="card-title" style="font-weight: bold;">Swift <br>Organization.</h5>
                                <p class="card-text">Keep your notes organized effortlessly with Notesketch. The app's smart organization tools enable you to categorize and retrieve your notes with ease, ensuring that your thoughts and sketches are always at your fingertips when you need them.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>

    </div>
    <!-- sec-03 -->
    <div class="container-fluid text-light" id="sec-3" style="background: #1E1E1E; padding-top: 70px; padding-bottom: 70px;">
        <style>
            h1 {
                font-weight: bold;
            }
        </style>
        <div class="row justify-content-center">
            <!-- img-right -->
            <div class="col-10 col-sm-12 col-md-12 col-lg-10 col-xl-9" style="margin: 0px;padding: 0px;">
                <div class="row justify-content-center h-100">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 justify-content-center">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <div class="w-100">
                                <h1>Easy to Share and Manage Notes.</h1>
                                <p class="text-left" style="font-size: medium; margin-top: 10px;">Experience a new dimension of convenience with Notesketch, where sharing and managing your notes becomes a breeze.</p>
                                <a href="./login.php" style="border-radius: 15px;"><button type="button" class="btn btn-warning btn-sm" style="border-radius: 20px;">Manage Your Notes</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start">
                        <img src="./src/img/rocket.png" alt="banner" class="img-fluid" style="margin-bottom: 10px;">
                    </div>
                </div>
            </div>
            <!-- img-left -->
            <div class="col-10 col-sm-12 col-md-12 col-lg-10 col-xl-9" style="margin: 0px;padding: 0px;">
                <div class="row justify-content-center h-100">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 justify-content-start">
                        <img src="./src/img/note.png" alt="banner" class="img-fluid" style="margin-bottom: 10px;">
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 justify-content-center">
                        <div class="d-flex align-items-center justify-content-start text-center h-100">
                            <div class="w-100 text-left">
                                <h1>Protected & Download Notes.</h1>
                                <p class="text-left" style="font-size: medium; margin-top: 10px;">Experience a new dimension of convenience with Notesketch, where sharing and managing your notes becomes a breeze.</p>
                                <a href="./login.php" style="border-radius: 15px;"><button type="button" class="btn btn-warning btn-sm" style="border-radius: 20px;">Protection and Download</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <center>
                <h1>It's time to<br>take Your note...</h1>
                <p class="text-center col-11 col-sm-11 col-md-9 col-lg-7 col-xl-7">
                    Embark on a journey of organization and creativity – it's time to take your notes with confidence. Our intuitive app is your go-to companion for capturing thoughts, ideas, and inspirations effortlessly. Stay organized, express your creativity, and make note-taking a seamless part of your daily routine. Try it now and elevate the way you capture your thoughts.
                </p>
                <div style="margin-top: 50px;" class=" col-12 col-sm-11 col-md-8 col-lg-6 col-xl-6">
                    <a href="./login.php" style="border-radius: 15px;">
                        <button type="button" class="btn btn-warning cst-btn m-3 cst-bg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                                <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                            </svg>Start taking notes
                        </button>
                    </a>
                </div>
            </center>

        </div>

    </div>
    <!-- footer -->
    <?php require './pg/footer.php'; ?>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>