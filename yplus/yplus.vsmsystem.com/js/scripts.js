function initializeJS() {

    //tool tips
    jQuery('.tooltips').tooltip();

    //popovers
    jQuery('.popovers').popover();

    //custom scrollbar
    //for html

    
    /*
    jQuery("html").niceScroll({styler:"fb",cursorcolor:"#007AFF", cursorwidth: '6', cursorborderradius: '10px', background: '#F7F7F7', cursorborder: '', zindex: '1000'});
        //for sidebar
    jQuery("#sidebar").niceScroll({styler:"fb",cursorcolor:"#007AFF", cursorwidth: '3', cursorborderradius: '10px', background: '#F7F7F7', cursorborder: ''});
        // for scroll panel
    jQuery(".scroll-panel").niceScroll({styler:"fb",cursorcolor:"#007AFF", cursorwidth: '3', cursorborderradius: '10px', background: '#F7F7F7', cursorborder: ''});
    */


    //sidebar dropdown menu
    jQuery('#sidebar .sub-menu > a').click(function () {
        var last = jQuery('.sub-menu.open', jQuery('#sidebar'));        
        jQuery('.menu-arrow').removeClass('arrow_carrot-right');
        jQuery('.sub', last).slideUp(200);
        var sub = jQuery(this).next();
        if (sub.is(":visible")) {
            jQuery('.menu-arrow').addClass('arrow_carrot-right');            
            sub.slideUp(200);
        } else {
            jQuery('.menu-arrow').addClass('arrow_carrot-down');            
            sub.slideDown(200);
        }
        var o = (jQuery(this).offset());
        diff = 200 - o.top;
        if(diff>0)
            jQuery("#sidebar").scrollTo("-="+Math.abs(diff),500);
        else
            jQuery("#sidebar").scrollTo("+="+Math.abs(diff),500);
    });

    // sidebar menu toggle
    jQuery(function() {
        function responsiveView() {
            var wSize = jQuery(window).width();
            if (wSize <= 768) {
                jQuery('#container').addClass('sidebar-close');
                jQuery('#sidebar > ul').hide();
            }

            if (wSize > 768) {
                jQuery('#container').removeClass('sidebar-close');
                jQuery('#sidebar > ul').show();
            }
        }
        jQuery(window).on('load', responsiveView);
        jQuery(window).on('resize', responsiveView);
    });

    jQuery('.toggle-nav').click(function () {
        if (jQuery('#sidebar > ul').is(":visible") === true) {
            jQuery('#main-content').css({
                'margin-left': '0px'
            });
            jQuery('#sidebar').css({
                'margin-left': '-180px'
            });
            jQuery('#sidebar > ul').hide();
            jQuery("#container").addClass("sidebar-closed");
        } else {
            jQuery('#main-content').css({
                'margin-left': '180px'
            });
            jQuery('#sidebar > ul').show();
            jQuery('#sidebar').css({
                'margin-left': '0'
            });
            jQuery("#container").removeClass("sidebar-closed");
        }
    });

    //bar chart
    if (jQuery(".custom-custom-bar-chart")) {
        jQuery(".bar").each(function () {
            var i = jQuery(this).find(".value").html();
            jQuery(this).find(".value").html("");
            jQuery(this).find(".value").animate({
                height: i
            }, 2000)
        })
    }

}

jQuery(document).ready(function(){
    initializeJS();
});

function getToken(){
    const token = document.querySelector("#tkyplus").innerText || localStorage['tkyplus'];
    if (!token){
        swal.fire({
            "title":"Algo deu errado"
        });
        return false
    }
    return token
}

async function getFinancas(token = null){

    Swal.fire({
        title: "<strong>Carregando</strong>",
        html: `<div style="height:8rem;">
          <br><i class="fa fa-circle-o-notch fa-spin fa-3x"></i>
        </div>`,
        showConfirmButton: false,
      });

    console.log("getFinancas")
    req = await fetch(document.location.origin+"/api/financas", {
      "headers": {
        "accept": "application/json",
        "Authorization": "Bearer " + getToken()
      },
      "body": null,
      "method": "GET",
      "mode": "cors",
      "credentials": "include"
    });

    let result = await req.json();
    console.warn(result)

    Swal.fire({
        position: "top-end",
        icon: "success",
        showConfirmButton: false,
        timer: 2500
      });
    return result
}

async function setFinancas(){

    const token = getToken()

    if(!token){
        return false
    }

    Swal.fire({
        title: "<strong>Salvando</strong>",
        html: `<div style="height:8rem;">
          <br><i class="fa fa-circle-o-notch fa-spin fa-3x"></i>
        </div>`,
        showConfirmButton: false,
      });

    console.log("setFinancas")

    let dataToSend = {
        "additional_info":document.querySelector("#additionalinfo").value,
        "amount":document.querySelector("#amount").value,
        "url":document.querySelector("#url").value,
        "date":document.querySelector("#date").value
    };

    console.log(dataToSend);
    req = await fetch(document.location.origin+"/api/financas/criartransacao", {
      "headers": {
        "accept": "application/json",
        "Authorization": "Bearer " + getToken()
      },
      "body": JSON.stringify(dataToSend),
      "method": "POST",
      "mode": "cors",
      "credentials": "include"
    });
    let result = await req.json();
    console.warn(result)

    if (result && result.message === 'Transação criada com sucesso') {
        Swal.fire({
            title: "Ótimo!",
            text: "Registro Salvo!",
            icon: "success"
          });

          document.querySelector("#additionalinfo").value = "";
          document.querySelector("#amount").value = "";
          document.querySelector("#url").value = "";
    }

    return result
}