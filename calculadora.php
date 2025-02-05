<form action="">
    Valor 1:
    <input type="number" name="valorUm">
    <br>
    Valor 2:
    <input type="number" name="valorDois"> 
    <br>

    <select>
        <option value="somar">Somar</option>
        <option value="subtrair">Subtrair</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>
    <br>
    <input type="submit" value="Calcular">
</form>

<?php
    if (isset($_GET['valorUm']) && ($_GET['valorDois']) && ($_GET['operacao'])) {
        $valorUm = $_GET['valorUm'];
        $valorDois = $_GET['valorDois'];
        $operacao = $_GET['operacao'];

        $resultado = 0;

        if ($operacao == 'somar') {
            $resultado = $valorUm + $valorDois;
        } elseif ($operacao == 'subtrair') {
            $resultado = $valorUm - $valorDois;
        } elseif ($operacao == 'multiplicar') {
            $resultado = $valorUm * $valorDois;
        } elseif ($operacao == 'dividir') {
            if ($valorDois == 0) {
                $resultado = 'Não é possível dividir por zero';
            } else {
                $resultado = $valorUm / $valorDois;
            }
        }

        echo $resultado;
    }

?>