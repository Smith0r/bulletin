<div class="card">
    <h2>Category Manager</h2>
    <div class="action-bar">
        <a href="index.php?component=content&controller=categories"><i class="fa fa-chevron-left"></i> Back to List</a>
    </div>
    <form action="index.php?component=content&controller=category&task=save" method="post">
        <?php $this->model->form->display(); ?>
    </form>
</div>