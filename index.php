<?php
$titulo_pagina = "Bem-vindo ao nosso website";
$descricao_pagina = "Somos uma empresa de terceirização de serviços de contabilidade, constituída por profissionais com larga experiência nas áreas em que atuamos: Contábil - Tributária - Fiscal e Trabalhista.";
$index = true;
?>
<?php include_once('header.php'); ?>

<section class="bkg">

    <div class="container-fluid pt-10">
        <div class="text-align-center mb-5">
            <h5 class="mb-0 font-weight-400"> Quem Somos </h5>
            <h2 class="desk"> Empresa</h2> 
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-1 d-flex align-items-center mb-5 mb-lg-0">
                <div class="text-align-justify mt-5 mt-md-0">
                    <h2> Nossa História </h2>
                    <p>Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria. </p>
                    <p>Efetuamos um diagnóstico sobre as atividades e as rotinas da empresa, em busca de uma melhor performance na utilização de artifícios legais para redução da carga tributária (Planejamento Tributário). </p>
                    <a class="bt bt-b2 mt-4" href="empresa.php" target="_self" rel="noopener noreferrer"> Saiba mais </a>
                </div>
            </div>
            <div class="col-md-4 offset-md-3 bkg-b1 py-6 px-0">
                <div class="img img-i1"></div>
            </div>
        </div>
    </div>

    <div class="bkg-b1a mt-10">
        <div class="container pt-5 pb-10">
            <div class="row">
                <div class="col-lg-4 mt-5">
                    <div class="p-3">
                        <h2> Conheça as  soluções que podemos oferecer </h2>
                        <p> Com a gente é possível sua empresa alcançar todos os objetivos! E para isso, prestamos os seguintes serviços: </p>
                        <a class="bt bt-b1v" href="javascript:movimenta('#form');" rel="noopener noreferrer"> Entre em <strong>Contato</strong> </a>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="box bkg-bs text-align-center p-3">
                        <i class="fas fa-comments-dollar fa-3x cor-c2"></i>
                        <h4 class="my-2 cor-c2 font-weight-400"> Área <span class="d-block font-weight-600">Contábil </span></h4>
                        <p> Assessoria de um regime mais adequado para sua empresa através da visão dos custos e fluxo de caixa. </p>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="box bkg-bs text-align-center p-3">
                        <i class="fas fa-file-alt fa-3x cor-c2"></i>
                        <h4 class="my-2 cor-c2 font-weight-400"> Obrigações <span class="d-block font-weight-600">Trabalhistas</span> </h4>
                        <p> Área de relações trabalhistas, previdências, contamos com profissionais capacitados e treinados. </p>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="box bkg-bs text-align-center p-3">
                        <i class="fas fa-chart-line fa-3x cor-c2"></i>
                        <h4 class="my-2 cor-c2 font-weight-400"> Assessoria <span class="d-block font-weight-600">Empresarial</span> </h4>
                        <p> Fornecendo todas as informações e suporte técnico aos departamentos já existente na empresa. </p>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="box bkg-bs text-align-center p-3">
                        <i class="fas fa-file-signature fa-3x cor-c2"></i>
                        <h4 class="my-2 cor-c2 font-weight-400"> Departamento <span class="d-block font-weight-600">Fiscal</span> </h4>
                        <p> Realizamos escrituração dos documentos fiscais a apuraçãos dos impostos e obrigações. </p>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="box bkg-bs text-align-center p-3">
                        <i class="fas fa-chalkboard-teacher fa-3x cor-c2"></i>
                        <h4 class="my-2 cor-c2 font-weight-400">  Atendimento <span class="d-block font-weight-600">Personalizado</span> </h4>
                        <p>Fale com um de nossos contadores para que eles entendam melhor as suas necessidades.</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid position-relative" style="z-index: 1;">
        <div class="row">
            <div class="col-lg-4 p-lg-8 p-10 img img-i2">
                
            </div>
            <div class="col-lg-8 p-lg-8 p-4 bkg-b2">
                <h2 class="cor"> Nossos Princípios </h2>
                    <div class="form-row">
                        <div class="col-auto"><i class="fas fa-user-tie fa-2x cor ico mr-2"></i></div>
                        <div class="col">
                            <h4 class="m-0"> Nossa Missão </h4>
                            <p class="cor"> Entendemos que os serviços contábeis são uma importante ferramentas para o bom funcionamento das empresas e indispensável para o crescimento e desenvolvimento delas. Por isso, queremos potencializar, por meio do serviço contábil de qualidade, transparência, suporte e rapidez, os negócios de nossos clientes. </p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-auto"><i class="fas fa-eye fa-2x cor ico mr-2"></i></div>
                        <div class="col">
                            <h4 class="m-0"> Nossa Visão </h4>
                            <p class="cor"> Queremos ser reconhecidos por aquilo que prometemos em qualidade de serviços contábeis, sempre almejando a melhoria contínua e empenho para entregar serviços de altíssima qualidade aos nossos clientes. Buscamos oferecer sempre apoio presente e trabalho eficaz a todos aqueles que são nossos parceiros, gerando valor para suas empresas. </p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-auto"><i class="fas fa-hands-helping fa-2x cor ico mr-2"></i></div>
                        <div class="col">
                            <h4 class="m-0"> Nossos Valores </h4>
                            <p class="cor"> Prezamos sempre por ética, respeito e compromisso com nossos clientes e com os princípios que norteiam a contabilidade. Estamos, também, visando a humanização de nossos serviços e qualidade em nossas ações para as empresas que nos contratam. </p>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="box bkg-bs sdw py-4">
        <div class="container">
            <h2 class="mb-0 cor-c2 font-weight-400"> Notícias <span class="font-weight-600"> Empresariais</span></h2>
            <p class="m-0"> Notícias da área contábil e empresarial atualizadas diariamente. </p>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <?php $dados = get_materias('https://sitecontabil.com.br/json/?db=sc_noticias&limite=4'); ?>
            <?php foreach($dados as $item): ?>
            <div class="col-lg col-md-6 mt-5 d-flex">
                <div class="bkg-bs box d-flex flex-column justify-content-between p-2">
                    <div class="">
                        <h5 class="mb-2"> <?= limitar_texto($item->titulo, 150)?> </h5>
                        <p class="m-0"> <i class="far fa-clock fa-fw"></i> [<strong><?= mostra_data($item->pubdate, '%d de %B de %Y'); ?></strong>] </p>
                    </div>
                    <p class="text-align-justify"> <?= limitar_texto(strip_tags(html_entity_decode($item->texto)), 280); ?> </p>
                    <a class="bt bt-b1 mx-2" href="noticias-ler.php?id=<?= $item->id ?>">Leia na integra</a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
        <a class="bt bt-b2v mt-5" href="noticias.php" target="_self"> Confira todas nossas notícias </a>
    </div>

    <div class="container text-align-center mt-10">
        <div class="text-align-center mb-5">
            <h5 class="mb-0 font-weight-400"> Conheçam os clientes </h5>
            <h2 class="desk"> Que confiaram em nosso trabalho</h2> 
        </div>
    </div>
    <div class="bkg-bs py-2">
        <div class="container text-align-center">
            <div class="owl-cliente owl-carousel owl-theme">
                <!-- 1 -->
                <div class="my-2">
                    <img src="assets/imgs/l1.png" alt="auto">
                </div>
                <!-- 2 -->
                <div class="my-2">
                    <img src="assets/imgs/l2.png" alt="auto">
                </div>
                <!-- 3 -->
                <div class="my-2">
                    <img src="assets/imgs/l3.png" alt="auto">
                </div>
                <!-- 4 -->
                <div class="my-2">
                    <img src="assets/imgs/l4.png" alt="auto">
                </div>
            </div>
        </div>
    </div>

</section>

<?php include_once('footer.php'); ?>

