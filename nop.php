<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png"  href="/img/logositelitesoft2019.svg">

    <title>Litesoft</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/sqdfghj.css">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <style>
        :root{
            --animate-delay: 0.1s;
        }
        :root{
            --test:11.5%;
        }
        .h-33{
            height: var(--test);
        }
    </style>
</head>
<body>
<div id="Carousel" class="container-fluid p-0 bg-dark min-vh-100 d-none justify-content-center">
    <button type="button" class="close text-light fixed-top" aria-label="Close" style="left:50px;top:10px" onclick="carousel(true)">
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
<div id="pageSite" class="page container-fluid p-0 d-sm-block  min-vh-100 d-lg-block d-xl-flex" style="background-color:#107fc3 ;height: fit-content">
    <nav  class=" bg-dark">
        <div class="navbar d-sm-flex  ">
            <ul class="nav flex-sm-row flex-md-row flex-lg-row flex-xl-column justify-content-between justify-content-xl-center w-100">
                <li class="nav-item">
                    <a class="nav-link active" onclick="changePage(1)">
                        <img id="home" class="mt-3" src="../img/logolitesoft.svg" alt="home">
                    </a>
                </li>
                <li class="nav-item text-xl-center">
                    <a class="nav-link mt-2 text-decoration-none text-light" href="#" style="font-size: 25px">Connexion</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mw-100 p-4 m-0 d-flex flex-column flex-sm-column flex-md-column flex-lg-row flex-xl-row justify-content-xl-around" style="height: fit-content">

        <div class="col-auto col-sm-auto col-lg-6 col-xl-5 w-100 p-0 d-none d-sm-none d-lg-flex d-xl-flex flex-column flex-sm-column flex-lg-column flex-md-row flex-xl-column">

                <div class="accordion mt-3 mb-3 d-sm-block d-block d-md-block d-lg-block d-xl-block h-33" id="accordionExample">
                    <div class="card border-15 bg-light h-100" id="colorContact">
                        <div id="headingOne" class="bg-light p-0 border-15 h-100">
                            <button id="contact" class="btn btn-light w-100 border-0  pl-5 pr-3 h-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                                <img id="imgContact" class="img-fluid w-100 h-100" src="../img/contact.svg" alt="Contactez nous" />
                            </button>
                        </div>

                        <div id="collapseOne" class="h-100 collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body bg-light h-100">
                                <div class="d-flex">
                                    <img class="ml-4 mr-4 mb-5 w-25 h-25" src="../img/service.svg" />
                                    <p class="align-self-center font-weight-bold">
                                        Service Commercial <br>
                                        <a href="mailto:contact@litesoft.fr" class="text-decoration-none text-dark font-weight-normal">contact@litesoft.fr</a>
                                    </p>
                                </div>
                                <div class="d-flex">
                                    <img class="ml-4 mr-4 mb-3 w-25 h-25" src="../img/support.svg" />
                                    <p class="align-self-center font-weight-bold">
                                        Support <br>
                                        <a href="mailto:support@litesoft.fr" class="text-decoration-none text-dark  font-weight-normal">support@litesoft.fr</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button id="prestation" class="btn btn-light w-100  mt-3 mb-3 pl-5 pr-3 h-33" onclick="changePage(2);">
                    <img id="imgPrestation" class="img-fluid w-100 h-100" src="../img/presta.svg" alt="Nos Prestations">
                </button>
                <button id="Reference" class="btn btn-light w-100  mt-3 mb-3 pl-5 pr-3 h-33" onclick="changePage(3);">
                    <img id="imgReference" class="img-fluid w-100 h-100" src="../img/refs.svg" alt="Nos References">
                </button>
                <button id="Equipe" class="btn btn-light w-100  mt-3 mb-3 pl-5 pr-3 h-33" onclick="changePage(4);">
                    <img  id="imgEquipe"  class="img-fluid w-100 h-100" src="../img/equipe.svg" alt="Notre Equipe">
                </button>
                <button id="Realisation" class="btn btn-light w-100  mt-3 mb-3 pl-5 pr-3 h-33" onclick="changePage(5);">
                    <img id="imgRealisation" class="img-fluid w-100 h-100" src="../img/reals.svg" alt="Nos Realisation">
                </button>
                <button id="FAQ" class="btn btn-light w-100  mt-3 mb-3 pl-5 pr-3 h-33" onclick="changePage(6);">
                    <img id="imgFAQ" class="img-fluid w-100 h-100" src="../img/faq.svg" alt="F.A.Q">
                </button>

        </div>

        <!-- page home-->

                    <div id="pageHome" class="col-12 col-xl-5 col-sm-auto col-md-6 col-lg-6 w-100 p-0 d-flex  flex-column flex-lg-column flex-xl-column flex-md-row">
                        <div class="border-15 col-auto  col-md-auto col-xl-auto  mw-100 mt-3 mr-1 d-flex d-md-flex d-xl-inline-flex" style="background-color: #ffffff">
                            <img class="h-75 w-100 align-self-center" src="../img/logo.gif" alt="logo">
                        </div>
                        <div class="border-15 col-auto   mt-3 mr-1  p-3 overflow-auto" style="background-color: #ffffff">
                            <p class="font-weight-bold   justify-content-center d-flex">Qui sommes nous ?</p>
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


        <!--contact-->

                    <div id="pageContact" class="col-12 col-xl-5 col-sm-auto col-md-12 col-lg-6 w-100 p-0 flex-column  bg-light border-15 d-none  justify-content-around">
                        <div class="col-auto  col-md-auto col-xl-auto  mw-100 mt-3 mr-1  d-flex flex-column w-50 align-self-center">
                            <img class="img-fluid h-75 w-75 align-self-center" src="../img/service.svg" />
                            <p class="titreContact text-center font-weight-bold mt-3 d-flex flex-column">
                                Service Commercial
                                <a class="text-center text-decoration-none text-dark font-weight-normal" href="">contact@litesoft.fr</a>
                            </p>
                        </div>
                        <div class="col-auto  col-md-auto col-xl-auto  mw-100 mt-3 mr-1  d-flex flex-column w-50 align-self-center">
                            <img class="img-fluid h-75 w-75 align-self-center" src="../img/support.svg"/>
                            <p class="titreContact text-center font-weight-bold mt-3 d-flex flex-column">
                                Support
                                <a class="text-center text-decoration-none text-dark font-weight-normal" href="">support@litesoft.fr</a>
                            </p>
                        </div>
                    </div>

        <!-- prestation-->

        <div id="pagePrestation" class="col-12 col-xl-5 col-sm-auto col-md-12 col-lg-6 w-100 p-3 flex-column  bg-light border-15 d-none  justify-content-around">
            <div class="d-flex mb-1">
                <div class="col-4 d-flex justify-content-center p-0">
                    <img class="img-fluid mx-1 align-center" src="../img/icoCloud.svg"/>
                </div>
                <div class="col-8 d-flex">
                    <p class="font-weight-normal align-self-center" >
                        <strong>Cloud</strong><br>
                        Où que vous soyez, accédez à votre outil en toute simplicité.
                        Applications, intranet, extranet.
                        De l'interface graphique à la mise au point technique,
                        Litesoft prend en charge l'ensemble du développement de votre site.
                    </p>
                </div>
            </div>
            <div class="d-flex mb-1">
                <div class="col-4 d-flex justify-content-center p-0">
                    <img class="img-fluid mx-1"  src="../img/icoDesktop.svg" />
                </div>
                <div class="col-8 d-flex">
                    <p class="font-weight-normal align-self-center">
                        <strong>Desktop</strong><br>
                        Notre priorité est de vous proposer un outil
                        qui se distingue par sa simplicité, sa rapidité,
                        totalement adapté, efficace, et au meilleur prix.
                        Les applications Litesoft sont des outils sur mesure
                        développés pour des besoins métiers précis.
                    </p>
                </div>
            </div>
            <div class="d-flex mb-1">
                <div class="col-4 d-flex justify-content-center p-0">
                    <img class="img-fluid mx-1" src="../img/icoMobile.svg" />
                </div>
                <div class="col-8 d-flex">
                    <p class="font-weight-normal align-self-center ">
                        <strong>Smartphones et tablettes</strong><br>
                        Nous nous adaptons à tous types de supports en
                        fonction de vos besoins, comme par exemple : <br>
                        gestion de suivi de chantiers
                        déclaration et suivi d’incidents
                    </p>
                </div>
            </div>
            <div class="d-flex mb-1">
                <div class="col-4 d-flex justify-content-center p-0">
                    <img class="img-fluid mx-1" src="../img/icoReseaux.svg" />
                </div>
                <div class="col-8 d-flex">
                    <p class="font-weight-normal  align-self-center">
                        <strong>Systèmes et réseaux</strong><br>
                        Mise à disposition d'infrastructures sur mesure, adaptables et résiliantes.
                    </p>
                </div>
            </div>
            <div class="d-flex mb-1">
                <div class="col-4 d-flex justify-content-center p-0">
                    <img class="img-fluid mx-1" src="../img/icoUltraMobile.svg" />
                </div>
                <div class="col-8 d-flex">
                    <p class="font-weight-normal align-self-center">
                        <strong>Ultra mobilité</strong><br>
                        Besoin d’encore plus de mobilité ?
                        Nous sommes capables d’interfacer nos applications ou d’en créer
                        des spécifiques pour des outils tels que les douchettes,
                        montres, objets connectés….
                    </p>
                </div>
            </div>
        </div>

        <!--reference-->

                    <div id="pageReference" class="col-12 col-xl-5 col-sm-auto col-md-12 col-lg-6 w-100 p-0 flex-column  bg-light border-15 d-none p-3 justify-content-around">
                        <div class="col-12 d-flex flex-row ">
                            <div class="col-6  d-flex flex-column  justify-content-center">
                                <img class="img-fluid" src="../img/ref7.svg" />
                                <img class="img-fluid" src="../img/refs5.svg" />
                                <img class="img-fluid" src="../img/ref3.svg" />
                                <img class="img-fluid" src="../img/ref1.svg" />
                            </div>
                            <div class="col-6  d-flex flex-column justify-content-center" >
                                <img class="img-fluid" src="../img/ref8.svg" />
                                <img class="img-fluid" src="../img/ref6.svg" />

                                <img class="img-fluid" src="../img/ref4.svg" />
                                <img class="img-fluid" src="../img/ref2.svg" />
                            </div>
                        </div>
                    </div>

        <!--realisation-->

                    <div id="pageRealisation" class="col-12 col-xl-5 col-sm-auto col-md-12 col-lg-6 w-100 p-3 flex-column  bg-light border-15 d-none  justify-content-around">


                        <div class="col-auto border border-dark rounded p-0 mb-2">
                            <div id="carousel1" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel1" data-slide-to="1"></li>
                                    <li data-target="#carousel1" data-slide-to="2"></li>
                                </ol>
                                <div  class="carousel-inner">
                                    <div class="carousel-item active" data-interval="10000">
                                        <img id="loupe1" class="position-absolute" src="/img/LOUPE.svg"  onclick="carousel(false)">
                                        <img id="lol" src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="...">
                                        <div class="carousel-caption d-block">
                                            <h5>First slide label</h5>
                                        </div>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="m-0">First slide label</h5>
                                        </div>
                                    </div>
                                    <div  class="carousel-item" data-interval="2000">
                                        <img id="loupe2" class="position-absolute" src="/img/LOUPE.svg" onclick="carousel(false)">
                                        <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="...">
                                        <div class="carousel-caption d-block">
                                            <h5>First slide label</h5>
                                        </div>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="m-0">First slide label</h5>
                                        </div>
                                    </div>
                                    <div  class="carousel-item">
                                        <img id="loupe3" class="position-absolute" src="/img/LOUPE.svg"  onclick="carousel(false)">
                                        <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="...">
                                        <div class="carousel-caption d-block">
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
                                        <img id="loupe4" class="position-absolute" src="/img/LOUPE.svg"  onclick="carousel(false)">
                                        <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="...">
                                        <div class="carousel-caption d-block">
                                            <h5>First slide label</h5>
                                        </div>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="m-0">First slide label</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-interval="2000">
                                        <img id="loupe5" class="position-absolute" src="/img/LOUPE.svg"  onclick="carousel(false)">
                                        <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="...">
                                        <div class="carousel-caption d-block">
                                            <h5>First slide label</h5>
                                        </div>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="m-0">First slide label</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img id="loupe6" class="position-absolute" src="/img/LOUPE.svg"  onclick="carousel(false)">
                                        <img src="https://placeimg.com/572/322/animals" class="img-fluid d-block w-100" alt="...">
                                        <div class="carousel-caption d-block">
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





        <!--            notre equipe-->

                    <div id="pageEquipe" class="col-12 col-xl-5 col-sm-auto col-md-12 col-lg-6  p-3 flex-column  bg-light border-15 d-none">

                        <div class="col-auto bg-dark w-auto h-100 rounded  d-flex flex-column p-0">
                            <h1 class="text-center bg-light animate__animated animate__fadeInDownBig ">Notre equipe</h1>
                            <div class="col-auto d-flex justify-content-around">
                                <div class="col-6 d-flex flex-column p-0 mb-5 mr-2">
                                    <div class="col-12 bg-light h-100 p-0 rounded">
                                        <img class="animate__animated animate__fadeInTopLeft animate__delay-1s  img-thumbnail w-100" src="/img/eren%20.webp" alt="macron" >

                                        <p class="card-text text-center">eren</p>

                                    </div>
                                </div>
                                <div class="col-6 d-flex flex-column p-0 mb-5 ml-2">
                                    <div class="col-12 bg-light h-100 p-0 rounded">
                                        <img class="animate__animated animate__fadeInTopRight animate__delay-1s img-thumbnail w-100" src="/img/zemmour.jpg" alt="macron">

                                        <p class="card-text text-center">zemmour</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-auto d-flex ">
                                <div class="col-4 d-flex flex-column p-0 mb-5 mr-1">
                                    <div class="col-12 bg-light h-100 p-0 rounded">
                                        <img class="animate__animated animate__fadeInLeft animate__delay-1s img-thumbnail w-100" src="/img/trump.svg" alt="macron">

                                        <p class="card-text text-center">trump</p>

                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column p-0 mb-5 mr-1">
                                    <div class="col-12 bg-light h-100 p-0 rounded">
                                        <img class="animate__animated animate__fadeInDown animate__delay-1s img-thumbnail w-100" src="/img/poutine.svg" alt="macron">

                                        <p class="card-text text-center">poutine</p>

                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column p-0 mb-5 mr-1">
                                    <div class="col-12 bg-light h-100 p-0 rounded">
                                        <img class="animate__animated animate__fadeInRight animate__delay-1s img-thumbnail w-100" src="/img/kim.svg" alt="macron">

                                        <p class="card-text text-center">Kim Jong-un</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-auto d-flex">
                                <div class="col-4 d-flex flex-column p-0 mb-5 mr-1">
                                    <div class="col-12 bg-light h-100 p-0 rounded">
                                        <img class="animate__animated animate__fadeInLeft animate__delay-1s img-thumbnail w-100" src="/img/marine.svg" alt="macron">

                                        <p class="card-text text-center">marine</p>

                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column p-0 mb-5 mr-1">
                                    <div class="col-12 bg-light h-100 p-0 rounded">
                                        <img class="animate__animated animate__fadeInUp animate__delay-1s img-thumbnail w-100" src="/img/obama.svg" alt="macron">

                                        <p class="card-text text-center">obama</p>

                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column p-0 mb-5 mr-1">
                                    <div class="col-12 bg-light h-100 p-0 rounded">
                                        <img class="animate__animated animate__fadeInRight animate__delay-1s img-thumbnail w-100" src="/img/elizabeth.svg" alt="macron">

                                        <p class="card-text text-center">elizabeth</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-auto d-flex">
                                <div class="col-4 d-flex flex-column p-0 mb-5 mr-1">
                                    <div class="col-12 bg-light h-100 p-0 rounded">
                                        <img class="animate__animated animate__fadeInBottomLeft animate__delay-1s img-thumbnail w-100" src="/img/holland.svg" alt="macron">

                                        <p class="card-text text-center">holland</p>

                                    </div>
                                </div>

                                <div class="col-4 d-flex flex-column p-0 mb-5 mr-1">
                                    <div class="col-12 bg-light h-100 p-0 rounded">
                                        <img class="animate__animated animate__fadeInUp animate__delay-1s img-thumbnail w-100" src="/img/chine.svg" alt="macron">

                                        <p class="card-text text-center">Xi Jinping</p>

                                    </div>
                                </div>

                                <div class="col-4 d-flex flex-column p-0 mb-5 mr-1">
                                    <div class="col-12 bg-light h-100 p-0 rounded">
                                        <img class="animate__animated animate__fadeInBottomRight animate__delay-1s img-thumbnail w-100" src="/img/macron.svg" alt="macron">

                                        <p class="card-text text-center">macron</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        <div id="pageFaq" class="col-12 col-xl-5 col-sm-auto col-md-12 col-lg-6  p-3 flex-column  bg-light border-15 d-none">

            <h2 class="text-center mb-3 font-weight-bold text-capitalize ">Questions fréquemment posées :</h2>
            <div class="textFaq col-12 overflow-auto" >
                <div class="accordion mb-2" id="accordionFaq">
                    <div class="card">
                        <div class="card-header" id="headingFaq">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFaq" aria-expanded="true" aria-controls="collapseFaq">
                                    theme de la question
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFaq" class="collapse" aria-labelledby="headingFaq" data-parent="#accordionFaq">
                            <div class="card-body">
                                <div class="accordion mb-2" id="accordionFaq1">
                                    <div class="card">
                                        <div class="card-header" id="headingFaq1">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFaq1" aria-expanded="true" aria-controls="collapseFaq1">
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
                    <div class="card">
                        <div class="card-header" id="headingFaq2">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFaq2" aria-expanded="true" aria-controls="collapseFaq2">
                                    theme de la question
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFaq2" class="collapse" aria-labelledby="headingFaq2" data-parent="#accordionFaq2">
                            <div class="card-body">
                                <div class="accordion nb-2" id="accordionFaq3">
                                    <div class="card">
                                        <div class="card-header" id="headingFaq3">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFaq3" aria-expanded="true" aria-controls="collapseFaq3">
                                                    question 2
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseFaq3" class="collapse" aria-labelledby="headingFaq3" data-parent="#accordionFaq3">
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
                <div class="accordion mb-2" id="accordionFaq4">
                    <div class="card">
                        <div class="card-header" id="headingFaq4">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFaq4" aria-expanded="true" aria-controls="collapseFaq4">
                                    theme de la question 3
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFaq4" class="collapse" aria-labelledby="headingFaq4" data-parent="#accordionFaq4">
                            <div class="card-body">
                                <div class="accordion mb-2" id="accordionFaq5">
                                    <div class="card">
                                        <div class="card-header" id="headingFaq5">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFaq5" aria-expanded="true" aria-controls="collapseFaq5">
                                                    question
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseFaq5" class="collapse" aria-labelledby="headingFaq5" data-parent="#accordionFaq5">
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
                                <div class="accordion mb-2" id="accordionFaq6">
                                    <div class="card">
                                        <div class="card-header" id="headingFaq6">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFaq6" aria-expanded="true" aria-controls="collapseFaq6">
                                                    question
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseFaq6" class="collapse" aria-labelledby="headingFaq6" data-parent="#accordionFaq6">
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
            <div class="col d-flex">
                <p class="text-center bg-dark text-light  sticky-bottom border-15 mt-3 align-self-end w-100" >
                    Pour plus d'informations <br>
                    contactez le support
                </p>
            </div>

        </div>

    </div>

    <div class="accordion d-flex d-sm-flex d-lg-none d-xl-none w-100 mw-100 bg-dark" id="accordion2">
        <div class="card  bg-dark w-100" id="colorContact">
            <div id="heading2" class="bg-dark w-100 p-0">
                <button id="btnMention" class="btn-dark w-100 border-0  pl-5 pr-3" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2" >
                    Mention légales
                </button>
            </div>

            <div id="collapse2" class="collapse w-100" aria-labelledby="heading2" data-parent="#accordion2">
                <div class="card-body bg-dark w-100">
                    <p class="textmention align-self-center text-light font-weight-normal d-flex justify-content-center bg-dark ">
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

