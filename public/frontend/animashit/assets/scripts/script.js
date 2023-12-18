$(function() {
    
    $("body").on("mouseenter",".nav-gig-list .gig-items",function(){
        $(this).addClass("animate__flipInX");
        $(this).addClass("animate__animated");
        /* $(this).addClass("animate__delay-2s"); */
    }).on("animationend", ".nav-gig-list .gig-items", function(){
        $(this).removeClass("animate__flipInX");
        $(this).removeClass("animate__animated");
    });

    $("body").on("mouseenter",".anim-animate-heart", function(){
        $(this).addClass("zindex11");
        //$(this).addClass("animate__heartBeat");
        //$(this).addClass("animate__zoomIn");
        $(this).addClass("animate__bounce");
        $(this).addClass("animate__fast");
        $(this).addClass("animate__animated");
    }).on("animationend",".anim-animate-heart", function(){
        $(this).removeClass("zindex11");
        //$(this).removeClass("animate__heartBeat");
        //$(this).removeClass("animate__zoomIn");
        $(this).removeClass("animate__bounce");
        $(this).removeClass("animate__fast");
        $(this).removeClass("animate__animated");
    });

    $("body").on("click", ".portfolio-item", function(){
        $(".portfolio-item").removeClass("active");
        $(this).addClass("active");
        
        $(".portfolio-item:not(.active)").addClass("zindex11");
        $(".portfolio-item:not(.active)").addClass("animate__flipOutY");
        $(".portfolio-item:not(.active)").addClass("animate__fadeOut");
        $(".portfolio-item:not(.active)").addClass("animate__fast");
        $(".portfolio-item:not(.active)").addClass("animate__animated");
        /* $(".portfolio-item:not(.active)").addClass("animate__duration-5s"); */

        $(this).addClass("zindex11");
        $(this).addClass("animate__zoomOutUp");
        $(this).addClass("animate__fast");
        $(this).addClass("animate__animated");
        
    }).on("animationend", ".portfolio-item", function(){
            $(this).removeClass("zindex11");
            //$(this).removeClass("animate__heartBeat");
            //$(this).removeClass("animate__zoomIn");
            $(this).removeClass("animate__zoomOutUp");
            $(this).removeClass("animate__fast");
            $(this).removeClass("animate__animated");
            $(this).removeClass("active");
    
            
            $(".portfolio-item").removeClass("animate__flipOutY");
            $(".portfolio-item").removeClass("animate__fadeOut");
            $(".portfolio-item").removeClass("animate__fast");
            $(".portfolio-item").removeClass("animate__animated");
            /* $(".portfolio-item").removeClass("animate__delay-4s"); */
    });
    
    
    $("body").on("click", ".nav-link:not(.ajax-link)", function(e) {
        e.stopPropagation();
        e.preventDefault();

        $(".nav-link").removeClass("active");
        $(this).addClass("active");
        
        $(modalPage).modal("hide");            
    });

    $("body").on("click", ".ajax-link", function(e) {
        e.stopPropagation();
        e.preventDefault();
        
        $(".nav-link").removeClass("active");
        $(this).addClass("active");
        
        var href = $(this).data('ajax-href');

        $(modalPage).modal("show");
        $("#modalPage .modal-body").html(loading_html);

        $.ajax({
            url: href,
            data: "",
            dataType: "html",
            type: "get",
            success: function(msg) {
                $("#modalPage .modal-body").html(msg);
            }
        })

    });

    $("body").on("hidden.bs.modal", "#modalPagePortfolio", function() {
        $("#modalPagePortfolio .modal-body").html(loading_html);
    });

    $("body").on("hidden.bs.modal", "#modalPage", function() {
        $("#modalPage .modal-body").html(loading_html);
    });

    
    var navbar_logo = $(".navbar-logo");
    var navbar_logolight = $(".navbar-logolight");

    function switchNavbarColor(top)
    {
        //let mql = window.matchMedia("(min-width: 100px)");
        //if(mql.matches)
        //{
            if(top > 50)
            {
                $("body").addClass("mt-nav");
                //$(".main-navbar").addClass("sticky-top");
                $(".main-navbar").addClass("anime-bg-primary-trans4");
                $(".main-navbar").addClass("bg-dark");
                $(".main-navbar").addClass("navbar-dark");
                $(".main-navbar").addClass("text-outline1");
                $(".main-navbar").removeClass("navbar-light");
                //$(".main-navbar").removeClass("text-outline2");
                $(navbar_logo).hide();
                $(navbar_logolight).show();
            }else{
                $("body").removeClass("mt-nav");
                //$(".main-navbar").removeClass("sticky-top");
                $(".main-navbar").addClass("navbar-light");
                //$(".main-navbar").addClass("text-outline2");
                $(".main-navbar").removeClass("bg-dark");
                $(".main-navbar").removeClass("navbar-dark");
                $(".main-navbar").removeClass("text-outline1");
                $(".main-navbar").removeClass("anime-bg-primary-trans4");
                $(navbar_logo).show();
                $(navbar_logolight).hide();
            }
        //}
    }

    let top = window.scrollY;
    switchNavbarColor(top);

    $(window).on("scroll",function(){
        let top = window.scrollY;
        switchNavbarColor(top);
    });
});