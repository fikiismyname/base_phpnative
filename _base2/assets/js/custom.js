var current = location.search.substr(1) ? location.search.substr(1) : './';
$('.nav li a').each(function(){
    var $this = $(this);
    if($this.attr('href').indexOf(current) !== -1){
        $this.addClass('active-menu')
    }
})

var mainApp = {

    metisMenu: function () {

        /*==================================== METIS MENU ======================================*/

        $('#main-menu').metisMenu();

    },


    loadMenu: function () {

        /*==================================== LOAD APPROPRIATE MENU BAR ======================================*/

        $(window).bind("load resize", function () {
            if ($(this).width() < 768) {
                $('div.sidebar-collapse').addClass('collapse')
            } else {
                $('div.sidebar-collapse').removeClass('collapse')
            }
        });
    }

};
$(document).ready(function () {
    mainApp.metisMenu();
    mainApp.loadMenu();
});