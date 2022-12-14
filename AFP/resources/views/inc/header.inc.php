<?php

$webCim = 'Funkcionális Edzés';

?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".style/home.css">
    <?php if(!empty($webCim)): ?>
        <title><?php echo $webCim ?></title>
    <?php else: ?>
        <title>A funkcionális edzésterv</title>
    <?php endif; ?>
</head>
<body>
        <header>
            <h1>A funkcionális Edzés</h1>
            <nav>
                <a href="../home.blade.php">Kezdőoldal</a>
                <a href="../nav1.php">nav1</a>
                <a href="../nav2.php">nav2</a>
                <a href="../nav3.php">nav3</a>
                <a href="">nav4</a>
            </nav>
        </header>
        <main>
        <?php if (!empty($webCim)): ?>
            <h2><?php echo $webCim; ?></h2>
        <?php endif; ?>
    
