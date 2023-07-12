<?php
require($_SERVER['DOCUMENT_ROOT'] . '/weave/components/header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/weave/db/db_customers.php');
?>
<div class="customer-detail">
    <div class="header-detail">
        <h3 class="header-detail_title"><?php echo $customer[0]['customer_name'],' ', $customer[0]['customer_surname']; ?></h3>
        <form action="/weave/view/customer-edit.php" method="post">
            <button class="header-detail_button" type="submit" name="send_edit" value="<?php echo $customer[0]['customer_id']; ?>"><i class="bi bi-pencil-fill"></i></button>
        </form>
    </div>
    <div class="header-details">
        <i class="bi bi-telephone-fill"></i>
        <a href="tel:+34<?php echo $customer[0]['customer_phone']; ?>" target="_blank"><?php echo $customer[0]['customer_phone']; ?></a>
    </div>
    <div class="header-details">
        <i class="bi bi-envelope-fill"></i>
        <a href="mailto:<?php echo $customer[0]['customer_mail']; ?>" target="_blank"><?php echo $customer[0]['customer_mail']; ?></a>
    </div>
    <?php 
        if(isset($customer[0]['house_id'])){
        foreach($customer as $address){ ?>
            <div class="header-details">
                <i class="bi bi-map-fill"></i>
                <a href="https://maps.google.com/?q=<?php echo $address['house_latitude'],',',$address['house_longitude']; ?>" target="_blank"><?php echo $address['house_address']; ?></a>
            </div>
            <?php }
        }
    ?>
</div>
<script src="/weave/scripts/utils.js"></script>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/weave/components/footer.php');
?>