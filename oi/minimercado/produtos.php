<!DOCTYPE php>
<php lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
        
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="img/logo-sem-funfo.png" type="image/x-icon">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/components/header.css">
    <link rel="stylesheet" href="css/components/resets.css">
    <link rel="stylesheet" href="css/components/button.css">
    <link rel="stylesheet" href="css/components/action.css">
    <link rel="stylesheet" href="css/components/produtos.css">
    <link rel="stylesheet" href="css/components/scrollbar.css">

</head>
<body>

    <header class="header">
        <img class="logo" src="img/Logotipo Loja Online Básico.png" width="60px" alt="Logo da marca">
        <nav>
          <a class="action" href = "index.php" >Início</a>
          <a class="action" href = "produtos.php">Produtos</a>
          <a class="action" href = "fornecedores.php">Fornecedores</a>
          <a class="action" href = "contato.php">Contate-nos</a>
          <a class="button" href = "cadastro.php" lang="en">Cadastre-se</a>
        <a class="button" href = "login.php" lang="en">Login</a>
        </nav>

        <button id="botao-alterar-tema">
                <img width="30px" src="./img/sun.png"  alt="sol imagem" class="imagem-botao">
            </button>
            
    </header>

        <h1>Produtos para Supermercado</h1>
        <div class="product-grid">
          <div class="product-card">
            <div class="product-image">
              <img src="img/produtos/nescau-foto-removebg-preview.png" alt="Foto Nescau">
            </div>
            <div class="product-info">
              <div class="product-name">Nescau</div>
              <div class="product-code">Código: 001</div>
              <div class="product-estoque-inicial">Estoque inicial: 100</div>
              <div class="product-estoque-atual">Estoque atual: 20</div>
              <div class="fornecedor">Fornecedor: JL Distribuidora</div>
              <div class="product-price-compra">Preço de compra do produto: R$ 4,00</div>
              <div class="product-price-venda">Preço de venda do produto: R$ 7,92</div>
              <div class="product-description">Descrição do produto 1:Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed iure quod harum veritatis quo, excepturi accusamus nesciunt natus! Quasi exercitationem non consectetur dolores aperiam. Dolor ex minima error repudiandae in</div>
            </div>
          </div>

          <div class="product-card">
            <div class="product-image">
              <img src="img/produtos/iorgute-removebg-preview.png" alt="Foto iorgute">
            </div>
            <div class="product-info">
              <div class="product-name">Iorgute Maliat</div>
              <div class="product-code">Código: 003</div>
              <div class="product-estoque-inicial">Estoque inicial: 200</div>
              <div class="product-estoque-atual">Estoque atual: 120</div>
              <div class="fornecedor">Fornecedor: DEF Distribuidora</div>
              <div class="product-price-compra">Preço de compra do produto: R$ 1,50</div>
              <div class="product-price-venda">Preço de venda do produto: R$ 4,99</div>
              <div class="product-description">Descrição do produto 1:Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed iure quod harum veritatis quo, excepturi accusamus nesciunt natus! Quasi exercitationem non consectetur dolores aperiam. Dolor ex minima error repudiandae in.</div>
            </div>
          </div>

          <div class="product-card">
            <div class="product-image">
              <img src="img/produtos/biscoito-removebg-preview.png" alt="Foto biscoito">
            </div>
            <div class="product-info">
              <div class="product-name">Biscoito grottoli</div>
              <div class="product-code">Código: 102</div>
              <div class="product-estoque-inicial">Estoque inicial: 90</div>
              <div class="product-estoque-atual">Estoque atual: 20</div>
              <div class="fornecedor">Fornecedor: Gelado Distribuidora</div>
              <div class="product-price-compra">Preço de compra do produto: R$ 4,50</div>
              <div class="product-price-venda">Preço de venda do produto: R$ 10,00</div>
              <div class="product-description">Descrição do produto 1:Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed iure quod harum veritatis quo, excepturi accusamus nesciunt natus! Quasi exercitationem non consectetur dolores aperiam. Dolor ex minima error repudiandae in.</div>
            </div>
          </div>

          <div class="product-card">
            <div class="product-image">
              <img src="img/produtos/agua-sanitaria-removebg-preview.png" alt="Foto Agua Sanitaria">
            </div>
            <div class="product-info">
              <div class="product-name">Água Sanitária 2L</div>
              <div class="product-code">Código: 012</div>
              <div class="product-estoque-inicial">Estoque inicial: 110</div>
              <div class="product-estoque-atual">Estoque atual: 40</div>
              <div class="fornecedor">Fornecedor: JK Distribuidora</div>
              <div class="product-price-compra">Preço de compra do produto: R$ 2,56</div>
              <div class="product-price-venda">Preço de venda do produto: R$ 5,50</div>
              <div class="product-description">Descrição do produto 1:Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed iure quod harum veritatis quo, excepturi accusamus nesciunt natus! Quasi exercitationem non consectetur dolores aperiam. Dolor ex minima error repudiandae in</div>
            </div>
          </div>

          <div class="product-card">
            <div class="product-image">
              <img src="img/produtos/margarina-removebg-preview.png" alt="Foto Margarina">
            </div>
            <div class="product-info">
              <div class="product-name">Qualy</div>
              <div class="product-code">Código:222</div>
              <div class="product-estoque-inicial">Estoque inicial: 20</div>
              <div class="product-estoque-atual">Estoque atual: 20</div>
              <div class="fornecedor">Fornecedor: DL Distribuidora</div>
              <div class="product-price-compra">Preço de compra do produto: R$ 2,50</div>
              <div class="product-price-venda">Preço de venda do produto: R$ 4,99</div>
              <div class="product-description">Descrição do produto 1:Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed iure quod harum veritatis quo, excepturi accusamus nesciunt natus! Quasi exercitationem non consectetur dolores aperiam. Dolor ex minima error repudiandae in</div>
            </div>
          </div>

          <div class="product-card">
            <div class="product-image">
              <img src="img/produtos/toddynho-removebg-preview.png" alt="Foto Toddynho">
            </div>
            <div class="product-info">
              <div class="product-name">Toddynho</div>
              <div class="product-code">Código: 007</div>
              <div class="product-estoque-inicial">Estoque inicial: 190</div>
              <div class="product-estoque-atual">Estoque atual: 110</div>
              <div class="fornecedor">Fornecedor: Leandro Distribuidora</div>
              <div class="product-price-compra">Preço de compra do produto: R$ 0,50</div>
              <div class="product-price-venda">Preço de venda do produto: R$ 3,99</div>
              <div class="product-description">Descrição do produto 1:Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed iure quod harum veritatis quo, excepturi accusamus nesciunt natus! Quasi exercitationem non consectetur dolores aperiam. Dolor ex minima error repudiandae in</div>
            </div>
          </div>

          <div class="product-card">
            <div class="product-image">
              <img src="img/produtos/torrada-removebg-preview.png" alt="Foto Torrada">
            </div>
            <div class="product-info">
              <div class="product-name">Torrada</div>
              <div class="product-code">Código: 022</div>
              <div class="product-estoque-inicial">Estoque inicial: 300</div>
              <div class="product-estoque-atual">Estoque atual: 80</div>
              <div class="fornecedor">Fornecedor: JKL Distribuidora</div>
              <div class="product-price-compra">Preço de compra do produto: R$ 0,99</div>
              <div class="product-price-venda">Preço de venda do produto: R$ 3,00</div>
              <div class="product-description">Descrição do produto 1:Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed iure quod harum veritatis quo, excepturi accusamus nesciunt natus! Quasi exercitationem non consectetur dolores aperiam. Dolor ex minima error repudiandae in</div>
            </div>
          </div>

          <div class="product-card">
            <div class="product-image">
              <img src="img/produtos/veja-removebg-preview.png" alt="Foto Veja">
            </div>
            <div class="product-info">
              <div class="product-name">Veja</div>
              <div class="product-code">Código: 034</div>
              <div class="product-estoque-inicial">Estoque inicial: 40</div>
              <div class="product-estoque-atual">Estoque atual: 10</div>
              <div class="fornecedor">Fornecedor: João frios</div>
              <div class="product-price-compra">Preço de compra do produto: R$ 1,50</div>
              <div class="product-price-venda">Preço de venda do produto: R$ 4,00</div>
              <div class="product-description">Descrição do produto 1:Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed iure quod harum veritatis quo, excepturi accusamus nesciunt natus! Quasi exercitationem non consectetur dolores aperiam. Dolor ex minima error repudiandae in</div>
            </div>
          </div>


          <div class="product-card">
            <div class="product-image">
              <img src="img/produtos/chocolate-removebg-preview.png" alt="Chocolate">
            </div>
            <div class="product-info">
              <div class="product-name">Chocolate Galak</div>
              <div class="product-code">Código: 342</div>
              <div class="product-estoque-inicial">Estoque inicial: 150</div>
              <div class="product-estoque-atual">Estoque atual: 120</div>
              <div class="fornecedor">Fornecedor: JKL Distribuidora</div>
              <div class="product-price-compra">Preço de compra do produto: R$ 4,50</div>
              <div class="product-price-venda">Preço de venda do produto: R$ 8,99</div>
              <div class="product-description">Descrição do produto 1:Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed iure quod harum veritatis quo, excepturi accusamus nesciunt natus! Quasi exercitationem non consectetur dolores aperiam. Dolor ex minima error repudiandae in</div>
            </div>

            

</body>

<script src="js/index.js"></script>

</php>