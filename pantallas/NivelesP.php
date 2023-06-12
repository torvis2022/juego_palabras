<html>
<head>
    <title>ESCOGE UN NIVEL</title> <!-- Título de la página -->
</head>
<style>
    /* Estilos CSS para los elementos de la página */
    title {
        color: rgb(71, 9, 12);
        font-size: 45px;
    }

    button {
        display: block;
        width: 100px;
        background-color: rgb(127, 206, 25);
        border-radius: 20px;
        padding: 20px 23px;
        margin: 20px 13px;
        color: #320841;
        text-decoration: none;
        font-size: 23px; /* Tamaño de fuente más grande */
    }
    body {
        background-image: url("Imagenes/fondoninos.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    button:hover {
        background-color: transparent;
        border: 2px solid blue;
        color: blue;
    }
    /* Establecer imagen de fondo para el botón "Atrás" */
    .boton-atras {
            background-image: url('Imagenes/atrasNiveles.png'); /*  'ruta-de-la-imagen' con la ruta de tu imagen */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
    }
 
</style>
<body></body> <!-- Cuerpo de la página vacío -->
<Center>
    
    <br>
    <button onclick="location.href='Juego.php'">Nivel Facil</button> <!-- Botón para ir a otra página -->
    <button onclick="location.href='Juego.php'">Nivel Normal</button> <!-- Botón para ir a otra página -->
    <button onclick="location.href='Juego.php'">Nivel Dificil</button> <!-- Botón para ir a otra página -->
</Center>
<div class="botones-container">
     <button onclick="location.href='ModoJuego.php'" class="boton-atras">ATRAS</button><!-- Botón para ir a otra página -->
</html>
