<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prod_list_02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <?php
    $num_productes = $_POST['numProducts'];
    ?>
    <form action="prod_list_03.php" method="post">
        <table class="table  w-50 table-striped table-dark center">
            <thead>
                <tr>
                    <th colspan="4">
                        Products and Price
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < $num_productes; $i++) {
                    # code...
                    echo '<tr>
    <td>Product Name </td>
    <td><input type="text" name="product_name[]" id=""></td>
    <td>Price</td>
    <td><input type="text" name="product_price[]" id=""></td>
    </tr>';
                }
                ?>
                <tr>
                    <td colspan="4" align="center">
                        <button class="btn btn-outline-light" type="submit">Enviar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>