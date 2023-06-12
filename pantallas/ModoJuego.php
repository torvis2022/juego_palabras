<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stilos.css">
    <style>
        /* Estilos CSS para los elementos de la página */
        title {
            color: rgb(71, 9, 12);
            font-size: 45px;
        }
    
        body {
            background-image: url('Imagenes/ninos.png');
            background-size: 85%;/* valor para reducir imagen*/
            background-repeat: no-repeat;
            background-position: center;
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
</head>
<body>
    <title>ESCOGE COMO JUGAR</title>
    <div id="contenedor">
        <center>
            <br>
            <button onclick="location.href='NivelesP.php'">Crear Palabras</button>
        </center>  
    </div>
    <div id="contenedor">
        <center>
            <br>
            <button onclick="location.href='NivelesO.php'">Crear Oraciones</button>
        </center>  
    </div>
</body>
</html>

