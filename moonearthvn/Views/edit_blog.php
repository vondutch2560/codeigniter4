
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h1><?= $title ?></h1>
<div class="row">
    <div class="new-post">
        <form method="post">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="blog_title" value="<?= $post['blog_title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea name="blog_content" id="" cols="30" rows="10"><?= $post['blog_content'] ?></textarea>
            </div>
            <div class="form-group">
                <button>Edit</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>