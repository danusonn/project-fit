<?php 

session_start();

if(!isset($_SESSION['username'])){
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if(isset($_SESSION['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-fit</title>
</head>
<body>

<div class="header">
    <h2>Index</h2>
</div>

<div class="content">
    <h1>Hello World!</h1>
</div>
    
<?php  if(isset($_SESSION['username'])): ?>
        <p>ยินดีต้อนรับ <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p><a href="index.php?logout='1'">Logout</a></p>
    <?php endif ?>
</body>
</html>