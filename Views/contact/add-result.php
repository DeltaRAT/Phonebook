<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
    <link rel="stylesheet" href=<?= asset_url() ?>css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?= asset_url() ?>css/all.min.css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php  ?>
            <div class="col">
                <?php if($already_Exists): ?>
                    <span class="text-warning">Contact with this number is already exists!</span>
                <?php else:?>
                    <span class="text-<?php $success ? 'success' : 'danger' ?>"> <?= $message ?></span>
                    <?php endif;?>
            </div>
            <div class="row">
                <div class="col">
                    <a href="<?= site_url('')?>"> Go back </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>