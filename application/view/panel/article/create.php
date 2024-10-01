<?php $this->view('panel.layout.header') ?>

<form method="POST" action="<?= $this->url('article/store') ?>">
    <section class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="title ...">
    </section>
    <section class="form-group">
        <label for="cat_id">Category</label>
        <select class="form-control" name="cat_id" id="cat_id">
            <?php foreach ($categories as $category){ ?>
            <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
            <?php } ?>
        </select>
    </section>
    <section class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" id="body" rows="5" placeholder="body ..."></textarea>
    </section>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

<?php $this->view('panel.layout.footer') ?>
