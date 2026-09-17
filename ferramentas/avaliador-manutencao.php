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
            <label class="legenda">Tipo de Veículo:</label>
            <select class="campo" name="tipo" required>
                <option value="carro">Carro</option>
                <option value="moto">Motocicleta</option>
            </select>

            <label class="legenda">Quilometragem Atual:</label>
            <input class="campo" type="number" name="km_atual" required/>

            <label class="legenda">Quilometragem da Última Manutenção:</label>
            <input class="campo" type="number" name="km_ultima" required/>

            <button class="botao" type="submit">Avaliar</button>
        </form>
    </div>
</article>

<!-- Resultado PHP -->
<?php if($_POST) {
    $tipo = $_POST['tipo'];
    $km_atual = $_POST['km_atual'];
    $km_ultima = $_POST['km_ultima'];
    $percorrido = $km_atual - $km_ultima;

    if ($tipo == 'carro') {
        if ($percorrido <= 5000) { $status = "Manutenção em dia"; }
        elseif ($percorrido <= 10000) { $status = "Manutenção recomendada"; }
        else { $status = "Manutenção necessária"; }
    } else {
        if ($percorrido <= 3000) { $status = "Manutenção em dia"; }
        elseif ($percorrido <= 6000) { $status = "Manutenção recomendada"; }
        else { $status = "Manutenção necessária"; }
    }
?>
<article class="card"> 
    <h1 class="legenda" style="font-size: 16px;">Situação da Manutenção</h1>
    <p class="legenda">Tipo: <?= ucfirst($tipo) ?></p>
    <p class="legenda">Quilômetros percorridos: <?= number_format($percorrido, 0, '', '.') ?> km</p>
    <hr>
    <p class="legenda" style="font-size: 14px; font-weight: bold; color: #172033;"><?= $status ?></p>
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