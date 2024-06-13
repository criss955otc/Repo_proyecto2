<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="cuerpo">

    <form id="sumForm" method="post" action="<?php echo base_url()?> ">
        <div class="form-floating mb-3">
            <input type="num" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Numero 1</label>
        </div>
        <div class="form-floating">
            <input type="num" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Numero 2</label>
        </div>

        <div class="parrafo">
            <p>Esta pagina se va a descontrolar</p>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit">Sumalo</button>
        </div>

    </form>

    <div class="resultado">
        <h1 id="result"></h1>
    </div>



</body>


</html>