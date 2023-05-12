<div class="titulo">Operações aritméticas</div>

<?php
    echo 1 + 1 ,'<br>';
    var_dump(1 + 1);
    
    echo '<br>';
    echo 1 + 2.5, '<br>' ;
    echo 10 - 2, '<br>' ;
    echo 2 * 5, '<br>' ;
    echo 7 / 4, '<br>';
    echo 7 % 4, '<br>';

    # faz com que o resutado da divisão seja um número inteiro, removendo as casas decimais
    echo intdiv(7, 4), '<br>'; 

    # Arredonda o resultado da operação
    echo round(7 / 4), '<br>';
    
    # exponenciação
    echo 4 ** 2, '<br>';
    
    /*
        Ordem de precedência
        1:  ()
        2:  **
        3:  /, * , %
        4:  +, -
    */

    echo '<p>Precedência</p>';
    echo 2 + 3 * 4, '<br>';
    echo (2 + 3) * 4, '<br>';
    echo 2 + 3 * 4 ** 2, '<br>';
    echo ((2 + 3) * 4) ** 2, '<br>';

    # divisão por zero resultará no resultado 'INF', o que significa que o valor está tendendo para o infinito (está resultando em um erro)
    // echo 7 / 0, '<br>';

    # resutará em um erro que não é mostrado na tela, porém nada que estiver abaixo desse código será renderizado
    // echo intdiv(7 / 0), '<br>';

