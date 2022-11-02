<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lector CFDI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3d68344ae4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <h1>
            Lector CFDI
        </h1>
        <p>
            Selecciona archivos XML
        </p>
        <section class="carga">
            <form action="index.php?controller=factura&action=readCFDIMethod" method="POST" enctype="multipart/form-data" class="form">
                <div class="wrapper">
                    <input type="file" name="cfdi[]" id="cfdi" multiple>
                    <label for="cfdi" class="wp-file"><i class="fa-solid fa-upload"></i></label>
                </div>
                <div class="info">
                    <p id="inf-text"></p>
                </div>

                <div class="button">
                    <button class="btn">Enviar</button>
                </div>
            </form>
        </section>
    </div>

    <script src="assets/js/main.js"></script>
</body>

</html>