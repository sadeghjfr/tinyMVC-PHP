<?php $this->view('app.layout.header', ['categories' => $categories]) ?>

<section class="container my-5">
    <!-- Example row of columns -->
    <section class="row">
        <section class="col-md-12">

            <h1><?= $article['title'] ?></h1>

            <h5>
                <a href="<?= $this->url('home/category')."/". $article['cat_id'] ?>"
                   class="d-flex justify-content-between align-items-center"><?= $article['category'] ?>
                </a>

                <span class="date-time"><?= $article['created_at'] ?></span>
            </h5>

            <article class="bg-article p-3">
                <p><?= $article['body'] ?></p>
            </article>
        </section>
    </section>
</section>

<?php $this->view('app.layout.footer') ?>
