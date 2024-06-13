<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form id="sumForm" method="POST" action="<?php echo base_url() ?>">
            <div id="container">
                <h2>Suma de dos números</h2>
                <input type="number" id="num1" placeholder="Número 1" required>
                <input type="number" id="num2" placeholder="Número 2" required>
                <button type="submit">Sumar</button>
            <div id="result"></div>
        </form>
    </div>

    <script>
        document.getElementById('sumForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var num1 = parseInt(document.getElementById('num1').value);
            var num2 = parseInt(document.getElementById('num2').value);
            var result = num1 + num2;
            document.getElementById('result').innerText = 'El resultado es: ' + result;
        });
    </script>
</body>
</html>