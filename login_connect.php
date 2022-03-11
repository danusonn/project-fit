<?php 
session_start();
include "connect.php";

   FIXME: 
if(isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    FIXME: 

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(empty($username)){
        header('location: login.php?error=กรุณากรอกชื่อผู้ใช้งาน');
        exit();
    }else if(empty($password)){
        header('location: login.php?error=กรุณากรอกรหัสผ่าน');
        exit();
    }else{
        $sql = "SELECT * FROM member WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['username'] === $username && $row['password'] === $password){
                $_SESSION['username'] = $row['username'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['id'] = $row['id'];
                header("Location: index.php");
                exit();
            }else{
                header("Location: login.php?error=ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง");
                exit();
            }
        }else{
            header('location: login.php?error=ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง');
            exit();
        }
    }

}else{
    header('location: login.php');
    exit();
}

?>