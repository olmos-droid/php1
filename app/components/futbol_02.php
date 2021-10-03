<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Dades</title>
</head>

<body>
    <?php
    $num_player = $_POST['player'];
    $num_match = $_POST['match'];
    ?>
    <form action="futbol_03.php" method="post">
        <div>
            <table class="table  w-50 table-striped table-dark table-hover ">
                <thead>
                    <tr>
                        <?php
                        for ($row = 0; $row < $num_match + 1; $row++) {
                            if ($row == 0) {
                                echo '<th scope="col"><input type="text" name="primera_row[]" value="Jugadors"></th>';
                            } else {
                                echo '<th scope="col"><input type="text" name="primera_row[]" value="Partido', $row, '"></th>';
                            }
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($row = 0; $row < $num_player; $row++) {
                        echo '<tr>';
                        for ($col = 0; $col < $num_match + 1; $col++) {
                            if ($col == 0) {
                                echo '<th scope="row">';
                                echo '<input type="text" name="nom_jugadors[]">';
                                echo '</th>';
                            } else {
                                echo '<td>';
                                echo '<input type="number" name="num_gols[', $row, '][', $col, ']">';
                                echo '</td>';
                            }
                        }
                    }
                    ?>
                    <tr>

                        <td colspan="<?php echo $col+1?>" align="center">

                            <input type="hidden" name="ncol" value="">
                            <button type="submit" class="btn btn-dark">Generar taula</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </form>
</body>

</html>