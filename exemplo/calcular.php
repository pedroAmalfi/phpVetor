<?php
$numero = $_POST["numero"];
$opcao = $_POST["opcao"];
$time = $_POST["time"];

// Vetores
$sorte_homem = array("Você terá sucesso!", "Um novo desafio virá!", "A sorte está ao seu lado!");
$sorte_mulher = array("Você brilhará muito!", "Novas conquistas estão a caminho!", "A sorte sorri para você!");
$sorte_time = array(
    "Palmeiras" => array("Avanti Verdão!", "Hoje tem gol do Verdão!", "Segue firme, Palmeirense!"),
    "Corinthians" => array("Vai Corinthians!", "O Timão nunca para!", "Aqui é raça e tradição!"),
    "São Paulo" => array("Vamos Tricolor!", "O gigante nunca dorme!", "Orgulho da torcida!"),
    "Santos" => array("Peixe forte!", "Time de craques!", "Vai pra cima Santos!")
);
$cores = array("Azul", "Vermelho", "Verde", "Amarelo", "Roxo");
$frases_cor = array(
    "Azul" => "Cor da tranquilidade e confiança.",
    "Vermelho" => "Cor da paixão e energia.",
    "Verde" => "Cor da esperança e natureza.",
    "Amarelo" => "Cor da alegria e criatividade.",
    "Roxo" => "Cor da sabedoria e espiritualidade."
);

// Sorteios
$aleatorio_99 = rand(0,99);
$aleatorio_usuario = rand(0, $numero);
$frase = ($opcao == "homem") ? $sorte_homem[rand(0, count($sorte_homem)-1)] : $sorte_mulher[rand(0, count($sorte_mulher)-1)];
$frase_time = $sorte_time[$time][rand(0, count($sorte_time[$time])-1)];
$cor_sorteada = $cores[rand(0, count($cores)-1)];
$frase_cor = $frases_cor[$cor_sorteada];

echo "Número aleatório entre 0 e 99: $aleatorio_99 <br>";
echo "Número aleatório entre 0 e $numero: $aleatorio_usuario <br>";
echo "Sua sorte: $frase <br>";
echo "Time escolhido: $time - $frase_time <br>";
echo "Cor sorteada: $cor_sorteada - $frase_cor <br>";
?>