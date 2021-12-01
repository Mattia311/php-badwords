<?php
$text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum hic minus pariatur ipsum deleniti voluptates aspernatur molestiae voluptatem illum quis quas sed non optio ad, est natus ipsam exercitationem voluptas, amet similique, dicta magni molestias vitae voluptatibus. Aut velit inventore, vitae, ab magnam nemo beatae libero veritatis in autem accusamus!";
var_dump($text);
var_dump(strlen($text));

$censurata = str_replace('ipsum', '***', $text);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <h3>
    <?php 
    echo $text;
    ?>
    la lunghezza del paragrafo è di:
    <?php
    echo strlen($text);
    ?>
    </h3>
    <h3>
    <?php
    echo $censurata;
    ?>
    la lunghezza del paragrafo con la censure è di:
    <?php
    echo strlen($censurata)
    ?>
    </h3>
    
</body>
</html>