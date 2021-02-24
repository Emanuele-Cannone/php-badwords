<?php 
    $cognome = $argv[1];
    $altro = $argv[2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>ciao sono <?php echo 'NOME' .$cognome .$altro; ?></h1>



    <h2>ciao io sono <?php echo $_GET['primovalore'] ?></h2>
</body>
</html>