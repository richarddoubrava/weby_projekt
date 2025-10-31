<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $this ->include("layout/assects-css") ?>
</head>

<body>
<?=   $this ->include("layout/navbar") ?>

<div class="container-fluid">
    <?= $this->renderSection('content') ?>
</div>

<!-- 12. dinamicky obsah, vzdy se v tomto bude liset stranka od druhe -->
<?=   $this ->include("layout/assects-js") ?>
</body>

</html>