<?php
if (!defined('_GNUBOARD_'))
    exit; // 개별 페이지 접근 불가

if (!defined('G5_IS_ADMIN') && defined('G5_THEME_PATH') && is_file(G5_THEME_PATH . '/tail.sub.php')) {
    require_once(G5_THEME_PATH . '/tail.sub.php');
    return;
}
?>

<?php if ($is_admin == 'super') { ?>
<!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime() - $begin_time; ?><br></div> -->
<?php } ?>


<?php run_event('tail_sub'); ?>


<!-- gallery mansonry -->
<script src="<?php echo G5_JS_URL; ?>/vendor/modernizr.custom.min.js"></script>
<script src="<?php echo G5_JS_URL; ?>/vendor/jquery-1.10.2.min.js"></script>
<script src="<?php echo G5_JS_URL; ?>/vendor/masonry.pkgd.min.js"></script>
<script src="<?php echo G5_JS_URL; ?>/vendor/imagesloaded.pkgd.min.js"></script>

<!-- slick slide -->
<script type="text/javascript" src="<?php echo G5_JS_URL; ?>/slick/slick.min.js"></script>

<!-- aos scroll -->
<script type="text/javascript" src="<?php echo G5_JS_URL; ?>/aos/aos.js"></script>

<script src="<?php echo G5_JS_URL; ?>/c_common.js"></script>
<script src="<?php echo G5_JS_URL; ?>/c_main.js"></script>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=f2613f6bb643b7ca3a612fa8a63fb480"></script>

<script>
//카카오 맵
var mapContainer = document.getElementById("map"),
  mapOption = {
    center: new kakao.maps.LatLng(35.1458264, 129.0596997),
    level: 2, //확대 레벨
  };

var markerPosition = new kakao.maps.LatLng(35.1458264, 129.0596997); // 마커가 표시될 위치
var marker = new kakao.maps.Marker({
  position: markerPosition,
}); // 마커를 생성
var map = new kakao.maps.Map(mapContainer, mapOption);
marker.setMap(map);
</script>


</body>

</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다.