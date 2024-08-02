<?php
class Calculadora {
    // Método estático para somar dois números
    public static function soma($num1, $num2) {
        return $num1 + $num2;
    }
}

// Demonstração da utilização do método estático
$resultado = Calculadora::soma(5, 10);

// Exibindo o resultado
echo "A soma de 5 e 10 é: " . $resultado;
?>
