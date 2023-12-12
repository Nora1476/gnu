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
    <form id="commentFrm" method="post" data-aos="fade-up">
      <div class="row">
        <span class="con point">이름</span>
        <div class="con_con">
          <input class="con_focus" type="text" id="name" name="name" />
        </div>
      </div>
      <div class="row">
        <span class="con point">연락처</span>
        <div class="con_con">
          <input type="text" id="phone" name="phone" />
        </div>
      </div>
      <div class="row">
        <span class="con point">이메일</span>
        <div class="con_con">
          <input type="text" id="email" name="email" />
        </div>
      </div>
      <div class="row">
        <span class="con point">관계</span>
        <div class="con_con">
          <label class="radio_inline"> <input type="radio" name="type" id="type" value="친구" /> 친구 </label>
          <label class="radio_inline"> <input type="radio" name="type" id="type" value="동료" /> 회사동료 </label>
          <label class="radio_inline"> <input type="radio" name="type" id="type" value="친척" /> 가족/친척 </label>
          <label class="radio_inline"> <input type="radio" name="type" id="type" value="기타" /> 기타 </label>
        </div>
      </div>
      <div class="row contact">
        <span class="con point">내용</span>
        <div class="con_con">
          <textarea name="content" id="content" rows="6"></textarea>
        </div>
      </div>

      <div class="row">
        <input type="submit" class="btn btn_submit" value="Submit " />
        <!-- <input type="button" class="btn btn_cancel" value="Cancel " /> -->
      </div>
    </form>
  </div>
</div>