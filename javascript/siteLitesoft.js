
function clearPage(){
    $('#Home').removeClass('d-flex').addClass('d-none')
    $('#Prestation').removeClass('d-flex').addClass('d-none')
    $('#Reference').removeClass('d-flex').addClass('d-none')
    $('#Realisation').removeClass('d-flex').addClass('d-none')
    $('#Equipe').removeClass('d-flex').addClass('d-none')
    $('#Faq').removeClass('d-flex').addClass('d-none')
}

function changePage(page){

    if (page==1){
        clearPage()

        $('#Home').removeClass('d-none').addClass('d-flex')
    }
    if (page==2){
        clearPage()


        $('#Prestation').removeClass('d-none').addClass('d-flex')



    }
    if (page==3){
        clearPage()


        $('#Reference').removeClass('d-none').addClass('d-flex')

    }
    if (page==4){
        clearPage()


        $('#Equipe').removeClass('d-none').addClass('d-flex')


    }
    if (page==5){
        clearPage()


        $('#Realisation').removeClass('d-none').addClass('d-flex')


    }
    if (page==6){
        clearPage()
        $('#Faq').removeClass('d-none').addClass('d-flex')



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

