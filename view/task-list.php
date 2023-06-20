<?php
    session_start();

    require($_SERVER['DOCUMENT_ROOT'].'/weave/db_connection.php');

    $current_date = $_GET['date'];

    $sql_task_detail = "SELECT * FROM tasks WHERE start = '$current_date'";

    $result_task_detail = mysqli_query($conn, $sql_task_detail);

    $task_detail = mysqli_fetch_all($result_task_detail, MYSQLI_ASSOC);

    
    require($_SERVER['DOCUMENT_ROOT'] . '/weave/components/header.php');
    print_r($task_detail);
?>

<h1><?php echo $current_date ?></h1>

<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/weave/components/footer.php');
?>