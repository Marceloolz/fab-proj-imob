<!DOCTYPE html>
<html lang="pt-br">
<?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    include_once "php/pedido_corretor.php";
    include_once "config.php";
?>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WR67DVM');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8" />
    <?php if($_SERVER['SERVER_NAME'] == 'ortodontia.maisdental.com'){ ?>
        <base href="https://ortodontia.maisdental.com/">
    <?php } ?>
    <title>Dental Ortho Mais</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='description' content='Plano Odontológico com cobertura completa e ampla rede credenciada no Rio de Janeiro.' />
    <meta name='keywords' content='plano, plano odonto, odontológico, maisdental, dental ortho mais, ortodontia, dentista, rio de janeiro, rj' />
    <meta property="og:image" content="https://ortodontia.maisdental.com/dist/img/OG-Image-OrthoMais.png">
    <meta property="og:title" content="Dental Ortho Mais | Seu sorriso mais confiante e brilhante">
    <meta property="og:description" content="Plano Odontológico com cobertura completa e ampla rede credenciada no Rio de Janeiro.">
    <meta property="og:url" content="https://ortodontia.maisdental.com">
    <meta property="og:type" content="article">
    <meta property="og:locale" content="pt-br">
    <meta property="og:site_name" content="Dental Ortho Mais">
    <link rel="shortcut icon" href="dist/img/favicon.png" type="image/x-icon">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="">
    <meta name="theme-color" content="#825389">
    <link rel="stylesheet" href="dist/css/style.css?v=20210520">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158066823-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-158066823-3');
        gtag('send', 'pageview');
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 387767649 --> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-387767649"></script> 
    <script> 
        window.dataLayer = window.dataLayer || []; 
        function gtag(){dataLayer.push(arguments);} 
        gtag('js', new Date());
        gtag('config', 'AW-387767649'); 
    </script>
    <!-- 
        Event snippet for Solicitar cotação conversion 
        page In your html page, add the snippet and call 
        gtag_report_conversion when someone clicks on the chosen link or button. 
    --> 
    <script> 
        function gtag_report_conversion(url) { 
            var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; 
            gtag('event', 'conversion', { 'send_to': 'AW-387767649/qmfKCK6tsYwCEOG687gB', 'event_callback': callback }); 
            return false; 
        } 
    </script>  
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WR67DVM"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="HeaderLP">
        <div class="HeaderLP_Container">
            <div class="HeaderLP_Container_Logotipo">
                <a href="index.php#Superbanner" class="scrollLink">
                    <img loading="lazy" src="dist/img/logovetor.svg" width="189" height="52" alt="Ortho Mais"  title="Ortho Mais">
                </a>
            </div>
            <div class="HeaderLP_Container_Icone">
                <div class="Container_Icone_Barras"></div>
                <div class="Container_Icone_Barras"></div>
                <div class="Container_Icone_Barras"></div>
            </div>
            <nav class="HeaderLP_Container_Menu">
                <ul class="Container_Menu_Principal">
                    <li><a href="index.php#Superbanner" class="scrollLink">Home</a></li>
                    <li><a href="index.php#Coberturas" class="scrollLink">Cobertura</a></li>
                    <li><a href="index.php#RedeCredenciadaECarencias_RedeCredenciada" class="scrollLink">Rede Credenciada</a></li>
                    <li><a href="index.php#Carencias" class="scrollLink">Carência</a></li>
                    <li><a href="index.php#Contato" class="scrollLink">Entre em contato</a></li>
                </ul>
            </nav>
        </div>
        <div class="HeaderLP_Rodape">
            <div class="HeaderLP_Rodape_SeloANS selo-ans">
            
            </div>
            <div class="HeaderLP_Rodape_SeloANS">
                EPAO: nº 1487
            </div>
            <div class="HeaderLP_Rodape_LogoANS">
                <img loading="lazy" src="dist/img/ans-logo.png" width="80" height="34" alt="ANS - Agência Nacional de Saúde Suplementar" title="ANS - Agência Nacional de Saúde Suplementar">
            </div>
        </div>
    </header>
    <?php if($info != null){ ?>
        <a href="tel:<?php echo $info['Telefone'] ?>" class="CallToAction_LigueJa">
            <div class="CallToAction_LigueJa_Conteudo">
                <span class="LigueJa_Conteudo_Destaque" style="font-size: 17px;">
                    <?php echo $telLink ?>
                </span>
                <span class="LigueJa_Link_Texto">Clique e ligue já</span>
            </div>
        </a>
    <?php }else{ ?>
        <a href="tel:40071136" class="CallToAction_LigueJa">
            <div class="CallToAction_LigueJa_Conteudo">
                <span class="LigueJa_Conteudo_Destaque">
                    4007-1136
                </span>
                <span class="LigueJa_Link_Texto">Clique e ligue já</span>
            </div>
        </a>
    <?php } ?>

    <div class="l-PageContent">
        <div class="Politica_de_Privacidade">
            <div class="Politica_de_Privacidade_Container">
                <div class="breadcrumps">
                    <i class="fas fa-arrow-left"></i><a href="/">Voltar para a página principal</a>
                </div>
                <div class="Politica_de_Privacidade_Titulo">
                    Política de Privacidade
                </div>
                <div class="secao">
                    <div class="titulo-secao">1. O QUE FAREMOS COM ESTA INFORMAÇÃO?</div> 
                    Quando você realiza algum cadastro conosco, coletamos as informações pessoais que você nos dá tais como: nome, e-mail e endereço. Quando você acessa nosso site, também recebemos automaticamente o protocolo de internet do seu computador, endereço de IP, a fim de obter informações que nos ajudam a aprender sobre seu navegador e sistema operacional. E-mail Marketing será realizado apenas caso você permita. Nestes e-mails você poderá receber notícias, artigos, dicas e informações. Você pode se descadastrar da nossa lista a qualquer momento.</div>
                <div class="secao">
                    <div class="titulo-secao">2. CONSENTIMENTO: Como vocês obtêm meu consentimento?</div> 
                    Quando você fornece informações pessoais como nome, telefone e e-mail, após a realização de ações entendemos que você está de acordo com a coleta de dados para serem utilizados pela nossa empresa. Se pedimos por suas informações pessoais por uma razão secundária, como marketing, vamos lhe pedir diretamente por seu consentimento, ou lhe fornecer a oportunidade de dizer não. E caso você queira retirar seu consentimento, como proceder? Se após você nos fornecer seus dados, você mudar de ideia, você pode retirar o seu consentimento para que possamos entrar em contato, para a coleção de dados contínua, uso ou divulgação de suas informações, a qualquer momento, entrando em contato conosco.</div>
                <div class="secao">
                    <div class="titulo-secao">3. SEGURANÇA:</div>  
                    Para proteger suas informações pessoais, tomamos precauções razoáveis e seguimos as melhores práticas da indústria para nos certificar que elas não serão perdidas inadequadamente, usurpadas, acessadas, divulgadas, alteradas ou destruídas. Se você nos fornecer as suas informações de cartão de crédito, essa informação é criptografada usando tecnologia "secure socket layer" (SSL) e armazenada com uma criptografia AES-256. Embora nenhum método de transmissão pela Internet ou armazenamento eletrônico é 100% seguro, nós seguimos todos os requisitos da PCI-DSS e implementamos padrões adicionais geralmente aceitos pela indústria.</div>
                <div class="secao">
                    <div class="titulo-secao">4. ALTERAÇÕES PARA ESSA POLÍTICA DE PRIVACIDADE:</div>
                    Reservamos o direito de modificar essa política de privacidade a qualquer momento, então por favor, revise-a com frequência. Alterações e esclarecimentos vão surtir efeito imediatamente após sua publicação no site. Se fizermos alterações de materiais para essa política, iremos notificá-lo aqui que eles foram atualizados, para que você tenha ciência sobre quais informações coletamos, como as usamos, e sob que circunstâncias, se alguma, usamos e/ou divulgamos elas. Se nossa empresa for adquirida ou fundida com outra empresa, suas informações podem ser transferidas para os novos proprietários para que possamos continuar a vender produtos para você.</div>
            </div>
        </div>
    </div>
    <style>
        @charset "UTF-8";
        * {
            padding: 0;
            margin: 0;
            border: none;
        }

        .Politica_de_Privacidade {
            font-family: 'Open sans', sans-serif;
            display: flex;
            justify-content: center;
            padding: 140px 0;
        }

        .Politica_de_Privacidade .Politica_de_Privacidade_Container {
            width: 1200px;
            max-width: 90%;
            text-align: justify;
        }
        .breadcrumps{
            font-size: 14px;
        }
        .breadcrumps i{
            color: #825389;
            margin-right: 5px;
        }
        .breadcrumps a{
            color: #825389;
            text-decoration: none;
            font-style: italic;
            text-align: left;
        }
        .Politica_de_Privacidade_Titulo{
            font-size: 26px;
            margin-top: 30px;
            margin-bottom: 30px;
            font-weight: bolder;
            color: #825389;
            text-align: left;
        }
        .secao{
            margin-top: 26px;
        }
        .titulo-secao{
            margin-bottom: 10px;
            color: #825389;
            font-weight: bolder;
        }
        @media screen and (max-width: 768px) {
            .Politica_de_Privacidade {
                padding: 160px 0;
            }
        }

    </style>


    <section class="BlocoNewsletter">
        <div class="BlocoNewsletter_Container">
            <div class="BlocoNewsletter_Container_SideOne">
                <div class="Container_SideOne_Logotipo">
                    <img loading="lazy" src="dist/img/logo-maisdentalrodape.svg" width="250" alt="Maisdental.com" title="Maisdental.com">
                </div>
                <div class="Container_SideOne_RedesSociais">
                    <a href="https://www.facebook.com/MaisDentalOficial" target="_blank" class="SideOne_RedesSociais_Item" alt="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/mais-dental-com" target="_blank" class="SideOne_RedesSociais_Item" alt="Linkedin">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.instagram.com/maisdentaloficial/" target="_blank" class="SideOne_RedesSociais_Item" alt="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=552140071136" target="_blank" class="SideOne_RedesSociais_Item" alt="Whatsapp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            <div class="BlocoNewsletter_Container_Divisor"></div>
            <div class="BlocoNewsletter_Container_SideTwo">
                <div class="Container_SideTwo_Titulo">
                    <span class="SideTwo_Titulo_Item">
                        Cadastre-se aqui e receba <span class="Titulo_Item_Destaque">nossas atualizações por
                            e-mail</span>
                    </span>
                </div>
                <div class="Container_SideTwo_InputComButton">
                    <label for="Newsletter_Input" class="SideTwo_InputComButton_Label">Newsletter</label>
                    <input class="SideTwo_InputComButton_Input" id="Newsletter_Input" type="text">
                    <div class="SideTwo_InputComButton_Button news_btn">Enviar</div>
                    <span class="Footer_Lead_Form_Erro" data-footer-news-erro='email'>Por favor, informe um e-mail válido</span>
                </div>
            </div>
        </div>
    </section>
    <footer class="BlocoRodape">
        <div class="BlocoRodape_Container">
            <div class="BlocoRodape_Container_SideOne">
                <div class="Container_SideOne_CopyrightParagrafo">
                    <span class="SideOne_CopyrightParagrafo_Linha">
                        Mais Dental.com Ltda | CNPJ/MF: 01.541.601/0001-74
                    </span>
                    <span class="SideOne_CopyrightParagrafo_Linha">
                        Dental Ortho Mais - <span class="CopyrightParagrafo_Linha_ANS selo-ans"> ANS nº 488.734/21-4 </span>
                    </span>
                </div>
                <div class="Container_SideOne_CopyrightParagrafo">
                    <span class="SideOne_CopyrightParagrafo_Linha">
                        Todos os direitos reservados. © <?php echo date("Y"); ?>
                    </span>
                    <span class="SideOne_CopyrightParagrafo_Linha">
                        Desenvolvido por: <a href="https://marlin.com.br" target="_blank" rel="noreferrer"
                            class="CopyrightParagrafo_Linha_Link">Marlin Internet</a>
                    </span>
                    <div class="politica-privacidade" style="text-align: left; margin-top: 5px; margin-bottom: 10px;">
                        <a href="politica-de-privacidade.php" style="font-weight: 100; text-decoration: none; color: #825389;" target="blank">Política de Privacidade</a>
                    </div>
                </div>
            </div>
            <div class="BlocoRodape_Container_SideTwo">
                <div class="Container_SideTwo_ANS selo-ans">
                    ANS nº 488.734/21-4
                </div>
                <div class="Container_SideTwo_ANS">
                    EPAO nº 1487
                </div>
                <div class="Container_SideTwo_LogoANS">
                    <img loading="lazy" src="dist/img/ans-logo.png" width="100" height="43" alt="ANS - Agência Nacional de Saúde Suplementar" title="ANS - Agência Nacional de Saúde Suplementar">
                </div>
            </div>
        </div>
    </footer>
    <style>
        @media screen and (max-width: 768px){
            .politica-privacidade{
                margin-top: 10px;
                text-align: center; 
            } 
        }
    </style>
    <link href="lib/fontawesome-free-5.9.0-web/css/all.min.css" rel="stylesheet">
</body>

</html>