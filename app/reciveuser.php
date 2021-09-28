<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <?php
$nom=$_POST['nom'];
$email=$_POST['email'];?>

<div class="container">
<h5>Recibido de index.php</h5>    
    <label for="nom">Nom</label>
    <input type="text" name="nom"  value="<?php echo $nom?>">
    <label for="email">Email</label>
    <input type="text" name="email" value=<?php echo $email?>>
    

</div>
</body>