<?php
    require($_SERVER['DOCUMENT_ROOT'].'/weave/components/header.php');
    require($_SERVER['DOCUMENT_ROOT'].'/weave/db/db_customers.php');
?>
<div class="task-form">
    <h2>Add Customer</h2>
    <form action="/weave/view/customer-form_add.php" method="post">
        <label>Name</label>
        <input type="text" name="name" required>
        <label>Surname</label>
        <input type="text" name="surname" required>
        <label>Phone</label>
        <input type="tel" name="phone" required>
        <label>Mail</label>
        <input type="mail" name="mail" required>
        <button class="button" onclick="addAddressForm()">Add Address</button>
        <div id="add-address_container"></div>
        <button class="button" type="submit" name="create_customer">Add Customer</button>
    </form>
</div>
<script src="/weave/scripts/utils.js"></script>
<?php
    require($_SERVER['DOCUMENT_ROOT'].'/weave/components/footer.php');
?>