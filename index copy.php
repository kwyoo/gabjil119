<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>
    <!-- CONTENTS -->
    <div id="main_contents">

      <main id="main">
        <div class="mainbanner pc"><img src="images/main/mainbanner.png" alt="회사에 불만 많으시죠?"></div>
        <div class="mainbanner mb"><img src="images/main/m_mainbanner.png" alt="회사에 불만 많으시죠?"></div>
        <div class="maintext">
          <p>회사에<br class="mb"> 불만 많으시죠?</p>
        </div>
        <div class="main_btn"><a href="#"><span>상담받으러 가기</span><img src="images/main/arrow.png" alt="상담받으러 가기"></a></div>
      </main>

      <div class="qmenu pc"><a href="#"><img src="images/common/quick.png" alt="상담하기 119"></a></div>

      <section class="cont1">
        <div class="sub1-1">
          <div class="sub1-1_txt mb">
            <span>갑질 TEST</span>
            <span>나의 갑질 감수성은? 우리회사 갑질지수는?</span>
          </div>
          <img src="images/main/img01.png" alt="갑질 TEST" class="slidein_img pc">
          <img src="images/main/m_img01.png" alt="갑질 TEST" class="slidein_img mb">
          <div class="slidein pc">
            <div class="slidein_txt">갑질 TEST</div>
          </div>
        </div>
        <div class="sub1-2">
          <div class="sub1-2_txt mb">
            <span>사・바・삼</span><br>
            <span>사무실을 바꾸는 3분 상담소</span>
          </div>
          <img src="images/main/img02.png" alt="사무실을 바꾸는 3분 상담소" class="slidein_img pc">
          <img src="images/main/m_img02.png" alt="사무실을 바꾸는 3분 상담소" class="slidein_img mb">
          <div class="slidein pc">
            <div class="slidein_txt">사・바・삼</div>
          </div>
        </div>
        <div class="sub1-3">
          <div class="sub1-3_txt mb">
            <span>Campaign</span><br>
            <span>119가 선정한 갑질뿌수기…</span>
          </div>
          <img src="images/main/img03.png" alt="Campaign" class="slidein_img pc">
          <img src="images/main/m_img03.png" alt="Campaign" class="slidein_img mb">
          <div class="slidein pc">
            <div class="slidein_txt">Campaign</div>
          </div>
        </div>
      </section>

      <section class="cont2">
        <div class="sub2-1">
          <img src="images/main/img04.png" alt="후원참여" class="pc">
          <img src="images/main/m_img04.png" alt="후원참여" class="mb">
          <h1>후원참여</h1>
          <div class="line"></div>
          <div class="sub2-1_txt">
            <p>정기(CMS)후원 <div class="sub2-1_btn"><a href="#">바로가기 →</a></div></p>
            <p>일시후원</p><span class="account_num">농협 ㅣ 010-119-119-1199 직장갑질119</span>
          </div>
        </div>
        <div class="sub2-2">
          <img src="images/main/img05.png" alt="공지사항" class="pc">
          <div class="sub2-2_bg mb"></div>
          <h1>공지사항</h1>
          <div class="line"></div>
          <div class="sub2-2_txt">
            <p>• 공지사항의 제목을 입력하세요</p>
            <p>• 공지사항의 제목을 입력하세요</p>
          </div>
        </div>
      </section>

    </div>

<?php
include_once(G5_PATH.'/tail.php');
?>