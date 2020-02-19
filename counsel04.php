<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.php');
?>

    <!-- CONTENTS -->
    <div id="job119_contents">

      <ul class="path pc">
        <li><a href="<?php echo G5_URL ?>">홈 ></a></li>
        <li><a href="<?php echo G5_URL ?>/test01.php">갑질TEST</a></li>
      </ul>

      <aside class="test_side_nav_wrap pc">
        <div class="leftside_nav">

          <ul class="side_nav">

            <li class="side_nav_title"><span>갑질 TEST</span></li>
            <li>
              <a href="<?php echo G5_URL ?>/test01.php">갑질 TEST</a>
              <span>나의 숨겨진 갑질본능은?</span>
            </li>
            <li class="active">
              <a href="<?php echo G5_URL ?>/counsel01.php">사・바・삼</a>
              <span>사무실을 바꾸는 3분 상담소</span>
            </li>
            <li>
            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=case">승리사례 모음집</a>
              <span>직장갑질 뿌수기 공모전 모음</span>
            </li>
            <li>
              <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=knowhow">노하우</a>
              <span>갑질과 싸운 사람들의 꿀팁모음</span>
            </li>

          </ul>

        </div>
      </aside>

      <div class="qmenu pc"><a href="http://www.gabjil119.com/" target="_blank"><img src="images/common/quick.png" alt="상담하기 119"></a></div>

      <div class="counseling_main">
        <img src="images/counseling/counseling_main_icon.png" alt="당신의 사무실을 바꾸는 3분 상담소"><br>
        <img src="images/counseling/counseling_main_txt.png" alt="당신의 사무실을 바꾸는 3분 상담소" class="pc">
        <img src="images/counseling/m_counseling_main_txt.png" alt="당신의 사무실을 바꾸는 3분 상담소" class="mb">
      </div>

      <div class="counseling_txt01">

        <ul class="counseling_txt_tab">
          <li class="active"><a href="<?php echo G5_URL ?>/counsel01.php">실업급여</a></li>
          <li><a href="<?php echo G5_URL ?>/counsel02.php">체불임금</a></li>
          <li><a href="<?php echo G5_URL ?>/counsel03.php">괴롭힘</a></li>
          <li><a href="<?php echo G5_URL ?>/counsel04.php">부당해고</a></li>
          <li><a href="<?php echo G5_URL ?>/counsel05.php">휴가</a></li>
          <li><a href="<?php echo G5_URL ?>/counsel06.php">성희롱/모성</a></li>
          <li><a href="<?php echo G5_URL ?>/counsel07.php">법적절차</a></li>
        </ul>

        <ul class="counseling_txt_video_list">
          <li><img src="images/counseling/play_btn.png" alt="재생목록" class="pc"><span>권고사직도 해고인가요?</span></li>
          <li><img src="images/counseling/play_btn_active.png" alt="재생 중" class="pc"><span>다음 주부터 나오지 말라는데 어떻게 해요?</span></li>
          <li><img src="images/counseling/play_btn.png" alt="재생목록" class="pc"><span>부당해고 맞서기 – 구제신청 절차</span></li>
        </ul>

        <div class="counseling_video_wrap">
          <div class="counseling_video_title">
            <div class="counseling_line"></div>
            <p>떼인 돈 받으려면? 수당의 모든 것!</p>
          </div>

          <video src="#" width="860" height="484" autoplay="no" poster=images/counseling/video.png>
            <source src="https://" type="video/mp4">
          </video>

          <div class="video_description">
            <h3>실업급여를 받는 절차</h3>
            <p>
              내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요. 내용을 입력하세요.
            </p>
          </div>

        </div>

      </div>

    </div>
<?php
include_once(G5_PATH.'/tail.php');
?>