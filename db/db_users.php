<p>esteim alla on toca</p>

<?php

    session_start();

    require($_SERVER['DOCUMENT_ROOT'].'/weave/db_connection.php');

    $sql = 'SELECT * FROM employees';

    $result = mysqli_query($conn, $sql);

    $employees = mysqli_fetch_all($result, MYSQLI_ASSOC);

    print_r($employees);
?>