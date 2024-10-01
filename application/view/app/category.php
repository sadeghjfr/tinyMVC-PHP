<?php $this->view('app.layout.header', ['categories' => $categories]) ?>

<section class="container my-5">
    <section class="row">
        <section class="col-12">
            <h1><?= $category['name'] ?></h1>
            <hr>
        </section>
    </section>


    <section class="row">
        <?php foreach ($articles as $article){ ?>

            <section class="col-md-4">
                <h2><?= $article['title'] ?></h2>
                <p><?= $article['body'] ?></p>
                <p><a class="btn btn-primary" href="<?= $this->url('home/detail')."/". $article['id'] ?>" role="button">View details »</a></p>
            </section>

        <?php } ?>
    </section>
</section>

<?php $this->view('app.layout.footer') ?>
