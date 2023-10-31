$(function() {
    
    $(".nav-gig-list .gig-items").on("mouseenter",function(){
        $(this).addClass("animate__flipInX");
        $(this).addClass("animate__animated");
        /* $(this).addClass("animate__delay-2s"); */
    }).on("animationend", function(){
        $(this).removeClass("animate__flipInX");
        $(this).removeClass("animate__animated");
    });

    $(".anim-animate-heart").on("mouseenter",function(){
        $(this).addClass("zindex11");
        //$(this).addClass("animate__heartBeat");
        //$(this).addClass("animate__zoomIn");
        $(this).addClass("animate__bounce");
        $(this).addClass("animate__fast");
        $(this).addClass("animate__animated");
    }).on("animationend", function(){
        $(this).removeClass("zindex11");
        //$(this).removeClass("animate__heartBeat");
        //$(this).removeClass("animate__zoomIn");
        $(this).removeClass("animate__bounce");
        $(this).removeClass("animate__fast");
        $(this).removeClass("animate__animated");
    });

    $(".portfolio-item").on("click",function(){
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
        
    }).on("animationend", function(){
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
    
    $(".card-artist-item").on("click",function(){
        window.location.href = "gig-detail.php";
    });

    var navbar_logo = $(".navbar-logo");
    var navbar_logolight = $(".navbar-logolight");

    function switchNavbarColor(top)
    {
        let mql = window.matchMedia("(min-width: 600px)");
        if(mql.matches)
        {
            if(top > 50)
            {
                $("body").addClass("mt-nav");
                $("nav.navbar").addClass("fixed-top");
                $("nav.navbar").addClass("anime-bg-primary-trans4");
                $("nav.navbar").addClass("bg-dark");
                $("nav.navbar").addClass("navbar-dark");
                $("nav.navbar").addClass("text-outline1");
                $("nav.navbar").removeClass("navbar-light");
                $("nav.navbar").removeClass("text-outline2");
                $(navbar_logo).hide();
                $(navbar_logolight).show();
            }else{
                $("body").removeClass("mt-nav");
                $("nav.navbar").removeClass("fixed-top");
                $("nav.navbar").addClass("navbar-light");
                $("nav.navbar").addClass("text-outline2");
                $("nav.navbar").removeClass("bg-dark");
                $("nav.navbar").removeClass("navbar-dark");
                $("nav.navbar").removeClass("text-outline1");
                $("nav.navbar").removeClass("anime-bg-primary-trans4");
                $(navbar_logo).show();
                $(navbar_logolight).hide();
            }
        }
    }

    let top = window.scrollY;
    switchNavbarColor(top);

    $(window).on("scroll",function(){
        let top = window.scrollY;
        switchNavbarColor(top);
    });
});