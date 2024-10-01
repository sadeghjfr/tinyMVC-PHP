<?php $this->view('panel.layout.header') ?>


<form method="post" action="<?= $this->url('article/update').'/'.$article['id'] ?>">
    <section class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" value="<?= $article['title'] ?>" ">
    </section>
    <section class="form-group">
        <label for="cat_id">Category</label>
        <select class="form-control" name="cat_id" id="cat_id">
            <?php foreach ($categories as $category){ ?>
                <option <?php if ($category['id'] == $article['cat_id']) {echo 'selected';} ?>
                        value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
            <?php } ?>
        </select>
    </section>
    <section class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" id="body" rows="5" placeholder="body ..."><?= $article['body'] ?></textarea>
    </section>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php $this->view('panel.layout.footer') ?>
