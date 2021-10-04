<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prod_list_03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <?php
    $nom_producte = $_POST['product_name'];
    $preu_productes = $_POST['product_price'];
    ?>

    <table class="table  w-50 table-striped table-dark center">
        <thead>
            <tr>
                <td colspan="3" align="center">
                    <h4>
                        Taula product/price
                    </h4>
                    </d>
            </tr>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Name Product
                </th>
                <th>
                    Price Product
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($nom_producte); $i++) {
                echo '<tr> <td>', $i + 1, '</td>';
                if (!empty($nom_producte[$i])) {
                    echo '<td>', $nom_producte[$i], '</td>';
                } else {
                    echo '<td>Product not inserted</td>';
                }

                echo '</td><td>', $preu_productes[$i], '</td></tr>';
            }
            ?>
        </tbody>

    </table>


</body>

</html>