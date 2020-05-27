<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

// if ($_SERVER["PHP_SELF"] != "/index.php"){
?>
    <!-- FOOTER -->
    <footer>
      <img src="<?php echo G5_URL ?>/images/common/f_logo.png" alt="logo" class="pc">
      <img src="<?php echo G5_URL ?>/images/common/m_f_logo.png" alt="logo" class="mb">
      <p class="f_txt">
        <!-- 서울특별시 마포구 잔다리로 124-123<br>
        사업자등록번호 123212-23231<br> -->
        gabjil119@gmail.com
      </p>
    </footer>
<?php
// }
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
// 모바일 메뉴 버튼
$("#mb_menu_btn").click(function(){
  var chk = $("#mb_menu_btn").is(":checked");
  if (chk) {
    $("nav.gnb_wrap.mb > .gnb_hide").css("transform", "none");
  } else {
    $("nav.gnb_wrap.mb > .gnb_hide").css("transform", "translate(-100%, 0)");
  }
});
var gnb_swap = function(num){
  $(".gnb_hide .gnb_mb .active").removeClass("active");
  $(".gnb_hide .gnb_mb .gnb" + num).addClass("active");
}
</script>
<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>