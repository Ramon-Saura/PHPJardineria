<?php 
session_start();

require($_SERVER['DOCUMENT_ROOT'].'/weave/db_connection.php');

if(isset($_POST['customer'])){

    $customer_id = $_POST['customer'];
    
    $sql_get_customer = "SELECT * FROM customers_improved WHERE customer_id = $customer_id";

    if($result_customer = mysqli_query($conn, $sql_get_customer)){
        $customer = mysqli_fetch_all($result_customer, MYSQLI_ASSOC);
        if(count($customer) == 0){
            $sql_get_customer = "SELECT * FROM customers WHERE customer_id = $customer_id";
            $result_customer = mysqli_query($conn, $sql_get_customer);
            $customer = mysqli_fetch_all($result_customer, MYSQLI_ASSOC);
        }
    }

    mysqli_close($conn);

}

if(isset($_POST['create_customer'])){

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $i = 0;

    $sql_insert_customer = "INSERT INTO customers (customer_name,customer_surname,customer_phone,customer_mail) VALUES ('$name','$surname','$phone','$mail')";

    $result_insert_customer = mysqli_query($conn, $sql_insert_customer);

    mysqli_close($conn);

    while(isset($_POST['address'.$i])){

        require($_SERVER['DOCUMENT_ROOT'].'/weave/db_connection.php');

        $address = $_POST['address'.$i];
        $latitude = $_POST['latitude'.$i];
        $longitude = $_POST['longitude'.$i];
        
        $sql_insert_address = "INSERT INTO houses (house_address, house_latitude, house_longitude) VALUES ($address,$latitude,$longitude)";
        
        $result_insert_address = mysqli_query($conn, $$sql_insert_address);
        
        mysqli_close($conn);

        require($_SERVER['DOCUMENT_ROOT'].'/weave/db_connection.php');
        
        $sql_insert_house_assignament = "CALL insert_assignament_customer_house($customer_id)";

        $result_insert_house_assignament = mysqli_query($conn, $sql_insert_house_assignament);

        mysqli_close($conn);

        $i++;

    }

}

if(isset($_POST['send_edit'])){

    $customer_id = $_POST['send_edit'];
    
    $sql_get_customer = "SELECT * FROM customers WHERE customer_id = $customer_id";
    $result_customer = mysqli_query($conn, $sql_get_customer);
    $customer = mysqli_fetch_all($result_customer, MYSQLI_ASSOC);

    mysqli_close($conn);
}

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $id = $_POST['id'];

    $sql_update_customer = "UPDATE customers SET customer_name = '$name', customer_surname = '$surname', customer_phone = '$phone', customer_mail = '$mail' WHERE customer_id = '$id'";
    if(mysqli_query($conn, $sql_update_customer)){
        $sql_get_customer = "SELECT * FROM customers WHERE customer_id = $id";
        $result_customer = mysqli_query($conn, $sql_get_customer);
        $customer = mysqli_fetch_all($result_customer, MYSQLI_ASSOC);

        mysqli_close($conn);
    }
}

require($_SERVER['DOCUMENT_ROOT'].'/weave/db_connection.php');

$sql_get_customers = "SELECT * FROM customers";

$result_customers = mysqli_query($conn, $sql_get_customers);

$customers = mysqli_fetch_all($result_customers, MYSQLI_ASSOC);

?>