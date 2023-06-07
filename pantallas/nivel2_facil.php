<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCUCHA Y RESPONDE</title>
    
    <style>
        /* Estilos CSS para los elementos de la página */
        h1 {
            color: rgb(91, 8, 12);
            font-size: 45px;
        }

        button {
            display: inline-block;
            width: 100px;
            background-color: rgb(127, 206, 256);
            border-radius: 10px;
            padding: 15px 30px;
            margin: 5px;
            color: #22083c;
            text-decoration: none;
        }

        button:hover {
            background-color: transparent;
            border: 2px solid blue;
            color: blue;
        }

        #texto {
            display: block;
            width: 300px;
            height: 50px;
            font-size: 18px;
            margin: 20px auto;
        }

        .boton-borrar {
            background-color: red;
            color: white;
            text-decoration: none;
        }

        .boton-siguiente {
            background-color: violet;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <center>
        <h1>ESCUCHA Y RESPONDE</h1>
        <img src="Imagenes/mono.jpg" alt="Imagen" onclick="reproducirSonido()">
        <audio id="sonido" src="Sonidos/sonidoMono.mp3" preload="auto"></audio>

        <script>
            function reproducirSonido() {
                var audio = document.getElementById("sonido");
                audio.play();
            }
        </script>

        <h1>COMPLETA LA PALABRA</h1>
        <input type="text" id="texto" placeholder="coloque las palabras aqui" readonly>
        
        <button onclick="borrarTexto()" class="boton-borrar">Borrar</button>

        <button onclick="agregarTexto('CA')">CA</button>
        <button onclick="agregarTexto('NO')">NO</button>
        <button onclick="agregarTexto('MA')">MA</button>
        <button onclick="agregarTexto('MO')">MO</button>
        <button onclick="agregarTexto('PO')">PO</button>

        <button onclick="siguienteNivel()" class="boton-siguiente">Siguiente Nivel</button>
    </center>

    <script>
        function agregarTexto(texto) {
            var input = document.getElementById("texto");
            input.value += texto;

            // Verificar si la palabra completa ha sido formada
            if (input.value.toLowerCase() === "mono") {
                alert("¡FELICIDADES ES CORRECTO!");
            }
        }

        function borrarTexto() {
            var input = document.getElementById("texto");
            input.value = "";
        }

        function siguienteNivel() {
            // Aquí puedes agregar la lógica para pasar al siguiente nivel del juego
            // Puedes redirigir al usuario a la página del siguiente nivel o realizar otras acciones necesarias
           
            alert("¡Pasando al siguiente nivel!");
        }
    </script>

    <dr>
        <button onclick="location.href='NivelesP.php'">Atras</button>
    </dr>
</body>
</html>
