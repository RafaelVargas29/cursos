<div class="titulo">Tipo string</div>

<?php
    echo 'Eu sou uma string', '<br>';

    # var_dump() traz informações sobre a variável
    var_dump("Eu também");
    echo '<br>';

    # Para concatenar uma string, utiliza-se o '.'
    echo "Nós também" . ' somos', '<br>';
    echo "O número é " . 123, '<br>';

    #O comando echo suporta várias strings no mesmo comando separadas por vírgula, isso não é concatenação
    echo "Também", ' Aceito', " Vírgulas", '<br>';

    # Para representar aspas dup´las dentro de uma string de aspas duplas e aspas simples dentro de uma string de aspas simples, utiliza-se '\'
    echo " 'Teste' " . ' "Teste" ' . ' \'Teste\' ' . " \"Teste\" ", '<br>';

    # Para imprimir o '\', utiliza-se '\\'
    echo "\\", " \\n", ' \\t', '<br>';

    # Outra forma de imprimir dados na tela é a função print();
    print("Também existe a função print <br>");
    print "Também funciona sem parêntese <br>" ;


    # Funções de manipulação  de string
    // Deixa a string maiúscula
    echo strtoupper('maximizado'), '<br>';

    // Deixa a string minpuscula
    echo strtolower('MINIMIZADO'), '<br>';       

    // Deixa a primeira letra maiúscula
    echo ucfirst('só a primeira letra'), '<br>';
    
    // Deixa a primeira letra de todas as palavras maipuscula
    echo ucwords('todas as palavras'), '<br>';
    
    // Mostra quantas letras a string tem
    echo strlen('Quantas letras?'), '<br>';

    // Mostra quantas letras a string tem sem dar problemas com caracteres especiais. Funciona do mesmo jeito caso não seja passado o segundo parâmetro
    echo mb_strlen("Eu também", "utf-8"), '<br>';

    // Pega uma parte da string. Caso não tenha o segundo parâmetro, ele pega da parte escolhida até o final
    echo substr("só uma parte mesmo", 7, 6), '<br>';

    // Troca todas as ocorrências da palavra do primeiro parâmetro pela palavra do segundo parâmetro
    echo str_replace('isso', 'aquilo', 'Trocar isso isso');

