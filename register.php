<?php include('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container w-50 mt-5 shadow p-3 mb-5 bg-white rounded">
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"><b>สมัครสมาชิก</b></h3>
        <form action="reg_connect.php" method="post">

                    <?php if(isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if(isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>


            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label class="form-label" for="firstname"><b>ชื่อ</b></label>
                    <?php if(isset($_GET['firstname'])) { ?>
                        <input type="text" name="firstname" class="form-control" placeholder="กรอกชื่อ" value="<?php echo $_GET['firstname']; ?>">
                        <?php }else{ ?>
                        <input type="text" name="firstname" class="form-control" placeholder="กรอกชื่อ">
                        <?php } ?>
                        </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="lastname"><b>นามสกุล</b></label>
                        <?php if(isset($_GET['lastname'])) { ?>
                        <input type="text" name="lastname" class="form-control" placeholder="กรอกนามสกุล" value="<?php echo $_GET['lastname']; ?>">
                        <?php }else{ ?>
                        <input type="text" name="lastname" class="form-control" placeholder="กรอกนามสกุล">
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">
                    <div class="form-outline datepicker w-100">
                        <label for="birthdayDate" class="form-label"><b>วันเกิด</b></label>
                        <?php if(isset($_GET['bday'])) { ?>
                        <input type="date" name="bday" class="form-control" value="<?php echo $_GET['bday']; ?>">
                        <?php }else{ ?>
                        <input type="date" name="bday" class="form-control">
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h6 class="mb-2 pb-1"><b>เพศ</b> </h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="หญิง">
                        <label class="form-check-label" for="femaleGender">หญิง</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="ชาย">
                        <label class="form-check-label" for="maleGender">ชาย</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" for="emailAddress"><b>อีเมล</b></label>
                        <?php if(isset($_GET['email'])) { ?>
                        <input type="email" name="email" class="form-control" placeholder="กรอกอีเมลติดต่อ" value="<?php echo $_GET['email']; ?>">
                        <?php }else{ ?>
                        <input type="email" name="email" class="form-control" placeholder="กรอกอีเมลติดต่อ">
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" for="phoneNumber"><b>เบอร์โทรศัพท์</b></label>
                        <?php if(isset($_GET['tel'])) { ?>
                        <input type="tel" name="phone" class="form-control" placeholder="กรอกเบอร์โทรศัพท์" value="<?php echo $_GET['tel']; ?>">
                         <?php }else{ ?>
                        <input type="tel" name="phone" class="form-control" placeholder="กรอกเบอร์โทรศัพท์">
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 pb-2 w-100">
                    <div class="form-outline">
                        <label class="form-label" for="username"><b>ชื่อผู้ใช้งาน</b></label>
                        <?php if(isset($_GET['username'])) { ?>
                        <input type="text" name="username" class="form-control" placeholder="กรอกชื่อผู้ใช้งาน" value="<?php echo $_GET['username']; ?>">
                        <?php }else{ ?>
                        <input type="text" name="username" class="form-control" placeholder="กรอกชื่อผู้ใช้งาน">
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" for="password"><b>รหัสผ่าน</b></label>
                        <input type="password" name="password" class="form-control" placeholder="กรอกรหัสผ่าน">
                    </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" for="password"><b>ยืนยันรหัสผ่าน</b></label>
                        <input type="password" name="re_password" class="form-control" placeholder="ยืนยันรหัสผ่าน">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <input class="btn btn-primary w-100" type="submit" name="reg_submit" value="ยืนยัน">
            </div>
        </form>
        <div class="row mt-2">
            <p>เป็นสมาชิกเเล้ว ? <a href="login.php">เข้าสู่ระบบที่นี่</a></p>
        </div>
    </div>
</body>

</html>