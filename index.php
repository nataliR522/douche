<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Mon artisan RGE, Isolation Thermique Extérieur, Pompe à chaleur, Trouver mon Artisan RGE, Artisan RGE dans ma region">
    <meta name="description" content="">

    <title>Mon Artisan RGE</title>

    <!-- Loading Bootstrap -->

    <!-- Font Favicon --> <!-- Loading Template CSS -->
    <link  rel="stylesheet" href="css/loading.css" >
    <link rel="preload" href="css/main.css" as="style" onload="this.rel='stylesheet'">

    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-35RX09VFDL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-35RX09VFDL');
    </script>
</head>
<body>
<!-- Loading -->
<div class="loading">
    <img src='./images/loading.svg' alt=''/>
</div>
<!-- Loading -->
<!--begin header -->
<header class="header">
    <!--begin navbar-fixed-top -->
    <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top">
        <!--begin container -->
        <div class="container">
            <!--begin logo -->
            <a class="navbar-brand" href="#"><img src="images/rge.png" alt=""/></a>
            <!--end logo -->
            <a class="header-call" href="tel:0756798420">
                <div class="header-call-inner">
                    <img src="./images/call.svg" alt="">
                    07 56 79 84 20
                </div>
                Prix d'un appel local
            </a>
            <!--begin navbar-collapse -->
            <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                <!--begin navbar-nav -->
                <ul class="navbar-nav ml-auto">
                    <li class="discover-link"><a href="#contact" class="discover-btn">Vous êtes Artisan RGE?</a></li>
                </ul>
                <!--end navbar-nav -->
            </div>
            <!--end navbar-collapse -->
        </div>
        <!--end container -->
    </nav>
    <!--end navbar-fixed-top -->
</header>
<!--end header -->

