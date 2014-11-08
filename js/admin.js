	/*Menu-toggle*/
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
        $('#menu-toggle').toggleClass('wraphide');
    });

    // $(function(){
    //     if($('#wrapper').hasClass('active'))
    //         $('')
    // });

    /*Scroll Spy*/
    $('body').scrollspy({ target: '#spy', offset:80});