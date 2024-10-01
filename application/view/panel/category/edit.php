<?php $this->view('panel.layout.header') ?>


<form method="post" action="<?= $this->url('category/update').'/'.$category['id'] ?>">
    <section class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" value="<?= $category['name'] ?>">
    </section>
    <section class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description" id="description" value="<?= $category['description'] ?>" placeholder="description ...">
    </section>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php $this->view('panel.layout.footer') ?>
