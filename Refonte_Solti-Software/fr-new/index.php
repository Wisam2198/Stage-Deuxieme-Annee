<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solti Software</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="./style/style.css" rel="stylesheet">
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PF8ZVLSN');</script>
    <!-- End Google Tag Manager -->
</head>

<body class="body" style="background-color: rgb(255, 255, 255)">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PF8ZVLSN" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <nav class="navbar navbar-expand-md fixed-top" style="background-color: #1b1919;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Logo visible sur les écrans larges (desktop) -->
            <img src="images/Logo-Solti-Petit.png" alt="Logo" width="35" height="35"
                class="d-none d-lg-inline d-inline-block align-text-top me-2 mb-2 mb-lg-0" style="margin-left: 0.5rem;">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#accueil">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Produits">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Avantages">Avantages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#valeurs">Nos valeurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#avis">Avis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="font-weight: bold;">FR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../en/indexen.html" style="font-weight: bold;">EN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../sp/indexsp.html" style="font-weight: bold;">SP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ACCUEIL ///////////////////////////////////////////////////////////////////////////////////// -->

    <div id="accueil" class="container">
        <br>
        <div style="margin-top: 100px;" class="d-flex flex-column align-items-center text-center">
            <div class="ms-3">
                <img src="images/Logo-Solti.png" class="logo-solti" height="150" alt="Logo-Solti">
            </div>
            <h1 style="color: #3366ff; margin-top: 10px;">Bienvenue chez SOLTI</h1>
        </div>
        <br>
        <br>
        <br>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-4">
                <h5 style="margin-top: 4rem;">
                    <strong>Des logiciels pour tous</strong><br><br>Trouvez une solution adaptée à votre métier et qui
                    suit votre croissance.
                </h5>
            </div>
            <div class="col-md-4 text-center">
                <a href="https://logiciel-gestion-stock.fr/video/00-video-logiciel-de-stock-gsm.mp4">
                    <img src="images/GSM.png" style="height: auto;" class="mx-auto d-block w100" alt="GSM">
                </a>
            </div>
            <div class="col-md-4">
                <h5 style="margin-top: 4rem;">
                    <strong>Adaptable et personnalisable</strong><br><br>Des dizaines d’options permettent d’adapter le
                    logiciel à vos besoins, à votre budget et aux habitudes de chaque utilisateur.
                </h5>
            </div>
        </div>
        <br><br><br><br>
    </div>

    <!-- PRODUITS ///////////////////////////////////////////////////////////////////////////////////// -->
    <?php
    $f_GSM = file("https://solti.fr/Compteur/GSM.txt");
    $f_SIM = file("https://solti.fr/Compteur/SIM.txt");
    $f_SODA = file("https://solti.fr/Compteur/SODA-FR.txt");
    $f_YODA = file("https://solti.fr/Compteur/YODA.txt");
    ?>
    <div id="Produits" class="hidden" style="background-color: rgb(255, 255, 255);">
        <br>
        <br>
        <h1 style="text-align: center;">Nos Produits</h1>
        <br>
        <br>

        <div class="d-flex justify-content-center align-items-center">
            <div class="card-deck d-flex flex-wrap justify-content-around mx-md-4 mx-2">
                <!-- Card 1 -->
                <div class="card rounded-5 mb-4" style="width: 18rem; margin-right: 2rem; padding: 10px;">
                    <img src="images/produits/GSM.png" class="card-img-top" alt="GSM"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-img-overlay">
                        <p class="scroll-text" style="font-weight: bold;">
                            <a href="https://logiciel-gestion-stock.fr/index.html" target="_blank">En savoir plus..</a>
                        </p>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Gestion de stock</h3>
                        <h6 class="card-text">
                            <?php echo $f_GSM[0] ?>&nbsp;utilisateurs
                        </h6>
                        <p class="card-text">
                            GSM un logiciel de gestion de stock modulaire puissant qui s'adapte à tous les métiers et
                            activités.
                        </p>
                    </div>
                    <!-- En savoir plus button -->
                    <p class="d-md-none text-center">
                        <a href="https://logiciel-gestion-stock.fr/index.html" class="btn btn-primary">En savoir
                            plus</a>
                    </p>
                </div>
                <!-- Card 2 -->
                <div class="card rounded-5 mb-4" style="width: 18rem; margin-right: 2rem; padding: 10px;">
                    <img src="images/produits/SODA.png" class="card-img-top" alt="SODA"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-img-overlay">
                        <p class="scroll-text" style="font-weight: bold;">
                            <a href="https://logiciel-gestion-stock.fr/gestion-stock-soda.html" target="_blank">En
                                savoir plus..</a>
                        </p>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Gestion de base de données</h3>
                        <h6 class="card-text">
                            <?php echo $f_SODA[0] ?>&nbsp;utilisateurs
                        </h6>
                        <p>Logiciel de partage de données révolutionnaire: polyvalent et universel.</p>
                    </div>
                    <!-- En savoir plus button -->
                    <p class="d-md-none text-center">
                        <a href="https://logiciel-gestion-stock.fr/index.html" class="btn btn-primary">En savoir
                            plus</a>
                    </p>
                </div>
                <!-- Card 3 -->
                <div class="card rounded-5 mb-4" style="width: 18rem; margin-right: 2rem;">
                    <img src="images/produits/YODA.png" class="card-img-top" alt="YODA"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-img-overlay">
                        <p class="scroll-text" style="font-weight: bold;">
                            <a href="https://logiciel-gestion-stock.fr/crm/crm-gestion-commerciale-yoda.html"
                                target="_blank">En savoir plus..</a>
                        </p>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">CRM</h3>
                        <h6 class="card-text">
                            <?php echo $f_YODA[0] ?>&nbsp;utilisateurs
                        </h6>
                        <p>Prospection commerciale et gestion de clientèle qui intègre parfaitement Excel, Word et
                            Outlook.</p>
                    </div>
                    <!-- En savoir plus button -->
                    <p class="d-md-none text-center">
                        <a href="https://logiciel-gestion-stock.fr/index.html" class="btn btn-primary">En savoir
                            plus</a>
                    </p>
                </div>
                <!-- Card 4 -->
                <div class="card rounded-5 mb-4" style="width: 18rem; padding: 10px;">
                    <img src="images/produits/GMAO.png" class="card-img-top" alt="GMAO"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-img-overlay">
                        <p class="scroll-text" style="font-weight: bold;">
                            <a href="https://logiciel-gestion-stock.fr/gestion-stock-planning.html" target="_blank">
                                En savoir
                                plus..
                            </a>
                        </p>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Sur mesure</h3>
                        <h6 class="card-text">60 Développements spécifiques</h6>
                        <p>Développement spécifique de logiciel sur mesure Windows, Android, Web et
                            gestion de données techniques</p>
                    </div>
                    <!-- En savoir plus button -->
                    <p class="d-md-none text-center">
                        <a href="https://logiciel-gestion-stock.fr/index.html" class="btn btn-primary">En savoir
                            plus</a>
                    </p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!-- COMPTEURS ///////////////////////////////////////////////////////////////////////////////////// -->

        <div class="centered">
            <!--#include virtual="solti-counters.php"-->
        </div><br>
    </div>

    <!-- Nos Avantages ///////////////////////////////////////////////////////////////////////////////////// -->

    <div id="Avantages" class="container" style="background-color: #ffffff; text-align: center;">
        <br>
        <br>
        <h1>Nos Avantages</h1>
        <br><br><br>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-4">
                <div class="adaptable">
                    <h2 style="font-weight: bold;">Adaptable</h2>
                    <img src="images/Avantages/adaptable.png" class="img-fluid">
                    <p>A votre métier, votre budget<br> et votre organisation</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="compatible">
                    <h2 style="font-weight: bold;">Compatible</h2>
                    <img src="images/Avantages/compatible.png" class="img-fluid">
                    <p>Avec vos applications<br>Excel, EBP, e-commerce,<br>Smartphone</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="simple">
                    <h2 style="font-weight: bold;">Simple</h2>
                    <img src="images/Avantages/simple.png" class="img-fluid">
                    <p>A mettre en place, à utiliser,<br>à maintenir, sans<br>informaticien</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="traçable">
                    <h2 style="font-weight: bold;">Traçable</h2>
                    <img src="images/Avantages/tracable.png" class="img-fluid">
                    <p>Code-barres pour le stock,<br>la production et la mobilité.<br>Suivi de vos mouvements de stock
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="portable">
                    <h2 style="font-weight: bold;">Portable</h2>
                    <img src="images/Avantages/portable.png" class="img-fluid">
                    <p>Déploiement local ou WEB,<br>monoposte ou multipostes</p>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>

    <!-- NOS VALEURS ///////////////////////////////////////////////////////////////////////////////////// -->

    <div id="valeurs" class="hidden1" style="background-color: rgb(255, 255, 255);">
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-7 animate__animated animate__fadeInRight" style="padding: 20px;">
                    <h1 style="text-align: center;">Nos valeurs</h1>
                    <br>
                    <h2 style="color: #000000;">Ecologiques et responsables</h2>
                    <br>
                    <p style="color: #000000;">
                        Les logiciels SOLTI ont une vocation écologique :
                        <br>
                        - L'optimisation logistique permettent de réduire les consommations de matière et les
                        transports.
                        <br>
                        - Leur simplicité et leur facilité de mise en oeuvre économise les déplacements et les frais
                        inutiles.
                        <br>
                        - Le mode hébergé est inutile, ce qui garantit la performance et la propriété de vos données.
                        <br>
                    </p>
                    <p style="color: #000000;">
                        <br>
                        Aucune mise à jour obligatoire, pas de trafic sur le réseau ni serveurs énergivores quand c'est
                        inutile!
                        Avec une application hébergée chez vous, le bilan carbone est optimal. Lisez notre article sur
                        l'évolution
                        et les tendances du logiciel professionnel SAAS versus On Premise ainsi que la note de synthèse
                        du Sénat
                        en
                        2019.
                    </p>
                    <p style="color: #000000;">
                        <br>
                        Découvrez le scandale du tout cloud d'après un article du CNRS et méfiez-vous du cloud, avec la
                        fin
                        annoncée
                        de la Cybersécurité: ordinateurs quantiques
                    </p>
                </div>
                <div class="col-md-4 animate__animated animate__slideInLeft" style="margin-top: 1rem; ">
                    <div class="row">
                        <div class="col-12">
                            <div class="flex-container">
                                <img src="images/nos_valeurs/dossier.png" alt="Dossier" class="w15 h15">
                                <p style="margin-top: 1rem; margin-left: 1rem;">Une newsletter = 10 grammes de CO2</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="flex-container">
                                <img src="images/nos_valeurs/auto.png" alt="Auto" class="w15 h15">
                                <p style="margin-top: 1rem; margin-left: 1rem;">Empreinte carbonne du spam = émissions
                                    annuelles de 3,1
                                    millions de voitures</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="flex-container">
                                <img src="images/nos_valeurs/planete.png" alt="Planete" class="w15 h15">
                                <p style="margin-top: 1rem; margin-left: 1rem;">15.000km = la distance moyenne parcourue
                                    par un e-mail</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="flex-container">
                                <img src="images/nos_valeurs/transfert.png" alt="Transfert" class="w15 h15">
                                <p style="margin-top: 1rem; margin-left: 1rem;">281 milliards = nombre d'emails envoyés
                                    chaque jour dans le
                                    monde</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="flex-container">
                                <img src="images/nos_valeurs/cadre.png" alt="Cadre" class="w15 h15">
                                <p style="margin-top: 1rem; margin-left: 1rem;">Une photo de vacances de 1 Mo à 10 amis
                                    = 500 mètres en
                                    voiture</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="flex-container">
                                <img src="images/nos_valeurs/loupe.png" alt="Loupe" class="w15 h15">
                                <p style="margin-top: 1rem; margin-left: 1rem;">Une requête Google = une ampoule de 60 W
                                    allumée pendant 17
                                    secondes</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="flex-container">
                                <img src="images/nos_valeurs/courrier.png" alt="Courrier" class="w15 h15">
                                <p style="margin-top: 1rem; margin-left: 1rem;">Entre 10.000 et 50.000 e-mails non lus
                                    dans une boite de
                                    réception</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="flex-container">
                                <img src="images/nos_valeurs/nuage.png" alt="Nuage" class="w15 h15">
                                <p style="margin-top: 1rem; margin-left: 1rem;">Industrie du numérique = 2% des
                                    émissions globales de CO2
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="flex-container">
                                <p style="text-align: center; font-weight: bold;">L'industrie du numérique, une source
                                    de pollution croissante. © Céline Deluzarche, Futura</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 animate__animated animate__slideInRight">
                    <br>
                    <br>
                    <br>
                    <img src="images/nos_valeurs/logiciel-ERP-agile.png" alt="Description de l'image" height="80%"
                        width="70%" class="img-fluid d-block mx-auto">
                    <p style="color: #000000; text-align: center;">
                        Cliquez pour la vidéo
                        <a href="https://youtu.be/lCqv21xMiq8" target="_blank">Big Brother et agilité</a>
                    </p><br>
                </div>
                <div class="col-md-7 animate__animated animate__slideInLeft" style="padding: 20px;">
                    <br>
                    <h1 style="text-align: center;">Nos solutions</h1>
                    <br>
                    <h2 style="color: #000000;">Méthode agile et amélioration continu</h2>
                    <br>
                    <p style="color: #000000;">
                        Le modèle du logiciel en France, c'est l'ERP puissant et complexe qui prend en
                        otage votre infrastructure et vos données dans un nuage de complexité inextricable et
                        rigide.
                    </p>
                    <br>
                    <p style="color: #000000;">
                        En fait, la technologie permet d'utiliser des logiciels autonomes interopérables provenant
                        de
                        plusieurs
                        éditeurs.
                        Plutôt qu'un ERP jamais achevé, nous préférons une approche AGILE qui commence par une
                        collecte
                        de
                        données
                        fiable puis la numérisation des flux en communiquant avec vos logiciels de compta ou des
                        logiciels
                        métier.
                    </p>
                    <br>
                    <p style="color: #000000;">
                        Il existe des logiciels pour chacun de vos besoins. Il n'existe pas de logiciel pour tous
                        vos
                        besoins.
                        En
                        interfaçant avec intelligence des solutions spécialisées, vous aurez du sur-mesure optimisé
                        et
                        évolutif.
                    </p><br>
                </div>
            </div>
        </div>
    </div>

    <!-- AVIS ///////////////////////////////////////////////////////////////////////////////////// -->

    <div id="avis" class="container" style="background-color: rgb(255, 255, 255); text-align: center; padding: 2rem 0;">
        <h1>Vos Avis</h1><br><br>
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <img src="images/Avis/figra.jpg" alt="FIGRA" class="img-fluid w60"><br>
                    <p style="font-weight: bold; font-style: italic;">FIGRA</p>
                    <p>Figra</p>
                    <img src="images/Avis/etoiles.png" alt="étoiles" class="w25">
                    <p>Création d'une solution adaptée à notre activité en temps et en budget.</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <img src="images/Avis/citeos.jpg" alt="CITEOS" class="img-fluid w60"><br>
                    <p style="font-weight: bold; font-style: italic;">CITEOS</p>
                    <p>Marc Mollet</p>
                    <img src="images/Avis/etoiles.png" alt="étoiles" class="w25">
                    <p>Notre organisation nous imposait beaucoup de contraintes. Seul SOLTI a proposé une solution
                        viable.</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <img src="images/Avis/ABprint.jpg" alt="AB PRINT" class="img-fluid w60" style="margin-top: 1rem;">
                    <p style="font-weight: bold; font-style: italic; margin-top: 2.5rem;">AB PRINT</p>
                    <p>Migaud Jonathan</p>
                    <img src="images/Avis/etoiles.png" alt="étoiles" class="w25">
                    <p>Que demander de plus pour une gestion simple. Le SAV est très bien et le logiciel peut être
                        modulé selon les besoins.</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
                <div class="d-flex flex-column align-items-center" style="margin-top: 1rem;">
                    <img src="images/Avis/royaume_peche.jpg" class="img-fluid w-60" alt="ROYAUME DE LA PÊCHE"><br>
                    <p style="font-weight: bold; font-style: italic;">ROYAUME DE LA PÊCHE</p>
                    <p>Royaume de la pêche</p>
                    <img src="images/Avis/etoiles.png" alt="étoiles" class="w25">
                    <p>Avant d'utiliser ce logiciel, il me fallait des heures pour avoir un stock qui était à peu près
                        juste. Depuis que je travaille avec ce logiciel de stock très performant et simple
                        d'utilisation, c'est devenu bien plus facile.</p>
                </div>
            </div>
        </div>
        <p>Vous pouvez retrouver plus d'avis en cliquant juste ici !
            <a href="https://fr.trustpilot.com/review/logiciel-gestion-stock.fr" target="_blank"><br>
                <img src="images/Avis/avis-clients.jpg" alt="Avis client" class="w15">
            </a>
        </p>
    </div>

    <!-- EQUIPE ///////////////////////////////////////////////////////////////////////////////////// -->

    <div id="equipe" style="background-color: rgb(255, 255, 255);">
        <br>
        <div class="container">
            <br>
            <h1 class="text-center mb-4">Notre Équipe</h1>
            <br>

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-2 col-md-4 mb-4">
                    <div class="team-member animated text-center">
                        <img src="images/equipe/LAURENTISS2.jpg" alt="Membre de l'équipe 1" class="w60">
                        <h3>Laurent<br> ISS</h3>
                        <p>Manager</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 mb-4">
                    <div class="team-member animated text-center">
                        <img src="images/equipe/loic.jpg" alt="Membre de l'équipe 2" class="w60">
                        <h3>Loic<br> MURAZ</h3>
                        <p>Directeur commercial</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 mb-4">
                    <div class="team-member animated text-center">
                        <img src="images/equipe/arnaud_dorian.jpg" alt="Membre de l'équipe 3" class="w60">
                        <h3>Dorian ARNAUD</h3>
                        <p>Développeur</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 mb-4">
                    <div class="team-member animated text-center">
                        <img src="images/equipe/francis.jpg" alt="Membre de l'équipe 4" class="w60">
                        <h3>Francis HENRIOT</h3>
                        <p>Développeur</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 mb-4">
                    <div class="team-member animated text-center">
                        <img src="images/equipe/yasmine2.jpg" alt="Membre de l'équipe 5" class="w60">
                        <h3>Yasmine MOUMEN</h3>
                        <p>Administration des ventes</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 mb-4">
                    <div class="team-member animated text-center">
                        <img src="images/equipe/Thomas.jpg" alt="Membre de l'équipe 6" class="w60">
                        <h3>Thomas Vandecasteele</h3>
                        <p>Développeur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact ///////////////////////////////////////////////////////////////////////////////////// -->

    <div id="contact">
        <br><br>
        <div id="footerwrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h3 style="margin-top: 20px;">Adresse</h3>
                        <p>
                            20 Avenue de la Houille Blanche<br> Seyssinet-Parisset<br> 38170
                            <br> FRANCE
                        </p>
                        <br>
                        <br>
                        <h3>Contact</h3>
                        <p style="text-decoration: none; color: black;">
                            info@solti.fr <br>
                            04 38 21 34 22
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <h3 style="margin-top: 20px;">Contactez-nous !</h3>
                        <br>
                        <form method="post" class="contact-form php-mail-form" action="contactform/Mail3.php">
                            <div class="form-group">
                                <label>Nom</label>
                                <textarea class="form-control" rows="1"
                                    style="min-height: 1em; border-color: #00000056;" name="name" id="name"
                                    placeholder="Nom"></textarea><br>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <textarea class="form-control" rows="1"
                                    style="min-height: 1em; border-color: #00000056;" name="email" id="email"
                                    placeholder="Email"></textarea><br>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea style="border-color: #00000056;" name="message" class="form-control"
                                    id="message" placeholder="Message"></textarea><br>
                            </div>
                            <div class="form-group">
                                <input type="text" title="Captcha" name="res" placeholder="5 + 2 = " maxlength="12"
                                    size="12" style="color: black;">
                            </div><br>
                            <div class="form-send">
                                <button type="submit" class="btn btn-large"
                                    style="margin-bottom: 100px;">Envoyer</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2">
                        <br>
                        <h3 style="text-align: center; font-style: italic;">
                            Made in
                            France
                        </h3><img src="images/contact/france.png" alt="Made in france" class="d-block mx-auto ">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER ///////////////////////////////////////////////////////////////////////////////////// -->

    <div style="background-color: rgb(34, 32, 32); text-align: center;">
        <div class="container" style="color: #fff;">
            <div class="row">
                <div class="col-md-3 col-md mt-4" style="text-align: left;">
                    <h5>Produits</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none"
                                href="https://logiciel-gestion-stock.fr/gestion-stock-gsm.html">Gestion de stock</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none"
                                href="https://logiciel-gestion-stock.fr/gestion-stock-en-ligne.html">Gestion de
                                stock
                                SAAS</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none"
                                href="https://logiciel-gestion-stock.fr/gestion-stock-lecteur-code-barre.html">
                                Application lecteur
                                code-barres
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none"
                                href="https://logiciel-gestion-stock.fr/gestion-entrepot-WMS.html">WMS</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none"
                                href="https://logiciel-gestion-stock.fr/gestion-stock-soda.html">Gestion de données
                                techniques</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none"
                                href="https://logiciel-gestion-stock.fr/gestion-stock-cash.html">Logiciel de
                                caisse</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-md mt-4" style="text-align: left;">
                    <h5>Qui sommes-nous ?</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none"
                                href="https://logiciel-gestion-stock.fr/gestion-stock-contact.html">Nos
                                partenaires</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none"
                                href="https://logiciel-gestion-stock.fr/gestion-stock-contact.html">Nos
                                Références</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none"
                                href="https://logiciel-gestion-stock.fr/gestion-stock-blog.html">À propos</a>
                        </li>
                    </ul>
                    <h5>Présentation</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="#equipe">Notre équipe</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="#contact">Contact</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none"
                                href="https://logiciel-gestion-stock.fr/index.html">Plus</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-md mt-4" style="text-align: left;">

                    <div class="row align-items-center">
                        <div>
                            <h5>
                                <strong>A propos</strong>
                            </h5>
                            <p>
                                Solti est une entreprise française créée en 2008. Les solutions ont été crées en
                                collaboration avec des entreprises pour répondre à un besoin de terrain. Son expertise
                                est la gestion grâce à la technique code-barres.
                            </p>
                        </div>
                        <div
                            class="col-lg-2 col-md-4 col-sm-6 d-flex align-items-center justify-content-center text-center">
                            <a href="https://www.facebook.com/Soltisoftware/" target="blank">
                                <img src="images/footer/fbpng.jpg" class="w-50 mt-2 d-none d-md-block"
                                    alt="Solti Software Facebook">
                                <img src="images/footer/fbpng.jpg" class="w-25 mt-4 d-md-none"
                                    alt="Solti Software Facebook">
                            </a>
                        </div>
                        <div
                            class="col-lg-2 col-md-4 col-sm-6 d-flex align-items-center justify-content-center text-center">
                            <a href="https://www.youtube.com/channel/UCaXGeP8k6KhCqKWtJcMY6iA" target="blank">
                                <img src="images/footer/ytb.png" class="w-75 mt-2 d-none d-md-block"
                                    alt="Solti Software Videos">
                                <img src="images/footer/ytb.png" class="w-25 mt-4 d-md-none"
                                    alt="Solti Software Videos">
                            </a>
                        </div>
                        <div
                            class="col-lg-2 col-md-4 col-sm-6 d-flex align-items-center justify-content-center text-center">
                            <a href="https://www.linkedin.com/company/solti-solutions-et-technologies-innovantes"
                                target="blank">
                                <img src="images/footer/inpng.jpg" class="w-50 mt-2 d-none d-md-block"
                                    alt="Solti Software Mail">
                                <img src="images/footer/inpng.jpg" class="w-25 mt-4 d-md-none"
                                    alt="Solti Software Mail">
                            </a>
                        </div>
                        <div
                            class="col-lg-2 col-md-4 col-sm-6 d-flex align-items-center justify-content-center text-center">
                            <a href="mailto:info@solti.fr" target="blank">
                                <img src="images/footer/mail.png" class="w-75 mt-2 d-none d-md-block"
                                    alt="Solti Software Mail">
                                <img src="images/footer/mail.png" class="w-25 mt-4 d-md-none" alt="Solti Software Mail">
                            </a>
                        </div>
                        <div
                            class="col-lg-2 col-md-4 col-sm-6 d-flex align-items-center justify-content-center text-center">
                            <a href="https://whereby.com/solti-gsm" target="blank">
                                <img src="images/footer/logo-whereby.jpg" class="w-100 mt-2 d-none d-md-block"
                                    alt="Solti Software Chat">
                                <img src="images/footer/logo-whereby.jpg" class="w-100 mt-4 d-md-none"
                                    alt="Solti Software Chat">
                            </a>
                        </div>
                    </div>
                </div>

            </div><br><br>
            <div class="container" style="color: white;">
                <p>
                    &copy; Copyrights <strong>Solti</strong>. All Rights Reserved 2024
                </p><br>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
    <script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-o3U2xtz9ATKxIep9tiCxS/Z9fNfEXVpbB0K9bAsSGUqUqG4eEuva7eDDM2LZfQ8W"
        crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>