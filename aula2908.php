    <?php 
    $operador = 4;
    $num1 = 10;
    $num2 = 20;
    $result = 0.0;
    $operacao = "";

    function somarValor($num1 , $num2){
        return($num1+$num2);
    }

    function subtrairValor($num1 , $num2){
        return($num1-$num2);
    }

    function multiplicarValor($num1 , $num2){
        return($num1*$num2);
    }

    function dividirValor($num1 , $num2){
        return($num1/$num2);
    }



    switch ($operador) {
        case 1 : $result = somarValor($num1,$num2);
                $operacao="soma";
        break;

        case 2 :  $result = subtrairValor($num1,$num2);
                $operacao="subtração";
        break;

        case 3 :  $result = multiplicarValor($num1,$num2);
                $operacao="multiplicação";
        break;

        case 4 : $result = dividirValor($num1,$num2);
                $operacao="divisão";
        break;

        default: echo "Saindo";
        break;

    }
        echo "O resultado da " . $operacao . " é " . $result;

    ?>
