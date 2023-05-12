<div class="titulo">Conversões</div>

<?php 
    # Verifica se um valor é inteiro, se for, retona 1
    echo is_int(PHP_INT_MAX) . '<br>';

    # Int para float (float tem o range de números maior do que o int)
    echo '<p>Int para float</p>';
    echo var_dump(PHP_INT_MAX + 1) . '<br>'; // Somando 1 ao valor máximo interio, transforma-o em foat
    echo var_dump(1 + 1.0) . '<br>'; // Int + float dará float
    echo var_dump((float) 3) . '<br>';

    # Float para int (pode perder informação nessa operação)
    echo '<p>Float para int </p>';
    echo var_dump((int) 2.8) . '<br>';  // Ele não arredonda, só pega a parte inteira
    echo var_dump(intval(2.9999)) . '<br>'; // Pega apenas a parte inteira do número
    echo var_dump((int) round(2.8)) . '<br>'; // Arredonda o número

    # Operações com string
    echo '<p>Operações com string </p>' . '<br>';
    echo var_dump(3 + "2") . '<br>'; // Nesse caso,  a string é convertida internamente para int
    echo var_dump("3" + 2) . '<br>'; // Nesse caso,  a string é convertida internamente para int
    echo var_dump("3" . 2) . '<br>'; // Concatenação
    echo is_string("3" . 2) . '<br>';  // Verifica se o valor é string e retona 1 se for
    echo var_dump(1 + "5 cinco") . '<br>';  // Nesse caso, pega a primeira parte da string e ignora o resto
    echo var_dump(1 + "2 + 5") . '<br>';  // Nesse caso, pega a primeira parte da string e ignora o resto
    echo var_dump(1 + "3.2") . '<br>';  // Nesse caso, internamente é intendido que o 3.2 é um float
    echo var_dump(1 + "-3.2e2") . '<br>';  // 
    echo var_dump((int) "10.5") . '<br>';  // Convertendo uma string para int
    echo var_dump((float) "10.5") . '<br>';  // Convertendo uma string para float

    //echo var_dump(1 + "cinco") . '<br>';  // Nesse caso, a string é ignorada

