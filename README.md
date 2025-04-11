# Vetores em PHP

Este repositório tem como objetivo ensinar os alunos a utilizar vetores em PHP de maneira prática e objetiva.

## O que são vetores?

Vetores (ou arrays) em PHP são variáveis que armazenam vários valores em uma única estrutura. Eles são muito úteis quando precisamos trabalhar com uma lista de dados.

### Exemplo básico de vetor:

```php
<?php
$vetor = array("Bola", "Coelho", "Rinoceronte", "Pizza");
$palavra = $vetor[rand(0, count($vetor)-1)];
echo "Para te dar sorte fique perto de um(a) $palavra";
?>
```

---

## Estrutura do Projeto

- `index.php` → Página inicial que coleta dados do usuário.
- `calcular.php` → Página que recebe os dados do formulário e utiliza vetores para realizar operações.

---

## Lista de Exercícios

1. F.U.P que toda vez que o usuário pressionar um botão, gere um número aleatório de 0 a 99 para ele.

2. F.U.P que o usuário entre com um número e toda vez que pressionar um botão, seja gerado um valor aleatório de zero até o número escolhido e exiba-o para o usuário.

3. F.U.P que o usuário escolha entre homem e mulher e que gere uma sorte (frase aleatória) para ele.

4. F.U.P que o usuário escolha um time de futebol (Palmeiras, Corinthians, São Paulo, Santos) e exiba uma frase aleatória de incentivo relacionada ao time escolhido.

5. F.U.P que o sistema sorteie uma cor aleatória (ex: Azul, Vermelho, Verde, Amarelo, Roxo) e exiba-a para o usuário junto com uma frase característica dessa cor.

Boa sorte e bons estudos!