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
        p{
            font-family: Verdana,sans-serif,monospace;
        }
        /* latin */
        @font-face {
            font-family: 'Baloo 2';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/baloo2/v9/wXK0E3kTposypRydzVT08TS3JnAmtdgazZpo_lGP6HcMqzQ.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        h1{
            font-family:'Baloo 2';
        }
        /*plus que xl*/
        @media (min-width: 1600px){
            h1{
                font-family: 'Baloo 2', cursive;
            }
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
            h1{
                font-family: 'Baloo 2', cursive;
            }
            p{
                font-size: 20px;
            }
            h1{
                font-size: 25px;
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
            h1{
                font-family: 'Baloo 2', cursive;
                font-size: 20px;
            }
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
        /*tr??s petite*/
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

            #nav-left{
                max-height: 100vh;
                min-height: 100vh;
                height: 100vh;
            }
            #nav-profil{
                max-height: 100vh;
                min-height: 100vh;
                height: 100vh;
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
            <h1 class="text-light my-5">Mentions l??gales</h1>
            <p class="mt-3 px-3 bar">
                Editeur et h??bergeur

                LITESOFT
                123 impasse du parc 60600 Agnetz - contact@litesoft.fr
                S.A.R.L au capital de 5000 ??? - RCS de Beauvais 534 962 162 - FR 61 534 962 162

                Directeur de la Publication

                Franck VIGIER
                123 impasse du parc - 60600 Agnetz - fvigier@litesoft.fr
            </p>

            <h1 class="text-light my-5">Politique de confidentialit??</h1>
            <p class="mt-3 px-3 bar">


            La protection de votre vie priv??e est importante pour LiteSoft.
            C???est la raison pour laquelle nous avons ??labor?? une politique de confidentialit?? qui r??git la mani??re dont nous recueillons, utilisons, divulguons, transf??rons et stockons vos donn??es personnelles.

            LiteSoft fournit des sites, des applications et des services (nomm??s ?? Services ??) ?? des utilisateurs.
            Cette politique de confidentialit?? d??finit notre politique en ce qui concerne les informations collect??es aupr??s des visiteurs du site et des utilisateurs de nos Services.
            En vertu de la loi applicable, LiteSoft est le responsable du traitement des donn??es personnelles collect??es en accord avec les utilisateurs.
            </p>
            <h1 class="text-light my-5">Collecte et utilisation des donn??es personnelles</h1>
            <p class="px-3 mt-3 bar">
                Lorsque vous interagissez avec nous via nos Services, nous pouvons collecter des informations aupr??s de vous.
                Nous recueillons des informations aupr??s de vous lorsque vous fournissez volontairement ces informations, par exemple lorsque vous vous inscrivez pour acc??der ?? nos Services ou utiliser certains de nos Services. Les informations que nous collectons peuvent inclure, sans s'y limiter, le nom d???utilisateur et l'adresse e-mail ainsi que tout autre contenu que vous envoyez via nos Services.

            </p>
            <h1 class="text-light my-5">Donn??es personnelles que nous recueillons</h1>
            <p class="mt-3 px-3 bar">
                Lorsque vous interagissez avec nous via nos Services, nous recevons et stockons certaines informations telles qu'une adresse IP, un ID d'appareil et les activit??s au sein des Services. Nous pouvons stocker ces informations ou ces informations peuvent ??tre incluses dans des bases de donn??es d??tenues et g??r??es par des soci??t??s affili??es, des agents ou des prestataires de services. Les Services peuvent utiliser ces informations et les mettre en commun avec d'autres informations pour suivre, par exemple, le nombre total de connexions ou le nombre total de visiteurs sur nos diff??rents Services.

                Cookies: nous utilisons des cookies et des technologies similaires pour suivre les param??tres de votre ordinateur local, tels que le compte auquel vous vous ??tes connect?? et les param??tres de notification. Les cookies sont des ??l??ments de donn??es que les sites et services peuvent d??finir sur le navigateur ou appareil et qui peuvent ??tre lus lors des prochaines visites. Nous pouvons ??tendre notre utilisation des cookies pour enregistrer des donn??es suppl??mentaires ?? mesure que de nouvelles fonctionnalit??s sont ajout??es ?? nos Services. De plus, nous utilisons des technologies telles que des balises Web et des gifs ?? pixel unique pour enregistrer des donn??es de journal telles que les taux d'ouverture des e-mails envoy??s par le syst??me.

                Nous pouvons utiliser des outils d'analyse de sites Web tiers tels que Google Analytics sur notre site Web qui utilisent des cookies pour collecter certaines informations concernant l???utilisation de nos Services. Cependant, vous pouvez d??sactiver les cookies en modifiant les param??tres de votre navigateur. De plus amples informations sur la proc??dure ?? suivre pour d??sactiver les cookies sont disponibles sur le site Web du fournisseur de navigateur Internet via l?????cran d???aide.

            </p>
            <h1 class="text-light my-5">Utilisation de vos donn??es personnelles</h1>
            <p class="mt-3 px-3 bar">
                Nous utilisons les informations que vous fournissez d'une mani??re conforme ?? la pr??sente politique de confidentialit??. Si vous fournissez des informations pour une certaine raison, nous pouvons utiliser ces informations en relation avec la raison pour laquelle elles ont ??t?? fournies. Par exemple, si vous nous contactez par e-mail, nous utiliserons les informations que vous fournissez pour r??pondre ?? votre question ou r??soudre votre probl??me. De plus, si vous fournissez des informations afin d'acc??der aux Services, nous utiliserons vos informations pour vous donner acc??s ?? ces services et pour surveiller votre utilisation de ces services. Nous pouvons ??galement utiliser les informations collect??es par le biais des Services pour nous aider ?? am??liorer le contenu et la fonctionnalit?? des Services, ?? mieux comprendre nos utilisateurs et ?? am??liorer les Services. Nous pouvons utiliser ces informations pour vous contacter ?? l'avenir afin de vous parler des services qui, selon nous, pourraient vous int??resser. Si nous le faisons, chaque communication marketing que nous vous enverrons contiendra des instructions vous permettant de vous ?? d??sinscrire ?? de la r??ception de futures communications marketing. De plus, si ?? tout moment vous ne souhaitez plus recevoir de communications marketing futures ou si vous souhaitez que votre nom soit supprim?? de nos listes de diffusion, veuillez nous contacter comme indiqu?? ci-dessous.

            </p>
            <h1 class="text-light my-5">Nos bases juridiques pour le traitement de vos donn??es personnelles</h1>
            <p class="mt-3 px-3 bar">
                Les lois de certaines juridictions obligent les entreprises ?? vous informer du fondement juridique sur lequel elles s'appuient pour utiliser ou divulguer vos donn??es personnelles. Dans la mesure o?? ces lois s'appliquent, nos fondements juridiques sont les suivants:
                Pour honorer nos engagements contractuels envers vous : une grande partie de notre traitement des donn??es personnelles consiste ?? respecter nos obligations contractuelles envers nos utilisateurs, ou ?? prendre des mesures ?? la demande des utilisateurs en pr??vision de la conclusion d'un contrat avec eux. Par exemple, nous traitons les donn??es personnelles sur cette base pour cr??er votre compte et fournir nos Services.
                Int??r??ts l??gitimes : Dans de nombreux cas, nous traitons les donn??es personnelles au motif qu'elles servent nos int??r??ts l??gitimes d'une mani??re qui n'est pas outrepass??e par les int??r??ts ou les droits et libert??s fondamentaux des personnes concern??es.
                Cela comprend :
                - Offrir une exp??rience utilisateur s??re et agr??able
                - Service clients
                - Marketing, par exemple envoyer des courriels ou d'autres communications pour vous informer des nouvelles fonctionnalit??s
                - Prot??ger nos utilisateurs, notre personnel et nos biens
                - Analyser et am??liorer notre entreprise, par exemple recueillir des informations sur la fa??on dont vous utilisez nos services pour optimiser la conception et le placement de certaines fonctionnalit??s
                - Traitement des demandes d???emploi
                - G??rer les questions juridiques
                - Conformit?? l??gale : Nous devons utiliser et divulguer les donn??es personnelles de certaines mani??res pour respecter nos obligations l??gales
                - Pour prot??ger les int??r??ts vitaux de l'individu ou d'autres personnes, par exemple, nous pouvons collecter ou partager des donn??es personnelles pour aider ?? r??soudre une situation m??dicale urgente.
                - Consentement : lorsque la loi l'exige, et dans certains autres cas, nous traitons les donn??es personnelles sur la base de votre consentement implicite ou explicite.

            </p>

            <h1 class="text-light my-5">La divulgation de vos informations</h1>
            <p class="mt-3 px-3 bar">
                LiteSoft n'a pas pour vocation de vendre vos informations. Nous consid??rons ces informations comme un ??l??ment essentiel de notre relation avec vous. Il existe cependant certaines circonstances dans lesquelles nous pouvons partager vos informations avec certains tiers, comme indiqu?? ci-dessous :

                Transferts d???entreprises
                Au fur et ?? mesure que nous d??veloppons nos activit??s, nous pouvons vendre ou acheter des entreprises ou des actifs. En cas de vente, fusion, r??organisation, faillite, dissolution ou ??v??nement similaire, vos informations peuvent faire partie des actifs transf??r??s.

                Consentement
                Nous pouvons transf??rer vos informations avec votre consentement.

                Soci??t??s li??es
                Nous pouvons ??galement partager vos informations avec nos soci??t??s li??es ?? des fins conformes ?? la pr??sente politique de confidentialit??.

                D??veloppeurs
                Les d??veloppeurs utilisant notre SDK ou notre API auront acc??s aux informations de leurs utilisateurs finaux. Les d??veloppeurs doivent utiliser ces informations uniquement pour fournir la fonctionnalit?? SDK / API dans leurs applications et / ou services.

                Agents, consultants et tiers li??s
                Comme de nombreuses entreprises, nous engageons parfois d'autres soci??t??s ou individus pour ex??cuter certaines fonctions li??es aux affaires. Des exemples de telles fonctions incluent l'envoi d'informations, la maintenance de bases de donn??es et le traitement des paiements.

                Exigences l??gales
                Nous pouvons divulguer vos informations si la loi l'exige ou si nous croyons de bonne foi qu'une telle action est n??cessaire pour :
                - se conformer ?? une obligation l??gale
                - prot??ger et d??fendre les droits ou la propri??t?? de LiteSoft
                - prot??ger la s??curit?? personnelle des utilisateurs des Services ou du public
                - prot??ger contre la responsabilit?? l??gale

                Donn??es agr??g??es ou non identifiables
                Nous pouvons ??galement partager des informations agr??g??es ou non personnellement identifiables avec nos partenaires ou d'autres ?? des fins commerciales.

            </p>
            <h1 class="text-light my-5"> Informations non sollicit??es</h1>

            <p class="mt-3 px-3 bar">
                Vous pouvez nous fournir des id??es de nouveaux produits ou de modifications de produits existants, et d'autres soumissions non sollicit??es. Toutes ces informations seront consid??r??es comme non confidentielles et nous serons libres de reproduire, utiliser, divulguer et distribuer ces informations non sollicit??es ?? des tiers sans limitation ni attribution.

            </p>
            <h1 class="text-light my-5">Liens vers d???autres sites Web</h1>
            <p class="mt-3 px-3 bar">
                Cette politique de confidentialit?? s'applique uniquement aux Services. Les Services peuvent contenir des liens vers d'autres sites Web non exploit??s ou contr??l??s par nous (nomm??s ??Sites tiers??). Les politiques et proc??dures que nous avons d??crites ici ne s'appliquent pas aux Sites Tiers. Les liens des Services n'impliquent pas que nous approuvons ou avons examin?? les Sites Tiers. Nous vous sugg??rons de contacter ces sites directement pour obtenir des informations sur leurs politiques de confidentialit??.

            </p>

            <h1 class="text-light my-5">Conservation des donn??es</h1>
            <p class="mt-3 px-3 bar">
                Nous conservons g??n??ralement les donn??es personnelles aussi longtemps qu'elles peuvent ??tre pertinentes aux fins identifi??es ici. Pour ??liminer les donn??es personnelles, nous pouvons les anonymiser, les supprimer ou prendre d'autres mesures appropri??es. Les donn??es peuvent persister dans les copies effectu??es ?? des fins de sauvegarde et de continuit?? des activit??s pendant un temps suppl??mentaire.

            </p>

            <h1 class="text-light my-5">S??curit??</h1>
            <p class="mt-3 px-3 bar">
                Nous prenons des mesures raisonnables pour prot??ger les informations fournies via les Services contre la perte, l'utilisation abusive et l'acc??s, la divulgation, la modification ou la destruction non autoris??s. Cependant, aucune transmission Internet ou e-mail n'est jamais totalement s??curis??e ou sans erreur. En particulier, les e-mails envoy??s vers ou depuis les Services peuvent ne pas ??tre s??curis??s. Par cons??quent, vous devez faire particuli??rement attention ?? d??cider quelles informations vous nous envoyez par e-mail. Veuillez garder cela ?? l'esprit lorsque vous divulguez des informations via Internet.

                Nous pensons que les utilisateurs doivent ??tre trait??s de mani??re ??gale, o?? qu'ils se trouvent, et nous proposons donc les options suivantes pour contr??ler vos donn??es, quel que soit leur emplacement.
                Vous pouvez mettre ?? jour certaines informations en acc??dant ?? votre profil.
                Vous pouvez ??galement vous d??sinscrire de certains e-mails en cliquant sur le lien de d??sinscription qu'ils contiennent.
                Vous pouvez d??sactiver certains traitements li??s aux cookies.
                Les individus en Californie, dans l'Espace ??conomique europ??en, au Canada, au Costa Rica et dans certaines autres juridictions en dehors des ??tats-Unis ont certains droits l??gaux pour obtenir la confirmation que nous d??tenons des donn??es personnelles les concernant, pour acc??der aux donn??es personnelles que nous d??tenons ?? leur sujet (y compris, dans certains cas, sous forme portable), et d???obtenir sa correction, sa mise ?? jour, sa modification ou sa suppression dans des circonstances appropri??es. Ils peuvent ??galement s'opposer ?? nos utilisations ou divulgations de donn??es personnelles, pour demander une restriction de leur traitement ou retirer tout consentement, bien que de telles actions n'aient g??n??ralement pas d'effet r??troactif. Ils n'affecteront pas non plus notre capacit?? ?? poursuivre le traitement des donn??es de mani??re licite.

            </p>

            <h1 class="text-light my-5"> Modification de cette politique de confidentialit??</h1>
            <p class="mt-3 px-3 bar">
                Nous nous r??servons le droit de mettre ?? jour ou de modifier cette politique de confidentialit?? ?? tout moment et de temps en temps sans pr??avis. Veuillez revoir cette politique p??riodiquement, et surtout avant de fournir des informations. Cette politique de confidentialit?? a ??t?? mise ?? jour pour la derni??re fois ?? la date indiqu??e ci-dessus. Votre utilisation continue des Services apr??s tout changement ou r??vision de cette politique de confidentialit?? indiquera votre accord avec les termes de cette politique de confidentialit?? r??vis??e.

            </p>

            <h1 class="text-light my-5">  Nous contacter</h1>
            <p class="mt-3 px-3 bar">
                N'h??sitez pas ??galement ?? nous contacter si vous avez des questions concernant cette politique de confidentialit?? ou les pratiques d'information des Services.
                Vous pouvez nous contacter en utilisant l???adresse e-mail : privacy@litesoft.fr.

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
    <nav id="nav-left" class="col-lg-1 position-sticky d-none d-lg-flex flex-column pt-1 max-vh-100  overflow-auto" style="background-color: var(--secondarycolor)">

        <ul class="list-unstyled d-flex flex-column justify-content-center align-self-center nav-left">
            <li class="d-flex justify-content-center h-100 w-100 px-2">
                <a class="mt-3 align-self-center w-100 h-100" href="#" onclick="changePage(1)"><img class="w-100 h-100" src="img/onlyLogo.svg" alt="Logo Litesoft"></a>
            </li>
        </ul>
        <ul class="list-unstyled d-flex flex-column justify-content-center align-self-center nav-left" style="width: 50%;position: inherit;top: 25%">
            <li class="my-3">
                <a href="#" onclick="changePage(2)"><img id="Prestaw" src="img/iconPresta.svg" alt="Pr??station" ></a>
            </li>
            <li class="my-3">
                <a href="#" onclick="changePage(3)"><img id="refsw" src="img/iconRefs.svg" alt="R??f??rence" ></a>

            </li>
            <li class="my-3">
                <a href="#" onclick="changePage(4)"><img id="Equipew" src="img/iconEquipe.svg" alt="Equipe" ></a>
            </li>
            <li class="my-3">
                <a href="#" onclick="changePage(5)"><img id="Realsw"  src="img/iconReals.svg" alt="R??alisation" ></a>
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
                                <h1 class="text-center font-weight-bold mb-4" style="color: #1B81C4;">Qui Somme nous?</h1>
                                <p class="font-weight-normal">
                                    Cr????e en 2011, Litesoft est une ??quipe de d??veloppeurs soud??e et dynamique r??partie sur deux sites :

                                    l???un dans l???Oise et l'autre dans l???H??rault.
                                    Nous sommes convaincus que c???est l???informatique qui doit ??tre au service des utilisateurs et non l???inverse.



                                    En cr??ant des applications optimis??es, adapt??es ?? vos exigences et ?? vos contraintes, nous vous aiderons ?? am??liorer votre productivit??.

                                    Quelque soit votre domaine d???activit??, nous imaginons avec vous les outils informatiques en coh??rence avec votre m??tier en respectant le process suivant :


                                    ??tude et compr??hension de votre demande en rencontrant les acteurs concern??s
                                    R??daction d???un cahier des charges d??taillant les fonctionnalit??s qui seront d??velopp??es.
                                    Cr??ation de votre outil avec des phases de validation de votre part
                                    P??riodes de tests continues en interne puis avec vous avant la mise en production
                                    Mise en production de la solution avec accompagne ent en fonction de vos besoins (formation, param??trage???).
                                </p>
                            </div>
                        </div>
                        <div class="col-auto col-sm-auto col-md-auto col-lg-auto d-flex mb-3 flex-column flex-md-column flex-lg-column p-0" style="">
                            <div class="col-auto col-sm-auto col-md-auto d-flex flex-column flex-sm-row flex-md-row flex-lg-row flex-xl-row p-0 justify-content-sm-between justify-content-md-between justify-content-lg-between">
                                <div class="col-auto col-sm-7-5  col-md-7-5 col-lg-7-5 col-xl-7-5" style="background-color:#0B4358;">
                                    <h1 class="text-light mt-1" >Nos horaires</h1>
                                    <table class="table table-borderless" style="color: #52B8DD">
                                        <thead>
                                        <tr class="table-active" >
                                            <th scope="col">Jours</th>
                                            <th scope="col">Matin</th>
                                            <th scope="col">Apr??s-midi</th>
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
                                    <h1 class="text-light">Titre</h1>
                                    <canvas id="myChart" class="align-self-center mb-3"></canvas>
                                    <div id="legend" class="col-auto d-flex px-0 py-2 justify-content-center"></div>


                                </div>
                            </div>


                        </div>
                        <div class="col-auto d-flex d-sm-flex d-md-flex d-lg-none d-xl-none flex-column mb-5" style="background-color: #0b4358">
                            <h1 class="text-light text-left mt-3 mb-4">Contactez nous</h1>
                            <div class="col-auto d-flex flex-column flex-sm-column flex-md-row  mb-3">
                                <div class="col-auto col-sm-auto col-md-6 d-flex flex-column mb-2">
                                    <div class="col-6 align-self-center d-flex justify-content-center mb-2">
                                        <img class="align-self-center h-100 w-100" src="img/enveloppe.svg" alt="">
                                    </div>
                                    <div class="col-auto">
                                        <p class="text-center" style="color: #1B81C4">
                                            Service commercial <br>
                                            <a class="text-decoration-none" style="color: #AAB1B4" href="mailto:contact@litesoft.fr">contact@litesoft.fr</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-auto col-sm-auto col-md-6 d-flex flex-column mb-2">
                                    <div class="col-6 d-flex align-self-center justify-content-center mb-2">
                                        <img class="align-self-center h-100 w-100" src="img/boue.svg" alt="">
                                    </div>
                                    <div class="col-auto">
                                        <p class="text-center" style="color: #1B81C4 ">
                                            Support <br>
                                            <a class="text-decoration-none" style="color: #AAB1B4" href="mailto:support@litesoft.fr">support@litesoft.fr</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="Prestation" class="col-auto d-none flex-column p-1 align-self-center my-3" style="background-color: #0b4358">

                        <div class="col-auto d-flex flex-column">
                            <h1 class="text-light d-flex" >
                                Nos pr??stations
                            </h1>
                            <div class="col-auto d-flex flex-column flex-sm-column flex-md-row flex-xl-row">
                                <div class="col-auto col-sm-6 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-self-center">
                                    <img class="img-fluid my-3 h-75 w-75 align-self-center" src="img/icoCloud.svg" alt="">
                                </div>
                                <div class="col-auto col-sm-auto col-md-8 col-lg-8 col-xl-8 d-flex justify-content-center flex-column">
                                    <h1 class="text-light">Cloud</h1>
                                    <p>
                                        O?? que vous soyez, acc??dez ?? votre outil en toute simplicit??.
                                        Applications, intranet, extranet.
                                        De l'interface graphique ?? la mise au point technique,
                                        Litesoft prend en charge l'ensemble du d??veloppement de votre site.
                                    </p>
                                </div>
                            </div>
                            <div class="col-auto d-flex flex-column flex-sm-column flex-md-row flex-xl-row">
                                <div class="col-auto col-sm-6 col-md-4 col-lg-4 col-xl-4  d-flex justify-content-center align-self-center">
                                    <img class="img-fluid my-3 h-75 w-75 align-self-center" src="img/icoDesktop.svg" alt="">
                                </div>
                                <div class="col-auto col-sm-8 col-md-8 col-lg-8 col-xl-8 d-flex justify-content-center flex-column">
                                    <h1 class="text-light">Desktop</h1>
                                    <p>
                                        Notre priorit?? est de vous proposer un outil qui se
                                        distingue par sa simplicit??, sa rapidit??, totalement adapt??, efficace, et au meilleur prix.
                                        Les applications Litesoft sont des outils sur mesure d??velopp??s pour des besoins m??tiers pr??cis.
                                    </p>
                                </div>
                            </div>
                            <div class="col-auto d-flex flex-column flex-sm-column flex-md-row flex-xl-row">
                                <div class="col-auto col-sm-6 col-md-4 col-lg-4 col-xl-4  d-flex justify-content-center align-self-center">
                                    <img class="img-fluid my-3 h-75 w-75 align-self-center" src="img/icoMobile.svg" alt="">
                                </div>
                                <div class="col-auto col-sm-auto col-md-8 col-lg-8 col-xl-8 d-flex justify-content-center flex-column">
                                    <h1 class="text-light">Smartphones et tablettes</h1>
                                    <p>
                                        Nous nous adaptons ?? tous types de supports en fonction de vos besoins, comme par exemple :
                                        gestion de suivi de chantiers d??claration et suivi d???incidents.
                                    </p>
                                </div>
                            </div>
                            <div class="col-auto d-flex flex-column flex-sm-column flex-md-row flex-xl-row">
                                <div class="col-auto col-sm-6 col-md-4 col-lg-4 col-xl-4  d-flex justify-content-center align-self-center">
                                    <img class="img-fluid my-3 h-75 w-75 align-self-center" src="img/icoReseaux.svg" alt="">
                                </div>
                                <div class="col-auto col-sm-auto col-md-8 col-lg-8 col-xl-8 d-flex justify-content-center flex-column">
                                    <h1 class="text-light">Syst??mes et r??seaux</h1>
                                    <p>
                                        Mise ?? disposition d'infrastructures <br>
                                        sur mesure, adaptables et r??siliantes.
                                    </p>
                                </div>
                            </div>
                            <div class="col-auto d-flex flex-column flex-sm-column flex-md-row flex-xl-row">
                                <div class="col-auto col-sm-6 col-md-4 col-lg-4 col-xl-4  d-flex justify-content-center align-self-center">
                                    <img class="img-fluid my-3 h-75 w-75 align-self-center" src="img/icoUltraMobile.svg" alt="">
                                </div>
                                <div class="col-auto col-sm-auto col-md-8 col-lg-8 col-xl-8 d-flex justify-content-center flex-column">
                                    <h1 class="text-light">Ultra mobilit??</h1>
                                    <p>
                                        Besoin d???encore plus de mobilit?? ?
                                        Nous sommes capables d???interfacer nos applications
                                        ou d???en cr??er des sp??cifiques pour des outils
                                        tels que les douchettes, montres, objets connect??s???
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div id="Realisation" class="col-auto d-none flex-column flex-sm-column flex-md-column flex-lg-row flex-xl-row p-2 align-self-center my-2 w-100" style="background-color: #0b4358">
                        <div class="col-auto col-sm-auto col-md-auto col-lg-5 col-xl-5">
                            <h1 class="text-light">Nos r??alisations</h1>
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
                                <h1 class="text-light text-center">Notre Equipe </h1>
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
                            <h1 class="text-center mb-3 text-light">F.A.Q</h1>
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
                                                                    Cr????e en 2011, Litesoft est une ??quipe de d??veloppeurs soud??e et dynamique r??partie sur deux sites :   l???un dans l???Oise et l'autre dans l???H??rault.
                                                                    <br>

                                                                    Nous sommes convaincus que c???est l???informatique qui doit ??tre au service des utilisateurs et non l???inverse.
                                                                    En cr??ant des applications optimis??es, adapt??es ?? vos exigences et ?? vos contraintes, nous vous aiderons ?? am??liorer votre productivit??.
                                                                    Quelque soit votre domaine d???activit??, nous imaginons avec vous les outils informatiques en coh??rence avec votre m??tier en respectant le process suivant :

                                                                    <br>
                                                                    ??tude et compr??hension de votre demande en rencontrant les acteurs concern??s
                                                                    R??daction d???un cahier des charges d??taillant les fonctionnalit??s qui seront d??velopp??es
                                                                    Cr??ation de votre outil avec des phases de validation de votre part
                                                                    P??riodes de tests continues en interne puis avec vous avant la mise en production
                                                                    Mise en production de la solution avec accompagnement en fonction de vos besoins (formation, param??trage???)
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
                                                                    Cr????e en 2011, Litesoft est une ??quipe de d??veloppeurs soud??e et dynamique r??partie sur deux sites :   l???un dans l???Oise et l'autre dans l???H??rault.
                                                                    <br>

                                                                    Nous sommes convaincus que c???est l???informatique qui doit ??tre au service des utilisateurs et non l???inverse.
                                                                    En cr??ant des applications optimis??es, adapt??es ?? vos exigences et ?? vos contraintes, nous vous aiderons ?? am??liorer votre productivit??.
                                                                    Quelque soit votre domaine d???activit??, nous imaginons avec vous les outils informatiques en coh??rence avec votre m??tier en respectant le process suivant :

                                                                    <br>
                                                                    ??tude et compr??hension de votre demande en rencontrant les acteurs concern??s
                                                                    R??daction d???un cahier des charges d??taillant les fonctionnalit??s qui seront d??velopp??es
                                                                    Cr??ation de votre outil avec des phases de validation de votre part
                                                                    P??riodes de tests continues en interne puis avec vous avant la mise en production
                                                                    Mise en production de la solution avec accompagnement en fonction de vos besoins (formation, param??trage???)
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
                                                                    Cr????e en 2011, Litesoft est une ??quipe de d??veloppeurs soud??e et dynamique r??partie sur deux sites :   l???un dans l???Oise et l'autre dans l???H??rault.
                                                                    <br>

                                                                    Nous sommes convaincus que c???est l???informatique qui doit ??tre au service des utilisateurs et non l???inverse.
                                                                    En cr??ant des applications optimis??es, adapt??es ?? vos exigences et ?? vos contraintes, nous vous aiderons ?? am??liorer votre productivit??.
                                                                    Quelque soit votre domaine d???activit??, nous imaginons avec vous les outils informatiques en coh??rence avec votre m??tier en respectant le process suivant :

                                                                    <br>
                                                                    ??tude et compr??hension de votre demande en rencontrant les acteurs concern??s
                                                                    R??daction d???un cahier des charges d??taillant les fonctionnalit??s qui seront d??velopp??es
                                                                    Cr??ation de votre outil avec des phases de validation de votre part
                                                                    P??riodes de tests continues en interne puis avec vous avant la mise en production
                                                                    Mise en production de la solution avec accompagnement en fonction de vos besoins (formation, param??trage???)
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
                        <h1 class="text-light">Nos r??f??rences</h1>
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
                            <a class="m-0 align-self-center mr-2" href="#" onclick="changePage(7)" style="color: #aab1b4"><p class="m-0">Mentions l??gales</p></a>
                            <p class="m-0"> ??LiteSoft-2022</p>
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
                                        <span class="text">R??f??rences</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a onclick="changePage(4)">
                        <span class="icon">
                            <img src="img/iconEquipe.svg" alt="btn equipe">
                        </span>
                                        <span class="text">??quipe</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a onclick="changePage(5)">
                        <span class="icon">
                            <img src="img/iconReals.svg" alt="btn realisation">
                        </span>
                                        <span class="text">R??alisations</span>
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
                    <a class="m-0 align-self-center mr-2" href="#" onclick="changePage(7)" style="color: #aab1b4"><p class="m-0">Mentions l??gales</p></a>
                    <p class="m-0"> ??LiteSoft-2022</p>
                </div>

            </div>

        </div>

    </div>

    <!--    profil-->
    <div id="nav-profil" class="col-lg-2 position-sticky max-vh-100 d-lg-flex d-xl-flex flex-column p-0 d-md-none d-sm-none d-none overflow-auto" style="background-color: #0B4358">

        <div class="col-auto  px-0 align-self-center d-flex flex-column" >
            <h1 class="text-light mb-0 mt-2">Profil</h1>
            <!--            image profil-->
            <div class="d-flex justify-content-center mb-3 align-self-center" style="background-image: url('img/singe.svg');background-repeat: no-repeat;object-fit: cover;width: 150px;height: 150px">
                <div class="align-self-center p-0"  style="background: white url('img/jean.jpg') no-repeat center center;border-radius: 100%;background-size: cover ;width: 130px;height: 130px;">
                </div>
            </div>
            <!--            ligne s??paration-->
            <div class="w-100" style="border-bottom: 1px solid #1C617B">
                <p class="text-center" style="color: #52B8DD">Jean</p>
            </div>
        </div>

        <div class="col-auto d-flex flex-column align-self-center">
            <h1 class="text-light text-center mt-3">Contactez nous</h1>
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
