<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Taula</title>
</head>

<body>
    <div class="container">
        <form action="/app/components/controller/futbol_01_controller.php" method="post">
            <table class="table  w-50 table-striped table-dark table-hover ">
                <tbody>
                    <form action="futbol_01_controller.php" method="post">
                        <tr>
                            <!-- <td>Numero de jugador</td>
                            <td><input type="number" name="player"> </td> -->
                            <td>Numero de partits</td>
                            <td><input type="number" name="match"> </td>
                            <td><button type="submit" class="btn btn-dark">Crear Taula</button> </td>
                        </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>