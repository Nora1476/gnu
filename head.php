<?php
if (!defined('_GNUBOARD_'))
  exit; // 개별 페이지 접근 불가

run_event('pre_head');

if (defined('G5_THEME_PATH')) {
  require_once(G5_THEME_PATH . '/head.php');
  return;
}

if (G5_IS_MOBILE) {
  include_once(G5_MOBILE_PATH . '/head.php');
  return;
}

include_once(G5_PATH . '/head.sub.php');
include_once(G5_LIB_PATH . '/latest.lib.php');
include_once(G5_LIB_PATH . '/outlogin.lib.php');
include_once(G5_LIB_PATH . '/poll.lib.php');
include_once(G5_LIB_PATH . '/visit.lib.php');
include_once(G5_LIB_PATH . '/connect.lib.php');
include_once(G5_LIB_PATH . '/popular.lib.php');
?>


<!-- 상단 시작 { -->


<?php
if (defined('_INDEX_')) { // index에서만 실행
  include G5_BBS_PATH . '/newwin.inc.php'; // 팝업레이어
}
?>


<header>
  <div class="inner">
    <div class="gnb_wrap">
      <div class="gnb_inner">
        <a href="/" class="gnb logo">
          <img src="<?php echo G5_IMG_URL ?>/image/logo.png" alt="" />
        </a>

        <div class="gnb pc_ver">
          <ul class="main_menu">
            <li class="links">ABOUT</li>
            <li class="links">CERTIFICATION</li>
            <li class="links">COMMENT</li>
            <li class="links">HERE</li>
            <?php if ($is_member) { ?>
              <li class="links"><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
              <?php if ($is_admin) { ?>
                <li class="tnb_admin links"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
              <?php } ?>
            <?php } else { ?>
              <li class="links"><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
              <li class="links"><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
            <?php } ?>
          </ul>
        </div>

        <div class="gnb mo_ver">
          <span class="material-symbols-outlined mo_menu"> menu </span>
          <ul class="main_menu">
            <li class="top">
              <div><span class="material-symbols-outlined btn_close"> close </span></div>
            </li>
            <li class="links">ABOUT</li>
            <li class="links">CERTIFICATION</li>
            <li class="links">COMMENT</li>
            <li class="links">HERE</li>
            <?php if ($is_member) { ?>
              <li class="links"><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
              <?php if ($is_admin) { ?>
                <li class="tnb_admin links"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
              <?php } ?>
            <?php } else { ?>
              <li class="links"><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
              <li class="links"><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>


<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">