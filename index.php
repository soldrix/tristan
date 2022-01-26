<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png"  href="img/logositelitesoft2019.svg">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <title>Litesoft</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.nanoscroller/0.8.7/css/nanoscroller.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        :root{
            --primarycolor:#00354A;
            --secondarycolor:#012A3A;
            --tertiarycolor:#0b4358;
            --Text:#5da6c1;
        }

        /*plus que xl*/
        @media (min-width: 1600px){
            .nav-left{
                width: 50%;
            }
            p{
                font-size: 40px;
            }
            h1{
                font-size: 50px;
            }
            .col-xl-7-5{
                flex: 0 0 62.555555%;
                max-width: 62.555555%;
            }
            #test{
                max-height: 100vh;
                height: 100vh;
            }
        }
        /*xl*/
        @media (min-width: 1200px) and (max-width: 1600px){
            p{
                font-size: 25px;
            }
            h1{
                font-size: 35px;
            }
            .col-xl-7-5{
                flex: 0 0 62.555555%;
                max-width: 62.555555%;
            }
            #test{
                max-height: 100vh;
                height: 100vh;
            }
        }
        /*lg*/
        @media (min-width: 991px) and (max-width: 1200px){
            p{
                font-size: 15px;
            }


            .col-lg-7-5{
                flex: 0 0 62.555555%;
                max-width: 62.555555%;
            }
            #test{
                max-height: 100vh;
                height: 100vh;
            }
        }
        /*md*/
        @media (min-width: 768px) and (max-width: 991px) {

            p{
                font-size: 15px;
            }

            .col-md-7-5{
                flex: 0 0 62.555555%;
                max-width: 62.555555%;
            }
            #test{
                max-height: 100vh;
                height: 100vh;
            }
            .nano .nano-pane{
                height: 83%;
                top: 56px;
            }
        }
        /*sm*/
        @media (min-width: 576px) and (max-width: 768px) {
            p{
                font-size: 20px;
            }

            .col-sm-7-5{
                flex: 0 0 62.555555%;
                max-width: 62.555555%;
            }
            #test{
                max-height: 100vh;
                height: 100vh;
            }
            .nano .nano-pane{
                height: 83%;
                top: 56px;
            }
        }
        /*très petite*/
        @media (max-width: 576px){
            p{
                font-size: 20px;
            }
            #test{
                max-height: 100vh;
                height: 100vh;
            }
            .nano .nano-pane{
                height: 83%;
                top: 56px;
            }
        }

    </style>
</head>
<body>
<div id="Mention" class="container-fluid p-0 d-none flex-column nano" style="background-color: var(--primarycolor)">
    <nav  class="navbar  navbar-expand-lg navbar-light  d-flex flex-row justify-content-between" style="background-color: var(--secondarycolor);position: sticky;top: 0px;z-index:1020;">
        <a class="navbar-brand" href="#" onclick="changePage(8)" style="min-height: 50px;min-width: 50px"><img src="img/FLECHE.svg" alt=""></a>
    </nav>

