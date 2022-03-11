<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <section class="vh-100 gradient-custom ">
        <div class="container py-5 h-100 ">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration shadow p-3 mb-5 bg-white rounded" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"><b>สมัครสมาชิก</b></h3>
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="firstName" class="form-control form-control-lg" placeholder="กรอกชื่อ">
                                            <label class="form-label" for="firstName"><b>ชื่อ</b></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="lastName" class="form-control form-control-lg" placeholder="กรอกนามสกุล">
                                            <label class="form-label" for="lastName"><b>นามสกุล</b></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">
                                        <div class="form-outline datepicker w-100">
                                            <input type="date" class="form-control form-control-lg" id="birthdayDate" />
                                            <label for="birthdayDate" class="form-label"><b>วันเกิด</b></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <h6 class="mb-2 pb-1"><b>เพศ</b> </h6>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Gender"
                                                id="femaleGender" value="หญิง" checked />
                                            <label class="form-check-label" for="femaleGender">หญิง</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Gender"
                                                id="maleGender" value="ชาย" />
                                            <label class="form-check-label" for="maleGender">ชาย</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Gender"
                                                id="otherGender" value="อื่นๆ" />
                                            <label class="form-check-label" for="otherGender">อื่นๆ</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="email" id="emailAddress"
                                                class="form-control form-control-lg" placeholder="กรอกอีเมลติดต่อ">
                                            <label class="form-label" for="emailAddress"><b>อีเมล</b></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="tel" id="phoneNumber" class="form-control form-control-lg" placeholder="กรอกเบอร์โทรศัพท์">
                                            <label class="form-label" for="phoneNumber"><b>เบอร์โทรศัพท์</b></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="text" id="username"
                                                class="form-control form-control-lg" placeholder="กรอกชื่อผู้ใช้งาน">
                                            <label class="form-label" for="username"><b>ชื่อผู้ใช้งาน</b></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="password" id="password" class="form-control form-control-lg" placeholder="กรอกรหัสผ่าน">
                                            <label class="form-label" for="password"><b>รหัสผ่าน</b></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="ยืนยัน">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>