<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    
    <style>
        body { font-family: sans-serif; padding: 20px; background-color: #f4f4f4; }
        h1 { text-align: center; color: #333; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; border-bottom: 1px solid #ddd; text-align: left; }
        th { background-color: #007bff; color: white; }
        tr:hover { background-color: #f1f1f1; }
        .precio { color: #28a745; font-weight: bold; }
        .btn-volver { display: inline-block; margin-bottom: 15px; text-decoration: none; color: #007bff; }
    </style>
</head>
<body>

    <div class="container">
        <a href="/bienvenida" class="btn-volver">← Volver al inicio</a>
        <h1>Nuestros Productos</h1>


        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td class="precio">${{ $producto->precio }}</td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>

</body>
</html>