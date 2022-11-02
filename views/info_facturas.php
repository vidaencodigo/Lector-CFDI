<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style_with_bootstrap.css">
</head>

<body>
    <div class="container">
        <section class="heading">
            <h3>
                Lista de facturas
            </h3>
        </section>
        <section>
            <a href="index.php?controller=index&action=indexMethod">Regresar...</a>
        </section>
        <section class="info">
            <table class="table">
                <thead>
                    <th># </th>
                    <th>Emisor</th>
                    <th>Receptor</th>
                    <th>SubTotal</th>
                    <th>IVA Traslado</th>
                    <th>Total</th>
                </thead>

                <tbody>
                    <?php
                    $cc = 0;
                    $sub = 0;
                    $tras = 0;
                    $tot = 0;
                    foreach ($_FILES["cfdi"]['tmp_name'] as $key => $tmp_name) :
                        $factura = ($_FILES["cfdi"]["tmp_name"][$key]); # get file names on temp

                        if (is_file($factura)) : # valida si existe un archivo en memoria
                            $nuevaF = new FACTURA;

                            $nuevaF->file_ = $factura;
                            $nuevaF->loader();
                            if ($nuevaF->_subtotal != 0) :
                                $sub += $nuevaF->_subtotal;
                                $tras += $nuevaF->_traslado;
                                $tot += ($nuevaF->_traslado + $nuevaF->_subtotal);
                    ?>
                                <tr>
                                    <td>
                                        <?= $cc += 1; ?>
                                    </td>
                                    <td>
                                        <?= $nuevaF->_emisor ?>
                                    </td>
                                    <td>
                                        <?= $nuevaF->_receptor ?>
                                    </td>
                                    <td>
                                        <?= $nuevaF->_subtotal ?>
                                    </td>
                                    <td>
                                        <?= $nuevaF->_traslado ?>
                                    </td>
                                    <td>
                                        <?= $nuevaF->_traslado + $nuevaF->_subtotal ?>
                                    </td>
                                </tr>
                    <?php
                            endif;
                        endif;
                    endforeach;

                    ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="bg-success text-white">TOTALES</td>
                        <td><?= $sub ?></td>
                        <td><?= $tras ?></td>
                        <td><?= $tot ?></td>
                    </tr>
                </tbody>
            </table>
        </section>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>