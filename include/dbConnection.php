<?php
    $conn = mysqli_connect("127.0.0.1","root","");
    if(!$conn):
        die(mysqli_error($conn) . "invalid connection");
    endif;
    $selectDd = mysqli_select_db($conn, "stadium");
    if(!$selectDd):
        die(mysqli_error($conn) . "wrong database selection");
    endif;
    session_start();
?>