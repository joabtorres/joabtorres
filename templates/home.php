<div id="page-home">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#page-home"><img src="<?php echo BASE_URL?>assets/imagens/logo-menu.png" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenuHeader"
                aria-controls="navbarMenuHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenuHeader">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#page-sobre">SOBRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#page-projetos">PROJETOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#page-contato">CONTATO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="banner-home">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <div class="row">
                <div class="col">
                    <img class="img-center" src="<?php echo BASE_URL?>assets/imagens/logo-page-home.png">
                    <h6 class="title">joab torres alencar</h6>
                    <p>DESENVOLVEDOR WEB</p>
                    <a href="#page-projetos"> <i class="fa fa-code text-azul"></i> VER PROJETOS <i
                            class="fa fa-code text-azul"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="page-sobre" class="container-page">
    <div class="container">
        <div class="row">
            <div class="card-title">
                <h1 class="title">Sobre</h1>
                <div class="sublinha"><span></span><i class="fa fa-bolt fa-2x"></i><span></span></div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-5 col-lg text-center">
                <img src="<?php echo BASE_URL?>assets/imagens/foto-perfil-page-sobre.png" class="img-fluid mb-3" />
            </div>
            <div class="col-md-7 col-lg-8">
                <p>
                    Olá, meu nome é Joab Torres Alencar, sou Mestre em Desenvolvimento Rural e Gestão de
                    Empreendimentos Agroalimentares; Especialista em Tecnologias para Aplicações Web; e Tecnólogo em
                    Análise e Desenvolvimento de Sistema.
                </p>

                <p>
                    Sou Apaixonado por Tecnologia da Informação (TI), procuro está sempre preparado para novos
                    desafios no mercado de trabalho, atuo tanto na área da docência quanto na área empresarial,
                    principalmente no setor de desenvolvimento web utilizando as linguagens HTML, CSS, JavaScript e
                    PHP, através de
                    frameworks como Boostrap e Laravel. Entretanto, trabalho também com: Coordenação de equipe
                    técnica;
                    Validações deusabilidade e funcionalidades de softwares; Manutenção em computadores;
                    Infraestrutura de rede;
                    e Ministro aulas relacionadas à Tecnologia da Informação (TI).
                </p>
                <ul class="list-unstyled">
                    <li><a href="assets/curriculo/JOAB_TORRES_ALENCAR_CURRICULO_VITAE.pdf" target="_blank"><i
                                class="fa fa-download"></i> Baixar Currículo Vitae </a></li>
                    <li><a href="http://lattes.cnpq.br/0856780614635850" target="_blank"><i class="fa fa-download"></i>
                            Baixar Currículo Lattes</a></li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="https://facebook.com/joabta" target="_blank"><i
                                class="fa-brands fa-square-facebook fa-2x"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/joabta/" target="_blank"><i
                                class="fa-brands fa-square-instagram fa-2x"></i></a></li>
                    <li class="list-inline-item"><a href="https://wa.me/559392047173" target="_blank"><i
                                class="fa-brands fa-square-whatsapp fa-2x"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/joabtorres" target="_blank"><i
                                class="fa-brands fa-square-github fa-2x"></i></a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
<div id="page-projetos" class="container-page">
    <div class="container">
        <div class="row">
            <div class="card-title">
                <h1 class="title">Meus Projetos</h1>
                <div class="sublinha"><span></span><i class="fa fa-bolt fa-2x"></i><span></span></div>
            </div>
        </div>
        <div class="row">
            <?php
            if (isset($projetos) && !empty($projetos)):
                foreach ($projetos as $index):
            ?>
            <div class="col-md-4">
                <a data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo md5($index['id']) ?>">
                    <figure class="projetos">
                        <img src="<?php echo (!empty($index['imagem_min'])) ? BASE_URL . $index['imagem_min'] : '' ?>"
                            alt="<?php echo (!empty($index['nome_projeto'])) ? $index['nome_projeto'] : '' ?>">
                        <figcaption>
                            <i class="fa fa-search fa-2x position-absolute top-50 start-50 translate-middle"></i>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</div>
<div id="page-contato" class="container-page">
    <div class="container">
        <div class="row">
            <div class="card-title">
                <h1 class="title">Contato</h1>
                <div class="sublinha"><span></span><i class="fa fa-bolt fa-2x"></i><span></span></div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p>Duvidas, Críticas ou sugestões? <span>Será um prazer atende-lo</span></p>
                <p><span class="fa fa-mobile-alt "></span> (93) 9 99204-7173</p>
                <p><span class="fa fa-envelope "></span> contato@joabtorres.com.br</p>
            </div>
        </div>
    </div>
</div>
<div id="rodape" class="mt-3 mb-3">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <img src="assets/imagens/logo-page-rodape.png" class="img-fluid" />
                <p class="mb-0">© 2022 - joabtorres.com.br | Todos os direitos reservados </p>
                <p>É proibida a reprodução total ou parcial de qualquer conteúdo deste site, sem autorização.</p>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($projetos) && !empty($projetos)): foreach ($projetos as $index):
?>
<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo md5($index['id']) ?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Projeto:
                    <?php echo (!empty($index['nome_projeto'])) ? $index['nome_projeto'] : '' ?>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img src="<?php echo (!empty($index['imagem_large'])) ? BASE_URL . $index['imagem_large'] : '' ?>"
                        class="img-fluid">
                </div>
                <ul class="list-inline text-center mt-2 mb-2">
                    <?php
        if ((!empty($index['link_demo']))): ?>
                    <li class="list-inline-item"><a
                            href="<?php echo (!empty($index['link_demo'])) ? $index['link_demo'] : '' ?>"
                            target="_blank" class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i>
                            Demonstração</a></li>
                    <?php endif;
        if ((!empty($index['link_git']))): ?>
                    <li class="list-inline-item"><a
                            href="<?php echo (!empty($index['link_git'])) ? $index['link_git'] : '' ?>" target="_blank"
                            class="btn btn-outline-dark"><i class="fa-brands fa-github"></i> Github</a></li>
                    <?php endif;
        if ((!empty($index['link_youtube']))): ?>
                    <li class="list-inline-item"><a
                            href="<?php echo (!empty($index['link_youtube'])) ? $index['link_youtube'] : '' ?>"
                            target="_blank" class="btn btn-outline-danger"><i class="fa-brands fa-youtube"></i>
                            Youtube</a></li>
                    <?php endif; ?>
                </ul>
                <p class="ms-5 me-5">
                    <?php echo (!empty($index['descricao'])) ? $index['descricao'] : '' ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php endforeach; endif; ?>