<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" 
    integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5"
    crossorigin="anonymous" />
    <title>Editando item como <?=$_SESSION['NOME']?></title>
    <link rel="icon" href="./box.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="./styles/item.css">
    <link rel="stylesheet" href="./styles/global.css">
</head>
<body>
<div class="container">
        <div class="form-image">
            <img src="imgs/item.svg" alt="">
        </div>
        <div class="form">
            <form action="../database/CRUDItens/CreateItem.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Editar registro</h1>
                    </div>
                    <div class="voltar-button">
                        <button><a href="./Home.php">Voltar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="modelo">DESCRIÇÃO</label>
                        <input id="email" type="text" name="description" placeholder="Descreva o produto" required>
                    </div>

                    <div class="input-box">
                        <label for="brand">MARCA</label>
                        <input id="brand" type="text" name="brand" placeholder="Digite a marca do item">
                    </div>
                    <div class="input-box">
                        <label for="model">MODELO</label>
                        <input id="model" type="text" name="model" placeholder="Ex: esportivo/casual..." required>
                    </div>   

                    <div class="input-box">
                        <label for="size">TAMANHO</label>
                        <input id="size" type="number" name="size" placeholder="Ex: 38" required>
                    </div>

                    <div class="input-box">
                        <label for="amount">QUANTIDADE</label>
                        <input id="amount" type="number" name="amount" placeholder="Quantidade de caixas" min="1" max="999">
                        <label for="null">NULO:</label>
                        <input type="checkbox" name="null" id="null" title="Caso a quantidade seja nula, marque aqui." value="0">
                    </div>

                    <div class="input-box">
                        <label for="barcode">CÓDIGO DE BARRAS</label>
                        <input id="barcode" type="number" name="barcode" placeholder="Somente números" size="13" required>
                    </div>

                    <div class="input-box">
                        <label for="price">PREÇO</label>
                        <input id="price" type="number" name="price" placeholder="Ex: 70.90" step="0.01" required>
                    </div>
                </div>
                <div class="continue-button">
                    <input type="submit" name="cadastrar" value="Cadastrar">
                </div>
            </form>
        </div>
    </div>
</body>
</html>