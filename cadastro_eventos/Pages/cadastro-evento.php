<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Eventos</title>
    <link rel="stylesheet" href="../CSS/style-cadastro-evento.css">
</head>

<body>
    <header class="menu-adm">
        <div class="logo">
            <a href=""><img src="../Images/logo.png" alt="Logo da Feira" class="img-logo"></a>
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
            <h2>CADASTRO DE EVENTOS</h2>
            <div class="form-box">
                <form action="#">
                    <div id="form1">
                        <div class="input-group">
                            <label>Nome do evento:</label>
                            <input type="text" name="nomedoevento" id="nomedoevento" placeholder="Digite o nome do evento"
                                required>
                        </div>
                        <div class="input-group">
                            <label>Data início</label>
                            <input type="date" id="data-inicio" name="data-inicio" value="0000/00/00">
                        </div>
                        <div class="input-group">
                            <label>Descrição do evento:</label>
                            <input type="text" name="descricaodoevento" id="descricaodoevento"
                                placeholder="Digite uma breve descrição do evento" required>
                        </div>
                        <div class="input-group">
                            <label>Responsável pelo evento:</label>
                            <select name="plataforma" required="required">
                                <option value="">TESTE</option>
                                <option value="xbox">**************************</option>
                                <option value="ps5">***************************</option>
                                <option value="nsw">***************************</option>
                                <option value="pcg">***************************</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label>Link externo:</label>
                            <input type="text" name="link" id="link" placeholder="Digite um link de redirecionamento"
                                required>
                        </div>
                        <div class="input-group">
                            <label>Imagem do evento:</label>
                            <input type="file" name="file" id="file"
                                required>
                        </div>
                    </div>
                    <div id="form2">

                        <div class="input-group">
                            <label>Nome da atração:</label>
                            <input type="text" name="descricaodaatracao" id="descricaodaatracao"
                                placeholder="Digite o nome da atração">
                        </div>
                        <div class="input-group">
                            <label>Descrição da atração:</label>
                            <input type="text" name="descricaodaatracao" id="descricaodaatracao"
                                placeholder="Digite uma breve descrição da atração">
                        </div>
                        <div class="input-group">
                            <label>Imagem da atração:</label>
                            <input type="file" name="file" id="file"
                                required>
                        </div>
                        <div class="btn-add">
                            <button class="btn-atracao">
                                <a href="">Adicionar Atração</a>
                        </div>
                        <label id = "tabela">Atrações cadastradas:</label>
                        <table>
                            <tr>
                                <td>Nome da atração</td>
                                
                            </tr>

                        </table>

                        
                        
                        
                    </div>
                </form>
                <!-- <div class="bottoms-box">
                    <div class="bottoms-group">
                        <label>Banner do Evento:</label>
                        <button id="uploadevento"><img id="banner" src="../Images/Upload de imagens.png"
                                alt=""></button>
                        <button class="alterarimagem">ALTERAR IMAGEM</button>
                    </div>
                    <div class="bottoms-group">
                        <label>Banner Atrações:</label>
                        <button id="uploadatracao"><img id="banner" src="../Images/Upload de imagens.png"
                                alt=""></button>
                        <button class="alterarimagem">ALTERAR IMAGEM</button>
                    </div>
                    <div class="bottoms-group">
                        <div class="add-group">
                            <button id="add"> <img src="../Images/Group 442.png" alt=""></button>
                            <button id="add"> <img src="../Images/Group 442.png" alt=""></button>
                            <button id="add"> <img src="../Images/Group 442.png" alt=""></button>
                        </div>
                    </div>
                </div> -->
            </div>
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

    <script src="../JS/main.js"></script>
</body>

</html>