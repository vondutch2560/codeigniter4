
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?= $this->include('/partials/sidebar') ?>
<div class="content">
    <div>
        <?php foreach($blogs as $blog) : ?>
            <?= view_cell('\App\Libraries\Blog::blogItem', ['blogItem' => $blog]) ?>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>