<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Orçamento</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- =====================TOPO =============== -->
     <header class="topo">
        <div class="logo">
            <h1>
                Auto<span>Tech</span>
            </h1>
            <p>OFICINA MECÂNICA</p>
        </div>
        <div class="informacao">
            <h3>PORTAL DE FERRAMENTAS</h3>
            <p>
                Soluções rápidas para o dia a dia da oficina
            </p>
        </div>
     </header>
     <!-- ================== MENU ============== -->
      <nav class="menu">
        <a href="../index.php">⌂ Início</a>
        <a href="ferramentas/calculadora-orcamento.php">Orçamento</a>
        <a href="ferramentas/troca-pneus.php">Pneus</a>
        <a href="ferramentas/calculadora-combustivel.php">Combustível</a>
        <a href="ferramentas/avaliador-manutencao.php">Serviço</a>
        <a href="ferramentas/simulador-viage.php">Viagem</a>
      </nav>
         <article class="card">
            <div class="formulario">
                <form method="post">
                    <label class="legenda">Descrição:</label>
                    <input class="campo" type="text" name="descricao" placeholder="Descrição"/>

                    <label class="legenda" >Valor das Peças:</label>
                    <input class="campo" type="text" name="valor" placeholder="Valor das peças"/>

                    <label class="legenda" >Mão de Obra</label>
                    <input class="campo" type="text" name="obra" placeholder="Valor da mão de obra"/>

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
         </article>
        
         <?php if($_POST) {
            $descricao = $_POST['descricao'];
            $obra = $_POST['obra'];
            $valor = $_POST['valor'];

            $total = $valor + $obra;
            ?>
         <article class="card"> 
            <h1 class="legenda">Relatório</h1>
            <p class="legenda">Serviço: <?= $descricao ?></p>
            <p class="legenda">Valor das Peças: <?= number_format($valor, 2, ',', '.') ?></p>
            <p class="legenda">Mão de obra: <?= number_format($obra, 2, ',', '.') ?></p>
            <p class="legenda">Total: <?= number_format($total, 2, ',', '.') ?></p>
         </article>
       <?php } ?>
       <!-- ============================= RODAPÉ ============== -->
        <footer class="rodape">
            <div class="rodape-coluna">

            <h3>
                Auto<span style="color: #e52525;">Tech</span>
            </h3>
            <p>
                Portal de ferramentas para oficina mecânica.
            </p>

            </div>

            <div class="rodape-coluna">
                <h3>Ferramentas</h3>
                <p>Orçamento</p>
                <p>Pneus</p>
                <p>Combustível</p>
            </div>

            <div class="rodape-coluna">
                <h3>Autotech</h3>

                <p>
                    Qualidade em cada quilômetro.
                </p>

                <p>
                    Santana de Parnaíba - SP
                </p>
            </div>

            <div class="copyright">
                © 2026 AutoTech - Portal de Ferramentas
            </div>
        </footer>
</body>
</html>