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
        <li><a href="<?php echo G5_URL ?>/test01.php">갑질TEST</a></li>
      </ul> -->

      <aside class="test_side_nav_wrap pc">
        <div class="leftside_nav">

          <ul class="side_nav">

            <li class="side_nav_title"><span>갑질 TEST</span></li>
            <li class="active">
              <a href="<?php echo G5_URL ?>/test01.php">갑질 TEST</a>
              <span>나의 숨겨진 갑질본능은?</span>
            </li>
            <li>
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

      <div class="test_main">
        <div class="test_main_bg">
        </div>
        <div class="test_main_txt">
          <p>
            나의 갑질 감수성은?<br class="pc">
            우리회사 갑질지수는?
          </p>
        </div>
        <label class="test_main_switch_btn_wrap">
          <input type="checkbox" name="" value="" class="switch_btn" onclick="javascript:location.href='test01.php';">
          <span class="test_slider2 round"></span>
        </label>
      </div>

      <div class="test_txt01">
        <!-- <img src="images/test/test_logo.png" alt="갑질지수 테스트 시작"><br>
        <a href="#">갑질지수 테스트 시작</a> -->
        <div class="test_box" id="box1">
          <h2>직장 갑질 감수성 지수</h2>
          <h4>다음은 직장 생활 과정에서 나타날 수 있는 상황들입니다.<br>다음의 내용들에 대해 귀하가 동의하는 정도를 응답하여주십시오.</h4>
          <span class="test_stitle">모집채용</span>
          <h3 class="test_text">채용공고는 어느정도 과장할 수도 있다.</h3>
          <div class="test_btn_box">
            <button class="test_btn">전혀 그렇지 않다</button>
            <button class="test_btn">그렇지 않은 편이다</button>
            <button class="test_btn">보통이다</button>
            <button class="test_btn">그런 편이다</button>
            <button class="test_btn">매우 그렇다</button>
          </div>
          <button class="test_prev">&lt; 이전문항</button>
        </div>
        <div class="test_box" id="box2">
          <p class="concl">당신의 갑질 감수성 지수는 <span id="result">90</span> 점 입니다</p>
          <p class="grade">A 등급</p>
          <p class="grade_txt">인권존중 직장인. 감수성을 행동으로 옮겨 갑질 없는 일터를 함께 만들어요^^</p>
          <div class="test_btn_box">
            <button class="test_btn" onclick="javascript:go_test(1);">다시하기</button>
            <!-- <button class="test_btn" onclick="javascript:go_more();">결과 더보기</button> -->
          </div>
        </div>
      </div>
    </div>

    <script>
      var idx = 1;
      var score = [];
      var qstns = [];
      qstns[1] = {stitle : "모집채용", text : "채용공고는 어느 정도 과장할 수도 있다", order : "desc"};
      qstns[2] = {stitle : "근로계약", text : "근로계약서를 쓰지 않거나 교부하지 않으면 처벌이 필요하다", order : "asc"};
      qstns[3] = {stitle : "수습기간", text : "수습사원은 자유롭게 해고해도 괜찮다", order : "desc"};
      qstns[4] = {stitle : "임금체불", text : "회사가 어려워도 임금은 줘야한다", order : "asc"};
      qstns[5] = {stitle : "폭언", text : "상사가 화가 났다면 심한 언사(욕)를 할 수도 있다", order : "desc"};
      qstns[6] = {stitle : "모욕", text : "다소 모욕적인 업무지시도 때로는 필요하다", order : "desc"};
      qstns[7] = {stitle : "반말", text : "상사나 선배는 부하나 후배에게 반말을 해도 된다", order : "desc"};
      qstns[8] = {stitle : "반성문", text : "징계절차와 별개로 직원에게 반성문을 쓰게 할 수 있다", order : "desc"};
      qstns[9] = {stitle : "따돌림", text : "따돌림을 받는 직원이 생기는 건 불가피한 일이다", order : "desc"};
      qstns[10] = {stitle : "업무제외", text : "직원에게 본연의 업무가 아닌 허드렛일을 시킬 수 있다", order : "desc"};
      qstns[11] = {stitle : "소문", text : "개인 사생활에 대한 소문이 도는 건 어쩔 수 없는 일이다", order : "desc"};
      qstns[12] = {stitle : "SNS", text : "급한 일이 생기면 업무시간이 아니어도 SNS로 일을 시킬 수 있다", order : "desc"};
      qstns[13] = {stitle : "출퇴근", text : "맡겨진 일은 시간외 근무를 해서라도 끝내야 한다", order : "desc"};
      qstns[14] = {stitle : "휴일근무", text : "휴일이나 명절에 일을 마쳐야 한다면 부하 직원들을 출근 시킬 수 있다", order : "desc"};
      qstns[15] = {stitle : "휴일휴가", text : "원하는 때에 연차 등 법정휴가를 사용하지 못할 수 있다", order : "desc"};
      qstns[16] = {stitle : "인사채용", text : "사장이나 임원의 친인척의 특별 채용은 어쩔 수 없는 일이다", order : "desc"};
      qstns[17] = {stitle : "여성1", text : "임신, 출산, 육아 때문에 여직원과 같이 일하는 것이 꺼려진다", order : "desc"};
      qstns[18] = {stitle : "여성2", text : "어린 아이를 키우는 직원의 편의는 봐주어야 한다", order : "asc"};
      qstns[19] = {stitle : "업무 내 지시", text : "회사 대표나 상사가 시킨 일은 불합리하게 느껴져도 일단 해야 한다", order : "desc"};
      qstns[20] = {stitle : "업무 외 지시", text : "상사는 부하 직원에게 업무와 상관없는 개인적인 일도 부탁할 수 있다", order : "desc"};
      qstns[21] = {stitle : "업무 감시", text : "직원들의 근무태만을 바로잡기 위해 CCTV를 설치할 수 있다", order : "desc"};
      qstns[22] = {stitle : "병가", text : "몸이 아프면 병가나 연차를 쓰는 게 당연하다", order : "asc"};
      qstns[23] = {stitle : "장기자랑", text : "회식이나 단합대회에서 분위기를 띄우려면 직원들의 공연이나 장기자랑이 있어야 한다", order : "desc"};
      qstns[24] = {stitle : "태움", text : "신입사원을 제대로 가르치려면 때론 위압적일 필요도 있다", order : "desc"};
      qstns[25] = {stitle : "회식문화", text : "팀워크 향상을 위한 회식이나 노래방 등은 조직문화를 위해 필요하다", order : "desc"};
      qstns[26] = {stitle : "음주강요", text : "직장생활을 원만하게 하려면 술이 싫어도 한 두잔 정도는 마셔줘야 한다", order : "desc"};
      qstns[27] = {stitle : "비업무행사", text : "휴일 날 단합을 위한 체육대회나 MT와 같은 행사를 할 수 있다", order : "desc"};
      qstns[28] = {stitle : "직장문화", text : "성희롱이나 직장 괴롭힘으로 오해받을까봐 부하 직원에게 말을 붙이는 것도 어려워졌다", order : "desc"};
      qstns[29] = {stitle : "권고사직", text : "일을 못하는 직원에게는 권고사직은 필요하다", order : "desc"};
      qstns[30] = {stitle : "퇴사", text : "갑자기 일을 그만 둬버린 직원에게는 책임을 물어야 한다", order : "desc"};

      function btn_desc(){
        var box = $("#box1 .test_btn_box");
        box.empty();
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 5; go_test(idx + 1); }, text: "전혀 그렇지 않다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 4; go_test(idx + 1); }, text: "그렇지 않은 편이다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 3; go_test(idx + 1); }, text: "보통이다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 2; go_test(idx + 1); }, text: "그런 편이다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 1; go_test(idx + 1); }, text: "매우 그렇다"}));
      }
      function btn_asc(){
        var box = $("#box1 .test_btn_box");
        box.empty();
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 1; go_test(idx + 1); }, text: "전혀 그렇지 않다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 2; go_test(idx + 1); }, text: "그렇지 않은 편이다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 3; go_test(idx + 1); }, text: "보통이다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 4; go_test(idx + 1); }, text: "그런 편이다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 5; go_test(idx + 1); }, text: "매우 그렇다"}));
      }
      function go_test(num){
        if (num < 31) {
          idx = num;
          $(".test_stitle").html(qstns[idx].stitle);
          $(".test_text").html(qstns[idx].text);
          if (qstns[idx].order == "desc") {
            btn_desc();
          } else {
            btn_asc();
          }
        } else {
          var result = 0;
          score.forEach(function(val, i){
            result = result + score[i];
          });
          result = Math.round(result * 2 / 3);

          $("#result").html(result);
          if (result > 90) {
            $(".grade").html("A 등급");
            $(".grade_txt").html("인권존중 직장인. 감수성을 행동으로 옮겨 갑질 없는 일터를 함께 만들어요^^");
          } else if (result > 80) {
            $(".grade").html("B 등급");
            $(".grade_txt").html("인권친화 직장인. 조금 더 노력하시면 인권존중 직장인이 되실 수 있습니다.");
          } else if (result > 70) {
            $(".grade").html("C 등급");
            $(".grade_txt").html("평균갑질 직장인. 감수성이 부족한 부분에 대해 다시 한 번 생각해보세요.");
          } else if (result > 60) {
            $(".grade").html("D 등급");
            $(".grade_txt").html("갑질위험 직장인. 직장내 괴롭힘 예방교육과 인권교육을 권해드립니다.");
          } else {
            $(".grade").html("E 등급");
            $(".grade_txt").html("갑질심각 직장인. 자신을 성찰하고 직장내 괴롭힘 예방교육과 인권교육을 꼭 이수하세요.");
          }
          $("#box1").hide();
          $("#box2").show();
        }

        if (idx > 1) {
          $(".test_prev").text("< 이전문항");
        } else {
          $(".test_prev").text("");
          $("#box2").hide();
          $("#box1").show();
        }
      }
      $(document).ready(function(){
        $("#box2").hide();
        go_test(1);
        
        $(".test_prev").click(function(){
          if( idx > 1) {
            go_test(idx-1);
          }
        });
      });
    </script>
<?php
include_once(G5_PATH.'/tail.php');
?>