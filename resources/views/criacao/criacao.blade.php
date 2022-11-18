<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="criacaocss\criacao.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <form class="form-teste" action="treinos">
        <h4>descrição do exercício</h4>
        <input type="text" class="input" name="exemplo" placeholder="descrição"></input>
        <h4>adicione os exercicios</h4>
        <div class="container">
         <h5>escolha o exercicio</h5>
         <select class="select" name="select" placeholder="selecione">
            <option value="valor">exemplo 1</option>
            <option value="valor2">exemplo 2</option>
            <option value="valor3">exemplo 3</option>
          </select>
        </div>
        <h4>observações</h4>
        <input type="text" class="cod" name="observacoes" placeholder="observações">
    <br>
    <div class="botoes">
        <button class="cancel-button">
            Cancelar
        </button>
        <button class="confirm-button">
            prosseguir
        </button>
        <br></div>
    </form></div>
</body>
</html>