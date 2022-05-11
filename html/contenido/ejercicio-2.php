<?php
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    die();
}
$req = $_POST['data'];
$contenido = array(
    'home-tab' => '<h1>Inicio</h1>',
    'exe-2-tab' => '<header class="py-4">
                        <h2>Ejercicio 2</h2>
                    </header>
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-10 col-xl-9 col-lg-8 col-md-7 col-sm-6 col-xs-5" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-5 col-sm-6 col-xs-7" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>
                        </div>
                    </div>',
    'exe-3-tab' => '<header class="py-4">
                        <h2>Ejercicio 3</h2>
                    </header>
                    <div class="container justify-content-center" style="max-width: 720px;">
                        <h3>Fixed container</h3>
                        <div class="row">
                            <div class="col-4" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>
                            <div class="col-4" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>
                            <div class="col-4" style="background-color: green;">
                                <h4>Columna 3</h4>
                                <p>Contenido de columna 3</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container-fluid justify-content-center">
                        <h3>Fluid container</h3>
                        <div class="row">
                            <div class="col-4" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>
                            <div class="col-4" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>
                            <div class="col-4" style="background-color: green;">
                                <h4>Columna 3</h4>
                                <p>Contenido de columna 3</p>
                            </div>
                        </div>
                    </div>',
    'exe-4-tab' => '<header class="py-4">
                        <h2>Ejercicio 4</h2>
                    </header>
                    <div class="container">
                        <h3>Primer inciso</h3>
                        <div class="row">
                            <div class="col-4" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>
                            <div class="col-md-4" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>
                            <div class="col-4" style="background-color: green;">
                                <h4>Columna 3</h4>
                                <p>Contenido de columna 3</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <h3>Segundo inciso</h3>
                        <div class="row">
                            <div class="col-6" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>
                            <div class="col-lg-6" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <h3>Tercer inciso</h3>
                        <div class="row">
                            <div class="col" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>
                            <div class="col-6" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>
                            <div class="col" style="background-color: green;">
                                <h4>Columna 3</h4>
                                <p>Contenido de columna 3</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <h3>Cuarto inciso</h3>
                        <div class="row">
                            <div class="col" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>
                            <div class="col-auto" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2. Con el valor \'-auto\' a la clase \'col\',
                                    podemos ajustar el tamaño de la columna a su contenido</p>
                            </div>
                            <div class="col" style="background-color: green;">
                                <h4>Columna 3</h4>
                                <p>Contenido de columna 3</p>
                            </div>
                        </div>
                    </div>',
    'exe-5-tab' => '<header class="py-4">
                        <h2>Ejercicio 5</h2>
                    </header>
                    <h3>Inciso 1</h3>
                    <div class="container">
                        <div class="row align-items-start" style="background-color: gray; min-height: 10rem;">
                            <div class="col" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>
                            <div class="col" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>
                            <div class="col" style="background-color: green;">
                                <h4>Columna 3</h4>
                                <p>Contenido de columna 3</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h3>Inciso 2</h3>
                    <div class="container">
                        <div class="row align-items-center" style="background-color: gray; min-height: 10rem;">
                            <div class="col" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>
                            <div class="col" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>
                            <div class="col" style="background-color: green;">
                                <h4>Columna 3</h4>
                                <p>Contenido de columna 3</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h3>Inciso 3</h3>
                    <div class="container">
                        <div class="row align-items-end" style="background-color: gray; min-height: 10rem;">
                            <div class="col" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>

                            <div class="col" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>

                            <div class="col" style="background-color: green;">
                                <h4>Columna 3</h4>
                                <p>Contenido de columna 3</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h3>Inciso 4</h3>
                    <div class="container">
                        <div class="row" style="background-color: gray; min-height: 10rem;">
                            <div class="col align-self-start" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>

                            <div class="col align-self-center" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>

                            <div class="col align-self-end" style="background-color: green;">
                                <h4>Columna 3</h4>
                                <p>Contenido de columna 3</p>
                            </div>
                        </div>
                    </div>',
    'exe-6-tab' => '<header class="py-4">
                        <h2>Ejercicio 6</h2>
                    </header>
                    <div class="container">
                        <h3>Fila 1 (end)</h3>
                        <div class="row justify-content-end" style="background-color: gray; width: 100%;">
                            <div class="col-3" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>
                            <div class="col-3" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>
                        </div>
                        <br>
                        <h3>Fila 2 (start)</h3>
                        <div class="row justify-content-start" style="background-color: gray; width: 100%;">
                            <div class="col-3" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>
                            <div class="col-3" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>
                        </div>
                        <br>
                        <h3>Fila 3 (center)</h3>
                        <div class="row justify-content-center" style="background-color: gray; width: 100%;">
                            <div class="col-3" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>
                            <div class="col-3" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>
                        </div>
                        <br>
                        <h3>Fila 4 (between)</h3>
                        <div class="row justify-content-between" style="background-color: gray; width: 100%;">
                            <div class="col-3" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>
                            <div class="col-3" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>
                        </div>
                        <br>
                        <h3>Fila 5 (around)</h3>
                        <div class="row justify-content-around" style="background-color: gray; width: 100%;">
                            <div class="col-3" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>
                            <div class="col-3" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>
                        </div>
                        <br>
                        <h3>Fila 6 (evenly)</h3>
                        <div class="row justify-content-evenly" style="background-color: gray; width: 100%;">
                            <div class="col-3" style="background-color: red;">
                                <h4>Columna 1</h4>
                                <p>Contenido de columna 1</p>
                            </div>
                            <div class="col-3" style="background-color: blue;">
                                <h4>Columna 2</h4>
                                <p>Contenido de columna 2</p>
                            </div>
                        </div>
                        <br>
                    </div>'
);
echo json_encode($contenido[$req]);