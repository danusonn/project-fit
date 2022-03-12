<?php 
session_start();
include "connect.php";

    if(isset($_POST['reg_submit'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $firstname = validate($_POST['firstname']);
    $lastname = validate($_POST['lastname']);
    $bday = validate($_POST['bday']);
    $gender = validate($_POST['gender']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $re_password = validate($_POST['re_password']);

    $user_data = 'ชื่อ:' . $firstname .'นามสกุล:' . $lastname .'วันเกิด:' . $bday .'เพศ:' . $gender. 'อีเมล:'. $email . 'โทรศัพท์:' . $phone ;

    if(empty($firstname)){
        header("location: register.php?error=กรุณากรอกชื่อ&$user_data");
        exit();
    }else if(empty($lastname)){
        header("location: register.php?error=กรุณากรอกนามสกุล&$user_data");
        exit();
    }else if(empty($bday)){
        header("location: register.php?error=กรุณากรอกวันเกิด&$user_data");
        exit();
    }else if(empty($gender)){
        header("location: register.php?error=กรุณากรอกเพศ&$user_data");
        exit();
    }else if(empty($email)){
        header("location: register.php?error=กรุณากรอกอีเมล&$user_data");
        exit();
    }else if(empty($phone)){
        header("location: register.php?error=กรุณากรอกเบอร์โทรศัพท์&$user_data");
        exit();
    }else if(empty($username)){
        header("location: register.php?error=กรุณากรอกชื่อผุ้ใช้งาน&$user_data");
        exit();
    }else if(empty($password)){
        header("location: register.php?error=กรุณากรอกรหัสผ่าน&$user_data");
        exit();
    }else if(empty($re_password)){
        header("location: register.php?error=กรุณากรอกยืนยันรหัสผ่าน&$user_data");
        exit();
    }else if($password !== $re_password){
        header("location: register.php?error=รหัสผ่านไม่ตรงกันกรุณากรอกใหม่&$user_data");
        exit();
    }else{

        $password = md5($password);
        $sql = "SELECT * FROM member WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            header("location: register.php?error=ชื่อผู้ใช้งานนี้มันคนใช้เเล้ว กรุณาลองใหม่&$user_data");
            exit();
        }else{
            $int_reg = "INSERT INTO member (firstname, lastname, phone, email, birthday, sex, username, password) VALUE ('$firstname' , '$lastname', '$phone', '$email', '$bday', '$gender', '$username', '$password')";
            $result2 = mysqli_query($conn, $int_reg);
            if($result2){
                header("location: register.php?success=สมัครสมาชิกสำเร็จ");
                exit();
            }else{
                header("location: register.php?error=เกิดข้อผิดพลาดบางประการ กรุณาลองใหม่&$user_data");
                exit();
            }
        }
    }

}else{
    header("location: register.php");
    exit();
}

?>