<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Nuestros Productos</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }} - {{ $product->regualar_price }}€ - {{ $product->last_to_price }}€</li>
        @endforeach
    </ul>
</body>
</html>
