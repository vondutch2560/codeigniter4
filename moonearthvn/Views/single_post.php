
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?= $this->include('/partials/sidebar') ?>
    <h1><?= $title ?></h1>
    <a href="/blog/delete/<?= $post['id']?>">Delete Post</a>
    <a href="/blog/edit/<?= $post['id']?>">edit Post</a>
</body>
</html>
<?= $this->endSection() ?>