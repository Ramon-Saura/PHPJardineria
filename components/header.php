<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weave</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="/weave/styles/styles.css">
    <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="header">
        <?php 
            if(!isset($_SESSION['login'])){
                $_SESSION['login'] = 'login';
            }else{
                if($_SESSION['login'] != 'login'){
                    $_SESSION['login'] = $_SESSION['login'];
                }
            }
        ?>
        <h1>Weave</h1>
        <button class="header-login_button"><!-- <i class="bi bi-list bi-10" style="color: #fff; font-size: 25px"></i> --><?php if($_SESSION['login'] != 'login'){ echo 'Login';}else{echo 'Register';} ?></button>
    </div>