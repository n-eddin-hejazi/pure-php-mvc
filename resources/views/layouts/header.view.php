<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title><?= getTitle() ?></title>

     <script src="https://cdn.tailwindcss.com"></script>
    <?php if (str_contains($_SERVER['REQUEST_URI'], "login") || str_contains($_SERVER['REQUEST_URI'], "register")): ?>
        <script src="https://www.google.com/recaptcha/api.js?render=<?= env('RECAPTCHA_SITE_KEY'); ?>"></script>
    <?php endif ?>

</head>
<body>
<?php include view_path() . 'layouts/navbar.view.php'; ?>   


     