<!--begin home section -->
<section class="home-section" id="home">
    <picture>
        <source srcset="./images/bg10.webp" type="image/webp">
        <img src="./images/bg10.jpg" alt="" class="banner-mobile">
    </picture>
    <div class="home-section-overlay"></div>
    <!--begin container -->
    <div class="container">
        <!--begin row -->
        <div class="row">
            <!--begin col-md-6-->
            <div class="col-md-6">
                <h1>
                    PROFITEZ DES AIDES <span>ACTION LOGEMENT</span>
                </h1>
                <a href="tel:07 56 79 84 20" class="banner-phone">
                    <div class="banner-phone-tel">
                        <img src="./images/call.svg" alt="">
                    </div>
                    <div class="banner-phone-description">
                        <h4>appelez nous</h4>
                        <p>07 56 79 84 20</p>
                    </div>
                </a>
                <div class="banner-logo">
                    <img src="./images/action-logement.png" alt="">
                    <img src="./images/republic.svg" alt="">
                </div>
                <div class="banner-list">
                    Vous êtes propriétaire occupant votre logement, salarié(e) d’une entreprise du secteur privé y
                    compris agricole? Vous y avez peut etre le droit.
                    <span>Remplissez le formulaire et découvrez vos subvention</span>
                </div>
            </div>
            <!--end col-md-6-->
            <!--begin col-md-5-->
            <div class="col-md-5 offset-md-1 margin-top-20">
                <!--begin register-wrapper-->
                <div class="register wow bounceIn" data-wow-delay="0.5s">
                    <!--begin success message -->
                    <p class="register-success">
                        Votre dossier d'éligibilité action logement est en cours de traitement. Votre conseiller vous
                        contacte au plus vite.
                    </p>
                    <!--end success message -->
                    <!--begin register form -->
                    <form id="register-form" class="register-form" action="/server/register.php" method="post">

                        <div class="register-step first-step">
                            <img src="./images/question.svg" alt="question" class="question">
                            <h3>
                                Êtes-vous <span>éligible</span> à l'aide pour <span>la rénovation énergétique</span> de
                                votre logement ?
                            </h3>
                            <input value="Je démarre le test" class="register-btn" type="button">
                            <a href="#">Politique d'utilisation des données personnelles d'Action Logement</a>
                        </div>

                        <div class="register-step">
                            <h3>Etes-vous propriétaire du logement où vous devez réaliser les travaux ?</h3>
                            <label class="checkbox">
                                <input name="fields[7]" value="Oui" type="radio" checked/>
                                <span>Oui</span>
                            </label>
                            <label class="checkbox">
                                <input name="fields[7]" value="Non" type="radio">
                                <span>Non</span>
                            </label>
                        </div>

                        <div class="register-step">
                            <h3>Occupez-vous le logement à titre de résidence principale ?</h3>
                            <label class="checkbox">
                                <input name="fields[8]" class="main-residence" value="Oui" type="radio" checked/>
                                <span>Oui</span>
                            </label>
                            <label class="checkbox">
                                <input name="fields[8]" class="main-residence" value="Non" type="radio">
                                <span>Non</span>
                            </label>
                        </div>
                        <div class="register-step">
                            <h3>Quelle est l'adresse du logement où vous devez réaliser les travaux ?</h3>
                            <label>
                                <input id="autocomplete" name="address" type="text"
                                       placeholder='Ex: 166 BOULEVARD GABRIEL PERI'>
                            </label>
                            <label class="checkbox-primary">
                                <input class="register-input name-address" name="manual-address" type="checkbox">
                                <span>Mon adresse n'est pas reconnue, je la complète manuellement</span>
                            </label>
                            <div class="address-form d-none">
                                <label>
                                    <span>Adresse</span>
                                    <input name="fields[9]" id="street_number" type="text">
                                </label>
                                <label>
                                    <span>Code postal</span>
                                    <input id="postal_code" name="fields[23]" type="number">
                                </label>
                                <label>
                                    <span>Ville</span>
                                    <input id="locality" name="fields[22]" type="text">
                                </label>
                                <label>
                                    <span>Pays</span>
                                    <input id="country" name="fields[21]" type="text" value="France" readonly>
                                </label>
                                <input value="Modifier l'adresse" class="modify-btn" type="button">
                            </div>
                        </div>
                        <div class="register-step">
                            <h3>Etes-vous salarié(e) d'une entreprise située en France métropolitaine (hors DROM) ?</h3>
                            <label class="checkbox">
                                <input name="fields[10]" type="radio" class="employee" value="Oui" checked/>
                                <span>Oui</span>
                            </label>
                            <label class="checkbox">
                                <input name="fields[10]" type="radio" class="employee" value="Non">
                                <span>Non</span>
                            </label>
                        </div>
                        <div class="register-step">
                            <h3>Quel est le secteur d'activité de votre employeur ?</h3>
                            <label class="checkbox">
                                <input name="fields[11]" type="radio" value="Privé" checked/>
                                <span>Privé</span>
                            </label>
                            <label class="checkbox">
                                <input name="fields[11]" type="radio" value="Public" class="field">
                                <span>Public</span>
                            </label>
                            <label class="checkbox">
                                <input name="fields[11]" type="radio" value="Agricole" class="field">
                                <span>Agricole</span>
                            </label>
                        </div>
                        <div class="register-step">
                            <h3>
                                Quel est le Revenu Fiscal de Référence des copropriétaires (présents sur l’acte de
                                propriété) ou des colocataires (présents sur le bail) figurant sur votre avis
                                d'imposition 2019 portant sur les revenus 2018 ou votre avis d'imposition 2020 portant
                                sur les revenus 2019 ?
                            </h3>
                            <p>
                                Si vous êtes sur deux avis différents, merci de faire la somme. Si au premier essai vous
                                êtes non éligible, nous vous invitons à essayer de nouveau avec le second montant.
                            </p>
                            <label>
                                <input id="income" name="fields[13]" type="number"
                                       class="register-input income register-edit"
                                       placeholder="De 1 à 100,000"/>
                            </label>
                        </div>
                        <div class="register-step">
                            <h3>
                                Combien de personnes sont rattachées au(x) foyer(s) fiscal(ux) dont vous venez de
                                déclarer le revenu fiscal de référence ?
                            </h3>
                            <label>
                                <input id="people" name="fields[14]" type="number"
                                       class="register-input people register-edit"
                                       placeholder="De 1 à 10"/>
                            </label>
                        </div>
                        <div class="register-step">
                            <h3>Souhaitez-vous réaliser des travaux d'isolation thermique (isolation des murs, des
                                combles et/ou des planchers) ?</h3>
                            <label class="checkbox">
                                <input name="fields[15]" type="radio" value="Oui" class="other-things" checked/>
                                <span>Oui</span>
                            </label>
                            <label class="checkbox">
                                <input name="fields[15]" type="radio" value="Non" class="other-things">
                                <span>Non</span>
                            </label>
                        </div>
                        <div class="register-step">
                            <h3>Avez-vous d'autres travaux à mener ?</h3>
                            <label class="checkbox">
                                <input name="fields[16]" type="radio" value="Oui" class="other-work" checked/>
                                <span>Oui</span>
                            </label>
                            <label class="checkbox">
                                <input name="fields[16]" value="Non" type="radio">
                                <span>Non</span>
                            </label>
                        </div>
                        <div class="register-step">
                            <h3>Quels types de travaux avez-vous à mener ?</h3>
                            <label class="checkbox">
                                <input name="fields[17]" type="radio" class="types"
                                       value="Remplacement système de chauffage" checked/>
                                <span>Remplacement système de chauffage</span>
                            </label>
                            <label class="checkbox">
                                <input name="fields[17]" type="radio"
                                       value="Equipement de chauffage et d'eau chaude sanitaire utilisant une source d'énergie renouvelable"
                                       class="types">
                                <span>Equipement de chauffage et d'eau chaude sanitaire utilisant une source d'énergie renouvelable</span>
                            </label>
                        </div>
                        <div class="register-step">
                            <h3>Veuillez entrer vos informations personnels afin d'obtenir vos resultats</h3>
                            <label>
                                <input id="name" name="fields[18]" type="text" class="register-input register-name"
                                       placeholder="Nom et Prenom" required/>
                            </label>
                            <label class="register-phone">
                                <input id="phone" name="fields[19]" type="tel" class="register-input"
                                       placeholder="Numero de Telephone" required/>
                            </label>
                            <label>
                                <input id="email" name="fields[20]" type="email" class="register-input register-email"
                                       placeholder="Adresse Email" required/>
                            </label>
                        </div>

                        <div class="register-bottom">
                            <div class="progress-bar">
                                <span></span>
                            </div>
                            <div class="buttons">
                                <div class="back">
                                    <img src="./images/right-arrow.svg" alt="">
                                </div>
                                <input value="Suivant" class="register-btn" type="button">
                            </div>
                        </div>
                    </form>
                    <!--end register form -->
                </div>
                <!--end register-wrapper-->
            </div>
            <!--end col-md-5-->
        </div>
        <!--end row -->
    </div>
    <!--end container -->
