<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Unidades</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        form { display: inline-block; padding: 20px; border: 1px solid #ddd; border-radius: 10px; }
        select, input { margin: 10px 0; padding: 5px; }
        button { padding: 10px 15px; background: #007BFF; color: white; border: none; cursor: pointer; }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>

    <h2>Conversor de Unidades</h2>
    <form action="" method="post">
        <input type="number" step="any" name="valor" placeholder="Ingrese valor" required>
        <select name="tipo_conversion">
            <option value="km_millas">Kilómetros a Millas</option>
            <option value="millas_km">Millas a Kilómetros</option>
            <option value="celsius_fahrenheit">Celsius a Fahrenheit</option>
            <option value="fahrenheit_celsius">Fahrenheit a Celsius</option>
            <option value="kg_libras">Kilogramos a Libras</option>
            <option value="libras_kg">Libras a Kilogramos</option>
        </select>
        <button type="submit">Convertir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = floatval($_POST["valor"]);
        $tipo_conversion = $_POST["tipo_conversion"];
        $resultado = 0;

        switch ($tipo_conversion) {
            case "km_millas":
                $resultado = $valor * 0.621371;
                echo "<p><strong>{$valor} km</strong> son <strong>{$resultado} millas</strong></p>";
                break;
            case "millas_km":
                $resultado = $valor / 0.621371;
                echo "<p><strong>{$valor} millas</strong> son <strong>{$resultado} km</strong></p>";
                break;
            case "celsius_fahrenheit":
                $resultado = ($valor * 9/5) + 32;
                echo "<p><strong>{$valor}°C</strong> son <strong>{$resultado}°F</strong></p>";
                break;
            case "fahrenheit_celsius":
                $resultado = ($valor - 32) * 5/9;
                echo "<p><strong>{$valor}°F</strong> son <strong>{$resultado}°C</strong></p>";
                break;
            case "kg_libras":
                $resultado = $valor * 2.20462;
                echo "<p><strong>{$valor} kg</strong> son<strong>{$resultado} libras</strong></p>";
                break;
            case "libras_kg":
                $resultado = $valor / 2.20462;
                echo "<p><strong>{$valor} libras</strong> son <strong>{$resultado} kg</strong></p>";
                break;
            default:
                echo "<p>Conversión no válida</p>";
        }
    }
    ?>

</body>
</html>