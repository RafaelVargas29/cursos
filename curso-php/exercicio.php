<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="stylesheet" href="assets/CSS/exercicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Exercicio</title>
</head>
    <body class="exercicio">
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Visualização do Exercício</h2>
        </header>
        
        <nav class="navegacao">
            <a href="<?= "{$_GET['dir']}/{$_GET['file']}.php" ?>" class="verde">Sem formatação </a>
            <a href="index.php" class="vermelho">Voltar</a>
        </nav>

        <main class="principal">
            <div class="conteudo">
               <?php
                    include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")
               ?>
            </div>
        </main>
        
        <footer class="rodape">
            COD3R & ALUNOS &COPY; <?= date('Y'); ?>
        </footer>
    </body>
</html>