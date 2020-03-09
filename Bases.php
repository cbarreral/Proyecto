<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distracciones</title>
    <?php
  require_once 'css/css.php';
  ?>
</head>

<body class="">
    <?php
  require_once 'menu_CerrarSesion.php';
  ?>


    <br><br><br><br><br>
    <div class="container ">




        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">Nombre de Equipo</th>
                    <th scope="col">Lider de equipo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select class="center browser-default custom-select">
                            <option selected>Selecciona el Nombre de Equipo</option>
                            <option value="1">peerito</option>
                            <option value="2">lobos</option>
                            <option value="3">etc</option>
                        </select>
                    </td>

                    <td>
                        <input type="text" id="inputDisabledEx2" class="form-control" placeholder="Lider de Equipo"
                            disabled>
                    </td>

                </tr>

            </tbody>
        </table>



        <div class="container my-5 z-depth-1">


            <!--Section: Content-->
            <section class="dark-grey-text">

                <div class="row pr-lg-5">
                    <div class="col-md-7 mb-4">

                        <div class="view">
                            <br><br>
                            <input type="text" id="inputDisabledEx2" class="form-control"
                                placeholder="Nombre de la Distracción" disabled>
                            <br>

                            <table>
                                <tr>
                                    <button type="button" class="btn btn-success">Iniciar Temporizador</button>
                                    <br> <br>

                                    <td class="form-control" id="minDistraccion">00</td>
                                    <td class="font-weight-bold mb-4"><samp>min:</samp></td>
                                    <td class="form-control" id="secDistraccion">00</td>
                                    <td class="font-weight-bold mb-8"><samp>seg</samp></td>
                                </tr>
                            </table><br>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultChecked2">
                                <label class="custom-control-label" for="defaultChecked2">Concluyo distracción</label>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 d-flex align-items-center">
                        <div>
                            <br><br>
                            <h3 class="font-weight-bold mb-4">Descripción de distracción</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adip elit. Maiores deleniti explicabo voluptatem
                                quisquam nulla asperiores aspernatur aperiam voluptate et consectetur minima delectus,
                                fugiat eum soluta blanditiis adipisci, velit dolore magnam.</p>
                            <br><br>
                        </div>
                    </div>

                </div>

            </section>
            <!--Section: Content-->


        </div>
        <div class="container my-5 z-depth-1">


            <!--Section: Content-->
            <section class="dark-grey-text">

                <div class="row pr-lg-5">
                    <div class="col-md-7 mb-4">

                        <div class="view">
                            <br><br>
                            <input type="text" id="inputDisabledEx2" class="form-control"
                                placeholder="Nombre del Reto" disabled>
                            <br>

                            <table>
                                <tr>
                                    <button type="button" class="btn btn-success">Iniciar Temporizador</button>
                                    <br> <br>

                                    <td class="form-control" id="minReto">00</td>
                                    <td class="font-weight-bold mb-4"><samp>min:</samp></td>
                                    <td class="form-control" id="secReto">00</td>
                                    <td class="font-weight-bold mb-8"><samp>seg</samp></td>
                                </tr>
                            </table><br>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultChecked3">
                                <label class="custom-control-label" for="defaultChecked3">Concluyo Reto</label>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 d-flex align-items-center">
                        <div>
                            <br><br>
                            <h3 class="font-weight-bold mb-4">Descripción de distracción</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adip elit. Maiores deleniti explicabo voluptatem
                                quisquam nulla asperiores aspernatur aperiam voluptate et consectetur minima delectus,
                                fugiat eum soluta blanditiis adipisci, velit dolore magnam.</p>
                            <br><br>
                        </div>
                    </div>

                </div>

            </section>
            <!--Section: Content-->


        </div>
        <br><br>


        <button type="button" class="btn btn-success">Capturar Datos</button>
        <br><br>
      
    </div>
    <?php
  require_once 'ModalIniciarSesión.php';
  require_once 'footer.php';
  require_once 'js/js.php';
?>
<script  src="js/retoTemporizador.js"></script>
	<script  src="js/distraccionTemporizador.js"></script>

</body>

</html>