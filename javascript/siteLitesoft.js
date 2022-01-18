let home="col-12 col-xl-5 col-sm-auto col-md-6 col-lg-6 w-100 p-0 d-flex  flex-column flex-sm-column flex-lg-column flex-md-row" ;
let prestation="col-12 col-xl-5 col-sm-auto col-md-12 col-lg-6 w-100 p-3 flex-column  bg-light border-15 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-around";
let reference="col-12 col-xl-5 col-sm-auto col-md-12 col-lg-6 w-100 p-0 flex-column  bg-light border-15 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex p-3 justify-content-around";
let equipe="col-12 col-xl-5 col-sm-auto col-md-12 col-lg-6  p-3 flex-column  bg-light border-15 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex";
let realisation="col-12 col-xl-5 col-sm-auto col-md-12 col-lg-6 w-100 p-3 flex-column  bg-light border-15 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex  justify-content-around";
let faq="col-12 col-xl-5 col-sm-auto col-md-12 col-lg-6  p-3 flex-column  bg-light border-15 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex ";
let contact="col-12 col-xl-5 col-sm-auto col-md-12 col-lg-6 w-100 p-0 flex-column  bg-light border-15 d-flex justify-content-around";

let btnContact="btn btn-light w-100 border-0  pl-5 pr-3 h-100";
let btnReference="btn btn-light w-100 pl-5 pr-3 marginb2p h-33";
let btnEquipe="btn btn-light w-100 marginb2p pl-5 pr-3 h-33";
let btnPrestation="btn btn-light w-100 marginb2p pl-5 pr-3 h-33";
let btnRealisation="btn btn-light w-100 marginb2p pl-5 pr-3 h-33";
let btnFaq="btn btn-light w-100 pl-5 pr-3 h-33";

const list =document.querySelectorAll('.list');
function activeLink(){
    list.forEach((item)=>
        item.classList.remove('active'));
    this.classList.add('active');
}
list.forEach((item)=>
    item.addEventListener('click',activeLink));




function clearColor(){
    $('#prestation').removeClass().addClass(btnPrestation)
    $('#Realisation').removeClass().addClass(btnRealisation)
    $('#Equipe').removeClass().addClass(btnRealisation)
    $('#Reference').removeClass().addClass(btnReference)
    $('#FAQ').removeClass().addClass(btnFaq)
    $('#imgPrestation').attr('src', "img/presta.svg")
    $('#imgReference').attr('src', "img/refs.svg")
    $('#imgRealisation').attr('src', "img/reals.svg")
    $('#imgEquipe').attr('src', "img/equipe.svg")
    $('#imgFAQ').attr('src', "img/faq.svg")
}

function changeColor(color){
    clearColor()
    if (color==2){
        document.getElementById('prestation').className="btn btn-dark w-100  mt-3 mb-3 pl-5 pr-3";

        $('#imgPrestation').attr('src', "img/prestan.svg")
    }
    if (color==3){
        document.getElementById('Reference').className="btn btn-dark w-100  mt-3 mb-3 pl-5 pr-3";

        $('#imgReference').attr('src', "img/refsn.svg")
    }
    if (color==4){
        document.getElementById('Equipe').className="btn btn-dark w-100  mt-3 mb-3 pl-5 pr-3";
        $('#imgEquipe').attr('src', "img/equipen.svg")
    }
    if (color==5){
        document.getElementById('Realisation').className="btn btn-dark w-100  mt-3 mb-3 pl-5 pr-3";
        $('#imgRealisation').attr('src', "img/realsn.svg")
    }
    if (color==6){
        document.getElementById('FAQ').className="btn btn-dark w-100  mt-3 mb-3 pl-5 pr-3";
        $('#imgFAQ').attr('src', "img/faqn.svg")
    }
}

function clearPage() {
    $('#pageHome,#pageFaq,#pageEquipe,#pagePrestation,#pageReference,#pageRealisation,#pageContact').removeClass().addClass("d-none")
}
$('#collapseOne').on('hidden.bs.collapse', function () {
    $('#accordionExample').removeClass().addClass('accordion mt-3 mb-3 d-sm-block d-block d-md-block d-lg-block d-xl-block h-33');
    $('#headingOne').removeClass().addClass('bg-light p-0 border-15 h-100');

    document.getElementById('imgContact').src="../img/contact.svg";
    document.getElementById('contact').className="btn btn-light w-100 border-0  pl-5 pr-3 h-100";
    document.getElementById('colorContact').className="card border-15 bg-light h-100";
})
$('#collapseOne').on('show.bs.collapse', function () {
    $('#accordionExample').removeClass().addClass('accordion  mt-3 mb-3  d-sm-block d-block d-md-block d-lg-block d-xl-block');

    $('#headingOne').removeClass().addClass('bg-light p-0 border-15 h-25');
    document.getElementById('imgContact').src="../img/contactn.svg";
    document.getElementById('contact').className="btn btn-dark w-100 border-0  pl-5 pr-3 h-100";
    document.getElementById('colorContact').className="card border-15 bg-dark h-100";

})
$('#collapse2').on('shown.bs.collapse',function () {
    document.querySelector('.textmention').scrollIntoView({
        behavior:'smooth'
    });
})

function changePage(page){

    if(page==0){
        clearPage()
        $('#pageContact').removeClass().addClass(contact)
    }

    if (page==1){
        clearPage()
        clearColor()
        // document.getElementById('pageHome').className=home;
        $('#pageHome').removeClass().addClass(home)
    }
    if (page==2){
        clearPage()
        changeColor(2)
        // document.getElementById('pagePrestation').className=prestation;
        $('#pagePrestation').removeClass().addClass(prestation)
        $('#collapseOne').collapse("hide")


    }
    if (page==3){
        clearPage()
        changeColor(3)
        // document.getElementById('pageReference').className=reference;
        $('#pageReference').removeClass().addClass(reference)
        $('#collapseOne').collapse("hide")
    }
    if (page==4){
        clearPage()
        changeColor(4)
        // document.getElementById('pageEquipe').className=equipe;
        $('#pageEquipe').removeClass().addClass(equipe)
        $('#collapseOne').collapse("hide")

    }
    if (page==5){
        clearPage()
        changeColor(5)
        // document.getElementById('pageRealisation').className=realisation;
        $('#pageRealisation').removeClass().addClass(realisation)
        $('#collapseOne').collapse("hide")

    }
    if (page==6){
        clearPage()
        changeColor(6)
        $('#pageFaq').removeClass().addClass(faq)
        // document.getElementById('pageFaq').className=faq;
        $('#collapseOne').collapse("hide")

    }
}

function carousel(hide) {
    if (hide==true) {

        $("#Carousel").removeClass().addClass("d-none")
        $("#accordion2").removeClass().addClass("accordion d-block bg-dark")
        $("#pageSite").removeClass().addClass('container-fluid p-0 d-sm-block  min-vh-100 d-lg-block d-xl-flex')

    }
    if (hide==false){
        $("#pageSite, #accordion2").removeClass().addClass('d-none')
        $("#Carousel").addClass('container-fluid p-0 bg-dark min-vh-100 d-flex justify-content-center')
    }
}


$(".carousel-item").on('mouseover',function () {
    let getid= $(this).children(':first').attr('id');
    $("#"+getid).show()
    $(this).on('mouseout',function () {
        $("#"+getid).hide()
    })
})

