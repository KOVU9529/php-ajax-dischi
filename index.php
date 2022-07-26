<?php
//Rendo accessebile il database
 include __DIR__ . '/database.php';?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<header>
<img class="headerImage" src="./css/download.png" alt="logo">
</header>
<main class="container-card">
    <!--Imposto il ciclo foreach-->
    <?php foreach($database as $data){?>
        <div class="card">
            <!--Echo adesso può stampare, non è un array-->
            <img class="image" src="<?php echo $data['poster'];?>" alt="">
            <h2><?php echo $data['title'];?></h2>
            <h3><?php echo $data['author'];?></h3>
            <h4><?php echo $data['year'];?></h4>
        </div>
    <?php } ?>
</main>
</body>
</html>