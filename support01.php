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
        <li><a href="<?php echo G5_URL ?>/support01.php">후원참여 ></a></li>
        <li><a href="<?php echo G5_URL ?>/support01.php">후원안내</a></li>
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

      <div class="qmenu pc"><a href="http://www.gabjil119.com/" target="_blank"><img src="images/common/quick.png" alt="상담하기 119"></a></div>

      <div class="support_main">
        <div class="support_main_img">
          <img src="images/support/support_main.png" alt="직장갑질119와 함께해주세요." class="pc">
          <img src="images/support/m_support_main.png" alt="직장갑질119와 함께해주세요." class="mb">
        </div>
        <ul class="support_main_btn">
          <li class="support_main_btn_list01 active"><a href="<?php echo G5_URL ?>/support01.php"></a></li>
          <li class="support_main_btn_list02"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=support02"></a></li>
          <li class="support_main_btn_list03"><a href="<?php echo G5_URL ?>/support03.php"></a></li>
        </ul>
      </div>

      <div class="support_txt01">
        <!-- <p class="pc">후원을 안내합니다.</p>
        <div class="support_txt_line pc"></div> -->

        <h2>지속가능한 직장갑질119와 함께하세요!</h2>
        <p>
          직장갑질119는 어떠한 기업과 정부의 지원 없이 단체와 개인 후원을 통해 운영되고 있으며,<br class="pc">
          지속가능한 직장갑질119를 만들기 위해 후원을 받고 있습니다.<br class="pc">
          보내주신 후원금은 상근노무사 채용과 운영비로 사용됩니다.
        </p>
        <div class="support_txt01_btn"><a href="https://v3.ngocms.co.kr/system/member_signup/join_option_select_03.html?id=hvagabji" target="_blank">정기(CMS)후원 ></a></div>
        <p>일시후원  <span class="support_txt01_account_num">농협 010-119-119-1199  [ 직장갑질119 ]</span></p>
      </div>

    </div>
<?php
include_once(G5_PATH.'/tail.php');
?>