<div class="container nano">
    <div class="col-auto nano-content">
        <div class="col-auto" style="background-color:var(--primarycolor);color: var(--Text) ">
            <h1 class="text-light my-5">Mentions légales</h1>
            <p class="mt-3 px-3 bar">
                Editeur et hébergeur

                LITESOFT
                123 impasse du parc 60600 Agnetz - contact@litesoft.fr
                S.A.R.L au capital de 5000 € - RCS de Beauvais 534 962 162 - FR 61 534 962 162

                Directeur de la Publication

                Franck VIGIER
                123 impasse du parc - 60600 Agnetz - fvigier@litesoft.fr
            </p>

            <h1 class="text-light my-5">Politique de confidentialité</h1>
            <p class="mt-3 px-3 bar">


            La protection de votre vie privée est importante pour LiteSoft.
            C’est la raison pour laquelle nous avons élaboré une politique de confidentialité qui régit la manière dont nous recueillons, utilisons, divulguons, transférons et stockons vos données personnelles.

            LiteSoft fournit des sites, des applications et des services (nommés « Services ») à des utilisateurs.
            Cette politique de confidentialité définit notre politique en ce qui concerne les informations collectées auprès des visiteurs du site et des utilisateurs de nos Services.
            En vertu de la loi applicable, LiteSoft est le responsable du traitement des données personnelles collectées en accord avec les utilisateurs.
            </p>
            <h1 class="text-light my-5">Collecte et utilisation des données personnelles</h1>
            <p class="px-3 mt-3 bar">
                Lorsque vous interagissez avec nous via nos Services, nous pouvons collecter des informations auprès de vous.
                Nous recueillons des informations auprès de vous lorsque vous fournissez volontairement ces informations, par exemple lorsque vous vous inscrivez pour accéder à nos Services ou utiliser certains de nos Services. Les informations que nous collectons peuvent inclure, sans s'y limiter, le nom d’utilisateur et l'adresse e-mail ainsi que tout autre contenu que vous envoyez via nos Services.

            </p>
            <h1 class="text-light my-5">Données personnelles que nous recueillons</h1>
            <p class="mt-3 px-3 bar">
                Lorsque vous interagissez avec nous via nos Services, nous recevons et stockons certaines informations telles qu'une adresse IP, un ID d'appareil et les activités au sein des Services. Nous pouvons stocker ces informations ou ces informations peuvent être incluses dans des bases de données détenues et gérées par des sociétés affiliées, des agents ou des prestataires de services. Les Services peuvent utiliser ces informations et les mettre en commun avec d'autres informations pour suivre, par exemple, le nombre total de connexions ou le nombre total de visiteurs sur nos différents Services.

                Cookies: nous utilisons des cookies et des technologies similaires pour suivre les paramètres de votre ordinateur local, tels que le compte auquel vous vous êtes connecté et les paramètres de notification. Les cookies sont des éléments de données que les sites et services peuvent définir sur le navigateur ou appareil et qui peuvent être lus lors des prochaines visites. Nous pouvons étendre notre utilisation des cookies pour enregistrer des données supplémentaires à mesure que de nouvelles fonctionnalités sont ajoutées à nos Services. De plus, nous utilisons des technologies telles que des balises Web et des gifs à pixel unique pour enregistrer des données de journal telles que les taux d'ouverture des e-mails envoyés par le système.

                Nous pouvons utiliser des outils d'analyse de sites Web tiers tels que Google Analytics sur notre site Web qui utilisent des cookies pour collecter certaines informations concernant l’utilisation de nos Services. Cependant, vous pouvez désactiver les cookies en modifiant les paramètres de votre navigateur. De plus amples informations sur la procédure à suivre pour désactiver les cookies sont disponibles sur le site Web du fournisseur de navigateur Internet via l’écran d’aide.

            </p>
            <h1 class="text-light my-5">Utilisation de vos données personnelles</h1>
            <p class="mt-3 px-3 bar">
                Nous utilisons les informations que vous fournissez d'une manière conforme à la présente politique de confidentialité. Si vous fournissez des informations pour une certaine raison, nous pouvons utiliser ces informations en relation avec la raison pour laquelle elles ont été fournies. Par exemple, si vous nous contactez par e-mail, nous utiliserons les informations que vous fournissez pour répondre à votre question ou résoudre votre problème. De plus, si vous fournissez des informations afin d'accéder aux Services, nous utiliserons vos informations pour vous donner accès à ces services et pour surveiller votre utilisation de ces services. Nous pouvons également utiliser les informations collectées par le biais des Services pour nous aider à améliorer le contenu et la fonctionnalité des Services, à mieux comprendre nos utilisateurs et à améliorer les Services. Nous pouvons utiliser ces informations pour vous contacter à l'avenir afin de vous parler des services qui, selon nous, pourraient vous intéresser. Si nous le faisons, chaque communication marketing que nous vous enverrons contiendra des instructions vous permettant de vous « désinscrire » de la réception de futures communications marketing. De plus, si à tout moment vous ne souhaitez plus recevoir de communications marketing futures ou si vous souhaitez que votre nom soit supprimé de nos listes de diffusion, veuillez nous contacter comme indiqué ci-dessous.

            </p>
            <h1 class="text-light my-5">Nos bases juridiques pour le traitement de vos données personnelles</h1>
            <p class="mt-3 px-3 bar">
                Les lois de certaines juridictions obligent les entreprises à vous informer du fondement juridique sur lequel elles s'appuient pour utiliser ou divulguer vos données personnelles. Dans la mesure où ces lois s'appliquent, nos fondements juridiques sont les suivants:
                Pour honorer nos engagements contractuels envers vous : une grande partie de notre traitement des données personnelles consiste à respecter nos obligations contractuelles envers nos utilisateurs, ou à prendre des mesures à la demande des utilisateurs en prévision de la conclusion d'un contrat avec eux. Par exemple, nous traitons les données personnelles sur cette base pour créer votre compte et fournir nos Services.
                Intérêts légitimes : Dans de nombreux cas, nous traitons les données personnelles au motif qu'elles servent nos intérêts légitimes d'une manière qui n'est pas outrepassée par les intérêts ou les droits et libertés fondamentaux des personnes concernées.
                Cela comprend :
                - Offrir une expérience utilisateur sûre et agréable
                - Service clients
                - Marketing, par exemple envoyer des courriels ou d'autres communications pour vous informer des nouvelles fonctionnalités
                - Protéger nos utilisateurs, notre personnel et nos biens
                - Analyser et améliorer notre entreprise, par exemple recueillir des informations sur la façon dont vous utilisez nos services pour optimiser la conception et le placement de certaines fonctionnalités
                - Traitement des demandes d’emploi
                - Gérer les questions juridiques
                - Conformité légale : Nous devons utiliser et divulguer les données personnelles de certaines manières pour respecter nos obligations légales
                - Pour protéger les intérêts vitaux de l'individu ou d'autres personnes, par exemple, nous pouvons collecter ou partager des données personnelles pour aider à résoudre une situation médicale urgente.
                - Consentement : lorsque la loi l'exige, et dans certains autres cas, nous traitons les données personnelles sur la base de votre consentement implicite ou explicite.

            </p>

            <h1 class="text-light my-5">La divulgation de vos informations</h1>
            <p class="mt-3 px-3 bar">
                LiteSoft n'a pas pour vocation de vendre vos informations. Nous considérons ces informations comme un élément essentiel de notre relation avec vous. Il existe cependant certaines circonstances dans lesquelles nous pouvons partager vos informations avec certains tiers, comme indiqué ci-dessous :

                Transferts d’entreprises
                Au fur et à mesure que nous développons nos activités, nous pouvons vendre ou acheter des entreprises ou des actifs. En cas de vente, fusion, réorganisation, faillite, dissolution ou événement similaire, vos informations peuvent faire partie des actifs transférés.

                Consentement
                Nous pouvons transférer vos informations avec votre consentement.

                Sociétés liées
                Nous pouvons également partager vos informations avec nos sociétés liées à des fins conformes à la présente politique de confidentialité.

                Développeurs
                Les développeurs utilisant notre SDK ou notre API auront accès aux informations de leurs utilisateurs finaux. Les développeurs doivent utiliser ces informations uniquement pour fournir la fonctionnalité SDK / API dans leurs applications et / ou services.

                Agents, consultants et tiers liés
                Comme de nombreuses entreprises, nous engageons parfois d'autres sociétés ou individus pour exécuter certaines fonctions liées aux affaires. Des exemples de telles fonctions incluent l'envoi d'informations, la maintenance de bases de données et le traitement des paiements.

                Exigences légales
                Nous pouvons divulguer vos informations si la loi l'exige ou si nous croyons de bonne foi qu'une telle action est nécessaire pour :
                - se conformer à une obligation légale
                - protéger et défendre les droits ou la propriété de LiteSoft
                - protéger la sécurité personnelle des utilisateurs des Services ou du public
                - protéger contre la responsabilité légale

                Données agrégées ou non identifiables
                Nous pouvons également partager des informations agrégées ou non personnellement identifiables avec nos partenaires ou d'autres à des fins commerciales.

            </p>
            <h1 class="text-light my-5"> Informations non sollicitées</h1>

            <p class="mt-3 px-3 bar">
                Vous pouvez nous fournir des idées de nouveaux produits ou de modifications de produits existants, et d'autres soumissions non sollicitées. Toutes ces informations seront considérées comme non confidentielles et nous serons libres de reproduire, utiliser, divulguer et distribuer ces informations non sollicitées à des tiers sans limitation ni attribution.

            </p>
            <h1 class="text-light my-5">Liens vers d’autres sites Web</h1>
            <p class="mt-3 px-3 bar">
                Cette politique de confidentialité s'applique uniquement aux Services. Les Services peuvent contenir des liens vers d'autres sites Web non exploités ou contrôlés par nous (nommés «Sites tiers»). Les politiques et procédures que nous avons décrites ici ne s'appliquent pas aux Sites Tiers. Les liens des Services n'impliquent pas que nous approuvons ou avons examiné les Sites Tiers. Nous vous suggérons de contacter ces sites directement pour obtenir des informations sur leurs politiques de confidentialité.

            </p>

            <h1 class="text-light my-5">Conservation des données</h1>
            <p class="mt-3 px-3 bar">
                Nous conservons généralement les données personnelles aussi longtemps qu'elles peuvent être pertinentes aux fins identifiées ici. Pour éliminer les données personnelles, nous pouvons les anonymiser, les supprimer ou prendre d'autres mesures appropriées. Les données peuvent persister dans les copies effectuées à des fins de sauvegarde et de continuité des activités pendant un temps supplémentaire.

            </p>

            <h1 class="text-light my-5">Sécurité</h1>
            <p class="mt-3 px-3 bar">
                Nous prenons des mesures raisonnables pour protéger les informations fournies via les Services contre la perte, l'utilisation abusive et l'accès, la divulgation, la modification ou la destruction non autorisés. Cependant, aucune transmission Internet ou e-mail n'est jamais totalement sécurisée ou sans erreur. En particulier, les e-mails envoyés vers ou depuis les Services peuvent ne pas être sécurisés. Par conséquent, vous devez faire particulièrement attention à décider quelles informations vous nous envoyez par e-mail. Veuillez garder cela à l'esprit lorsque vous divulguez des informations via Internet.

                Nous pensons que les utilisateurs doivent être traités de manière égale, où qu'ils se trouvent, et nous proposons donc les options suivantes pour contrôler vos données, quel que soit leur emplacement.
                Vous pouvez mettre à jour certaines informations en accédant à votre profil.
                Vous pouvez également vous désinscrire de certains e-mails en cliquant sur le lien de désinscription qu'ils contiennent.
                Vous pouvez désactiver certains traitements liés aux cookies.
                Les individus en Californie, dans l'Espace économique européen, au Canada, au Costa Rica et dans certaines autres juridictions en dehors des États-Unis ont certains droits légaux pour obtenir la confirmation que nous détenons des données personnelles les concernant, pour accéder aux données personnelles que nous détenons à leur sujet (y compris, dans certains cas, sous forme portable), et d’obtenir sa correction, sa mise à jour, sa modification ou sa suppression dans des circonstances appropriées. Ils peuvent également s'opposer à nos utilisations ou divulgations de données personnelles, pour demander une restriction de leur traitement ou retirer tout consentement, bien que de telles actions n'aient généralement pas d'effet rétroactif. Ils n'affecteront pas non plus notre capacité à poursuivre le traitement des données de manière licite.

            </p>

            <h1 class="text-light my-5"> Modification de cette politique de confidentialité</h1>
            <p class="mt-3 px-3 bar">
                Nous nous réservons le droit de mettre à jour ou de modifier cette politique de confidentialité à tout moment et de temps en temps sans préavis. Veuillez revoir cette politique périodiquement, et surtout avant de fournir des informations. Cette politique de confidentialité a été mise à jour pour la dernière fois à la date indiquée ci-dessus. Votre utilisation continue des Services après tout changement ou révision de cette politique de confidentialité indiquera votre accord avec les termes de cette politique de confidentialité révisée.

            </p>

            <h1 class="text-light my-5">  Nous contacter</h1>
            <p class="mt-3 px-3 bar">
                N'hésitez pas également à nous contacter si vous avez des questions concernant cette politique de confidentialité ou les pratiques d'information des Services.
                Vous pouvez nous contacter en utilisant l’adresse e-mail : privacy@litesoft.fr.

            </p>
        </div>
    </div>
