<div class="titulo">Tipo inteiro</div>

<?php
    echo 11;
    #quebra de linha usada no contexto de browser. Em outro contexto utiliza-se o echo '/n'
    echo '<br>'; 

    #da informações sobre o tipo da variável
    var_dump(11);
    echo '<br>';

    #diz qual é o inteiro máximo suportado pela máquina
    echo PHP_INT_MAX, '<br>';
    #diz qual é o inteiro mínimo suportado pela máquina
    echo PHP_INT_MIN, '<br>';

    echo 017, '<br>'; #representando número na base octal '012'
    echo 0b11000111001, '<br>'; #representando número na base binária '0b11'
    echo 0x1FDC, '<br>'; #representando número na base hexadecimal 'ox1FDC'
