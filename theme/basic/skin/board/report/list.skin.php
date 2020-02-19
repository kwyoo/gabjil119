<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 4;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<!-- CONTENTS -->
<div id="board_contents">

    <!-- <ul class="path pc">
        <li><a href="<?php echo G5_URL ?>">홈 ></a></li>
        <li><a href="<?php echo G5_URL ?>/intro01.php">직장갑질119 ></a></li>
        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=report">사단법인</a></li>
    </ul> -->

    <aside class="side_nav_wrap pc">
        <div class="leftside_nav">

          <ul class="side_nav">

            <li class="side_nav_title"><span>직장갑질119</span></li>
            <li class="side_nav_sub_menu">
              <a href="<?php echo G5_URL ?>/" class="side_nav_sub_menu_btn"><span>소개</span><img src="/images/common/down_arrow.png"></a>
              <ul>
                <li><a href="<?php echo G5_URL ?>/intro01.php">직장갑질119 소개</a></li>
                <li><a href="<?php echo G5_URL ?>/intro02.php">활동소개</a></li>
                <li><a href="<?php echo G5_URL ?>/intro03.php">연혁</a></li>
              </ul>
            </li>
            <li><a href="<?php echo G5_URL ?>/group.php">함께하는 사람들</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=report">사단법인 알림</a></li>
            <li class="side_nav_sub_menu">
              <a href="<?php echo G5_URL ?>/support01.php" class="side_nav_sub_menu_btn"><span>후원참여</span><img src="/images/common/down_arrow.png"></a>
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

    <div class="qmenu pc"><a href="http://www.gabjil119.com/" target="_blank"><img src="<?php echo G5_URL ?>/images/common/quick.png" alt="상담하기 119"></a></div>


    
    <!-- 게시판 목록 시작 { -->
    <div class="report_board_wrap">
        
        <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
        
        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
        <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
        <input type="hidden" name="stx" value="<?php echo $stx ?>">
        <input type="hidden" name="spt" value="<?php echo $spt ?>">
        <input type="hidden" name="sca" value="<?php echo $sca ?>">
        <input type="hidden" name="sst" value="<?php echo $sst ?>">
        <input type="hidden" name="sod" value="<?php echo $sod ?>">
        <input type="hidden" name="page" value="<?php echo $page ?>">
        <input type="hidden" name="sw" value="">

                
        <table class="report_board">
            <thead>
                <?php if ($is_checkbox) { ?>
                <th scope="col" class="all_chk chk_box">
                    <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="selec_chk">
                    <label for="chkall">
                        <span></span>
                        <b class="sound_only">현재 페이지 게시물  전체선택</b>
                    </label>
                </th>
                <?php } ?>
                <th>번호</th>
                <th>제목</th>
                <th>작성일</th>
                <th>조회</th>
            </thead>
            <tbody>
            <?php
            for ($i=0; $i<count($list); $i++) {
                if ($i%2==0) $lt_class = "even";
                else $lt_class = "";
            ?>
                <tr>
                <?php if ($is_checkbox) { ?>
                    <td class="td_chk chk_box">
                        <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
                        <label for="chk_wr_id_<?php echo $i ?>">
                            <span></span>
                            <b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
                        </label>
                    </td>
                <?php } ?>
                    <td class="report_board_header">
                <?php
                if ($list[$i]['is_notice']) // 공지사항
                    echo '<span class="notice_icon">공지</span>';
                else if ($wr_id == $list[$i]['wr_id'])
                    echo "<span class=\"bo_current\">열람중</span>";
                else
                    echo '<span>'.$list[$i]['num'].'</span>';
                ?>
                    </td>
                    <td class="report_board_contents">
                        <?php
                        if ($is_category && $list[$i]['ca_name']) {
                        ?>
                        <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
                        <?php } ?>
                        <div class="bo_tit">
                            <a href="<?php echo $list[$i]['href'] ?>">
                                <?php echo $list[$i]['icon_reply'] ?>
                                <?php
                                    if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
                                ?>
                                <?php echo $list[$i]['subject'] ?>
                            </a>
                            <?php
                            // if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
                            // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }
                            if (isset($list[$i]['icon_file'])) echo rtrim($list[$i]['icon_file']);
                            if (isset($list[$i]['icon_link'])) echo rtrim($list[$i]['icon_link']);
                            if (isset($list[$i]['icon_hot'])) echo rtrim($list[$i]['icon_hot']);
                            ?>
                            <?php if ($list[$i]['comment_cnt']) { ?><span class="sound_only">댓글</span><span class="cnt_cmt"><?php echo $list[$i]['wr_comment']; ?></span><span class="sound_only">개</span><?php } ?>
                        </div>
                    </td>
                    <td class="report_board_date"><?php echo $list[$i]['datetime2'] ?></td>
                    <td class="report_board_view"><?php echo $list[$i]['wr_hit'] ?></td>
                </tr>
            <?php } ?>
            <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
            </tbody>
        </table>

        <div class="report_board_footer">
            <div class="report_board_footer_btn">
            <?php if ($is_checkbox) { ?>
                <input type="submit" name="btn_submit" value="이동" onclick="document.pressed=this.value">
                <input type="submit" name="btn_submit" value="삭제" onclick="document.pressed=this.value">
            <?php } ?>
            </div>
            <!-- 페이지 -->
            <div class="report_board_footer_pagenation">
            <?php echo $write_pages; ?>
            </div>
            <!-- 페이지 -->
            <div class="report_board_footer_write">
            <?php if ($write_href) { ?><input type="button" name="" value="글쓰기" onclick="location.href='<?php echo $write_href ?>'"><?php } ?>
            </div>
        </div>
    </div>
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}

// 게시판 리스트 관리자 옵션
jQuery(function($){
    $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
    });
    $(document).on("click", function (e) {
        if(!$(e.target).closest('.is_list_btn').length) {
            $(".more_opt.is_list_btn").hide();
        }
    });
});
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