</div>




</div>
<div id="Carousel" class="container-fluid p-0  min-vh-100 d-none justify-content-center" style="background-color: var(--primarycolor)">
    <button type="button" class="close text-light fixed-top" aria-label="Close" style="left:50px;top:10px" onclick="CarouselFull(2)">
        <span aria-hidden="true">&times;</span>
    </button>

    <div class="col-10 border border-dark rounded p-0 mb-2 align-self-center">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleInterval" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleInterval" data-slide-to="1"></li>
                <li data-target="#carouselExampleInterval" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
</div>
<div id="SiteLitesoft" class="container-fluid p-0  d-flex" style="height: 100%;color: var(--Text)">




    <!--    nav-bar left-->
    <nav class="col-lg-1 position-sticky d-none d-lg-flex flex-column pt-1 max-vh-100 justify-content-center" style="background-color: var(--secondarycolor)">

        <ul class="list-unstyled d-flex flex-column justify-content-center align-self-center nav-left">
            <li class="d-flex justify-content-center h-100 w-100 px-2">
                <a class="mt-3 align-self-center w-100 h-100" href="#" onclick="changePage(1)"><img class="w-100 h-100" src="img/onlyLogo.svg" alt="Logo Litesoft"></a>
            </li>
        </ul>
        <ul class="list-unstyled h-100 d-flex flex-column justify-content-center align-self-center nav-left" style="width: 50%">
            <li class="my-3">
                <a href="#" onclick="changePage(2)"><img id="Prestaw" src="img/iconPresta.svg" alt="Préstation" ></a>
            </li>
            <li class="my-3">
                <a href="#" onclick="changePage(3)"><img id="refsw" src="img/iconRefs.svg" alt="Référence" ></a>

            </li>
            <li class="my-3">
                <a href="#" onclick="changePage(4)"><img id="Equipew" src="img/iconEquipe.svg" alt="Equipe" ></a>
            </li>
            <li class="my-3">
                <a href="#" onclick="changePage(5)"><img id="Realsw"  src="img/iconReals.svg" alt="Réalisation" ></a>
            </li>
            <li class="my-3">
                <a href="#" onclick="changePage(6)"><img id="Faqw" src="img/iconFaq.svg" alt="F.A.Q." ></a>
            </li>
        </ul>
    </nav>

    <div id="test" class="nano  col-lg-9 d-flex flex-column p-0" style="height: 100vh">
        <div id="page" class="nano-content d-flex flex-column" style="background-color: var(--primarycolor);">
            <nav  class="navbar  navbar-expand-lg navbar-light  d-flex d-lg-none d-xl-none flex-row justify-content-between" style="background-color: var(--secondarycolor);position: sticky;top: -1px;z-index:1020;">
                <a class="navbar-brand" ><img class="img-fluid w-50" src="img/logolitesoft.svg" alt=""></a>
                <button class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="height: 25px;width: 25px">
                    <img class="img-fluid h-100 w-100" src="img/param.svg" alt="">
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav d-flex flex-row justify-content-end">
                        <div class="d-flex flex-column justify-content-center" >
                            <p class="text-light mb-0 mt-2 mr-2 text-right font-weight-bold" style="font-size: 25px">Profil</p>
                            <p class="text-right mr-2" style="color: #52B8DD;font-size: 20px">Jean</p>
                        </div>
                        <div class="d-flex justify-content-center mb-3 align-self-end" style="background-image: url('img/singe.svg');background-repeat: no-repeat;object-fit: cover;width: 150px;height: 150px">
                            <div class="align-self-center p-0"  style="background: white url('img/jean.jpg') no-repeat center center;border-radius: 100%;background-size: cover ;width: 130px;height: 130px;">
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="col-auto p-0 align-self-center d-flex flex-column w-100 " style="min-height: 95%;">
                <div class="col-11 align-self-center d-flex flex-column">
                    <div class="col-auto my-4 p-0 d-none d-lg-flex">
                        <img src="img/groslitesoft.svg" alt="" style="width: 37.5%">
                    </div>
                    <div id="Home" class="col-auto d-flex flex-column p-1 align-self-center ">

                        <div class="col-auto col-sm-auto col-md-auto col-lg-auto mb-4 d-flex flex-column flex-sm-column flex-md-column flex-lg-row p-0 justify-content-between" style="background-color: #0b4358">
                            <div class="col-auto col-sm-auto col-md-auto col-lg-4 align-self-center mt-2 mb-5">
                                <img class=" align-self-center img-fluid w-100" src="img/logo.gif" alt="logo" >
                            </div>
                            <div class="col-auto col-sm-auto col-md-auto col-lg-7 align-self-center my-2 p-3 text-light" style="background-color: #0B4358;font-size: 10px">
                                <h1 class="text-center font-weight-bold" style="color: #1B81C4;">Qui Somme nous?</h1>
                                <p class="font-weight-normal">
                                    Créée en 2011, Litesoft est une équipe de développeurs soudée et dynamique répartie sur deux sites :

                                    l’un dans l’Oise et l'autre dans l’Hérault.
                                    Nous sommes convaincus que c’est l’informatique qui doit être au service des utilisateurs et non l’inverse.



                                    En créant des applications optimisées, adaptées à vos exigences et à vos contraintes, nous vous aiderons à améliorer votre productivité.

                                    Quelque soit votre domaine d’activité, nous imaginons avec vous les outils informatiques en cohérence avec votre métier en respectant le process suivant :


                                    Étude et compréhension de votre demande en rencontrant les acteurs concernés
                                    Rédaction d’un cahier des charges détaillant les fonctionnalités qui seront développées.
                                    Création de votre outil avec des phases de validation de votre part
                                    Périodes de tests continues en interne puis avec vous avant la mise en production
                                    Mise en production de la solution avec accompagne ent en fonction de vos besoins (formation, paramétrage…).
                                </p>
                            </div>
                        </div>
                        <div class="col-auto col-sm-auto col-md-auto col-lg-auto d-flex mb-5 flex-column flex-md-column flex-lg-column p-0" style="">
                            <div class="col-auto col-sm-auto col-md-auto d-flex flex-column flex-sm-row flex-md-row flex-lg-row flex-xl-row p-0 justify-content-sm-between justify-content-md-between justify-content-lg-between">
                                <div class="col-auto col-sm-7-5  col-md-7-5 col-lg-7-5 col-xl-7-5" style="background-color:#0B4358;">
                                    <h1 class="text-light mt-1" style="font-size: 30px">Nos horaires</h1>
                                    <table class="table table-borderless" style="color: #52B8DD">
                                        <thead>
                                        <tr class="table-active" >
                                            <th scope="col">Jours</th>
                                            <th scope="col">Matin</th>
                                            <th scope="col">Après-midi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr >
                                            <th scope="row">Lundi-jeudi</th>
                                            <td>9h-12h30</td>
                                            <td>13h15-17h45</td>

                                        </tr>
                                        <tr >
                                            <th scope="row">Vendredi</th>
                                            <td colspan="2">9h-12</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-auto col-sm-4 col-md-4 col-lg-4  p-3 d-flex justify-content-center flex-column" style="background-color: #0B4358">
                                    <h1 class="text-light">titre</h1>
                                    <canvas id="myChart" class="align-self-center mb-3"></canvas>
                                    <div id="legend" class="col-auto d-flex px-0 py-2 justify-content-center"></div>


                                </div>
                            </div>


                        </div>
                    </div>

                    <div id="Prestation" class="col-auto d-none flex-column p-1 align-self-center my-3" style="background-color: #0b4358">

                        <div class="col-auto d-flex flex-column">
                            <h1 class="text-light d-flex" >
                                Nos prestations
                            </h1>
                            <div class="col-auto d-flex flex-column flex-sm-column flex-md-row flex-xl-row">
                                <div class="col-auto col-sm-6 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-self-center">
                                    <img class="img-fluid my-3 h-75 w-75 align-self-center" src="img/icoCloud.svg" alt="">
                                </div>
                                <div class="col-auto col-sm-auto col-md-8 col-lg-8 col-xl-8 d-flex justify-content-center flex-column">
                                    <p class="font-weight-bold text-light">Cloud</p>
                                    <p>
                                        Où que vous soyez, accédez à votre outil en toute simplicité.
                                        Applications, intranet, extranet.
                                        De l'interface graphique à la mise au point technique,
                                        Litesoft prend en charge l'ensemble du développement de votre site.
                                    </p>
                                </div>
                            </div>
                            <div class="col-auto d-flex flex-column flex-sm-column flex-md-row flex-xl-row">
                                <div class="col-auto col-sm-6 col-md-4 col-lg-4 col-xl-4  d-flex justify-content-center align-self-center">
                                    <img class="img-fluid my-3 h-75 w-75 align-self-center" src="img/icoDesktop.svg" alt="">
                                </div>
                                <div class="col-auto col-sm-8 col-md-8 col-lg-8 col-xl-8 d-flex justify-content-center flex-column">
                                    <p class="font-weight-bold text-light">Desktop</p>
                                    <p>
                                        Notre priorité est de vous proposer un outil qui se
                                        distingue par sa simplicité, sa rapidité, totalement adapté, efficace, et au meilleur prix.
                                        Les applications Litesoft sont des outils sur mesure développés pour des besoins métiers précis.
                                    </p>
                                </div>
                            </div>
                            <div class="col-auto d-flex flex-column flex-sm-column flex-md-row flex-xl-row">
                                <div class="col-auto col-sm-6 col-md-4 col-lg-4 col-xl-4  d-flex justify-content-center align-self-center">
                                    <img class="img-fluid my-3 h-75 w-75 align-self-center" src="img/icoMobile.svg" alt="">
                                </div>
                                <div class="col-auto col-sm-auto col-md-8 col-lg-8 col-xl-8 d-flex justify-content-center flex-column">
                                    <p class="font-weight-bold text-light">Smartphones et tablettes</p>
                                    <p>
                                        Nous nous adaptons à tous types de supports en fonction de vos besoins, comme par exemple :
                                        gestion de suivi de chantiers déclaration et suivi d’incidents.
                                    </p>
                                </div>
                            </div>
                            <div class="col-auto d-flex flex-column flex-sm-column flex-md-row flex-xl-row">
                                <div class="col-auto col-sm-6 col-md-4 col-lg-4 col-xl-4  d-flex justify-content-center align-self-center">
                                    <img class="img-fluid my-3 h-75 w-75 align-self-center" src="img/icoReseaux.svg" alt="">
                                </div>
                                <div class="col-auto col-sm-auto col-md-8 col-lg-8 col-xl-8 d-flex justify-content-center flex-column">
                                    <p class="font-weight-bold text-light">Systèmes et réseaux</p>
                                    <p>
                                        Mise à disposition d'infrastructures <br>
                                        sur mesure, adaptables et résiliantes.
                                    </p>
                                </div>
                            </div>
                            <div class="col-auto d-flex flex-column flex-sm-column flex-md-row flex-xl-row">
                                <div class="col-auto col-sm-6 col-md-4 col-lg-4 col-xl-4  d-flex justify-content-center align-self-center">
                                    <img class="img-fluid my-3 h-75 w-75 align-self-center" src="img/icoUltraMobile.svg" alt="">
                                </div>
                                <div class="col-auto col-sm-auto col-md-8 col-lg-8 col-xl-8 d-flex justify-content-center flex-column">
                                    <p class="font-weight-bold text-light">Ultra mobilité</p>
                                    <p>
                                        Besoin d’encore plus de mobilité ?
                                        Nous sommes capables d’interfacer nos applications
                                        ou d’en créer des spécifiques pour des outils
                                        tels que les douchettes, montres, objets connectés…
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div id="Realisation" class="col-auto d-none flex-column flex-sm-column flex-md-column flex-lg-row flex-xl-row p-2 align-self-center my-2 w-100" style="background-color: #0b4358">
                        <div class="col-auto col-sm-auto col-md-auto col-lg-5 col-xl-5">
                            <h1 class="text-light">Nos réalisations</h1>
                            <p class="text-left">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Ut ut justo a libero auctor lobortis.
                                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Morbi maximus aliquam libero in blandit.
                                Duis ultricies dictum dui, vitae ultricies orci vestibulum ac.
                                Nam ac varius elit. Praesent efficitur euismod imperdiet.
                                Sed egestas eros sed ex suscipit, a fermentum nisi rutrum.
                                Ut orci dolor, eleifend nec mi eu, suscipit pellentesque est.
                            </p>
                        </div>
                        <div class="col-auto col-sm-auto col-md-auto col-lg-7 col-xl-7 d-flex flex-column justify-content-center">
                            <div class="col-auto border border-dark rounded p-0 mb-2">
                                <div id="carousel1" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators d-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
                                        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel1" data-slide-to="1"></li>
                                        <li data-target="#carousel1" data-slide-to="2"></li>
                                    </ol>
                                    <div  class="carousel-inner">
                                        <div class="carousel-item active" data-interval="10000">
                                            <img id="loupe1" class="position-absolute h-100 w-100" src="img/LOUPE.svg"  onclick="CarouselFull(1)">
                                            <img  src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="..." onclick="CarouselFull(1)">
                                            <div class="carousel-caption d-block d-md-none p-0" style="bottom: 0">
                                                <h5 class="m-0">First slide label</h5>
                                            </div>
                                            <div class="carousel-caption d-none d-md-block p-0" style="bottom: 0">
                                                <h5 class="m-0">First slide label</h5>
                                            </div>
                                        </div>
                                        <div  class="carousel-item" data-interval="2000">
                                            <img id="loupe2" class="position-absolute h-100 w-100" src="img/LOUPE.svg" onclick="CarouselFull(1)">
                                            <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="..." onclick="CarouselFull(1)">
                                            <div class="carousel-caption d-block d-md-none p-0" style="bottom: 0">
                                                <h5 class="m-0">First slide label</h5>
                                            </div>
                                            <div class="carousel-caption d-none d-md-block p-0" style="bottom: 0">
                                                <h5 class="m-0">First slide label</h5>
                                            </div>
                                        </div>
                                        <div  class="carousel-item">
                                            <img id="loupe3" class="position-absolute h-100 w-100" src="img/LOUPE.svg"  onclick="CarouselFull(1)">
                                            <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="..." onclick="CarouselFull(1)">
                                            <div class="carousel-caption d-block d-md-none p-0" style="bottom: 0">
                                                <h5 class="m-0">First slide label</h5>
                                            </div>
                                            <div class="carousel-caption d-none d-md-block" style="bottom: 0">
                                                <h5 class="m-0">First slide label</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-target="#carousel1" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-target="#carousel1" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-auto border border-dark rounded p-0">
                                <div id="carousel2" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators d-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
                                        <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel2" data-slide-to="1"></li>
                                        <li data-target="#carousel2" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="10000">
                                            <img id="loupe4" class="position-absolute h-100 w-100" src="img/LOUPE.svg"  onclick="CarouselFull(1)">
                                            <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="..." onclick="CarouselFull(1)">
                                            <div class="carousel-caption d-block d-md-none p-0" style="bottom: 0">
                                                <h5 class="m-0">First slide label</h5>
                                            </div>
                                            <div class="carousel-caption d-none d-md-block p-0" style="bottom: 0">
                                                <h5 class="m-0">First slide label</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img id="loupe5" class="position-absolute h-100 w-100" src="img/LOUPE.svg"  onclick="CarouselFull(1)">
                                            <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="..." onclick="CarouselFull(1)">
                                            <div class="carousel-caption d-block d-md-none p-0" style="bottom: 0">
                                                <h5 class="m-0">First slide label</h5>
                                            </div>
                                            <div class="carousel-caption d-none d-md-block p-0" style="bottom: 0">
                                                <h5 class="m-0">First slide label</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img id="loupe6" class="position-absolute h-100 w-100" src="img/LOUPE.svg"  onclick="CarouselFull(1)">
                                            <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="..." onclick="CarouselFull(1)">
                                            <div class="carousel-caption d-block d-md-none p-0" style="bottom: 0">
                                                <h5 class="m-0">First slide label</h5>
                                            </div>
                                            <div class="carousel-caption d-none d-md-block" style="bottom: 0">
                                                <h5 class="m-0">First slide label</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-target="#carousel2" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-target="#carousel2" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </button>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div id="Equipe" class="col-auto d-none flex-column p-2 align-self-center my-2 w-100" style="background-color: #0b4358">
                        <div class="col-auto d-flex flex-column  flex-sm-column flex-md-column flex-lg-row flex-xl-row justify-content-center">
                            <div class="col-auto col-sm-auto col-md-auto col-lg-6 col-xl-6 d-flex flex-column">
                                <p class="text-light font-weight-bold text-center">Notre Equipe </p>
                                <p class="text-left">
                                    Description de l'equipe :
                                    Aliquam enim purus, consectetur eu sapien sit amet, bibendum condimentum ex.
                                    Ut et elit a enim luctus gravida quis ut ligula.
                                    Donec finibus ante at nibh vehicula gravida.
                                    Pellentesque molestie cursus commodo.
                                    Nam consectetur ex at felis dapibus pellentesque.
                                    Ut massa augue, aliquet vel lectus eleifend, iaculis lobortis purus. <br><br>
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                    Donec egestas metus eu nunc vehicula sagittis. Ut rhoncus dignissim neque, vitae iaculis augue auctor sed.
                                    Nulla sagittis neque sem, et euismod ante dapibus quis. In tellus tellus, fringilla et condimentum a, ullamcorper sit amet erat.
                                    Vestibulum neque sapien, vehicula in urna sed, malesuada euismod quam. Duis id lectus varius, aliquam dolor ac, dignissim diam.
                                    Nunc id sapien dui. Sed ligula nulla, aliquet aliquam eros eu, venenatis vehicula ante. Curabitur vel augue ut sem pulvinar hendrerit.
                                </p>
                            </div>
                            <div class="col-auto col-sm-auto col-md-auto col-lg-6 col-xl-6 d-flex justify-content-center py-3 px-4">
                                <div class="d-flex flex-column justify-content-center" >
                                    <img class="my-2 img-fluid" src="img/perso.png" alt="">
                                    <img class="my-2 img-fluid" src="img/perso2.png" alt="">
                                    <img class="my-2 img-fluid" src="img/perso3.png" alt="">
                                </div>
                                <div class="d-flex flex-column mx-3">
                                    <img class="my-2 img-fluid" src="img/perso.png" alt="">
                                    <img class="my-2 img-fluid" src="img/perso2.png" alt="">
                                    <img class="my-2 img-fluid" src="img/perso3.png" alt="">
                                    <img class="my-2 img-fluid" src="img/perso.png" alt="">

                                </div>
                                <div class="d-flex flex-column justify-content-end pt-5 mt-5">
                                    <img class="my-2 img-fluid" src="img/perso2.png" alt="">
                                    <img class="my-2 img-fluid" src="img/perso3.png" alt="">
                                    <img class="my-2 img-fluid" src="img/perso.png" alt="">
                                    <img class="my-2 img-fluid" src="img/perso2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Faq" class="col-auto d-none flex-column align-self-center my-2  w-100" >

                        <div class="col-auto p-2" style="background-color: #0b4358;">
                            <h2 class="text-center mb-3 font-weight-bold text-capitalize text-light">F.A.Q</h2>
                            <div class="accordion mb-2" id="accordionFaq">
                                    <div class="card border-0">
                                        <div class="card-header" id="headingFaq" style="background-color: #5da6c1">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center text-decoration-none font-weight-bold text-light" type="button" data-toggle="collapse" data-target="#collapseFaq" aria-expanded="true" aria-controls="collapseFaq" >
                                                    theme de la question
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseFaq" class="collapse" aria-labelledby="headingFaq" data-parent="#accordionFaq">
                                            <div class="card-body">
                                                <div class="accordion mb-2" id="accordionFaq1">
                                                    <div class="card border-0">
                                                        <div class="card-header" id="headingFaq1" style="background-color: #5da6c1">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left text-decoration-none font-weight-bold text-light" type="button" data-toggle="collapse" data-target="#collapseFaq1" aria-expanded="true" aria-controls="collapseFaq1" >
                                                                    question 1
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseFaq1" class="collapse" aria-labelledby="headingFaq1" data-parent="#accordionFaq1">
                                                            <div class="card-body">
                                                                <p class="font-weight-normal text-center">
                                                                    Créée en 2011, Litesoft est une équipe de développeurs soudée et dynamique répartie sur deux sites :   l’un dans l’Oise et l'autre dans l’Hérault.
                                                                    <br>

                                                                    Nous sommes convaincus que c’est l’informatique qui doit être au service des utilisateurs et non l’inverse.
                                                                    En créant des applications optimisées, adaptées à vos exigences et à vos contraintes, nous vous aiderons à améliorer votre productivité.
                                                                    Quelque soit votre domaine d’activité, nous imaginons avec vous les outils informatiques en cohérence avec votre métier en respectant le process suivant :

                                                                    <br>
                                                                    Étude et compréhension de votre demande en rencontrant les acteurs concernés
                                                                    Rédaction d’un cahier des charges détaillant les fonctionnalités qui seront développées
                                                                    Création de votre outil avec des phases de validation de votre part
                                                                    Périodes de tests continues en interne puis avec vous avant la mise en production
                                                                    Mise en production de la solution avec accompagnement en fonction de vos besoins (formation, paramétrage…)
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="accordion mb-2" id="accordionFaq2">
                                    <div class="card border-0">
                                        <div class="card-header" id="headingFaq2" style="background-color: #5da6c1">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center text-decoration-none font-weight-bold text-light" type="button" data-toggle="collapse" data-target="#collapseFaq2" aria-expanded="true" aria-controls="collapseFaq2" >
                                                    theme de la question
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseFaq2" class="collapse" aria-labelledby="headingFaq2" data-parent="#accordionFaq2">
                                            <div class="card-body">
                                                <div class="accordion mb-2" id="accordionFaq21">
                                                    <div class="card border-0">
                                                        <div class="card-header" id="headingFaq21" style="background-color: #5da6c1">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left text-decoration-none font-weight-bold text-light" type="button" data-toggle="collapse" data-target="#collapseFaq21" aria-expanded="true" aria-controls="collapseFaq21" >
                                                                    question 1
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseFaq21" class="collapse" aria-labelledby="headingFaq21" data-parent="#accordionFaq21">
                                                            <div class="card-body">
                                                                <p class="font-weight-normal text-center">
                                                                    Créée en 2011, Litesoft est une équipe de développeurs soudée et dynamique répartie sur deux sites :   l’un dans l’Oise et l'autre dans l’Hérault.
                                                                    <br>

                                                                    Nous sommes convaincus que c’est l’informatique qui doit être au service des utilisateurs et non l’inverse.
                                                                    En créant des applications optimisées, adaptées à vos exigences et à vos contraintes, nous vous aiderons à améliorer votre productivité.
                                                                    Quelque soit votre domaine d’activité, nous imaginons avec vous les outils informatiques en cohérence avec votre métier en respectant le process suivant :

                                                                    <br>
                                                                    Étude et compréhension de votre demande en rencontrant les acteurs concernés
                                                                    Rédaction d’un cahier des charges détaillant les fonctionnalités qui seront développées
                                                                    Création de votre outil avec des phases de validation de votre part
                                                                    Périodes de tests continues en interne puis avec vous avant la mise en production
                                                                    Mise en production de la solution avec accompagnement en fonction de vos besoins (formation, paramétrage…)
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="accordion mb-2" id="accordionFaq3">
                                    <div class="card border-0">
                                        <div class="card-header" id="headingFaq" style="background-color: #5da6c1">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center text-decoration-none font-weight-bold text-light" type="button" data-toggle="collapse" data-target="#collapseFaq3" aria-expanded="true" aria-controls="collapseFaq3" >
                                                    theme de la question
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseFaq3" class="collapse" aria-labelledby="headingFaq3" data-parent="#accordionFaq3">
                                            <div class="card-body">
                                                <div class="accordion mb-2" id="accordionFaq31">
                                                    <div class="card border-0">
                                                        <div class="card-header" id="headingFaq31" style="background-color: #5da6c1">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left text-decoration-none font-weight-bold text-light" type="button" data-toggle="collapse" data-target="#collapseFaq31" aria-expanded="true" aria-controls="collapseFaq31" >
                                                                    question 1
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseFaq31" class="collapse" aria-labelledby="headingFaq31" data-parent="#accordionFaq31">
                                                            <div class="card-body">
                                                                <p class="font-weight-normal text-center">
                                                                    Créée en 2011, Litesoft est une équipe de développeurs soudée et dynamique répartie sur deux sites :   l’un dans l’Oise et l'autre dans l’Hérault.
                                                                    <br>

                                                                    Nous sommes convaincus que c’est l’informatique qui doit être au service des utilisateurs et non l’inverse.
                                                                    En créant des applications optimisées, adaptées à vos exigences et à vos contraintes, nous vous aiderons à améliorer votre productivité.
                                                                    Quelque soit votre domaine d’activité, nous imaginons avec vous les outils informatiques en cohérence avec votre métier en respectant le process suivant :

                                                                    <br>
                                                                    Étude et compréhension de votre demande en rencontrant les acteurs concernés
                                                                    Rédaction d’un cahier des charges détaillant les fonctionnalités qui seront développées
                                                                    Création de votre outil avec des phases de validation de votre part
                                                                    Périodes de tests continues en interne puis avec vous avant la mise en production
                                                                    Mise en production de la solution avec accompagnement en fonction de vos besoins (formation, paramétrage…)
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>





                    </div>
                    <div id="Reference" class="col-auto d-none flex-column   p-2 align-self-center my-2" style="min-height:80%;">
                        <h1 class="text-light">Nos références</h1>
                            <div class="col-auto  d-flex flex-row flex-sm-row flex-md-column flex-lg-column flex-xl-column justify-content-center mb-5 p-0" >

                                <div class="col-6 col-sm-6 col-md-auto col-lg-auto col-xl-auto d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row  p-0 mx-2" >
                                    <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3 my-2" >
                                        <img src="img/ref1.svg" alt="" style="background-color: var(--tertiarycolor)">
                                    </div>
                                    <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3 my-2" >
                                        <img  src="img/ref2.svg" alt="" style="background-color: var(--tertiarycolor)">
                                    </div>
                                    <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3 my-2" >
                                        <img  src="img/ref3.svg" alt="" style="background-color: var(--tertiarycolor)">
                                    </div>
                                    <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3 my-2" >
                                        <img  src="img/ref4.svg" alt="" style="background-color: var(--tertiarycolor)">
                                    </div>
                                </div>

                                <div class="col-6 col-sm-6 col-md-auto col-lg-auto col-xl-auto d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row  p-0 mx-2">
                                    <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3 my-2" >
                                        <img  src="img/refs5.svg" alt="" style="background-color: var(--tertiarycolor)">
                                    </div>
                                    <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3 my-2" >
                                        <img src="img/ref6.svg" alt="" style="background-color: var(--tertiarycolor)">
                                    </div>
                                    <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3 my-2" >
                                        <img src="img/ref7.svg" alt="" style="background-color: var(--tertiarycolor)">
                                    </div>
                                    <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3 my-2" >
                                        <img  src="img/ref8.svg" alt="" style="background-color: var(--tertiarycolor)">
                                    </div>
                                </div>

                            </div>
                            <div class="col-auto" style="background-color: var(--tertiarycolor)">
                                <p class="text-left">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Suspendisse a leo euismod, consequat felis id, consequat neque.
                                    Duis iaculis bibendum nibh, ac ornare lorem viverra at.
                                    Integer congue, enim ut sollicitudin lacinia, arcu libero porta quam, in vulputate urna nisl at metus.
                                    Vivamus sagittis porta enim et iaculis.
                                    Morbi eget ante a dolor ullamcorper consequat quis et tellus.
                                    Aliquam erat volutpat. Duis facilisis pulvinar risus ut ullamcorper.
                                    Quisque fringilla, arcu id laoreet volutpat, urna eros mattis ex, nec feugiat justo orci lacinia leo.
                                    Proin sapien felis, volutpat fermentum rhoncus at, cursus sit amet est.
                                    Mauris nec ex vitae ipsum cursus eleifend. Praesent luctus lacus placerat dolor malesuada, id pulvinar est mollis.
                                    Nulla facilisis in erat luctus fermentum. Proin sit amet tellus odio.
                                </p>
                            </div>


                    </div>
                    <div class="d-flex d-sm-flex d-md-flex d-lg-none d-xl-none  w-100 mw-100 justify-content-center"  style="background-color:var(--secondarycolor);">
                        <div class="align-self-center d-flex justify-content-between" style="color: #aab1b4">
                            <a class="m-0 align-self-center mr-2" href="#" onclick="changePage(7)" style="color: #aab1b4"><p class="m-0">Mentions légales</p></a>
                            <p class="m-0"> ©LiteSoft-2022</p>
                        </div>

                    </div>

                </div>
                <!--nav-bar mobile         -->
                <div class="test w-100 d-flex d-sm-flex d-md-flex d-lg-none d-xl-none" style="position: sticky; bottom: 0;z-index: 1040">
                    <div class="fond w-100">
                        <div class="navigation">
                            <ul>

                                <li class="list active">
                                    <a onclick="changePage(1)">
                        <span class="icon">
                            <img src="img/home.svg" alt="btn home" >

                        </span>
                                        <span class="text">Home</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a onclick="changePage(2)">
                        <span class="icon" >
                            <img src="img/iconPresta.svg" alt="btn prestations">
                        </span>
                                        <span class="text">Prestations</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a onclick="changePage(3)">
                        <span class="icon">
                            <img src="img/iconRefs.svg" alt="btn references" >
                        </span>
                                        <span class="text">Références</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a onclick="changePage(4)">
                        <span class="icon">
                            <img src="img/iconEquipe.svg" alt="btn equipe">
                        </span>
                                        <span class="text">Équipe</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a onclick="changePage(5)">
                        <span class="icon">
                            <img src="img/iconReals.svg" alt="btn realisation">
                        </span>
                                        <span class="text">Réalisations</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a onclick="changePage(6)">
                        <span class="icon">
                        <img src="img/iconFaq.svg" alt="btn F.A.Q" >
                        </span>
                                        <span class="text">F.A.Q.</span>
                                    </a>
                                </li>
                                <div class="indicator"></div>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="d-none d-sm-none d-md-none d-lg-flex d-xl-flex   w-100 mw-100 justify-content-center"  style="background-color:var(--secondarycolor);bottom: -29px;position: relative">
                <div class="align-self-center d-flex justify-content-between" style="color: #aab1b4">
                    <a class="m-0 align-self-center mr-2" href="#" onclick="changePage(7)" style="color: #aab1b4"><p class="m-0">Mentions légales</p></a>
                    <p class="m-0"> ©LiteSoft-2022</p>
                </div>

            </div>

        </div>

    </div>

    <!--    profil-->
    <div class="col-lg-2 position-sticky max-vh-100 d-lg-flex d-xl-flex flex-column p-0 d-md-none d-sm-none d-none" style="background-color: #0B4358">

        <div class="col-auto  px-0 align-self-center d-flex flex-column" >
            <p class="text-light mb-0 mt-2">Profil</p>
            <!--            image profil-->
            <div class="d-flex justify-content-center mb-3 align-self-center" style="background-image: url('img/singe.svg');background-repeat: no-repeat;object-fit: cover;width: 150px;height: 150px">
                <div class="align-self-center p-0"  style="background: white url('img/jean.jpg') no-repeat center center;border-radius: 100%;background-size: cover ;width: 130px;height: 130px;">
                </div>
            </div>
            <!--            ligne séparation-->
            <div class="w-100" style="border-bottom: 1px solid #1C617B">
                <p class="text-center" style="color: #52B8DD">Jean</p>
            </div>
        </div>

        <div class="col-auto d-flex flex-column align-self-center">
            <p class="text-light text-center mt-3">Contactez nous</p>
            <div class="col-auto d-flex justify-content-center flex-column w-100 p-0">
                <img class="h-50 w-50 align-self-center mb-1" src="img/enveloppe.svg" alt="">
                <p class="text-center" style="color: #1B81C4">
                    Service commercial <br>
                    <a class="text-decoration-none" style="color: #AAB1B4" href="mailto:contact@litesoft.fr">contact@litesoft.fr</a>
                </p>

            </div>
            <div class="col-auto d-flex justify-content-center flex-column w-100 p-0">
                <img class="h-50 w-50 align-self-center mb-1" src="img/boue.svg" alt="">
                <p class="text-center" style="color: #1B81C4 ">
                    Support <br>
                    <a class="text-decoration-none" style="color: #AAB1B4" href="mailto:support@litesoft.fr">support@litesoft.fr</a>
                </p>

            </div>
        </div>
    </div>






