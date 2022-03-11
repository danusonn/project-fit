<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-fit</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="header">
    <h2>Index</h2>
</div>

<div class="content">
    <h1>Hello World!, <?php echo $_SESSION['firstname']; ?></h1>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>

<?php
}else{
    header("Location: login.php");
    exit();
}

?>