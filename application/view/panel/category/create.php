<?php $this->view('panel.layout.header') ?>


<form method="post" action="<?= $this->url('category/store') ?>">
    <section class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="name ...">
    </section>
    <section class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description" id="description" placeholder="description ...">
    </section>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

<?php $this->view('panel.layout.footer') ?>
