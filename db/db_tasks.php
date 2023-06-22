<?php
    session_start();

    require($_SERVER['DOCUMENT_ROOT'].'/weave/db_connection.php');

    if(isset($_POST['create_task'])){
        $title = $_POST['title'];
        $task_body = $_POST['task_body'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $customer = $_POST['customer'];
        $created_by = $_POST['created_by'];

        $sql_add_task = "INSERT INTO tasks (`title`, `task_body`, `start`, `end`, `task_created_by`) VALUES ('$title', '$task_body', '$start', '$end', '$created_by')";

        if(mysqli_query($conn, $sql_add_task)){
            echo '<script>window.location.href="/weave/view/main.php"</script>';
        }else{
            echo 'mooooc!';
        }
    }

    $sql = 'SELECT * FROM tasks';

    $result = mysqli_query($conn, $sql);

    $events = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<script>
    var events = <?php echo json_encode($events) ?>
</script>