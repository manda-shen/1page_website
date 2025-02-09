
// 在頁面滾動時，檢測滾動位置並調整 navbar 高度。
document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".navbar");
    const navLogo = document.querySelector(".nav-logo");
    let lastScrollTop = 0;

    window.addEventListener("scroll", () => {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;

        if (scrollTop > 50) {
            navbar.classList.add("shrink"); // 添加縮小類
            navLogo.style.transform = "translateX(-50%) scale(0.7)"; // 縮小 logo
            navLogo.style.top = "-25px"; // 調整縮小後的位置
        } else {
            navbar.classList.remove("shrink"); // 移除縮小類
            navLogo.style.transform = "translateX(-50%) scale(1)"; // 恢復 logo 大小
            navLogo.style.top = "0"; // 恢復初始位置
        }

        lastScrollTop = scrollTop;
    });
});






(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc = "";
    
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
    
        $('#videoModal').on('shown.bs.modal', function () {
            if ($videoSrc) {
                var embedUrl = $videoSrc.replace("youtu.be/", "www.youtube.com/embed/").split("?")[0];
                $("#videoModal iframe").attr("src", embedUrl + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
            }
        });
    
        $('#videoModal').on('hide.bs.modal', function () {
            $("#videoModal iframe").attr("src", ""); // 清除 src 停止播放
        });
    });
    


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });
    
})(jQuery);

