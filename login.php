<?php include('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container w-25 mt-5 shadow p-3 mb-5 bg-white rounded">
        <div class="row">
            <div class="col-md-12 mt-4 text-center">
                <h2>LOGIN</h2>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-12">
                <form action="login_connect.php" method="post">

                    <?php if(isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    
                    <div class="form-group">
                        <label for="text"><b>Username</b></label>
                        <input type="text" class="form-control" name="username"
                            placeholder="อีเมลหรือชื่อผู้ใช้งาน">
                    </div><br>
                    <div class="form-group">
                        <label for="password"><b>Password</b></label>
                        <input type="password" class="form-control" name="password"
                            placeholder="รหัสผ่าน">
                    </div><br>
                    <button type="submit" name="login_user" class="btn btn-primary w-100">เข้าสู่ระบบ</button>
                </form>
                <div class="row mt-2">
                    <p>ยังไม่ใช่สมาชิก ? <a href="register.php">สมัครสมาชิกที่นี่</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>