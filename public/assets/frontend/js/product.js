!(function (e) {
    "use strict";
    jQuery(document).ready(function (e) {
        s(
            ".hero2-carousel",
            !1,
            { 0: { items: 1 } },
            1e4,
            1e3,
            !0,
            "fadeOut",
            1e3,
            !1
        );
        s(
            ".case-carousel",
            !0,
            {
                0: { items: 1 },
                576: { items: 2 },
                992: { items: 3 },
                1367: { items: 4 },
                1750: { items: 5 },
            },
            5e3,
            1500,
            !1,
            !1,
            1500,
            !0
        );
        s(
            ".testimonial-carousel",
            !1,
            { 0: { items: 1 }, 992: { items: 2 } },
            5e3,
            1500,
            !1,
            !1,
            1500,
            !0,
            30
        );
        s(
            ".shop-item-slide-2",
            !1,
            {
                0: { items: 4, margin: 0 },
                310: { items: 1, margin: 0 },
                576: { items: 2, margin: 0 },
                768: { items: 3, margin: 0 },
                992: { items: 4, margin: 0 },
            },
            5e3,
            1500,
            !1,
            !1,
            1500,
            !0,
            30
        );
        function s(s, t, a, i, o, l, r, n, c, d = 0, p = !1, u = !0) {
            var m = e(s);
            m.length > 0 &&
                m.owlCarousel({
                    loop: p,
                    autoplay: !0,
                    autoplayTimeout: i,
                    autoplaySpeed: o,
                    dots: l,
                    nav: t,
                    navText: [
                        "<i class='flaticon-left-arrow'></i>",
                        "<i class='flaticon-right-arrow'></i>",
                    ],
                    smartSpeed: n,
                    autoplayHoverPause: c,
                    animateOut: r,
                    margin: d,
                    responsive: a,
                });
        }
        s(
            ".partner-carousel",
            !1,
            { 0: { items: 2 }, 576: { items: 3 }, 992: { items: 5 } },
            3e3,
            500,
            !1,
            !1,
            1500,
            !0,
            30
        ),
            e(".product-item-slide").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                loop: !0,
                arrows: !0,
                prevArrow:
                    '<span class="prev"><i class="fas fa-arrow-left"></i></span>',
                nextArrow:
                    '<span class="next"><i class="fas fa-arrow-right"></i></span>',
                fade: !0,
                asNavFor: ".product-details-slide-item ul",
                rtl: 1 == rtl,
            }),
            e(".product-details-slide-item ul").slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                asNavFor: ".product-item-slide",
                dots: !1,
                loop: !0,
                centerMode: !0,
                arrows: !0,
                prevArrow:
                    '<span class="prev"><i class="fas fa-arrow-left"></i></span>',
                nextArrow:
                    '<span class="next"><i class="fas fa-arrow-right"></i></span>',
                centerPadding: "0",
                focusOnSelect: !0,
                rtl: 1 == rtl,
            }),
            e(".product-details-slide-item ul li").length <= 5
                ? (e(".product-details-slide-item .slick-list").addClass(
                      "w-100"
                  ),
                  e(".product-details-slide-item .slick-track").addClass(
                      "w-100"
                  ))
                : (e(".product-details-slide-item .slick-list").removeClass(
                      "w-100"
                  ),
                  e(".product-details-slide-item .slick-track").removeClass(
                      "w-100"
                  )),
            e(".shop-dropdown button").on("click", function (s) {
                s.preventDefault(),
                    e(this).next(".language-dropdown").toggleClass("open");
            }),
            e("#mainMenu").slicknav({ prependTo: "#mobileMenu" }),
            e(".back-to-top").on("click", function () {
                e("html, body").animate({ scrollTop: 0 }, 1e3);
            });
        var t = e(".case-lists .cases").isotope({
            layoutMode: "fitRows",
            itemSelector: ".single-case",
            fitRows: { gutter: ".case-lists .gutter-sizer" },
        });
        e(".case-types").on("click", "button", function () {
            var s = e(this).attr("data-filter");
            t.isotope({ filter: s });
        }),
            e(".case-types li button").on("click", function () {
                e(".case-types").find(".is-checked").removeClass("is-checked"),
                    e(this).addClass("is-checked");
            }),
            e("#particles-js").length > 0 &&
                particlesJS.load("particles-js", "assets/js/particles.json"),
            e("#heroHome4").length > 0 &&
                e("#heroHome4").ripples({
                    resolution: 500,
                    dropRadius: 20,
                    perturbance: 0.04,
                }),
            e("#bgndVideo").length > 0 && e("#bgndVideo").YTPlayer();
    }),
        e(window).on("scroll", function () {
            e(window).scrollTop() > 180
                ? e(".header-area").addClass("sticky-navbar")
                : e(".header-area").removeClass("sticky-navbar"),
                e(window).scrollTop() > 1e3
                    ? e(".back-to-top").addClass("show")
                    : e(".back-to-top").removeClass("show");
        }),
        jQuery(window).on("load", function () {
            e(".loader-container").addClass("loader-fadeout");
        }),
        e(".add").click(function () {
            e(this).prev().val() &&
                e(this)
                    .prev()
                    .val(+e(this).prev().val() + 1);
        }),
        e(".sub").click(function () {
            e(this).next().val() > 1 &&
                e(this).next().val() > 1 &&
                e(this)
                    .next()
                    .val(+e(this).next().val() - 1);
        });
})(jQuery);
