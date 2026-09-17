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
            <label class="legenda">Distância da Viagem (km):</label>
            <input class="campo" type="number" step="0.01" name="distancia" required/>

            <label class="legenda">Consumo médio do veículo (km/L):</label>
            <input class="campo" type="number" step="0.01" name="consumo" required/>

            <label class="legenda">Preço do combustível (R$):</label>
            <input class="campo" type="number" step="0.01" name="preco" required/>

            <label class="legenda">Trajeto:</label>
            <select class="campo" name="trajeto" required>
                <option value="ida">Somente Ida</option>
                <option value="ida_volta">Ida e Volta</option>
            </select>

            <button class="botao" type="submit">Simular Viagem</button>
        </form>
    </div>
</article>

<!-- Resultado PHP -->
<?php if($_POST) {
    $distancia = $_POST['distancia'];
    $consumo = $_POST['consumo'];
    $preco = $_POST['preco'];
    $trajeto = $_POST['trajeto'];

    if ($trajeto == 'ida_volta') {
        $distancia = $distancia * 2;
    }

    $litros = $distancia / $consumo;
    $custo = $litros * $preco;
?>
<article class="card"> 
    <h1 class="legenda" style="font-size: 16px;">Estimativa de Viagem</h1>
    <p class="legenda">🚗 Distância considerada: <?= number_format($distancia, 2, ',', '.') ?> km</p>
    <p class="legenda">⛽ Consumo: <?= number_format($consumo, 2, ',', '.') ?> km/L</p>
    <p class="legenda">💧 Combustível necessário: <?= number_format($litros, 2, ',', '.') ?> L</p>
    <hr>
    <p class="legenda" style="font-size: 14px; font-weight: bold; color: #172033;">💰 Custo estimado: R$ <?= number_format($custo, 2, ',', '.') ?></p>
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