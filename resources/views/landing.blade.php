<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenido</title>
        <style>
            /* Estilos para el fondo y el texto "Bienvenido"  */
            body {
                background-color: #222222;
            }
            h1 {
                color: #ffffff;
                font-family: Helvetica, Arial, sans-serif;
                font-size: 36px;
                text-align: center;
                position: absolute;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            /* Estilos para el texto "Número 1" y "Número 2" */
            p {
                color: #ffffff;
                font-size: 24px;
                font-family: Helvetica, Arial, sans-serif;
                text-align: center;
                position: absolute;
                top: 20%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            /* Estilos para la calculadora */
            .calculator {
                color: #ffffff;
                font-size: 18px;
                font-family: Helvetica, Arial, sans-serif;
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            /* Estilos para los cuadros de entrada de números */
            input[type="number"] {
                width: 100px;
                padding: 5px;
                margin-right: 10px;
                font-size: 18px;
            }
            /* Estilos para el resultado de la suma */
            #result {
                color: #ffffff;
                font-size: 24px;
                font-family: Helvetica, Arial, sans-serif;
                text-align: center;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <!-- Texto "Bienvenido" en grande -->
        <h1 id="welcome">¡Bienvenido!</h1>
        <div class="calculator">
            <!-- Formulario para ingresar los números -->
            <form method="post">
                <input type="number" name="number1" placeholder="Número 1" oninput="sum()"> <!-- Cuadro de entrada para el primer número -->
                <input type="number" name="number2" placeholder="Número 2" oninput="sum()"> <!-- Cuadro de entrada para el segundo número -->
            </form>
            <div id="result"></div> <!-- Elemento para mostrar el resultado de la suma -->
            <script>
                function sum() {
                    /* Obtener los valores de los cuadros de entrada de números */
                    var number1 = document.getElementsByName("number1")[0].value;
                    var number2 = document.getElementsByName("number2")[0].value;
                    /* Convertir los valores a números y sumarlos */
                    var result = parseFloat(number1) + parseFloat(number2);
                    /* Mostrar el resultado de la suma en el elemento "result" */
                    document.getElementById("result").innerHTML = result;
                }
            </script>
        </div>
    </body>
</html>