</section>
<!--end home section -->

<!--begin partners-section-->
<div class="partners-section">
    <!--begin container-->
    <div class="container">
        <!--begin row-->
        <div class="row">
            <!--begin col-sm-12-->
            <div class="col-md-10 mx-auto text-center partners">
                <h5 class="partners-title">Partenaire de :</h5>
                <img src="images/rgecee.png" class="partners" alt="image">
                <img src="images/faire.png" class="partners" alt="image">
                <img src="images/al.jpg" class="partners" alt="image">
                <picture>
                    <source srcset="./images/rge-qualibat.webp" type="image/webp">
                    <img src="./images/rge-qualibat.png" class="partners" alt="image">
                </picture>
            </div>
            <!--end col-sm-12-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>
<!--end partners-section-->

<!--begin section-grey -->
<section class="section-grey" id="about">
    <!--begin container -->
    <div class="container">
        <!--begin row -->
        <div class="row">
            <!--begin col-md-12 -->
            <div class="col-md-12 text-center margin-bottom-10">

                <p class="section-subtitle">Testez votre éligibilité afin de bénéficier de votre projet 100%
                    subventionné !</p>
            </div>
            <!--end col-md-12 -->
        </div>
        <!--end row -->
    </div>
    <!--end container -->
    <!--begin services-wrapper -->
    <div class="services-wrapper">
        <!--begin container -->
        <div class="container">
            <!--begin row -->
            <div class="row">
                <!--begin col-md-4 -->
                <div class="col-md-4">
                    <div class="main-services blue">
                        <i class="fas fa-fire-alt"></i>
                        <h4>Pompe A Chaleur </h4>
                        <p>Remplacez votre chaudière avec une Pompe à Chaleur et économisez jusqu'à 70% d'énergie sur votre facture
                            .</p>
                    </div>
                </div>
                <!--end col-md-4 -->
                <!--begin col-md-4 -->
                <div class="col-md-4">
                    <div class="main-services red">
                        <i class="fas fa-shower"></i>
                        <h4>Douche + Lavabo Sénior </h4>
                        <p>Jusqu’à 5 000 € pour aménager votre salle de bains et vos sanitaires pour la fourniture et la pose d’une douche sécurisé</p>
                    </div>
                </div>
                <!--end col-md-4 -->
                <!--begin col-md-4 -->
                <div class="col-md-4">
                    <div class="main-services green">
                        <i class="fas fa-warehouse"></i>
                        <h4>Isolation Murs Exterieurs </h4>
                        <p>Bénéficier D'une Isolation de vos Murs exterieurs pour 1€ afin de reduire votre consommation
                            énergetique et de reduire vos depenses.</p>

                    </div>
                </div>
                <!--end col-md-4 -->
            </div>
            <!--end row -->
        </div>
        <!--end container -->
    </div>
    <!--end services-wrapper -->
