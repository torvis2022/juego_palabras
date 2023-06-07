<html>
<head>
    <link rel="stylesheet" type="text/css" href="stilos.css"> <!-- Enlace al archivo de estilos externo -->
</head>
<style>
    /* Estilos CSS para los elementos de la página */
    title {
        color: rgb(71, 9, 12);
        font-size: 45px;
    }

    button {
        display: block;
        width: 200px;
        background-color: rgb(127, 206, 256);
        border-radius: 20px;
        padding: 15px 30px;
        margin: 15px 13px;
        color: #22083c;
        text-decoration: none;
    }

    button:hover {
        background-color: transparent;
        border: 2px solid blue;
        color: blue;
    }
</style>
<body>
    <title>ESCOGE COMO JUGAR</title> <!-- Título de la página -->
    <div id="contenedor"> <!-- Contenedor 1 -->
        <Center>
            <br>
            <button onclick="location.href='NivelesP.php'">Crear Palabras</button> <!-- Botón para ir a otra página -->
        </Center>  
    </div>
    <div id="contenedor"> <!-- Contenedor 2 -->
        <Center>
            <br>
            <button onclick="location.href='NivelesO.php'">Crear Oraciones</button> <!-- Botón para ir a otra página -->
        </Center>  
    </div>
</body>
</html>
