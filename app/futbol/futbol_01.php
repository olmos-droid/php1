<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="css.css">
    <title>Generador de taula</title>
</head>

<body>
    <div class="h-100 row align-items-center content">
        <form action=" futbol_02.php" method="post">

        <table class="table  w-50 table-striped table-dark center">
                <thead>
                    <tr>
                        
                        <th colspan="2" align="center">
                            Generador de Taula
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td> <label for="player">Numero de jugadores:</label> </td>
                        <td><input type="number" name="player" id=""></td>
                    </tr>

                    <tr>
                        <td> <label for="match">Numero de partidos</label></td>
                        <td> <input type="number" name="match" id=""> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">
                            <button type="submit" class="btn btn-outline-light">Generar</button>
                        </td>
                    </tr>
                </tbody>


            </table>
        </form>
    </div>

</body>

</html>