</section>
<!--end section-grey -->

<!--begin section-white -->
<section class="section-white">

    <!--begin container-->
    <div class="container">

        <!--begin row-->
        <div class="row align-items-center">

            <!--begin col-md-6-->
            <div class="col-md-6 wow slideInLeft" data-wow-delay="0.25s"
                 style="visibility: visible; animation-delay: 0.25s; animation-name: slideInLeft;">

                <div class="margin-right-15 programs-image">
                    <picture>
                        <source srcset="./images/monartisanrgepac.webp" type="image/webp">
                        <img src="./images/monartisanrgepac.png" alt="pic">
                    </picture>
                </div>

            </div>
            <!--end col-sm-6-->

            <!--begin col-md-6-->
            <div class="col-md-6">

                <h3>Jusqu’à 20 000 € pour vos travaux de Rénovation nergétique</h3>

                <p>Une énergie renouvelable, toujours disponible, inodore et performante.</p>

                <ul class="benefits">
                    <li><i class="fas fa-check"></i> Une Pompe à Chaleur performante de grande marque.</li>
                    <li><i class="fas fa-check"></i> Jusqu'a 20 000 € pris en charge par Action-Logement .</li>
                    <li><i class="fas fa-check"></i> Une garantie de 10 ans sur l'appareil</li>
                </ul>

                <a href="#" class="btn-red small scrool">Testez votre Eligibilité</a>

            </div>
            <!--end col-md-6-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</section>
<!--end section-white-->

<!--begin section-grey -->
<section class="section-grey">

    <!--begin container-->
    <section class="">

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row align-items-center">

                <!--begin col-md-6-->
                <div class="col-md-6">

                    <h3>Le Programmes vous accompagne aussi sur l'Isolation de vos murs exterieurs</h3>

                    <p>L'Isolation de vos murs exterieurs peut vous permettre de réduire votre facture de chauffage de
                        35 à 40 % </p>

                    <ul class="benefits">
                        <li><i class="fas fa-check"></i> Réaliser le test d'éligibilité et fixer un RDV avec un
                            Technicien RGE et AMO
                        <li><i class="fas fa-check"></i> La visite du technicien RGE afin de réaliser un bilan thermique
                            de votre maison
                        </li>
                        <li><i class="fas fa-check"></i> Lors de l'accord d'Action Logement du dossier nous procédons a
                            votre installation
                        </li>
                    </ul>

                    <a href="#" class="btn-red small scrool">Testez votre Eligibilité</a>

                </div>
                <div class="col-md-6 wow slideInLeft" data-wow-delay="0.25s"
                     style="visibility: visible; animation-delay: 0.25s; animation-name: slideInLeft;">

                    <div class="margin-left-15">
                        <picture>
                            <source srcset="./images/tie.webp" type="image/webp">
                            <img src="./images/tie.png" alt="pic" class="width-100 image-shadow bottom-margins-images">
                        </picture>
                    </div>

                </div>
                <!--end col-sm-6-->

                <!--begin col-md-6-->

                <!--end col-md-6-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </section>


    <!--end col-md-6 -->

    </div>
    <!--end row-->

    </div>
    <!--end container-->

