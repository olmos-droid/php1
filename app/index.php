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
    <div class="container">
        <?php 
$A = 2;
$B = 4 ;
$resul
?>
        <h5 class="h5">Pildora 1: Syntaxis
        </h5>
        <table class="table">
            <thead>
                <tr>
                    <td scope="col">Operacion</td>
                    <td scope="col">valor</td>
                </tr>
            </thead>
            <tr scope="row">
                <td>A</td>
                <td><?php echo$A?> </td>

            </tr>
            <tr scope="row">
                <td>B</td>
                <td><?php echo$B?> </td>
            </tr>

            <tr scope="col">
                <td>A+B</td>
                <td><?php echo($A+$B) ?> </td>
            </tr>
            <tr scope="col">
                <td>A-B</td>
                <td><?php echo($A-$B) ?> </td>
            </tr>
            <tr scope="col">
                <td>A*B</td>
                <td><?php echo($A*$B) ?> </td>
            </tr>
            <tr scope="col">
                <td>A/B</td>
                <td><?php echo($A/$B) ?> </td>
            </tr>
            <tr scope="col">Pildora 1: Syntaxis

                <td>AexpB</td>
                <td><?php echo(pow($A,$B)) ?> </td>
            </tr>
        </table>
    </div>
    <div class="container">
        <h5 class="h5">Pildora 2: Comunicacion entre páginas</h5>
        <form action="reciveuser.php" method="post" class="w-25">
            <div>
                <label for="nom">Nom</label>
                <input class="input-group mb-3 col-sm-2 col-form-label" type="text" name="nom" />
                <label for="email">Email</label>
                <input class="input-group mb-3 col-sm-2 col-form-label" type="email" name="email" />
            </div>
            <p><input type="submit" class="btn btn-primary"/></p>
        </form>
    </div>
</body>

</html>