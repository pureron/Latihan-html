<?php

$data = mysqli_connect("localhost","root","","sekolah",3307);

$row = null;

if(isset($_GET['user'])){
    $userid_get = $_GET['user'];
    $select = "SELECT * FROM users WHERE Userid='$userid_get'";
    $result = mysqli_query($data, $select);
    $row = mysqli_fetch_assoc($result);
}

if(isset($_POST['update'])){
    $userid   = $_POST['userid'];
    $pass     = $_POST['pass'];
    $old_user = $_POST['old_user'];

    $update = "UPDATE users 
               SET Userid='$userid',
                   passcode='$pass'
               WHERE Userid='$old_user'";

    if(mysqli_query($data, $update)){
        header("Location: taks05db.php");
        exit();
    } else {
        echo "Data gagal diupdate";
    }
}
?>

<?php if ($row): ?>
<form method="post">
    <input type="hidden" name="old_user" value="<?php echo $row['Userid']; ?>">

    <p>User ID</p>
    <input type="text" name="userid" value="<?php echo $row['Userid']; ?>">

    <p>Password</p>
    <input type="text" name="pass" value="<?php echo $row['passcode']; ?>">

    <br><br>
    <input type="submit" name="update" value="Update">
</form>

<?php else: ?>
    <p>Data tidak tersedia</p>
<?php endif; ?>