<?php
    session_start();

    require($_SERVER['DOCUMENT_ROOT'].'/weave/db_connection.php');

    $id = $_GET['id'];

    $sql_task_detail = "SELECT * FROM tasks WHERE id = '$id'";

    $result_task_detail = mysqli_query($conn, $sql_task_detail);

    $task_detail = mysqli_fetch_all($result_task_detail, MYSQLI_ASSOC);

    
    require($_SERVER['DOCUMENT_ROOT'] . '/weave/components/header.php');
    print_r($task_detail);
?>

<h1><?php echo $task_detail[0]['title'] ?></h1>

<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/weave/components/footer.php');
?>