</section>
<!--end section-grey-->

<!--begin section-bg-1 -->
<section class="section-bg-1">

    <div class="section-bg-overlay"></div>

    <!--begin container-->
    <div class="container">

        <!--begin row-->
        <div class="row">

            <!--begin col md 7 -->
            <div class="col-md-7 mx-auto margin-bottom-20 text-center">

                <h2 class="white-text">Mon artisan RGE en chiffres</h2>

            </div>
            <!--end col md 7-->

        </div>
        <!--end row-->

        <!--begin row-->
        <div class="row">

            <!--begin fun-facts-box -->
            <div class="col-md-2 offset-md-2 fun-facts-box text-center">

                <i class="fas fa-home"></i>

                <p class="fun-facts-title"><span class="facts-numbers">+ de 500</span><br>
                    Maison Rénovées</p>

            </div>
            <!--end fun-facts-box -->

            <!--begin fun-facts-box -->
            <div class="col-md-2 fun-facts-box text-center">

                <i class="far fa-heart"></i>

                <p class="fun-facts-title"><span class="facts-numbers">118 </span><br>Avis Satisfait</p>

            </div>
            <!--end fun-facts-box -->

            <!--begin fun-facts-box -->
            <div class="col-md-2 fun-facts-box text-center">

                <i class="fas fa-award"></i>

                <p class="fun-facts-title"><span class="facts-numbers">1er</span><br>Relation Clientèle</p>

            </div>
            <!--end fun-facts-box -->

            <!--begin fun-facts-box -->
            <div class="col-md-2 fun-facts-box text-center">

                <i class="fas fa-plug"></i>

                <p class="fun-facts-title"><span class="facts-numbers">1324</span><br> Euros en moins</p>

            </div>
            <!--end fun-facts-box -->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</section>
<!--end section-bg-1 -->

