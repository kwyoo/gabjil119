<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
    <!-- HEADER -->
    <div id="header">

      <div class="smenu_wrap pc">
        <ul class="smenu">
          <li><a href="http://www.gabjil119.com/" class="button" target="_blank">상담하기</a></li>
          <li><a href="http://gabjilwiki.com/" class="button" target="_blank">갑질위키</a></li>
          <li><a href="https://www.facebook.com/gabjil119/" target="_blank"><img src="<?php echo G5_URL ?>/images/common/facebook.png" alt="facebook"></a></li>
          <li><a href="https://blog.naver.com/gabjil119/" target="_blank"><img src="<?php echo G5_URL ?>/images/common/nblog.png" alt="naver blog"></a></li>
          <li><a href="https://www.youtube.com/channel/UCk1idlp5l4y8N6cAqfDtCeA" target="_blank"><img src="<?php echo G5_URL ?>/images/common/youtube.png" alt="naver blog"></a></li>
        </ul>
      </div>

      <nav class="gnb_wrap pc">

        <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_URL ?>/images/common/logo.png" class="logo" alt="logo"></a>

        <ul class="gnb">
          <li class="gnb01">
            <a href="/bbs/content.php?co_id=intro01"><span class="gnb_title">직장갑질119</span></a>
            <ul class="gnb_sub_menu01">
              <li><a href="/bbs/content.php?co_id=intro01">직장갑질119 소개</a></li>
              <li><a href="/bbs/content.php?co_id=group">함께하는 사람들</a></li>
              <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=report">사단법인 알림</a></li>
              <li><a href="<?php echo G5_URL ?>/support01.php">후원참여</a></li>
              <li><a href="<?php echo G5_URL ?>/faq.php">직장갑질119 FAQ</a></li>
            </ul>
          </li>
          <li class="gnb02">
            <a href="<?php echo G5_URL ?>/test01.php"><span class="gnb_title">갑질 TEST</span></a>
            <ul class="gnb_sub_menu02">
              <li><a href="<?php echo G5_URL ?>/test01.php">갑질 TEST<br><span class="gnb_sub_txt">나의 숨겨진 갑질본능은?</span></a></li>
              <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sabasam">사・바・삼<br><span class="gnb_sub_txt">사무실을 바꾸는 3분 상담소</span></a></li>
              <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=case">승리사례 모음집<br><span class="gnb_sub_txt">직장갑질 뿌수기 공모전 모음</span></a></li>
              <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=knowhow">노하우<br><span class="gnb_sub_txt">갑질과 싸운 사람들의 꿀팁모음</span></a></li>
            </ul>
          </li>
          <li class="gnb03">
            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice"><span class="gnb_title">게시판</span></a>
            <ul class="gnb_sub_menu03">
              <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">알림</a></li>
              <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=library">자료실</a></li>
            </ul>
          </li>
        </ul>

        <div class="gnb_sub_bg"></div>

      </nav>

      <nav class="gnb_wrap mb">

        <div class="gnb_mb_icon">
          <input type="checkbox" id="mb_menu_btn" />
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="gnb_hide">

          <ul class="smenu_mb">
            <li><a href="http://gabjilwiki.com/" target="_blank">갑질위키 ㅣ</a></li>
            <li><a href="https://www.facebook.com/gabjil119/" target="_blank"><img src="<?php echo G5_URL ?>/images/common/facebook.png" alt="facebook"></a></li>
            <li><a href="https://blog.naver.com/gabjil119/" target="_blank"><img src="<?php echo G5_URL ?>/images/common/nblog.png" alt="naver blog"></a></li>
            <li><a href="https://www.youtube.com/channel/UCk1idlp5l4y8N6cAqfDtCeA" target="_blank"><img src="<?php echo G5_URL ?>/images/common/youtube.png" alt="naver blog"></a></li>
          </ul>

          <ul class="gnb_mb">
            <li class="gnb01">
              <a href="javascript:gnb_swap('01');"><span class="gnb_title">직장갑질119</span><div class="gnb_mb_arrow"></div></a>
              <ul class="gnb_sub_menu01">
                <li><a href="/bbs/content.php?co_id=intro01">직장갑질119 소개</a></li>
                <li><a href="/bbs/content.php?co_id=group">함께하는 사람들</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=report">사단법인 알림</a></li>
                <li><a href="<?php echo G5_URL ?>/support01.php">후원참여</a></li>
                <li><a href="<?php echo G5_URL ?>/faq.php">직장갑질119 FAQ</a></li>
              </ul>
            </li>
            <li class="gnb02">
              <a href="javascript:gnb_swap('02');"><span class="gnb_title">갑질 TEST</span><div class="gnb_mb_arrow"></div></a>
              <ul class="gnb_sub_menu02">
                <li><a href="<?php echo G5_URL ?>/test01.php">갑질 TEST<br><span class="gnb_sub_txt">나의 숨겨진 갑질본능은?</span></a></li>
                <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=sabasam">사・바・삼<br><span class="gnb_sub_txt">사무실을 바꾸는 3분 상담소</span></a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=case">승리사례 모음집<br><span class="gnb_sub_txt">직장갑질 뿌수기 공모전 모음</span></a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=knowhow">노하우<br><span class="gnb_sub_txt">갑질과 싸운 사람들의 꿀팁모음</span></a></li>
              </ul>
            </li>
            <li class="gnb03">
              <a href="javascript:gnb_swap('03');"><span class="gnb_title">게시판</span><div class="gnb_mb_arrow"></div></a>
              <ul class="gnb_sub_menu03">
                <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">알림</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=library">자료실</a></li>
              </ul>
            </li>
          </ul>

      </div>

        <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_URL ?>/images/common/logo_m.png" class="logo_mb" alt="logo"></a>

        <div class="gnb_counsel_btn"><a href="http://www.gabjil119.com/" target="_blank">상담하기</a></div>

      </nav>

    </div>
