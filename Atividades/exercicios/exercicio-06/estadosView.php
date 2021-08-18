<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Banco de Dados WEB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="jumbotron">
        <h1 align="center">Lista de Estados</h1>
    </div>

    <div align="center">
        <table class="table" style="width:70%">
            <tr>
                <th class="table-primary">ID</th>
                <th class="table-primary">Nome</th>
            </tr>

            <?php
            while ($e = $estados->fetch()) {
                echo "<tr><td>" . $e["id"] . " </td>";
                echo "<td>" . $e["nome"] . " </td></tr>";
            }
            ?>
        </table>
    </div>


</body>

</html>