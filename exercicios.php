<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exercício PHP</title>
   <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="./assets/css/style.css">
   <link rel="stylesheet" href="./assets/css/exec.css">
</head>
<body class="exec">
  <header class="header">
    <h1>Curso PHP</h1>
    <h2>Visualização de Exercícios</h2>
  </header>
  <nav class="nav">
  <a class="verde" href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> >Sem Visualização</a>
    <a class="vermelho" href="index.php">Voltar</a>
  </nav>
  <main class="main">
    <div class="content">
      <?php
        //include($_GET['dir'] . '/' . $_GET['file'] . '.php');
        include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
      ?> 
    </div>
  </main>
  <footer class="footer">
  COD3R & ALUNOS © <?= date('Y'); ?>
  </footer>
</body>
</html>
