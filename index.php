<?php 
    $testo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint sequi facilis quibusdam soluta ab inventore, tempora doloribus hic asperiores optio quisquam a, nihil minus reiciendis commodi earum ipsam rem maxime.';
    $badword = $_GET[parola]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    
<h2><?php echo $testo; ?></h2> 
<h2>La lunghezza è <?php echo strlen($testo); ?></h2> 
<h2><?php echo str_replace($badword , '***', $testo); ?></h2>

</body>
</html>