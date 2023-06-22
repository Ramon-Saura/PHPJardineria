<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weave</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="/weave/styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
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
        <a class="header-title" href="/weave/view/main.php">Weave</a>
        <button class="header-login_button" onclick="toggleMenu()"><i class="bi bi-list bi-10" style="color: #fff; font-size: 25px"></i></button>
    </div>
    <?php
        require($_SERVER['DOCUMENT_ROOT'].'/weave/components/menu.php')
    ?>
    <script src="/weave/scripts/menu.js"></script>