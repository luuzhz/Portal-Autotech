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
            <label class="legenda">Distância Percorrida (km):</label>
            <input class="campo" type="number" step="0.01" name="distancia" required/>

            <label class="legenda">Quantidade de Litros Consumidos:</label>
            <input class="campo" type="number" step="0.01" name="l_consumido" required/>

            <label class="legenda">Preço do Litro do Combustível (R$):</label>
            <input class="campo" type="number" step="0.01" name="l_combus" required/>

            <button class="botao" type="submit">Calcular</button>
        </form>
    </div>
</article>

<!-- Resultado PHP -->
<?php if($_POST) {
    $distancia = $_POST['distancia'];
    $l_consumido = $_POST['l_consumido'];
    $l_combus = $_POST['l_combus'];

    $consumo = $distancia / $l_consumido;
    $custo = $l_consumido * $l_combus;
    $custo_km = $custo / $distancia;

    if ($consumo < 8) {
        $classificacao = "Alto consumo";
        $cor = "#e52525";
    } elseif ($consumo < 12) {
        $classificacao = "Consumo moderado";
        $cor = "#d4a017";
    } elseif ($consumo <= 16) {
        $classificacao = "Bom consumo";
        $cor = "#228b22";
    } else {
        $classificacao = "Excelente consumo";
        $cor = "#1e90ff";
    }
?>
<article class="card"> 
    <h1 class="legenda" style="font-size: 16px;">Relatório de Consumo</h1>
    <p class="legenda">Consumo médio: <?= number_format($consumo, 2, ',', '.') ?> km/L</p>
    <p class="legenda">Custo total: R$ <?= number_format($custo, 2, ',', '.') ?></p>
    <p class="legenda">Custo por km: R$ <?= number_format($custo_km, 2, ',', '.') ?></p>
    <hr>
    <p class="legenda">Classificação: <strong style="color: <?= $cor ?>;"><?= $classificacao ?></strong></p>
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