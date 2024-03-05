<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Isaac Todo List</title>
</head>

<body>
    <h1 style="text-align: center;">Bienvenido a Isaac Todo List</h1>
    <div class="container-sm">
        <?php
        print("<table class='table'>");
        print("<tr>");
        print("<th scope='col'> ID </th>");
        print("<th scope='col'> Nombre </th>");
        print("<th scope='col'> Tipo </th>");
        print("<th scope='col'> Health </th>");
        print("<th scope='col'> Damage </th>");
        print("<th scope='col'> &nbsp </th>");
        print("<th scope='col'> &nbsp </th>");
        print("<tr>");
        foreach ($enemigos as $enemigo) {
            print("<tr>");
            print("<td>" . $enemigo["id"] . "</td>\n");
            print("<td>" . $enemigo["name"] . "</td>\n");
            print("<td>" . $enemigo["type"] . "</td>\n");
            print("<td>" . $enemigo["health"] . "</td>\n");
            print("<td>" . $enemigo["damage"] . "</td>\n");
            print("<td><button class='btn btn-primary'> Actualizar </button></td>");
            print("<td><button class='btn btn-danger'> Eliminar </button></td>");
            print("</tr>");
        }
        print("</table>");
        ?>
        <form action="/enemigos/create" method="GET">
            <button class="btn btn-primary">Añadir enemigo</button>
        </form>
    </div>

</body>

</html>