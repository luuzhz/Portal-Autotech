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
<!-- Formulário -->
<article class="card">
    <div class="formulario">
        <form method="post">
            <label class="legenda">Marca / Modelo do Pneu:</label>
            <input class="campo" type="text" name="modelo" placeholder="Ex: Pirelli Cinturato P7" required/>

            <label class="legenda">Preço de cada Pneu (R$):</label>
            <input class="campo" type="number" step="0.01" name="pneu" placeholder="Preço" required/>

            <label class="legenda">Quantidade de Pneus:</label>
            <input class="campo" type="number" name="quant_pneu" placeholder="Quantidade" required/>

            <label class="legenda">Valor da Montagem (por pneu):</label>
            <input class="campo" type="number" step="0.01" name="montagem" placeholder="Montagem" required/>

            <label class="legenda">Valor do Balanceamento (por pneu):</label>
            <input class="campo" type="number" step="0.01" name="balanceamento" placeholder="Balanceamento" required/>

            <button class="botao" type="submit">Calcular</button>
        </form>
    </div>
</article>

<!-- Resultado PHP -->
<?php if($_POST) {
    $modelo = $_POST['modelo'];
    $pneu = $_POST['pneu'];
    $quant_pneu = $_POST['quant_pneu'];
    $montagem = $_POST['montagem'];
    $balanceamento = $_POST['balanceamento'];

    $v_pneu =  $pneu * $quant_pneu;
    $v_mont =  $montagem * $quant_pneu;
    $v_balanc =  $balanceamento * $quant_pneu;
    $v_tot =  $v_pneu + $v_mont + $v_balanc;
?>
<article class="card"> 
    <h1 class="legenda" style="font-size: 16px;">Resumo do Serviço</h1>
    <p class="legenda">Marca / Modelo: <?= htmlspecialchars($modelo) ?></p>
    <p class="legenda">Quantidade: <?= $quant_pneu ?></p>
    <p class="legenda">Valor dos pneus: R$ <?= number_format($v_pneu, 2, ',', '.') ?></p>
    <p class="legenda">Valor da montagem: R$ <?= number_format($v_mont, 2, ',', '.') ?></p>
    <p class="legenda">Valor do balanceamento: R$ <?= number_format($v_balanc, 2, ',', '.') ?></p>
    <hr>
    <p class="legenda" style="font-size: 14px; color: #e52525;">Valor Total: R$ <?= number_format($v_tot, 2, ',', '.') ?></p>
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