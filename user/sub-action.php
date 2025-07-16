<?php
require_once '../config.php';
require('vendor/autoload.php');

session_start();

// delete data from database
if (isset($_GET['del'])) {

    $id = $_GET["del"];

    $sql = "DELETE FROM `notes` WHERE `id` = $id;";
    $result = mysqli_query($Connector, $sql);

    header('location: ./user-home.php');
}
// print data from database
if (isset($_GET['print'])) {

    $id = $_GET["print"];

    $sql = "select * FROM `notes` WHERE `id` = $id;";
    $result = mysqli_query($Connector, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $text = $row['text'];
            $mail = $row['mail'];
            $st = $row['status'];
        }
        if ($st < 1) {
            if (isset($_SESSION["email"])) {
                if ($mail === $_SESSION["email"]) {
                    $mpdf = new \Mpdf\Mpdf();
                    $mpdf->WriteHTML($text);
                    $file = 'media/' . time() . '.pdf';
                    $mpdf->output($file, 'I');
                } else {
                    echo "<script>alert('Please contact document owner!!')</script>";
                }
            } else {
                echo "<script>alert('Please contact document owner!!')</script>";
            }
        } else {
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->WriteHTML($text);
            $file = 'media/' . time() . '.pdf';
            $mpdf->output($file, 'I');

            header('location: ./user-home.php');
        }
    } else {
        if (isset($_SESSION["email"])) {
            echo "<script>alert('Please contact document owner!!')</script>";
        } else {
            echo "<script>alert('This document not Public or Unavailable')</script>";
        }
    }
}
// print data from database
// if (isset($_GET['print'])) {

//     $id = $_GET["print"];

//     $sql = "select * FROM `notes` WHERE `id` = $id;";
//     $result = mysqli_query($Connector, $sql);

//     if (mysqli_num_rows($result) > 0) {
//         while ($row = mysqli_fetch_array($result)) {
//             $text = $row['text'];
//             $mail = $row['mail'];
//             $st = $row['status'];
//         }
//         if ($st < 1) {
//             if($mail===$_SESSION["email"])
//             echo "<script>alert('Please contact document owner!!')</script>";
//         } else {
//             $mpdf = new \Mpdf\Mpdf();
//             $mpdf->WriteHTML($text);
//             $file = 'media/' . time() . '.pdf';
//             $mpdf->output($file, 'I');

//             header('location: ./user-home.php');
//         }
//     } else {
//         if (isset($_SESSION["email"])) {
//             echo "<script>alert('Please contact document owner!!')</script>";
//         } else {
//             echo "<script>alert('This document not Public or Unavailable')</script>";
//         }
//     }
// }
