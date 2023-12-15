<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH . '/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $latest_skin_url . '/style.css">', 0);
$thumb_width = 297;
$thumb_height = 212;
$list_count = (is_array($list) && $list) ? count($list) : 0;

?>

<div class="sec sec3" id="certi">
  <div class="sec_inner">
    <div class="tit_wrap">
      <h2>CERTIFICATION</h2>
    </div>
    <ul class="gallery" id="gallery" data-aos="fade-right">
      <li class="gallery_sizer"></li>
      <!-- <li class="gallery_item"></li> -->

    </ul>

    <div class="btn_wrap">
      <button class="load_more" id="load_more">Load more</button>
      <button class="move_page" id="move_page" onclick="goGallery()">Go Gallery</button>
    </div>
    <div id="lightbox" class="hide">
      <span class="close">&times;</span>
      <img id="lightbox_img" src="" alt="Lightbox Image" />
    </div>
  </div>
</div>

<script>
$(function() {

  //갤러리(masonry 라이브러리 사용)
  var $container = $(".sec3 .gallery"),
    $loadMoreBtn = $(".load_more"),
    $addItemCount = 8,
    $added = 0, //더보기 버튼을 클릭해서 추가된 항목수(리스트 항목을 모두 로드했을때 , 더보기 버튼을 사라지게하기 위함)
    $allData = [];
  $container.masonry({
    // options
    itemSelector: ".gallery_item",
    percentPosition: true,
    columnWidth: ".gallery_sizer",
    gutter: 10,
  });

  $(document).ready(function() {
    $.ajax({
      url: g5_bbs_url + "/ajax.gallery.main.php",
      type: "get",
      success: function(data) {
        $allData = JSON.parse(data);

        addItem(); // 열자마자 아이템 추가
        $loadMoreBtn.click(addItem); //버튼 클릭시 아이템 추가
      },
    });
  });



  function addItem() {
    var elements = [];
    var slidedData;
    //A.slice(0,8)  A배열 0번째부터 번쨰 전까지의 값을 가져옴
    slidedData = $allData.slice($added, $added + $addItemCount);
    $.each(slidedData, function(i, item) {

      var itemHTML =
        '<li class="gallery_item is_loading">' +
        "<figure>" +
        '<img src="/data/file/' + item.bo_table + '/' + item.bf_file + '" alt="' + item.bf_source + '">' +
        "</figure>" +
        "</li>";

      elements.push($(itemHTML).get(0));
    }); //each
    $container.append(elements);

    //$added값을 업데이트
    $added += slidedData.length;

    if ($added < $allData.length) {
      $loadMoreBtn.show();
    } else {
      $loadMoreBtn.hide();
    }

    $container.imagesLoaded(function() {
      $container.find("li").removeClass("is_loading");
      $container.masonry("appended", elements);
    });
  }

  //갤러리 이미지 light box
  $(document).on("click", ".gallery_item img", function() {
    const imageSrc = $(this).attr("src");
    $("#lightbox_img").attr("src", imageSrc);
    $("#lightbox").removeClass("hide");
    $("body").css("overflow", "hidden");
  });
  $("#lightbox .close").click(function() {
    $("#lightbox").addClass("hide");
    $("body").css("overflow", "auto");
  });



})

// //갤러리로 이동
function goGallery() {
  var targetURL = "<?php echo G5_BBS_URL ?>/board.php?bo_table=certification";
  window.location.href = targetURL;
}
</script>