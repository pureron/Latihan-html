<?php

$data = mysqli_connect("localhost","root","","sekolah",3307);

$user = $_GET['user'];

$sql = "SELECT * FROM users WHERE Userid='$user'";

$hasil = mysqli_query($data,$sql);

$row = mysqli_fetch_assoc($hasil);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Details</title>

    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#f1f1f1;
            margin:0;
        }

        h2{
            padding:10px;
            margin:0;
        }

        .card{
            width:300px;
            background:white;
            margin:20px auto;
            box-shadow:0px 0px 10px rgba(0,0,0,0.2);
        }

        .card img{
            width:100%;
        }

        .content{
            text-align:center;
            padding:20px;
        }

        .content h1{
            margin:0;
            font-size:40px;
        }

        .content p{
            font-size:25px;
            color:#333;
        }

    </style>

</head>
<body>

<h2>Characters / Character Details</h2>

<div class="card">

    <img src="<?php echo $row['avatar']; ?>">

    <div class="content">

        <h1><?php echo $row['Userid']; ?></h1>

        <p><?php echo $row['passcode']; ?></p>

    </div>

</div>

</body>
</html>