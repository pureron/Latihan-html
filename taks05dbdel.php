<?php

$data = mysqli_connect("localhost", "root", "", "sekolah", 3307);

if(isset($_GET['user'])){

    $del = $_GET['user'];

    $sql = "DELETE FROM users WHERE Userid='$del'";

    if(mysqli_query($data,$sql)){
        echo "Data berhasil di hapus!";
        header("Location: taks05db.php");
        exit();
    }else{
        echo "Data tidak berhasil di hapus";
    }
}

?>
