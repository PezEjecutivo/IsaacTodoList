<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Añadir enemigo</title>
</head>

<body>
    <div class="container-sm">
        <form action="/enemigos" method="POST">
            <h5>Añadir enemigo:</h5>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre: </span>
                <input type="text" name="name" class="form-control" value="">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tipo: </span>
                <input type="text" name="type" class="form-control" value="">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Vida: </span>
                <input type="text" name="health" class="form-control" value="">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Daño: </span>
                <input type="text" name="damage" class="form-control" value="">
            </div>

            <!--<input type=hidden name='Id' value='<?= (isset($_POST['Id']) ? $_POST['Id'] : '') ?>'>-->

            <div>
                <button class="btn btn-primary" type="submit">Añadir</button>
            </div>
        </form>
    </div>
</body>

</html>