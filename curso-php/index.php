<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Curso PHP</title>
</head>
    <body>
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Índice dos Exercícios</h2>
        </header>
        
        <main class="principal">
            <div class="conteudo">
               <nav class="modulos">
                    <div class="modulo verde">
                        <h3>Módulo 01 - Básico</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=basico&file=ola">
                                    Olá PHP
                                </a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=basico&file=html">
                                    Integração HTML
                                </a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=basico&file=css">
                                    Integração CSS
                                </a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=basico&file=comentarios">
                                   Comentários PHP
                                </a>
                            </li><li>
                                <a href="exercicio.php?dir=basico&file=desafio">
                                   Desafio
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="modulo vermelho">
                        <h3>Tipos</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=tipos&file=int">
                                    Tipo inteiro
                                </a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=tipos&file=float">
                                    Tipo float
                                </a>
                            </li>    
                            <li>
                                <a href="exercicio.php?dir=tipos&file=aritmeticas">
                                    Operações aritméticas   
                                </a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                                    Desafio precedência   
                                </a>
                            </li>      
                            <li>
                                <a href="exercicio.php?dir=tipos&file=string">
                                    Tipo string   
                                </a>
                            </li>   
                            <li>
                                <a href="exercicio.php?dir=tipos&file=desafio_string">
                                    Desafio string   
                                </a>
                            </li>   
                            <li>
                                <a href="exercicio.php?dir=tipos&file=booleano">
                                    Tipo booleano   
                                </a>
                            </li>    
                            <li>
                                <a href="exercicio.php?dir=tipos&file=conversoes">
                                    Conversões
                                </a>
                            </li>                            
                        </ul>
                    </div>     
               </nav>
            </div>
        </main>
        
        <footer class="rodape">
            COD3R & ALUNOS &COPY; <?= date('Y'); ?>
        </footer>
    </body>
</html>