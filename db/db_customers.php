<?php 
session_start();

require($_SERVER['DOCUMENT_ROOT'].'/weave/db_connection.php');

if(isset($_POST['customer'])){
    $customer_id = $_POST['customer'];
    
    $sql_get_customer = "SELECT * FROM customers WHERE customer_id = $customer_id";

    $result_customer = mysqli_query($conn, $sql_get_customer);

    $customer = mysqli_fetch_assoc($result_customer);

    mysqli_close($conn);
    
    require($_SERVER['DOCUMENT_ROOT'].'/weave/db_connection.php');

    if(isset($customer)){
        
        $sql_get_house_assignament = "SELECT * FROM customer_house_assignament WHERE customer_id = $customer_id";

        $result_house_assignament = mysqli_query($conn, $sql_get_house_assignament);

        $house_assignament = mysqli_fetch_all($result_house_assignament, MYSQLI_ASSOC);

        mysqli_close($conn);
    }

    if(isset($house_assignament)){
        
        $houses = [];
        
        foreach ($house_assignament as $house) {
            require($_SERVER['DOCUMENT_ROOT'].'/weave/db_connection.php');

            $house_id = $house['house_id'];

            $sql_get_house = "SELECT * FROM houses WHERE house_id = $house_id";

            $result_get_house = mysqli_query($conn, $sql_get_house);

            $house = mysqli_fetch_assoc($result_get_house);

            array_push($houses, $house);

            mysqli_close($conn);
        }

    }

}

if(isset($_POST['create_customer'])){}

require($_SERVER['DOCUMENT_ROOT'].'/weave/db_connection.php');

$sql_get_customers = "SELECT * FROM customers";

$result_customers = mysqli_query($conn, $sql_get_customers);

$customers = mysqli_fetch_all($result_customers, MYSQLI_ASSOC);

?>