<?php if (isset($_COOKIE['user'])) { header('Location: http://mppp.tk/manage/'); } ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>mppp</title>
        <link rel="stylesheet" href="style.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    </head>
    <body>
        <h1>mppp</h1>
        <p>This is a website which allows you to create a profile page with all the links to your web services like twitter, youtube, facebook, flickr, tumblr... so you'll need to share only onle link instead of ten!</p>
        <p>See an <a href="/mppp/">example</a>!</p>
        <?php require('admin/register.php') ?>
        
        <h2>Manage your acount</h2>
        <p>If you want to manage your existing acount, you have to <a href="/manage/">login.</a></p>
    </body>
</html>