<!--begin testimonials section -->
<section class="section-grey" id="testimonials">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row align-items-center">

            <!--begin col-md-5 -->
            <div class="col-md-5 col-sm-12">

                <h2>91% de Clients Satisfaits</h2>

                <p>La pompe à chaleur permet de chauffer et de rafraîchir votre logement, mais peut aussi produire votre
                    eau chaude sanitaire de façon économique et écologique.</p>

                <!--begin row-->
                <div class="row">

                    <!--begin col-md-4-->
                    <div class="col-md-4 col-sm-6">

                        <!--begin testim-platform-->
                        <div class="testim-platform first">

                            <p>AVIS CLIENTS</p>

                            <div class="testim-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                            </div>

                        </div>
                        <!--end testim-platform-->

                    </div>
                    <!--end col-sm-4-->

                    <!--begin col-md-4-->
                    <div class="col-md-4 col-sm-6">

                        <!--begin testim-platform-->
                        <div class="testim-platform">

                            <p>SATISFACTION</p>

                            <div class="testim-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                            </div>

                        </div>
                        <!--end testim-platform-->

                    </div>
                    <!--end col-sm-4-->

                </div>
                <!--end row-->

            </div>
            <!--end col-md-5 -->

            <!--begin col-md-1 -->
            <div class="col-md-1"></div>
            <!--end col-md-1 -->

            <!--begin col-md-6-->
            <div class="col-md-6">

                <!--begin accordion -->
                <div class="accordion" id="accordionFAQ">

                    <!--begin card -->
                    <div class="card">

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionFAQ">
                            <div class="card-body">
                                Installation propre et parfaite . Tout a été bien réalisé et nous apprécions le montage
                                de cette pompe à chaleur qui a été fait avec efficacité et rapidité . Nous ne regrettons
                                pas d'avoir changé au niveau écologique et au niveau du confort . Encore merci pour
                                cette réalisation .
                            </div>
                        </div>

                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="http://monartisanrge.fr/images/temoignage1.png" alt="testimonials" class="testim-img">
                                    <p class="testim-name">Mr. Riviere / <span>Massy - 91300</span></p>
                                </button>
                            </h5>
                        </div>

                    </div>
                    <!--end card -->

                    <!--begin card -->
                    <div class="card">

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                            <div class="card-body">
                                Bonjour, je vous remercie pour votre passage pour le remplacement de notre pompe à
                                chaleur, le service est satisfaisant. Très bien fait et les personnes qui sont venues
                                ont été formidables .
                            </div>
                        </div>

                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="http://monartisanrge.fr/images/temoignage2.png" alt="testimonials" class="testim-img">
                                    <p class="testim-name">Mme Buzet / <span>Saint-Gondon - 45500</span></p>
                                </button>
                            </h5>
                        </div>

                    </div>
                    <!--end card -->

                    <!--begin card -->
                    <div class="card">

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionFAQ">
                            <div class="card-body">
                                Une société qui a su répondre à mes demandes, ils sont à l'écoute et donnent de bons
                                conseils. lors de l'installation de notre pompe à chaleur, ils se sont montrés très
                                professionnels. une installation parfaite faite dans le respect de la propreté .
                            </div>
                        </div>

                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    <img src="http://monartisanrge.fr/images/temoignage3.png" alt="testimonials" class="testim-img">
                                    <p class="testim-name">Mr Lamine / <span> Franqueville-Saint-Pierre - 76520</span>
                                    </p>
                                </button>
                            </h5>
                        </div>

                    </div>
                    <!--end card -->

                </div>
                <!--end accordion -->

            </div>
            <!--end col-md-6-->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end testimonials section -->


