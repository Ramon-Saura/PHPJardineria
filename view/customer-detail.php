<?php
require($_SERVER['DOCUMENT_ROOT'] . '/weave/components/header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/weave/db/db_customers.php');
?>
<div class="customer-detail">
    <div class="header-detail">
        <h3 class="header-detail_title"><?php echo $customer['customer_name'],' ', $customer['customer_surname']; ?></h3>
        <button class="header-detail_button" onclick="editCustomer()"><i class="bi bi-pencil-fill"></i></button>
    </div>
    <div class="header-details">
        <i class="bi bi-telephone-fill"></i>
        <a href="tel:+34<?php echo $customer['customer_phone']; ?>" target="_blank"><?php echo $customer['customer_phone']; ?></a>
    </div>
    <div class="header-details">
        <i class="bi bi-envelope-fill"></i>
        <a href="mailto:<?php echo $customer['customer_mail']; ?>" target="_blank"><?php echo $customer['customer_mail']; ?></a>
    </div>
    <?php 
        foreach($houses as $house){ ?>
            <div class="header-details">
                <i class="bi bi-map-fill"></i>
                <a href="https://maps.google.com/?q=<?php echo $house['house_latitude'],',',$house['house_longitude']; ?>" target="_blank"><?php echo $house['house_address']; ?></a>
            </div>
    <?php }
    ?>
</div>
<script src="/weave/scripts/utils.js"></script>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/weave/components/footer.php');
?>