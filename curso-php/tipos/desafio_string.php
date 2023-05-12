<div class="titulo">Desafio string</div>

<?php  
    /*
        Avaliando os métodos da documentação da string, qual o método que a posição do texto 'abc' na string '!AbcaBcabc' retorne 1?
    */

    # Encontra a posição da primeira ocorrência de uma substring que não diferencia maiúsculas de minúsculas em uma string
    echo stripos('!AbcaBcabc', 'abc'), '<br>';

    # Encontra a posição da primeira ocorrência de uma substring que diferencia maiúsculas de minúsculas em uma string
    echo strpos('!AbcaBcabc', 'abc');