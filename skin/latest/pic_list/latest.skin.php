<?php
if (!defined('_GNUBOARD_'))
  exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH . '/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $latest_skin_url . '/style.css">', 0);
$thumb_width = 297;
$thumb_height = 212;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


<div class="sec sec4" id="comment">
  <div class="sec_inner">
    <div class="tit_wrap">
      <h2>COMMENT</h2>
    </div>

    <div>main에 보여질 부분</div>

    <div class="btn_wrap">
      <button class="move_page" id="move_page" onclick="goComment()">Go Comment</button>
    </div>
  </div>
</div>



<script>

  // //갤러리로 이동
  function goComment() {
    var targetURL = "<?php echo G5_BBS_URL ?>/board.php?bo_table=free";
    window.location.href = targetURL;
  }
</script>