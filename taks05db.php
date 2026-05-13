<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Characters Table</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            padding:20px;
        }

        h3{
            margin-bottom:10px;
        }

        table{
            width:100%;
            border-collapse: collapse;
        }

        th{
            background:#2196F3;
            color:white;
            text-align:left;
            padding:12px;
        }

        td{
            padding:12px;
            border-bottom:1px solid #ddd;
        }

        tr:nth-child(even){
            background:#f2f2f2;
        }

        img{
            width:50px;
            height:50px;
            border-radius:50%;
        }

        .action i{
            margin-right:10px;
            cursor:pointer;
            color:black;
        }
    </style>
</head>
<body>

<h3>Characters</h3>

<table>
    <tr>
        <th>No.</th>
        <th>Avatar</th>
        <th>User ID</th>
        <th>Passcode</th>
        <th>Actions</th>
    </tr>

<?php

$data = mysqli_connect("localhost", "root", "", "sekolah", 3307);

$sql = "SELECT * FROM users";

$hasil = mysqli_query($data,$sql);

$no = 1;

while($row = mysqli_fetch_assoc($hasil)){

?>

<tr>

    <td><?php echo $no++; ?></td>

    <td>
        <img src="<?php echo $row['avatar']; ?>">
    </td>

    <td><?php echo $row['Userid']; ?></td>

    <td><?php echo $row['passcode']; ?></td>

    <td class="action">

        <a href="taks05dbdetail.php?user=<?php echo $row['Userid']; ?>">
            <i class="fa-solid fa-folder-open"></i>
        </a>
        
        <a href="taks05dbupdate.php?user=<?php echo $row['Userid']; ?>">
            <i class="fa-solid fa-pencil"></i>
        </a>
        
        <a href="taks05dbdel.php?user=<?php echo $row['Userid']; ?>">
            <i class="fa-solid fa-trash"></i>
        </a>

    </td>

</tr>

<?php
}
?>

</table>

</body>
</html>