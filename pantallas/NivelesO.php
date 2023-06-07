<html>
    <head>
        <title>ESCOGE UN NIVEL</title>
    </head>
    <style>
        /* Estilos CSS para los elementos de la página */
        /* Estilos para el título */
        title{
            color:rgb(71, 9, 12);
            font-size: 45px;
        }
        
        /*  Estilos para los botones */
        button{
            display: block;
            width: 100px;
            background-color: rgb(66, 12, 153);
            border-radius:10px;
            padding:15px 30px;
            margin: 15px 13px;
            color: #320841;
            text-decoration: none;
        }
        
        /*  Estilos para el hover de los botones */
        button:hover {
            background-color: transparent;
            border: 2px solid blue;
            color: blue;
        }
    </style>
    <body></body>
    <Center>
        <!--  Botón para ir a la página anterior -->
        <button onclick="location.href='ModoJuego.php'">Atras</button>
        <br>
        <!-- Botones para seleccionar los niveles -->
        <button onclick="location.href='Juego.php'">Nivel Facil</button>
        <button onclick="location.href='Juego.php'">Nivel Normal</button>
        <button onclick="location.href='Juego.php'">Nivel Dificil</button>
    </Center>
</html>
