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

  //comment 입력
  // $("#commentFrm").submit(function (e) {
  //   //유효성 검사
  //   if ($("#name").val() == "") {
  //     alert("이름을 입력해 주세요.");
  //     $("#name").focus();
  //     return false;
  //   }
  //   if ($("#phone").val() == "") {
  //     alert("연락처를 입력해 주세요.");
  //     $("#phone").focus();
  //     return false;
  //   }
  //   var regExp = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.[a-zA-Z]{2,4}$/;
  //   if (!regExp.test($("#email").val())) {
  //     alert("이메일 형식이 아닙니다.");
  //     $("#email").focus();
  //     return false;
  //   }
  //   if ($(':radio[name="type"]:checked').length < 1) {
  //     alert("관계을 선택해주세요.");
  //     return false;
  //   }
  //   if ($("#content").val() == "") {
  //     alert("메세지을 입력해 주세요.");
  //     $("#content").focus();
  //     return false;
  //   }

  //   var db_phone = NumReplace($("#phone").val());
  //   var formData = $("#commentFrm").serializeArray();
  //   var db_data = changeSerialize(formData, "phone", db_phone);

  //   $.ajax({
  //     url: "./crud/comment_insert.php",
  //     type: "POST",
  //     data: db_data,
  //     success: function (data) {
  //       alert("성공적으로 등록되었습니다.");
  //     },
  //   });
  // });

  //휴대폰 번호 자동 대시('-') 기능
  $(document).on("keyup", "#phone", function () {
    $(this).val(
      $(this)
        .val()
        .replace(/[^0-9]/g, "")
        .replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/, "$1-$2-$3")
        .replace("--", "-")
    );
  });
});
