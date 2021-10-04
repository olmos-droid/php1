<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prod_list_01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <form action="prod_list_02.php" method="post">
        <table class="table  w-50 table-striped table-dark center">
            <thead>
                <tr>
                    <th colspan="2">
                        Product's list
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Numero de productes:
                    </td>
                    <td>
                        <input type="number" name="numProducts" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button class="btn btn-outline-light" type="submit">Generar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>