</div>






<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-2.0.3.min.js" data-semver="2.0.3" data-require="jquery"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nanoscroller/0.8.7/javascripts/jquery.nanoscroller.min.js"></script>

<script type="text/javascript">
    let myChart = document.getElementById('myChart').getContext('2d');

    let massPopChart = new Chart(myChart,{
        type: 'doughnut',
        data:{
            labels: ['Red', 'Blue', 'Yellow'],
            datasets: [{
                data: [300, 50, 100],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                borderWidth:[0]
            }]
        },
        options:{
            responsive:true,
            cutoutPercentage:60,
            plugins:{
                legend:{
                    display:false
                }

            }

        }

    });
    let legend= document.getElementById('legend');
    let legendLabel=massPopChart.data.labels;
    console.log(legendLabel)

    let legendData =massPopChart.data.datasets[0].backgroundColor;
    console.log(legendData)
    legend.innerHTML=`<span  id='BTNLegend1' class="mx-1 text-light px-1 rounded" style="background-color: ${legendData[0]};">${legendLabel[0]}</span>
                        <span id='BTNLegend2' class="mx-1 text-light px-1 rounded" style="background-color:${legendData[1]};">${legendLabel[1]}</span>
                        <span id='BTNLegend3' class="mx-1 text-light px-1 rounded" style="background-color:${legendData[2]};">${legendLabel[2]}</span>`

    const list =document.querySelectorAll('.list');
    function activeLink(){
        list.forEach((item)=>
            item.classList.remove('active'));
        this.classList.add('active');
    }
    list.forEach((item)=>
        item.addEventListener('click',activeLink));

    $('#collapse2').on('shown.bs.collapse',function () {
        document.querySelector('.textmention').scrollIntoView({
            behavior:'smooth'
        });
    })

    // function carousel(hide) {
    //     if (hide==true) {
    //
    //         $("#Carousel").removeClass().addClass("d-none")
    //         $("#accordion2").removeClass().addClass("accordion d-block bg-dark")
    //         $("#pageSite").removeClass().addClass('container-fluid p-0 d-sm-block  min-vh-100 d-lg-block d-xl-flex')
    //
    //     }
    //     if (hide==false){
    //         $("#pageSite, #accordion2").removeClass().addClass('d-none')
    //         $("#Carousel").addClass('container-fluid p-0 bg-dark min-vh-100 d-flex justify-content-center')
    //     }
    // }


    $(".carousel-item").on('mouseover',function () {
        let getid= $(this).children(':first').attr('id');
        $("#"+getid).show()
        $(this).on('mouseout',function () {
            $("#"+getid).hide()
        })
    })
    $(".nano").nanoScroller();
</script>
<script src="javascript/siteLitesoft.js"></script>
</body>
</html>