<!--begin faq section -->
<section class="section-white" id="faq">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-12-->
            <div class="col-md-12 text-center padding-bottom-10">

                <h2 class="section-title">Foire aux questions</h2>

                <p class="section-subtitle">Suis-Je éligible au programme de Rénovation Energetique ? </p>

            </div>
            <!--end col-md-12 -->

        </div>
        <!--end row -->

        <!--begin row -->
        <div class="row">

            <!--begin col-md-6-->
            <div class="col-md-6">

                <div class="faq-box">

                    <h5>Mon revenu fiscal de référence rentre-t-il en compte pour l'éligibilité de mon dossier ?</h5>

                    <p>Oui, Le revenu fiscal de référence du ménage doit être inférieur au plafond des ménages selon les
                        ressources modestes de l’Agence Nationale de l’Habitat (Anah) (A Vérifier Votre Zone
                        Géographique) </p>

                </div>

                <div class="faq-box">

                    <h5>L'une des deux personnes du couple est employe du secteur privé peut-on bénéficier des travaux
                        de rénovation énergétique? </h5>

                    <p>Oui, il suffit que l'une des personnes au sein du foyer bénéficiaire soit employée du secteur
                        privé...</p>

                </div>

            </div>
            <!--end col-md-6 -->

            <!--begin col-md-6-->
            <div class="col-md-6">

                <div class="faq-box">

                    <h5>Quelles sont les zones prise en charge par Action-Logement ? </h5>

                    <p>La Zone B2 et Zone C , sont les zones éligibles dans le cadre du programme Action-Logemnt pour
                        les rénovation énérgétique .
                        <br> (A Verifier : <a href="https://www.actionlogement.fr/connaitre-votre-zone-geographique">https://www.actionlogement.fr/connaitre-votre-zone-geographique</a>)
                        </br>
                    </p>


                </div>

                <div class="faq-box">

                    <h5>Comment peut-on verifier son éligibilité ?</h5>

                    <p>Nous vous invitions à vous faire contacter par l'un de nos conseillers pour prendre un
                        rendez-vous avec un technicien AMO partenaire et effectuer un bilan thermique .</p>

                </div>

            </div>

            <!--end col-md-6 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end faq section -->

<!--begin section-bg-2 -->
<section class="section-bg-2" id="contact">

    <div class="section-bg-overlay"></div>

    <!--begin container-->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-12-->
            <div class="col-md-12 text-center padding-bottom-10">

                <h2 class="section-title white-text">Artisan RGE? Rejoignez nous</h2>

                <p class="section-subtitle white">Et recevez des projets dans votre région.</p>

            </div>
            <!--end col-md-12 -->

        </div>
        <!--end row -->

        <!--begin row-->
        <div class="row justify-content-md-center">

            <!--begin col-md-8-->
            <div class="col-md-8 text-center margin-top-10">

                <!--begin contact-form-wrapper-->
                <div class="contact-form-wrapper wow bounceIn" data-wow-delay="0.5s"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                    <!--begin form-->
                    <div>

                        <!--begin success message -->
                        <p class="contact_success_box" style="display:none;">We received your message and you'll hear
                            from us soon. Thank You!</p>
                        <!--end success message -->

                        <!--begin contact form -->
                        <form id="contact-form" class="row contact-form contact" action="php/contact.php" method="post">

                            <!--begin col-md-6-->
                            <div class="col-md-6">

                                <input class="contact-input" required="" name="contact_names"
                                       placeholder="Nom de l'entreprise*"
                                       type="text">

                                <input class="contact-input" required="" name="contact_phone"
                                       placeholder="Numéro de Téléphone*" type="text">

                            </div>
                            <!--end col-md-6-->

                            <!--begin col-md-6-->
                            <div class="col-md-6">

                                <input class="contact-input" required="" name="contact_email"
                                       placeholder="Email*" type="email">

                                <select class="contact-input" required="" name="contact_ticket">

                                    <option value="">QualiPAC</option>

                                    <option value="Individual">QualiBois</option>

                                    <option value="Corporate">QualiBat</option>

                                    <option value="Individual">QualiIsolation</option>

                                    <option value="Corporate">Quali Calorifugeage</option>

                                </select>

                            </div>
                            <!--end col-md-6-->

                            <!--begin col-md-12-->
                            <div class="col-md-12">

                                <textarea class="contact-input" rows="2" cols="20" name="contact_message"
                                          placeholder="Décrivez votre entreprise..."></textarea>

                                <input value="Inscription Artisan" class="contact-submit" type="submit">

                            </div>
                            <!--end col-md-12-->

                        </form>
                        <!--end contact form -->

                    </div>
                    <!--end form-->

                </div>
                <!--end contact-form-wrapper-->

            </div>
            <!--end col-md-8-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</section>
<!--end section-bg-2 -->

<!--begin footer -->
<div class="footer">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-5 -->
            <div class="col-md-5">

                <p>© 2020 <span class="template-name">MonArtisanRGE</span>.<a
                            href="https://monartisanrge.fr"
                            target="_blank">Visitez notre site</a></p>

            </div>
            <!--end col-md-5 -->

            <!--begin col-md-2 -->
            <div class="col-md-2"></div>
            <!--end col-md-2 -->

            <!--begin col-md-5 -->
            <div class="col-md-5">

                <!--begin footer_social -->
                <ul class="footer_social">

                    <li>Suivez nous sur :</li>

                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>

                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>

                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                    <li><a href="#"><i class="fab fa-skype"></i></a></li>

                    <li><a href="#"><i class="fab fa-dribble"></i></a></li>

                </ul>
                <!--end footer_social -->

            </div>
            <!--end col-md-5 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</div>
<!--end footer -->


<!-- Load JS here for greater good =============================-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo-min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/wow.js"></script>
<script src="js/plugins.js"></script>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVXisMcN2lHYrm_l-lp7V52RG-IBBQxZ0&libraries=places"></script>
<script src="js/custom.js"></script>
<script src="js/form.js?<?php echo time(); ?>"></script>

</body>
</html>