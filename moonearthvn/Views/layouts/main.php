<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'This page does not have a title' ?></title>
</head>
<body>
<div class="container">
    <?= $this->renderSection('content') ?>
</div>
</body>
</html>