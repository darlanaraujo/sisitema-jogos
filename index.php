<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Estilo Local -->
    <link rel="stylesheet" href="css/estilo.css">

    <!-- Script -->
    <script src="js/script.js" denfer></script>

    <title>Sistema de Jogo</title>
</head>
<body>
    <?php
        require_once "includs/conexao.php";
        require_once "includs/modulos.php"
    ?>

    <main class="main">
        <section class="page">
            <header class="topo">
                <div class="coluna1">
                    <img src="img/favicon.png" class="logo">
                    <h2 class="titulo">Sistema de Cadastro de Jogos</h2>
                </div>
                <div class="coluna2">
                    <button class="btn-login">Login</button>
                </div>
            </header>

            <section class="conteudo">
                <h3 class="titulo">Lista de Jogos</h3>
                <table class="tabela">
                    <tr class="linha cabecalho">
                        <td class="coluna cabecalho">Foto</td>
                        <td class="coluna cabecalho">Nome do Jogo</td>
                        <td class="coluna cabecalho">Painel</td>
                    </tr>
                </table>
                <div class="wrapper-tabela">
                    <table class="tabela">
                        <?php
                            $busca = $conexao->query("select * from jogos order by nome");

                            if(!$busca) {
                                echo "
                                <tr class='linha'>
                                    <td></td>
                                    <td class='coluna'>Erro na busca!</td>
                                </tr>";
                            } else {
                                if($busca->num_rows == 0) {
                                    echo "
                                    <tr class='linha'>
                                        <td></td>
                                        <td class='coluna'>Nenhum registro encontrado</td>
                                    </tr>";
                                } else {
                                    while($registros = $busca->fetch_object()) {
                                        $imgPadrao = verificaImg($registros->capa);
                                        echo "
                                        <tr class='linha'>
                                            <td class='coluna'><img src='$imgPadrao' class='capa'></td>
                                            <td class='coluna'>$registros->nome</td>
                                            <td class='coluna'>Adm.</td>
                                        </tr>";
                                    }
                                }
                            }
                        ?>
                        <!-- <td><img src="img/fotos/$registros->capa" class="capa"></td> -->
                    </table>
                </div>
                </table>
            </section>

            <footer class="roda-pe">
                <p class="texto">Desenvolvido por <a href="#" class="link">Darlan Araujo</a></p>
            </footer>

        </section>
    </main>
</body>
</html>