<!--    <div class="d-block bg-dark d-block d-sm-block d-md-block d-lg-none d-xl-none w-100 mw-100 mt-3">-->
<!---->
<!--                <div class="card-body bg-dark p-1">-->
<!--                    <p class="text-center text-light mb-2 font-weight-bold">Mention legales</p>-->
<!--                    <p class="textmention  align-self-center text-light font-weight-normal d-flex justify-content-center bg-dark ">-->
<!---->
<!--                        Editeur et hébergeur <br>-->
<!--                        LITESOFT-->
<!--                        123 impasse du parc <br>-->
<!--                        60600 Agnetz-->
<!--                        contact@litesoft.fr <br>-->
<!--                        S.A.R.L au capital de 5000 € <br>-->
<!--                        RCS de Beauvais 534 962 162-->
<!--                        FR 61 534 962 162 <br>-->
<!--                        Directeur de la Publication <br>-->
<!--                        Franck VIGIER-->
<!--                        123 impasse du parc <br>-->
<!--                        60600 Agnetz-->
<!--                        fvigier@litesoft.fr-->
<!--                    </p>-->
<!--            </div>-->
<!--    </div>-->

</div>
<div class="test fixed-bottom w-100 d-flex d-sm-flex d-md-flex d-lg-none d-xl-none ">
    <div class="fond w-100">
        <div class="navigation">
            <ul>
                <li class="list active">
                    <a onclick="changePage(1)">
                        <span class="icon">
                           <img src="/img/home.svg" >
                        </span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list">
                    <a onclick="changePage(0)">
                        <span class="icon">
                            <img src="/img/iconContact.svg" >

                        </span>
                        <span class="text">Contact</span>
                    </a>
                </li>
                <li class="list">
                    <a onclick="changePage(2)">
                        <span class="icon" >
                            <img src="/img/iconPresta.svg" >
                        </span>
                        <span class="text">Prestations</span>
                    </a>
                </li>
                <li class="list">
                    <a onclick="changePage(3)">
                        <span class="icon">
                            <img src="/img/iconRef.svg" >
                        </span>
                        <span class="text">Références</span>
                    </a>
                </li>
                <li class="list">
                    <a onclick="changePage(4)">
                        <span class="icon">
                            <img src="/img/iconEquipe.svg" >
                        </span>
                        <span class="text">Équipe</span>
                    </a>
                </li>
                <li class="list">
                    <a onclick="changePage(5)">
                        <span class="icon">
                            <img src="/img/iconReal.svg" >
                        </span>
                        <span class="text">Réalisation</span>
                    </a>
                </li>
                <li class="list">
                    <a onclick="changePage(6)">
                        <span class="icon">
                            <img src="/img/iconFaq.svg" >
                        </span>
                        <span class="text">F.A.Q.</span>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>
    </div>
