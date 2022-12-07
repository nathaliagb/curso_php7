<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Exercício</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./recursos/css/estilo.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./recursos/css/exercicio.css'>
    <script src='main.js'></script>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href="<?= $_GET['dir']. "/" . $_GET['file']. ".php"; ?>" class="verde">Sem Formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php 
                include($_GET['dir']. "/" . $_GET['file']. ".php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3ER & ALUNOS <?= date('Y'); ?>
    </footer>
</body>

</html>