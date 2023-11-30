<?php
require($_SERVER['DOCUMENT_ROOT'] . '/weave/components/header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/weave/db/db_customers.php');
?>
<form action="/weave/view/customer-edit.php" method="post" class="customer-detail">
    <div class="header-detail">
        <h3 class="header-detail_title"><?php echo $customer[0]['customer_name'],' ', $customer[0]['customer_surname']; ?></h3>
    </div>
    <div class="header-details">
        <i class="bi bi-person-fill"></i>
        <div>
            <input type="text" value="<?php echo $customer[0]['customer_name']; ?>" name="name" />
            <input type="text" value="<?php echo $customer[0]['customer_surname']; ?>" name="surname" />
        </div>
    </div>
    <div class="header-details">
        <i class="bi bi-telephone-fill"></i>
        <input type="text" value="<?php echo $customer[0]['customer_phone']; ?>" name="phone" />
    </div>
    <div class="header-details">
        <i class="bi bi-envelope-fill"></i>
        <input type="text" value="<?php echo $customer[0]['customer_mail']; ?>" name="mail" />
    </div>
    <div class="header-details">
    <i class="bi bi-plus-circle-fill"></i>
        <button class="button_save" onclick="addAddressForm()">Add Address</button>
    </div>
    <div id="add-address_container"></div>
    <div class="header-details">
        <i class="bi bi-arrow-up-circle-fill"></i>
        <input type="text" hidden readonly value="<?php echo $customer[0]['customer_id']; ?>" name="id" />
        <input class="button_save" type="submit" value="Save" name="save" />
    </div>
</form>
<script src="/weave/scripts/utils.js"></script>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/weave/components/footer.php');
?>