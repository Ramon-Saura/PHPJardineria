<?php
require($_SERVER['DOCUMENT_ROOT'] . '/weave/components/header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/weave/db/db_customers.php');
?>
<div class="customer-list">
    <div class="header-list">
            <h3 class="header-list_title">Customers</h3>
            <button class="header-list_button" onclick="addCustomer()">+</button>
    </div>
    <?php
        foreach($customers as $customer){?>
        <form class="header-list_customers" action="/weave/view/customer-detail.php" method="post">
            <button type="submit" class="customer-button" value="<?php echo $customer['customer_id']; ?> " name="customer">
                <div><?php echo $customer['customer_name'],' ', $customer['customer_surname']; ?> </div>
            </button>
        </form>
        <?php }
    ?>
</div>
<script src="/weave/scripts/utils.js"></script>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/weave/components/footer.php');
?>