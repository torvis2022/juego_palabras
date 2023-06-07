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
        border-radius: 10px;
        padding: 15px 30px;
        margin: 15px 13px;
        color: #320841;
        text-decoration: none;
    }

    button:hover {
        background-color: transparent;
        border: 2px solid blue;
        color: blue;
    }
</style>
<body></body> <!-- Cuerpo de la página vacío -->
<Center>
    <button onclick="location.href='ModoJuego.php'">Atras</button> <!-- Botón para ir a otra página -->
    <br>
    <button onclick="location.href='Juego.php'">Nivel Facil</button> <!-- Botón para ir a otra página -->
    <button onclick="location.href='Juego.php'">Nivel Normal</button> <!-- Botón para ir a otra página -->
    <button onclick="location.href='Juego.php'">Nivel Dificil</button> <!-- Botón para ir a otra página -->
</Center>
</html>
