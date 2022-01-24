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

