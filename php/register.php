<?php
include('../config/connect.php');

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $password2 = md5($_POST['password2']);


    if ($password == $password2) {

        $query = mysqli_query($connect, "INSERT INTO users SET name='$name', email='$email', password='$password'");
        if($query){
            $data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM users WHERE email='$email' AND PASSWORD='$password'"));
    
            $_SESSION['user_id'] = $data['id'];
            header('location: ../blogger');
        } else {
            header('location: ../register.php');
        }
    } else {
        header('location: ../register.php');
    }
} else {
    header('location: ../register.php');
}