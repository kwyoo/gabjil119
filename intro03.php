<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.php');
?>

    <!-- CONTENTS -->
    <div id="job119_contents">

      <!-- <ul class="path pc">
        <li><a href="<?php echo G5_URL ?>">홈 ></a></li>
        <li><a href="<?php echo G5_URL ?>/intro01.php">직장갑질119 ></a></li>
        <li><a href="<?php echo G5_URL ?>/intro01.php">소개 ></a></li>
        <li><a href="<?php echo G5_URL ?>/intro03.php">연혁</a></li>
      </ul> -->

      <aside class="side_nav_wrap pc">
        <div class="leftside_nav">

          <ul class="side_nav">

            <li class="side_nav_title"><span>직장갑질119</span></li>
            <li class="side_nav_sub_menu">
              <a href="<?php echo G5_URL ?>/" class="side_nav_sub_menu_btn"><span>소개</span><img src="images/common/down_arrow.png"></a>
              <ul>
                <li><a href="<?php echo G5_URL ?>/intro01.php">직장갑질119 소개</a></li>
                <li><a href="<?php echo G5_URL ?>/intro02.php">활동소개</a></li>
                <li><a href="<?php echo G5_URL ?>/intro03.php">연혁</a></li>
              </ul>
            </li>
            <li><a href="<?php echo G5_URL ?>/group.php">함께하는 사람들</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=report">사단법인 알림</a></li>
            <li class="side_nav_sub_menu">
              <a href="<?php echo G5_URL ?>/support01.php" class="side_nav_sub_menu_btn"><span>후원참여</span><img src="images/common/down_arrow.png"></a>
              <ul>
                <li><a href="<?php echo G5_URL ?>/support01.php">후원안내</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=support02">후원해주시는 분들</a></li>
                <li><a href="<?php echo G5_URL ?>/support03.php">후원참여</a></li>
              </ul>
            </li>
            <li><a href="<?php echo G5_URL ?>/faq.php">직장갑질 FAQ</a></li>

          </ul>

        </div>
      </aside>

      <div class="qmenu pc"><a href="#"><img src="images/common/quick.png" alt="상담하기 119"></a></div>

      <div class="intro_main">
        <div class="intro_main_img02">
          <img src="images/intro/intro_main_txt02.png" alt="우리는 언제나 열려있습니다." class="pc">
          <img src="images/intro/m_intro_main_txt02.png" alt="우리는 언제나 열려있습니다." class="mb">
        </div>
        <ul class="intro_main_btn">
          <li class="intro_main_btn_list01"><a href="<?php echo G5_URL ?>/intro01.php"></a></li>
          <li class="intro_main_btn_list02"><a href="<?php echo G5_URL ?>/intro02.php"></a></li>
          <li class="intro_main_btn_list03 active"><a href="<?php echo G5_URL ?>/intro03.php"></a></li>
        </ul>
      </div>

      <div class="intro_txt03">
        <!-- <p class="pc">직장갑질119가 있기까지는,</p>
        <div class="intro_txt_line pc"></div> -->
        <img src="images/intro/history.png" alt="우리의 연혁" class="pc">
        <img src="images/intro/m_history.png" alt="우리의 연혁" class="mb">
      </div>

    </div>
<?php
include_once(G5_PATH.'/tail.php');
?>
