<?php
// calculo.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $regiao = $_POST['regiao'] ?? '';
    $veiculo = $_POST['veiculo'] ?? '';
    $extras = $_POST['extras'] ?? [];

    $taxa = 0;

    // Exemplo: taxa por região
    switch ($regiao) {
        case 'norte':
            $taxa += 100;
            break;
        case 'sul':
            $taxa += 80;
            break;
        case 'sudeste':
            $taxa += 120;
            break;
        default:
            $taxa += 50;
    }

    // Exemplo: taxa por veículo
    if ($veiculo === 'carro') $taxa += 200;
    if ($veiculo === 'moto')  $taxa += 100;
    if ($veiculo === 'caminhao') $taxa += 300;

    // Exemplo: adicionais
    if (in_array('seguro', $extras)) $taxa += 50;
    if (in_array('rastreador', $extras)) $taxa += 40;

    echo "Taxa final calculada: R$ " . number_format($taxa, 2, ',', '.');
    exit;
}
