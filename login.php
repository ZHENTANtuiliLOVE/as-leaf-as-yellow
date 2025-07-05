<?php

session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == 'password'){
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    }else{
        echo "无效的用户名或密码";
    }
}

?>

<!-- Below is the code of d:\文件夹\project\班级论坛\index.php 

<?php

session_start();

if(isset($_SESSION['username'])){
    echo "欢迎, ".$_SESSION['username']."!";
}else{
    header('Location: login.php');
    exit;
}

?> 

<!-- Below is the code of d:\文件夹\project\班级论坛\logout.php 

<?php

session_start();

session_destroy();

header('Location: login.php');
exit;

?> 

<!-- Below is the code of d:\文件夹\project\班级论坛\register.php 

<?php

session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password == $confirm_password){
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    }else{
        echo "密码不匹配";
    }
}

?> 

<!-- Below is the code of d:\文件夹\project\班级论坛\profile.php 

<?php

session_start();

if(isset($_SESSION['username'])){
    echo "欢迎, ".$_SESSION['username']."!";
}else{
    header('Location: login.php');
    exit;
}

?> 

<!-- Below is the code of d:\文件夹\project\班级论坛\edit_profile.php 

<?php

session_start();

if(isset($_SESSION['username'])){
    echo "欢迎, ".$_SESSION['username']."!";
}else{
    header('Location: login.php');
    exit;
}

?> 

<!-- Below is the code of d:\文件夹\project\班级论坛\change_password.php 

<?php

session_start();

if(isset($_POST['submit'])){
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if($new_password == $confirm_password){
        if($old_password == 'password'){
            $_SESSION['password'] = $new_password;  
            header('Location: profile.php');
            exit;
        }else{  
            echo "无效的旧密码";
        }
    }else{
        echo "密码不匹配";
    }
}

?> 

<!-- Below is the code of d:\文件夹\project\班级论坛\forgot_password.php 

<?php

session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];

    //send email to user with reset password link
}

?> 

<!-- Below is the code of d:\文件夹\project\班级论坛\reset_password.php 

<?php

session_start();

if(isset($_POST['submit'])){
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if($new_password == $confirm_password){
        $_SESSION['password'] = $new_password;
        header('Location: profile.php');
        exit;
    }else{
        echo "密码不匹配";
    }
}

?> 

<!-- Below is the code of d:\文件夹\project\班级论坛\delete_account.php 

<?php

session_start();

if(isset($_POST['submit'])){
    $password = $_POST['password'];

    if($password == 'password'){
        session_destroy();
        header('Location: login.php');
        exit;
    }else{
        echo "无效的密码";
    }
}

?> 

<!-- Below is the code of d:\文件夹\project\班级论坛\admin.php 

<?php

session_start();

if(isset($_SESSION['username'])){
    if($_SESSION['username'] == 'admin'){
        echo "欢迎, ".$_SESSION['username']."!";
    }else{
        header('Location: index.php');
        exit;
    }
}else{
    header('Location: login.php');
    exit;
}

?> 

<!-- Below is the code of d:\文件夹\项目\班级论坛\admin_panel.php 

<?php

session_start();

if(isset($_SESSION['username'])){
    if($_SESSION['username'] == 'admin'){
        echo "欢迎, ".$_SESSION['username']."!";
    }else{
        header('Location: index.php');
        exit;
    }
}else{
    header('Location: login.php');
    exit;
}

?> 

<!-- Below is the code of d:\文件夹\项目\班级论坛\admin_users.php 

<?php

session_start();

if(isset($_SESSION['username'])){
    if($_SESSION['username'] == 'admin'){
        echo "欢迎, ".$_SESSION['username']."!";
    }else{
        header('Location: index.php');
        exit;
    }
}else{
    header('Location: login.php');
    exit;
}

?> 

<!-- Below is the code of d:\文件夹\项目\班级论坛\admin_posts.php 

<?php

session_start();

if(isset($_SESSION['username'])){
    if($_SESSION['username'] == 'admin'){
        echo "欢迎, ".$_SESSION['username']."!";
    }else{
        header('Location: index.php');
        exit;
    }
}else{
    header('Location: login.php');
    exit;
}

?> 

<!-- Below is the code of d:\文件夹\项目\班级论坛\admin_comments.php 

<?php

session_start();

if(isset($_SESSION['username'])){
    if($_SESSION['username'] == 'admin'){
        echo "欢迎, ".$_SESSION['username']."!";
    }else{
        header('Location: index.php');
        exit;
    }
}else{
    header('Location: login.php');
    exit;
}

?>
