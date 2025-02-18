<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Utilidade Públicas</title>
    <link rel="stylesheet" href="../css/style-cadastroutilidades.css">
</head>

<body>
    <header class="menu-adm">
        <div class="logo">
            <img src="../Images/logo.png" alt="Logo da Feira" class="img-logo">
        </div>

        <nav class="nav-bar">
            <ul class="nav-list">
                <li class="nav-item"><a href="#">Área Administrativa</a></li>
                <li class="nav-item"><a href="#">Eventos</a>
                    <ul class="submenu">
                        <li><a href="" class="item-submenu">Cadastrar Evento</a></li>
                        <li><a href="" class="item-submenu">Gerenciar Evento</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">Expositores</a>
                    <ul class="submenu">
                        <li><a href="" class="item-submenu">Cadatrar Expositor</a></li>
                        <li><a href="" class="item-submenu">Cadatrar expositor kids</a></li>
                        <li><a href="" class="item-submenu">Cadatrar artista</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">Carrossel</a>
                    <ul class="submenu">
                        <li><a href="" class="item-submenu">cadastrar Carrosel</a></li>
                        <li><a href="" class="item-submenu">Editar Carrosel</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">Categorias</a>
                    <ul class="submenu">
                        <li><a href="" class="item-submenu">Todas Categorias</a></li>
                        <li><a href="" class="item-submenu">cadastrar Categorias</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">Relatórios</a>
                    <ul class="submenu">
                        <li><a href="" class="item-submenu">relatório de usuarios</a></li>
                        <li><a href="" class="item-submenu">validação de expositores</a></li>
                        <li><a href="" class="item-submenu">relatório de expositores</a></li>
                        <li><a href="" class="item-submenu">relatório de eventos</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#">Parceiros</a>
                    <ul class="submenu">
                        <li><a href="" class="item-submenu">cadastrar parceiros</a></li>
                        <li><a href="" class="item-submenu">editar parceiros</a></li>
                    </ul>
                </li>
            </ul>

            <button class="btn-login"><a href="">Login</a></button>
        </nav>

        <div class="sandwich-menu" onclick="menuShow()">
            <img src="../Images/menu.png" alt="menu" class="menu">
        </div>

        <div class="login">
            <img src="../Images/login.png" alt="Botão de login" class="img-login">
        </div>
    </header>


    <main class="principal">
        <div class="box">
            <h2>CADASTRO DE UTILIDADES PÚBLICAS</h2>
            <div class="form-box">
                <form action="#">
                    <div class="input-group">
                        <label>Título da utilidade pública:</label>
                        <input type="text" name="titulo" id="titulo"
                            placeholder="Escreva o título da utilidade pública">
                    </div>
                    <div class="input-group">
                        <label>Descrição da utilidade pública:</label>
                        <input type="text" name="descricao" id="descricao"
                            placeholder="Escreva a descrição da utilidade pública">
                    </div>
                    <div class="input-group">
                        <label>Data início</label>
                        <input type="date" id="data-inicio" name="data-inicio" value="0000/00/00">
                    </div>
                    <div class="input-group">
                        <label>Data fim</label>
                        <input type="date" id="data-fim" name="data-fim" value="0000/00/00">
                    </div>
                    <div class="input-group">
                        <label>Imagem da atração:</label>
                        <input type="file" name="file" id="file"
                            required>
                    </div>
                </form>
                
                <div class="vetor">
                    <img src="../Images/Vector.png" alt="">
                </div>
                <div class="box-img">
                    <img src="../Images/imagem_2024-08-12_224157095-removebg-preview 1.png" alt="">
                </div>
            </div>
            <div class="form-box2"></div>
            

            <div class="btns">
                <a href="" class="voltar">
                    <img src="../Images/btn-voltar.png" alt="Botão de voltar" class="btn-voltar">
                </a>

                <div class="btn-cancelar-salvar">
                    <button class="btn btn-cancelar">
                        <a href="">Cancelar</a>
                    </button>

                    <button class="btn btn-salvar">
                        <a href="">Salvar</a>
                </div>
            </div>
        </div>
        </div>
    </main>

    <div class="bolas-fundo">
        <img src="../Images/bola-verde1.png" alt="Bola Fundo 1" class="bola-verde1">
        <img src="../Images/bola-verde2.png" alt="Bola Fundo 2" class="bola-verde2">
        <img src="../Images/bola-rosa.png" alt="Bola Fundo 3" class="bola-rosa">
    </div>

    <script src="../js/main.js"></script>
</body>

</html>