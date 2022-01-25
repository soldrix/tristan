
function clearPage(){
    $('#Home').removeClass('d-flex').addClass('d-none')
    $('#Prestation').removeClass('d-flex').addClass('d-none')
    $('#Reference').removeClass('d-flex').addClass('d-none')
    $('#Realisation').removeClass('d-flex').addClass('d-none')
    $('#Equipe').removeClass('d-flex').addClass('d-none')
    $('#Faq').removeClass('d-flex').addClass('d-none')

    $('#Prestaw').attr('src', 'img/iconPresta.svg')
    $('#refsw').attr('src', 'img/iconRefs.svg')
    $('#Equipew').attr('src', 'img/iconEquipe.svg')
    $('#Realsw').attr('src', 'img/iconReals.svg')
    $('#Faqw').attr('src', 'img/iconFaq.svg')
}

function changePage(page){

    if (page==1){
        clearPage()
        $('#Home').removeClass('d-none').addClass('d-flex')
    }
    if (page==2){
        clearPage()
        $('#Prestation').removeClass('d-none').addClass('d-flex')
        $('#Prestaw').attr('src', 'img/iconPrestaw.svg')
    }
    if (page==3){
        clearPage()
        $('#Reference').removeClass('d-none').addClass('d-flex')
        $('#refsw').attr('src', 'img/iconRefsw.svg')
    }
    if (page==4){
        clearPage()
        $('#Equipe').removeClass('d-none').addClass('d-flex')
        $('#Equipew').attr('src', 'img/iconEquipew.svg')

    }
    if (page==5){
        clearPage()
        $('#Realisation').removeClass('d-none').addClass('d-flex')
        $('#Realsw').attr('src', 'img/iconRealsw.svg')

    }
    if (page==6){
        clearPage()
        $('#Faq').removeClass('d-none').addClass('d-flex')
        $('#Faqw').attr('src', 'img/iconFaqw.svg')
    }
    if (page==7){
        $('#SiteLitesoft').removeClass('d-flex').addClass('d-none')
        $('#Mention').removeClass('d-none').addClass('d-flex')
    }
    if (page==8){
        $('#SiteLitesoft').removeClass('d-none').addClass('d-flex')
        $('#Mention').removeClass('d-flex').addClass('d-none')
    }
}

function CarouselFull(status) {
    if (status==1){
        $('#SiteLitesoft').removeClass('d-flex').addClass('d-none')
        $('#Carousel').removeClass('d-none').addClass('d-flex')
    }
    if (status==2){
        $('#Carousel').removeClass('d-flex').addClass('d-none')
        $('#SiteLitesoft').removeClass('d-none').addClass('d-flex')
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

