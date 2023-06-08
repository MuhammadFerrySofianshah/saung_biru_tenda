<?php

    include 'koneksi.php' ;

    session_start() ;

    $email = $_POST['email']; 
    $komentar = $_POST['komentar'];
    $submit = date('Y-m-d H:i:s');

    $query = "INSERT INTO tb_sbt VALUES(
        '$email',
        '$komentar',
        '$submit'
    )" ;

    $_SESSION ['submit'] ='';

    mysqli_query($koneksi,$query) ;

    header('location:Contact.php') ;

?>