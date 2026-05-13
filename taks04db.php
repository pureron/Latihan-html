<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-box{
        width:300px;
        padding:20px;
        border:1px solid black;
        border-radius:10px;
        }
        input{
            width:300px;
            margin-bottom:5px;
        }
        .button-box{
        display:flex;
        justify-content:flex-end;
        gap:5px;
        }
        .button1{
            width: 70px;
            padding:8px;
            background-color:limegreen;
            color:white;
        }
        .button2{
            width: 70px;
            padding:8px;
            background-color:red;
            color:white;
        }
    </style>
</head>
<body>
    <form class="form-box" method="post" action="">
    <h1>Users Registrasion</h1>
    <p>this form is use to add new users!</p>
    <h4>User ID</h4>
    <input type="text" name="user">
    <h4>Passcode</h4>
    <input type="password" name="pass">
    <h4>Retype Passcode</h4>
    <input type="password" name="retype"> <br><br>
    <div class="button-box">
        <button type = "submit" class="button1" name="insert">insert</button>
        <button type = "submit" class="button2">cancel</button>
    </div>
    </form>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $data = mysqli_connect("localhost", "root", "", "sekolah", 3307);

    if(!$data){
        die("Connection failed;" . mysqli_connect_error());
    }

   if(isset($_POST['insert'])){

    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $retype=$_POST['retype'];

    if($pass == $retype){

        $sql = "INSERT INTO users(Userid,passcode,avatar)
        values('$user','$pass','img3_avatar.png')";

        if(mysqli_query($data,$sql)){
            echo "Data Berhasil di tambahkan";
        } else{
            echo "Data tidak berhasil di tambahkan";
        }

    }else{
        echo "password tidak sama";
    }

}
?>
</body>
</html>