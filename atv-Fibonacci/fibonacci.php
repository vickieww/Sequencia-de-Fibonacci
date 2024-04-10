<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Fibonacci</title>
    <style>
#numero {
    border-radius: 8px; 
    padding: 10px;
    width: 300px;
    height: 40px; 
    font-size: 16px; 
    border: 2px solid #ccc; 
    box-sizing: border-box; 
}


input[type="submit"] {
    padding: 10px 20px; 
    border-radius: 8px; 
    font-size: 16px;
    background-color: #007bff; 
    color: #fff; 
    border: none; 
    cursor: pointer; 
}
label{
    font-family: Arial;
    font-size: 16px;
}


form {
    margin-bottom: 20px; 
}

    </style>
</head>
<body>
    <form method="post">
        <label for="numero">Digite o número desejado na sequência de Fibonacci:</label><br>
        <input type="text" id="numero" name="numero"><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Função para calcular a sequência de Fibonacci até um determinado número
    function fibonacci($n){
        $fib = array(0, 1); // Inicializa a sequência de Fibonacci com os primeiros dois números
        for ($i = 2; $i <= $n; $i++){
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; // Calcula o próximo número na sequência
        }
        return $fib; // Retorna a sequência completa até o número desejado
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["numero"]; // Obtém o número digitado pelo usuário
        $resultado = fibonacci($num); // Calcula a sequência de Fibonacci até o número indicado
        echo "A sequência de Fibonacci até o $num termo é: ";
        echo implode(", ", $resultado); // Exibe a sequência calculada separada por vírgulas
    }
    ?>
</body>
</html>