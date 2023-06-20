<?php
    session_start();

    require($_SERVER['DOCUMENT_ROOT'].'/weave/db_connection.php');

    $sql = 'SELECT * FROM tasks';

    $result = mysqli_query($conn, $sql);

    $events = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<script>
    var events = <?php echo json_encode($events) ?>
</script>