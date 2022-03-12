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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-secondary text-light">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php">หน้าหลัก</a>
        </li>
      </ul>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a>สวัสดี! , คุณ <?php echo $_SESSION['firstname']; ?></a>
        </li>
      </ul>
      <div class="d-flex align-items-center justify-content-end">
        <a href="logout.php" class="btn btn-danger me-3">
          Logout
        </a>
      </div>
</nav>

<div class="content">
    
</div>

</body>
</html>

<?php
}else{
    header("Location: login.php");
    exit();
}

?>