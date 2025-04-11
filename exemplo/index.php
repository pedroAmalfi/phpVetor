<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exemplo de Vetores em PHP</title>
</head>
<body>

<h2>Escolha o que deseja fazer:</h2>

<form action="calcular.php" method="post">
    Digite um número: <input type="number" name="numero"><br><br>

    Escolha uma opção de Sorte:
    <select name="opcao">
        <option value="homem">Homem</option>
        <option value="mulher">Mulher</option>
    </select><br><br>

    Escolha um time de futebol:
    <select name="time">
        <option value="Palmeiras">Palmeiras</option>
        <option value="Corinthians">Corinthians</option>
        <option value="São Paulo">São Paulo</option>
        <option value="Santos">Santos</option>
    </select><br><br>

    <input type="submit" value="Gerar Resultado">
</form>

</body>
</html>