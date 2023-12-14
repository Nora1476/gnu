$(function () {
  //메뉴이동
  $(".main_menu .links").click(function () {
    var menu1 = $(".sec2").offset();
    var menu2 = $(".sec3").offset();
    var menu3 = $(".sec4").offset();
    var menu4 = $(".sec5").offset();

    if ($(this).text() == "ABOUT") {
      $("body,html").animate({ scrollTop: menu1.top - 80 }, 400);
    }
    if ($(this).text() == "CERTIFICATION") {
      $("body,html").animate({ scrollTop: menu2.top - 80 }, 400);
    }
    if ($(this).text() == "COMMENT") {
      $("body,html").animate({ scrollTop: menu3.top - 80 }, 400);
    }
    if ($(this).text() == "HERE") {
      $("body,html").animate({ scrollTop: menu4.top - 80 }, 400);
    }
  });

  //main slide
  $(".slider_gallery").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    // variableWidth: true,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 5000,
    centerPadding: "0px",
    prevArrow: "<button type='button' class='slick_next'></button>", // 이전 화살표 모양 설정"<button type='button' class='slick-prev'>Previous</button>"
    nextArrow: "<button type='button' class='slick_prev'></button>", // 다음 화살표 모양 설정"<button type='button' class='slick-next'>Next</button>"
  });
  setTimeout(function () {
    $(".circle_wrap").removeClass("on");
  }, 4500);
  $(".slider_gallery").on("afterChange", function () {
    $(".circle_wrap").toggleClass("on");
    setTimeout(function () {
      $(".circle_wrap").toggleClass("on");
    }, 4800);
  });
});
