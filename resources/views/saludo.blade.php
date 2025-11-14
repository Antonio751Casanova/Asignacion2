<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo Personalizado</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            display: grid;
            place-items: center;
            min-height: 90vh;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
        }
        h1 {
            font-weight: 300;
            color: #212529;
        }
        
        span {
            font-weight: 600;
            color: #007bff;
            text-transform: capitalize;
        }
    </style>
</head>
<body>
    <h1>
        Hola,
        
        <span>{{ $nombre }}</span>
    </h1>
</body>
</html>