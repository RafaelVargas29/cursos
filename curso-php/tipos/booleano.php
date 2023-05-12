<div class="titulo">Tipo booleano</div>

<?php
    echo TRUE . '<br>';
    echo FALSE . '<br>';

    echo '<br>' . var_dump(true);
    echo '<br>' . var_dump(false);
    echo '<br>' . var_dump('false');
    
    # Verifica se o valor é booleano. Retorna 1 se for, e nada se não for
    echo '<br>' . is_bool(false);
    echo '<br>' . is_bool('false');

    # Fazer as regras de conversão
    echo '<p>Regras:</p>';

    // convertendo para boolean (funciona com qualquer tipo)
    echo '<br>' . var_dump((bool) 0);  //Zero é o único npumero que será convertido para falso
    echo '<br>' . var_dump((bool) 20);  
    echo '<br>' . var_dump((bool) -1);  
    echo '<br>' . var_dump((bool) 0.0);  
    echo '<br>' . var_dump((bool) 0.0000000001);  
    echo '<br>' . var_dump((bool) ""); //string vazia retorna false  
    echo '<br>' . var_dump((bool) " ");
    echo '<br>' . var_dump((bool) "0"); //string com um valor 0 retornará false
    echo '<br>' . var_dump((bool) "00");
    echo '<br>' . var_dump((bool) "false");

    // Outra forma de converter
    echo '<br>' . var_dump(!!"false");