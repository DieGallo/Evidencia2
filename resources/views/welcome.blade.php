<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenido</h1>

    <!-- Formulario de búsqueda -->
    <form action="{{ route('search') }}" method="GET">
        <label for="invoice_number">Buscar por número de factura:</label>
        <input type="text" name="invoice_number" id="invoice_number">
        <button type="submit">Buscar</button>
    </form>

    <!-- Mostrar resultado de la búsqueda -->
    @if(isset($order))
        <h2>Información de la orden:</h2>
        <p>Número de factura: {{ $order->invoice_number }}</p>
        <p>Estado: {{ $order->status }}</p>
        <!-- Mostrar foto de la orden si está entregada -->
        @if($order->status === 'delivered')
            <img src="{{ $order->orderPhotos()->where('photo_type', 'delivered')->first()->photo_url }}" alt="Foto de la orden entregada">
        @endif
    @endif
</body>
</html>