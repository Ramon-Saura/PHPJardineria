<?php
    require($_SERVER['DOCUMENT_ROOT'].'/weave/components/header.php');
    require($_SERVER['DOCUMENT_ROOT'].'/weave/db/db_tasks.php');
?>
<div class="task-form">
    <h2>Create Task</h2>
    <form action="/weave/view/task-form.php" method="post">
        <label>Title</label>
        <input type="text" name="title" required>
        <label>Task desciption</label>
        <textarea name="task_body" cols="30" rows="10" required></textarea>
        <label>Start</label>
        <input type="date" name="start" required>
        <label>End</label>
        <input type="date" name="end" required>
        <input type="hidden" name="created_by" value="1">
        <label>Client</label>
        <select name="customer" required>
            <!-- foreach client-->
            <option value="customer_id">Customer name</option>
        </select>
        <!-- foreach employee-->
        <div class="form-checkbox">
            <label>employee name</label>
            <input type="checkbox" name="employee_name">
        </div>
        <input class="button" type="submit" name="create_task" value="Create">
    </form>
</div>
<?php
    require($_SERVER['DOCUMENT_ROOT'].'/weave/components/footer.php');
?>