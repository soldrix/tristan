<?php
session_start();
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.nanoscroller/0.8.7/css/nanoscroller.min.css">
    <link rel="stylesheet" href="css/nanoscroller.css">

    <style>
        :root{
            --primarycolor:#00354A;
            --secondarycolor:#012A3A;
        }

        /*plus que xl*/
        @media (min-width: 1600px){
            p{
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
        /*xl*/
        @media (min-width: 1200px) and (max-width: 1600px){
            p{
                font-size: 15px;
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
                max-height: 95vh;
                height: 100vh;
            }
        }
        /*sm*/
        @media (min-width: 576px) and (max-width: 768px) {
            p{
                font-size: 15px;
            }

            .col-sm-7-5{
                flex: 0 0 62.555555%;
                max-width: 62.555555%;
            }
            #test{
                max-height: 95vh;
                height: 100vh;
            }
        }
        /*très petite*/
        @media (max-width: 576px){

            #test{
                max-height: 95vh;
                height: 100vh;
            }
        }
        .TitrePresta{
            font-size: 25px;
        }
        .TextPresta{
            font-size: 20px;
        }
    </style>
</head>
<body>
<div class="container-fluid p-0  d-lg-flex" style="height: 100%">

    <nav  class="navbar  navbar-expand-lg navbar-light  d-flex d-lg-none d-xl-none flex-row justify-content-between" style="background-color: var(--secondarycolor);height: 5%">
        <a class="navbar-brand" href="#"><img class="img-fluid w-50" src="img/logolitesoft.svg" alt=""></a>
        <button class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="height: 25px;width: 25px">
            <img class="img-fluid h-100 w-100" src="img/param.svg" alt="">
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled">Disabled</a>
            </div>
        </div>
    </nav>



    <!--    nav-bar left-->
    <nav class="col-lg-1 position-sticky d-none d-lg-flex flex-column pt-1 max-vh-100 justify-content-center" style="background-color: var(--secondarycolor)">
        <a class="mt-3 align-self-center" href="#" onclick="changePage(1)"><img src="img/onlyLogo.svg" alt="Logo Litesoft"></a>
        <ul class="list-unstyled h-100 d-flex flex-column justify-content-center align-self-center" style="width: 50px">
            <li class="my-3">
                <a href="#" onclick="changePage(2)"><img src="img/iconPresta.svg" alt="Préstation" ></a>
            </li>
            <li class="my-3">
                <a href="#" onclick="changePage(5)"><img  src="img/iconReal.svg" alt="Réalisation" ></a>
            </li>
            <li class="my-3">
                <a href="#" onclick="changePage(4)"><img src="img/iconEquipe.svg" alt="Equipe" ></a>
            </li>
            <li class="my-3">
                <a href="#" onclick="changePage(3)"><img src="img/iconRef.svg" alt="Référence" ></a>
            </li>
            <li class="my-3">
                <a href="#" onclick="changePage(6)"><img src="img/iconFaq.svg" alt="F.A.Q." ></a>
            </li>
        </ul>
    </nav>

    <div id="test" class="nano  col-lg-9 d-flex flex-column p-0" style="height: 100vh">
        <div id="page" class="nano-content d-flex flex-column" style="background-color: var(--primarycolor);">
            <div id="Home" class="col-11 d-flex flex-column p-1 align-self-center ">
                <div class="col-auto mb-4 p-0 d-none d-lg-flex">
                    <img src="img/groslitesoft.svg" alt="" style="width: 37.5%">
                </div>
                <div class="col-auto col-sm-auto col-md-auto col-lg-auto mb-4 d-flex flex-column flex-sm-column flex-md-column flex-lg-row p-0 justify-content-between" style="background-color: #0b4358">
                    <div class="col-auto col-sm-auto col-md-auto col-lg-4 align-self-center mt-2 mb-5">
                        <img class=" align-self-center img-fluid w-100" src="img/logo.gif" alt="logo" >
                    </div>
                    <div class="col-auto col-sm-auto col-md-auto col-lg-7 align-self-center my-2 p-3 text-light" style="background-color: #0B4358;font-size: 10px">
                        <p class="text-center font-weight-bold" style="color: #1B81C4;font-size: 20px">Qui Somme nous?</p>
                        <p class="font-weight-normal">
                            Créée en 2011, Litesoft est une équipe de développeurs soudée et dynamique répartie sur deux sites :
                            <br>
                            l’un dans l’Oise et l'autre dans l’Hérault.
                            Nous sommes convaincus que c’est l’informatique qui doit être au service des utilisateurs et non l’inverse.<br>



                            En créant des applications optimisées, adaptées à vos exigences et à vos contraintes, nous vous aiderons à améliorer votre productivité.
                            <br> <br>
                            Quelque soit votre domaine d’activité, nous imaginons avec vous les outils informatiques en cohérence avec votre métier en respectant le process suivant :
                            <br>

                            Étude et compréhension de votre demande en rencontrant les acteurs concernés
                            Rédaction d’un cahier des charges détaillant les fonctionnalités qui seront développées.
                            Création de votre outil avec des phases de validation de votre part
                            Périodes de tests continues en interne puis avec vous avant la mise en production
                            Mise en production de la solution avec accompagne ent en fonction de vos besoins (formation, paramétrage…)
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
                            <div id="legend" class="col-auto d-flex px-0 py-2 justify-content-center">

                            </div>


                        </div>
                    </div>


                </div>
            </div>

            <div id="Prestation" class="col-11 d-none flex-column p-1 align-self-center my-2" style="background-color: #0b4358">
                <div class="col-auto">
                    <h1 class="text-light" >
                        Nos prestations
                    </h1>
                    <div class="row">
                        <div class="col-4 d-flex justify-content-center">
                            <img class="img-fluid my-3 h-75 w-75 align-self-center" src="img/icoCloud.svg" alt="">
                        </div>
                        <div class="col-8 d-flex justify-content-center flex-column">
                            <p class="font-weight-bold text-light TitrePresta">Cloud</p>
                            <p class="text-light TextPresta">
                                Où que vous soyez, accédez à votre outil en toute simplicité.
                                Applications, intranet, extranet.
                                De l'interface graphique à la mise au point technique,
                                Litesoft prend en charge l'ensemble du développement de votre site.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 d-flex justify-content-center">
                            <img class="img-fluid my-3 h-75 w-75 align-self-center" src="img/icoDesktop.svg" alt="">
                        </div>
                        <div class="col-8 d-flex justify-content-center flex-column">
                            <p class="font-weight-bold text-light TitrePresta">Desktop</p>
                            <p class="text-light TextPresta">
                                Notre priorité est de vous proposer un outil qui se
                                distingue par sa simplicité, sa rapidité, totalement adapté, efficace, et au meilleur prix.
                                Les applications Litesoft sont des outils sur mesure développés pour des besoins métiers précis.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 d-flex justify-content-center">
                            <img class="img-fluid my-3 h-75 w-75 align-self-center" src="img/icoMobile.svg" alt="">
                        </div>
                        <div class="col-8 d-flex justify-content-center flex-column">
                            <p class="font-weight-bold text-light TitrePresta">Smartphones et tablettes</p>
                            <p class="text-light TextPresta">
                                Nous nous adaptons à tous types de supports en fonction de vos besoins, comme par exemple :
                                gestion de suivi de chantiers déclaration et suivi d’incidents.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 d-flex justify-content-center">
                            <img class="img-fluid my-3 h-75 w-75 align-self-center" src="img/icoReseaux.svg" alt="">
                        </div>
                        <div class="col-8 d-flex justify-content-center flex-column">
                            <p class="font-weight-bold text-light TitrePresta">Systèmes et réseaux</p>
                            <p class="text-light TextPresta">
                                Mise à disposition d'infrastructures <br>
                                sur mesure, adaptables et résiliantes.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 d-flex justify-content-center ">
                            <img class="img-fluid my-3 h-75 w-75 align-self-center" src="img/icoUltraMobile.svg" alt="">
                        </div>
                        <div class="col-8 d-flex justify-content-center flex-column">
                            <p class="font-weight-bold text-light TitrePresta">Ultra mobilité</p>
                            <p class="text-light TextPresta">
                                Besoin d’encore plus de mobilité ?
                                Nous sommes capables d’interfacer nos applications
                                ou d’en créer des spécifiques pour des outils
                                tels que les douchettes, montres, objets connectés…
                            </p>
                        </div>

                    </div>

                </div>
            </div>
            <div id="Realisation" class="col-11 d-none flex-column flex-sm-column flex-md-column flex-lg-row flex-xl-row p-2 align-self-center my-2" style="background-color: #0b4358">
                <div class="col-auto col-sm-auto col-md-auto col-lg-5 col-xl-5">
                    <h1 class="text-light">Nos réalisation</h1>
                    <p>sdljfhsdhwbwf,nbl sldhfgx dl isudgf odlivugwodfi ugwxlgv</p>
                </div>
                <div class="col-auto col-sm-auto col-md-auto col-lg-7 col-xl-7 d-flex flex-column justify-content-center">
                    <div class="col-auto border border-dark rounded p-0 mb-2">
                        <div id="carousel1" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel1" data-slide-to="1"></li>
                                <li data-target="#carousel1" data-slide-to="2"></li>
                            </ol>
                            <div  class="carousel-inner">
                                <div class="carousel-item active" data-interval="10000">
                                    <img id="loupe1" class="position-absolute h-100 w-100" src="img/LOUPE.svg"  onclick="carousel(false)">
                                    <img id="lol" src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="...">
                                    <div class="carousel-caption d-block d-md-none">
                                        <h5>First slide label</h5>
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="m-0">First slide label</h5>
                                    </div>
                                </div>
                                <div  class="carousel-item" data-interval="2000">
                                    <img id="loupe2" class="position-absolute h-100 w-100" src="img/LOUPE.svg" onclick="carousel(false)">
                                    <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="...">
                                    <div class="carousel-caption d-block d-md-none">
                                        <h5>First slide label</h5>
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="m-0">First slide label</h5>
                                    </div>
                                </div>
                                <div  class="carousel-item">
                                    <img id="loupe3" class="position-absolute h-100 w-100" src="img/LOUPE.svg"  onclick="carousel(false)">
                                    <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="...">
                                    <div class="carousel-caption d-block d-md-none">
                                        <h5>First slide label</h5>
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
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
                            <ol class="carousel-indicators">
                                <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel2" data-slide-to="1"></li>
                                <li data-target="#carousel2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-interval="10000">
                                    <img id="loupe4" class="position-absolute h-100 w-100" src="img/LOUPE.svg"  onclick="carousel(false)">
                                    <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="...">
                                    <div class="carousel-caption d-block d-md-none">
                                        <h5>First slide label</h5>
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="m-0">First slide label</h5>
                                    </div>
                                </div>
                                <div class="carousel-item" data-interval="2000">
                                    <img id="loupe5" class="position-absolute h-100 w-100" src="img/LOUPE.svg"  onclick="carousel(false)">
                                    <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="...">
                                    <div class="carousel-caption d-block d-md-none">
                                        <h5>First slide label</h5>
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="m-0">First slide label</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img id="loupe6" class="position-absolute h-100 w-100" src="img/LOUPE.svg"  onclick="carousel(false)">
                                    <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="...">
                                    <div class="carousel-caption d-block d-md-none">
                                        <h5>First slide label</h5>
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
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
            <div id="Equipe" class="col-11 d-none flex-column p-2 align-self-center my-2" style="background-color: #0b4358">

                <div class="col-auto d-flex flex-column  flex-sm-column flex-md-column flex-lg-row flex-xl-row justify-content-center">
                    <div class="col-auto d-flex flex-column">
                        <p class="text-light font-weight-bold text-center">Notre Equipe </p>
                        <p class="text-light text-center">
                            Description de l'equipe : ...
                        </p>
                    </div>
                    <div class="col-auto col-sm-auto col-md-auto col-lg-8 col-xl-8 d-flex justify-content-center py-3 px-4">
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
            <div id="Faq" class="col-11  d-none align-self-center my-2 justify-content-center" style="background-color: #0b4358">
                <div class="col-10 p-2">
                    <h2 class="text-center mb-3 font-weight-bold text-capitalize text-light">F.A.Q</h2>
                    <div class="col-auto d-flex flex-column">
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
                    </div>

                </div>





            </div>
            <div id="Reference" class="col-11 d-none flex-column p-2 align-self-center my-2" style="background-color: #0b4358">
                <h1 class="text-light">Nos référence</h1>
                <div class="col-auto d-flex flex-row flex-sm-row flex-md-column flex-lg-column flex-xl-column justify-content-center mb-5">

                    <div class="col-6 col-sm-6 col-md-auto col-lg-auto col-xl-auto d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row  justify-content-center">
                        <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3">
                            <img src="img/ref1.svg" alt="" >
                        </div>
                        <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3">
                            <img  src="img/ref2.svg" alt="" >
                        </div>
                        <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3">
                            <img  src="img/ref3.svg" alt="" >
                        </div>
                        <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3">
                            <img  src="img/ref4.svg" alt="" >
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-auto col-lg-auto col-xl-auto d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row  justify-content-center">
                        <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3">
                            <img  src="img/refs5.svg" alt="" >
                        </div>
                        <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3">
                            <img src="img/ref6.svg" alt="" >
                        </div>
                        <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3">
                            <img src="img/ref7.svg" alt="" >
                        </div>
                        <div class="col-auto col-sm-auto col-md-3 col-lg-3 col-xl-3">
                            <img  src="img/ref8.svg" alt="" >
                        </div>
                    </div>

                </div>
                <div class="col-auto">
                    <p class="text-light">
                        Texte texte Texte texte Texte texte Texte texte Texte texte
                        Texte texte Texte texte Texte texte Texte texte Texte texte
                    </p>
                </div>
            </div>

            <div class="accordion d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex w-100 mw-100 mt-2" id="accordion2" style="background-color:var(--secondarycolor)">
                <div class="card w-100" id="colorContact" style="background-color:var(--secondarycolor)">
                    <div id="heading2" class="w-100 p-0" style="background-color:var(--secondarycolor)">
                        <button id="btnMention" class="w-100 border-0  pl-5 pr-3 text-light" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2" style="background-color:var(--secondarycolor)">
                            Mentions légales
                        </button>
                    </div>

                    <div id="collapse2" class="collapse w-100" aria-labelledby="heading2" data-parent="#accordion2">
                        <div class="card-body w-100" style="background-color:var(--secondarycolor)">
                            <p class="textmention align-self-center text-light font-weight-normal d-flex justify-content-center" style="background-color:var(--secondarycolor)">
                                Editeur et hébergeur <br>
                                LITESOFT
                                123 impasse du parc <br>
                                60600 Agnetz
                                contact@litesoft.fr <br>
                                S.A.R.L au capital de 5000 € <br>
                                RCS de Beauvais 534 962 162
                                FR 61 534 962 162 <br>
                                Directeur de la Publication <br>
                                Franck VIGIER
                                123 impasse du parc <br>
                                60600 Agnetz
                                fvigier@litesoft.fr
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--nav-bar mobile         -->
            <div class="test w-100 d-flex d-sm-flex d-md-flex d-lg-none d-xl-none mt-5" style="position: sticky; bottom: 0">
                <div class="fond w-100">
                    <div class="navigation">
                        <ul>

                            <li class="list active">
                                <a onclick="changePage(1)">
                        <span class="icon">
                            <img src="img/iconContact.svg" alt="btn home" >

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
                            <img src="img/iconRef.svg" alt="btn references" >
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
                            <img src="img/iconReal.svg" alt="btn realisation">
                        </span>
                                    <span class="text">Réalisation</span>
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
                <p class="text-center" style="color: #52B8DD">Nom du monsieur</p>
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
            cutout:60,
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