</div>


<!--<div class="bg-dark btn-group w-100 mw-100">-->
<!--    <button type="button" class="btn-dark w-100 border-0 mt-1 mb-1" data-toggle="dropdown" aria-expanded="false">-->
<!--        Mention légales-->
<!--    </button>-->
<!--    <div class="dropdown dropdown-menu bg-dark w-100 mw-100" style="bottom: 0">-->
<!--        <p class="align-self-center text-light font-weight-normal d-flex justify-content-center bg-dark ">-->
<!--            Editeur et hébergeur <br>-->
<!--            LITESOFT-->
<!--            123 impasse du parc <br>-->
<!--            60600 Agnetz-->
<!--            contact@litesoft.fr <br>-->
<!--            S.A.R.L au capital de 5000 € <br>-->
<!--            RCS de Beauvais 534 962 162-->
<!--            FR 61 534 962 162 <br>-->
<!--            Directeur de la Publication <br>-->
<!--            Franck VIGIER-->
<!--            123 impasse du parc <br>-->
<!--            60600 Agnetz-->
<!--            fvigier@litesoft.fr-->
<!--        </p>-->
<!--    </div>-->
<!--</div>-->
<div class="accordion d-none d-sm-none d-lg-block d-xl-block bg-dark" id="accordion2">
    <div class="card  bg-dark" id="colorContact">
        <div id="heading2" class="bg-light p-0">
            <button id="btnMention" class="btn-dark w-100 border-0  pl-5 pr-3" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2" >
                Mention légales
            </button>
        </div>

        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion2">
            <div class="card-body bg-dark">
                <p class="textmention align-self-center text-light font-weight-normal d-flex justify-content-center bg-dark ">
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

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-2.0.3.min.js" data-semver="2.0.3" data-require="jquery"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<script src="javascript/siteLitesoft.js" ></script>
</body>
</html>


