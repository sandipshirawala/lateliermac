$(document).ready(function(){
    setTimeout("$('.alert').slideToggle(500);",4000 );
});

$(function(){
    $("#mtn").click(function() {
        $(".socials").hide("normal");
        $(".pannefb").show("normal");
    });
    $("#pannefb").click(function(){
        $(".pannefb").hide("normal");
        $(".socials").show("normal");
    });

     $("#rouge").click(function() {
        $(".socials").hide("normal");
        $(".rouge").show("normal");
    });
    $("#3").click(function(){
        $(".rouge").hide("normal");
        $(".socials").show("normal");
    });

    $("#vert").click(function() {
        $(".socials").hide("normal");
        $(".vert").show("normal");
    });
    $("#2").click(function(){
        $(".vert").hide("normal");
        $(".socials").show("normal");
    });

    $("#turquoise").click(function() {
        $(".socials").hide("normal");
        $(".turquoise").show("normal");
    });
    $("#4").click(function(){
        $(".turquoise").hide("normal");
        $(".socials").show("normal");
    });

    //close-circle event click close sections
    $('.closemen').click(function(){
        $(".onglets").hide('normal');
        $(".socials").show('normal');
    });
    $('.menlink').click(function(){
        $(".onglets").hide('normal');
        $(".socials").show('normal');
    });

});

// $(function(){
//     $("#rouge").click(function() {
//         $(".socials").hide("normal");
//         $(".rouge").show("normal");
//     });
//     $("#rouge").click(function(){
//         $(".rouge").hide("normal");
//         $(".socials").show("normal");
//     });
// });

// $('#popoverData').popover();
// $('#popoverOption').popover({ trigger: "hover" });
// id="popoverData"
// html : <a data-content="Popover with data-trigger" rel="popover" data-placement="bottom" data-original-title="Title" data-trigger="hover" href="#">

$(function(){
    $(".contact").click(function() {
        if(window.location.pathname == '/lateliermac/'){
            $("#presp").slideToggle("slow");
            $("#contactform").slideToggle("slow");
        }else{
            $('#myModalCont').modal({keyboard: false});
        }
    });

    $("#closecontact").click(function() {
        $("#contactform").slideToggle("slow");
        $("#presp").slideToggle("slow");
    });

});

$(document).ready(function() {

  $('#horaires').popover({
    trigger: 'hover',
    html: true,  // must have if HTML is contained in popover

    // get the title and conent
    title: function() {
      return $('.ho-title').html();
    },
    content: function() {
      return $('.ho-body').html();
    },

    container: 'body',
    placement: 'top'

  });

$('#coord').popover({
    trigger: 'hover',
    html: true,  // must have if HTML is contained in popover

    // get the title and conent
    title: function() {
      return $('.coo-title').html();
    },
    content: function() {
      return $('.coo-body').html();
    },

    container: 'body',
    placement: 'top'

  });


$('#plan').popover({
    trigger: 'hover',
    html: true,  // must have if HTML is contained in popover

    // get the title and conent
    title: function() {
      return $('.plan-title').html();
    },
    content: function() {
      return $('.plan-body').html();
    },

    container: 'body',
    placement: 'top'

  });

});

function open_map()
{
        window.open("https://www.google.fr/maps/place/26+Place+des+Clercs,+26200+Mont%C3%A9limar/@44.559357,4.751933,17z/data=!3m1!4b1!4m2!3m1!1s0x12b56b19308278b1:0xb274dfec6f952ec0",'upload_image','menubar=no, scrollbars=no, top=100, left=100, width=700, height=700');
}

$("#turquoise").hover(function(){
   $("#biendisp").show();
   },function(){
   $("#biendisp").hide();
 });

$('#formcont').click(function(){
    if($('#message').val() == ''){
        $('#message').css('border-radius', '2px solid red');
    }
});

// $(function(){
//     var target_id = $('data-target-id');
//     //$('.number[data-id = ' + target_id + ']').show();

//     $(".menulistt").hover(function(){
//        $('.number[data-id = ' + target_id + ']').addClass('numberhover');
//         },function(){
//        $('.number[data-id = ' + target_id + ']').removeClass('numberhover');
//      });
// });
