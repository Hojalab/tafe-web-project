<style type="text/css">
	/* 뉴스상단(2단 3줄) */
	.ddd410 {display:block;overflow:hidden;width:410px;height:21px;white-space:nowrap;text-overflow:ellipsis;-o-text-overflow:ellipsis}
	html>/**/body .ddd410,x:-moz-any-link,x:default{white-space:normal;word-wrap:break-word} /* Firefox 에서 줄 바꿈이 가능하도록 변경 */
	*+html .ddd410{white-space:nowrap} /* 위 행이 IE7에도 적용되므로 IE7에만 줄 바꿈이 불가능하도록 다시 복원 */

	/* 뉴스우측(1단 6줄) */
	.ddd280 {display:block;overflow:hidden;width:280px;height:21px;white-space:nowrap;text-overflow:ellipsis;-o-text-overflow:ellipsis}
	html>/**/body .ddd280,x:-moz-any-link,x:default{white-space:normal;word-wrap:break-word} /* Firefox 에서 줄 바꿈이 가능하도록 변경 */
	*+html .ddd280{white-space:nowrap} /* 위 행이 IE7에도 적용되므로 IE7에만 줄 바꿈이 불가능하도록 다시 복원 */
</style>
<div id="wrapper">
	<!-- Header -->
	<div id="header">
		<div class="header-top">
			<span class="ht-left">
				<strong>현재 접근하신 위치는 <span><?=getStateName($myStateCd)?></span> 입니다.</strong>
				<a href="#" class="btnposition">위치변경</a>
				<a href="#" class="rollover" style="display: none; "></a>
				<span class="click" style="display: none; "><!--NT<br>SA<br>WA<br>QLD<br>TAS<br>VIC<br>ACT-->
			<?php foreach($code_state as $k=>$v) : ?>
				<span onclick="gSetLocation('index.php','<?=$k?>');" style="cursor:pointer;"><?=$v?></span>
			<?php endforeach; ?>
				</span>
			</span>
			<ul>
				<li>
					<a href="index.php" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage(this.href);return false;" class="utility">
						<img src="<?=$path[dspath]?>/images/tit/tit_utility.jpg" alt="호주나라시작페이지" />
					</a>
				</li>
				<li class="pad6">
					<a href="bbs.php?id=cust_qna&q=write&sq=suggest" class="utility" style="margin-top:0px;">
						<img src="<?=$path[dspath]?>/images/tit/tit_main1.gif" alt="건의제안접수" />
					</a>
				</li>
				<li class="pad6">
					<a href="http://hojunaragroup.com/english/index.html" class="utility" target="_blank">
						<img src="<?=$path[dspath]?>/images/btn/btn_eng.jpg" alt="english" />
					</a>
				</li>
			</ul>
		</div>
		<div class="header-center main">
			<h1 class="logo"><a href="index.php"><img src="<?=$path[dspath]?>/images/tit/tit_logo1.gif" alt="Hojunara" /></a></h1>
			<div class="search">
				<div>
					<span><img src="<?=$path[dspath]?>/images/icon/icon_recommend.jpg" alt="" /></span>
					<span class="txt">부동산, 음식, 쇼핑, 택스, 여행, 자동차</span>
				</div>
				<input type="text" class="txt" id="search_news1" name="search_news1" onkeydown="javascript: if (event.keyCode == 13) {gGoSearch('all', document.getElementById('search_news1').value, '');}" />
				<input type="image" onclick="gGoSearch('all', document.getElementById('search_news1').value, '');" src="<?=$path[dspath]?>/images/btn/btn_search1.jpg" alt="검색" />
			</div>
			<? showBanner('M05', 'class', false, 0, 0, 3, "toplink"); ?>
		</div>
	</div>
	<!-- //Header -->
	<!-- Contents -->
	<div id="contents">
		<div class="content-top">
			<ul class="main-icon">
				<li><img src="<?=$path[dspath]?>/images/tit/lesson_icon.png" alt="과외런청" /></li>
				<li class="11st"><img src="<?=$path[dspath]?>/images/tit/11st_icon.png" alt="11번가" /></li>
			</ul>
			<ul class="main">
				<li><a href="news.php"><img src="<?=$path[dspath]?>/images/tit/tit_submenu29.png" alt="호주나라뉴스" /></a></li>
				<li><a href="community.php"><img src="<?=$path[dspath]?>/images/tit/tit_submenu30.png" alt="커뮤니티" /></a></li>
				<li><a href="job.php"><img src="<?=$path[dspath]?>/images/tit/tit_submenu31.png" alt="구인/구직" /></a></li>
				<li><a href="property.php"><img src="<?=$path[dspath]?>/images/tit/tit_submenu32.png" alt="부동산" /></a></li>
				<li><a href="livings.php"><img src="<?=$path[dspath]?>/images/tit/tit_submenu33.png" alt="생활용품" /></a></li>
				<li><a href="cars.php"><img src="<?=$path[dspath]?>/images/tit/tit_submenu34.png" alt="자동차" /></a></li>
				<li><a href="store.php"><img src="<?=$path[dspath]?>/images/tit/tit_submenu35.png" alt="업소록" /></a></li>
				<!--<li class="divide"><a href="#;"><img src="<?=$path[dspath]?>/images/tit/tit_submenu36.png" alt="이민" /></a></li>
				<li><a href="#;"><img src="<?=$path[dspath]?>/images/tit/tit_submenu37.png" alt="유학" /></a></li>
				<li><a href="#;"><img src="<?=$path[dspath]?>/images/tit/tit_submenu38.png" alt="여행" /></a></li>-->
				<li><a href="new_tax.php"><img src="<?=$path[dspath]?>/images/tit/tit_submenu39.png" alt="택스" /></a></li>
				<li><a href="shopping.php"><img src="<?=$path[dspath]?>/images/tit/tit_submenu41.png" alt="쇼핑" /></a></li>
				<li><a href="#" onclick="showSiteView(this);" class="mainbtn"><img src="<?=$path[dspath]?>/images/tit/tit_submenu42.png" alt="" /></a></li>
				<? require_once $path['skinpath'].'body/inc/index/_site-view.php'; ?>
				<!--<li><a href="#;"><img src="<?=$path[dspath]?>/images/tit/tit_submenu40.png" alt="비즈니스" /></a></li>-->
				<!--<li><a href="#;"><img src="<?=$path[dspath]?>/images/tit/tit_submenu41.png" alt="쇼핑" /></a></li>-->
				<li class="use"><a href="http://adlink.hojunara.com/hojunara/newnotice.php" target="_new"><img src="<?=$path[dspath]?>/images/btn/btn_point_know.jpg" alt="포인트충전알아보기"/></a></li>
			</ul>
		</div>
		<div class="center">
			<div style="POSITION: relative; z-index:300;">
			<!--<DIV style="POSITION: absolute; DISPLAY: inline; Z-INDEX: 101; LEFT: 0px; TOP: 0px;>-->
			<? showBanner('M01-01', 'layer', true, 240, 125); ?>
			<? showBanner('M01-02', 'layer', true, 480, 125); ?>
			<!--</DIV>-->
			<div id="IE8layer" style="background-color: rgb(221, 221, 221); z-index: 300; position: absolute; display: none; left: 240px; top: 0px; text-align:center;">
				<img src="<?=$path[dspath]?>/images/notice/ie6.jpg" width="300" height="415" style="border:0px;" alt="IE6" title="IE6" usemap="#mapIE8"><br />
				<a href="javascript:gf_hide('IE8layer');"><img border="0" src="<?=$path[dspath]?>/img/common/close.gif" style="vertical-align:middle;"></a>
			</div>
			<div id="IE9layer" style="background-color: rgb(221, 221, 221); z-index: 300; position: absolute; display: none; left: 240px; top: 0px; text-align:center;">
				<img src="<?=$path[dspath]?>/images/notice/ie6.jpg" width="300" height="415" style="border:0px;" alt="IE6" title="IE6" usemap="#mapIE9"><br />
				<a href="javascript:gf_hide('IE9layer');"><img border="0" src="<?=$path[dspath]?>/img/common/close.gif" style="vertical-align:middle;"></a>
			</div>
			<map name="mapIE8">
				<area shape="rect" coords="9,339,94,407" href="javascript:winOpenFull('http://windows.microsoft.com/ko-KR/internet-explorer/downloads/ie-8');" target="">
				<area shape="rect" coords="101,339,159,407" href="javascript:winOpenFull('http://www.google.com/chrome/intl/ko/features.html');" target="">
				<area shape="rect" coords="166,339,230,407" href="javascript:winOpenFull('http://www.mozilla.or.kr/ko/');" target="">
				<area shape="rect" coords="237,339,289,407" href="javascript:winOpenFull('http://www.apple.com/kr/safari/');" target="">
			</map>
			<map name="mapIE9">
				<area shape="rect" coords="9,339,94,407" href="javascript:winOpenFull('http://windows.microsoft.com/ko-KR/internet-explorer/download-ie');" target="">
				<area shape="rect" coords="101,339,159,407" href="javascript:winOpenFull('http://www.google.com/chrome/intl/ko/features.html');" target="">
				<area shape="rect" coords="166,339,230,407" href="javascript:winOpenFull('http://www.mozilla.or.kr/ko/');" target="">
				<area shape="rect" coords="237,339,289,407" href="javascript:winOpenFull('http://www.apple.com/kr/safari/');" target="">
			</map>
		</div>
		<div class="main-left">
		<!-- LOGIN BEGIN -->
		<?php if($my[id]) : ?>
		<div class="login2">
			<div>
				<div class="profiletop">
					<strong><?=$my[name]?></strong>
					<span>|&nbsp;&nbsp;<?=getMemType($my[comp], $my['comp_approval'])?></span>
					<?php if($my[comp]==0) : ?>
						&nbsp;<a href="mypage.php?q=premium" style="float:none;"><img src="<?=$path[dspath]?>/images/icon/icon_premium.jpg" alt="기업회원 업그레이드" title="기업회원 업그레이드" /></a>
					<?php endif; ?>
					<a href="login.php?a=logout" class="btnlogout">로그아웃</a>
				</div>
				<div class="profiletop type1">
					<strong class="pts"><?=$my[point]?> GP | <?=$my[cash]?> CM</strong>
					<a href="mypage.php?q=pointcharge" class="btnfill">충전하기</a>
				</div>
			</div>
			<div class="login-bottom">
				<a href="mypage.php" class="on2">마이페이지</a>&nbsp;|
				<a href="mypage.php?q=info">개인정보관리</a>&nbsp;|
				<?$DATNUM = db_fetch_array(db_query("SELECT count(*) FROM ".$table[paper]." where to_id='".$my[id]."' and inbox='1'",$DB_CONNECT));?>
				<a href="#">쪽지<strong><span><?=number_format($DATNUM[0])?></span></strong>개</a>
			</div>
		</div>
		<?else:?>
		<div class="login">
			<div class="login-top">
				<span class="step">
					<span>1</span>
					<span class="on">2</span>
					<span>3</span>
				</span>
				<span class="step-txt">보안 <strong>2</strong> 단계</span>
			</div>
			<?php
				if ("localhost" == $_SERVER['HTTP_HOST']) {
					$prefix = "";
				} else {
					$referer = "mypage.php?q=renew";
					$prefix = "http://".$_SERVER['HTTP_HOST']."/";
				}
				$prefix = "";
			?>
			<form action='<?=getLoginUrl();?>' method=post onsubmit="return headlogCheck();" name="logFrm">
				<input type=hidden name='a' value='login'>
				<input type=hidden name='referer' value='<?=$referer?$referer:''?>'>
				<span class="login-row">
					<input type="text" id="id" name="id" tabindex=1 value="<?=getArrayCookie($_COOKIE[svkimson],"|",0)?>" />
					<input onclick="remember_idpw1(this)" type=checkbox name='idpwsave' VALUE='checked' <?=getArrayCookie($_COOKIE[svkimson],"|",2)?>>
					<label for="idstore">ID저장</label>
				</span>
				<span class="login-row">
					<input type="password" id="pw" name="pw" tabindex=2 value="" onkeypress="if(event.keyCode==13) {headlogCheck();}" />
					<input type="image" src="<?=$path[dspath]?>/images/btn/btn_login.jpg" alt="로그인" />
				</span>
			</form>
			<div class="login-bottom">
				<a href="regis.php" class="on">회원가입</a>&nbsp;|
				<a href="regis.php?q=id">아이디찾기</a>&nbsp;|
				<a href="regis.php?q=pw">비밀번호찾기</a>
			</div>
		</div>
		<?endif?>
		<!-- LOGIN END -->
		<div class="exrate">
			<div class="exrate-top">
				<a href="#" class="first on">환율</a>
				<a href="#"><span>날씨</span> <img src="<?=$path[dspath]?>/images/btn/btn_main_<?=strtolower($myState);?>.png" alt="nsw" onclick="lf_weatherControl('weather', 8, 'weather_idx', this);"/></a>
				<span><?=getDateFormat($date[today], 'xxxx. xx. xx')?></span>
			</div>
			<div class="rate" onclick="window.open('https://www.d2kclub.com/app/affiliate/139622', '_blank')" style="cursor: pointer">
				<div class="rate-top">
					<div class="rate-top-data">
						<span class="rtd-row">
							<span><img src="<?=$path[dspath]?>/images/icon/hojunara-main_d2k.gif" alt="D2K" /></span>
						</span>
					</div>
					<!--<div class="rate-top-data">
						<span class="rtd-row">
							<span><img src="<?=$path[dspath]?>/images/tit/tit_2k.jpg" alt="D2K" /></span>
							<span class="time"><img src="<?=$path[dspath]?>/images/tit/tit_time.png" alt="24hrs" /></span>
						</span>
						<span class="rtd-row">
							<span><img src="<?=$path[dspath]?>/images/tit/tit_online_service.jpg" alt="한국 송금 온라인 서비스" /></span>
							<a href="https://www.d2kclub.com/app/affiliate/139622" target="_new"><img src="<?=$path[dspath]?>/images/btn/btn_go.jpg" alt="go" /></a>
						</span>
					</div>-->
				</div>
				<?php $detail=getExchangeInfoFrD2K(); ?>
				<ul class="rate-list">
					<li>한국에서 호주로 송금 <strong><?=$detail[toAus]?></strong></li>
					<li>호주에서 한국으로 송금 <strong><?=$detail[toKor]?></strong></li>
				</ul>
				<span class="rate-txt">송금환율 기준시간 : <?=$detail[date]?></span>
			</div>
			<!-- WEATHER BEGIN -->
			<div class="weather" style="display: none;">
			<?php $ii = 0; $cIdx = 0; ?>
			<?php foreach ($code_state_city as $key=>$val) : ?>
				<?php $forecastLst = getWeatherForecast($val); ?>
				<?php $ii++; ?>
				<div id="weather_tab_1_<?=$ii?>" width="100%" height="119" border="0" cellspacing="0" cellpadding="0" style="display: <?=($myCity==$val) ? "" : "none"?>;">
					<ul>
					<?php foreach ($forecastLst as $idx=>$forecast) : ?>
						<li>
							<span><?=$forecast[myDow]?></span>
							<span class="icon"><img src="<?=$path[dspath]?>/img/new_index/<?=$forecast[myIcon]?>" title="<?=$forecast[myCondition]?>" /></span>
							<span class="temp"><?=$forecast[low]?> ~ <?=$forecast[high]?>℃</span>
						</li>
						<?php if ($idx==2) break; ?>
					<?php endforeach ?>
					</ul>
				</div>
				<?php $cIdx = ($myCity==$val) ? $ii : $cIdx; ?>
				<input type="hidden" id="weather_img_<?=$ii?>" name="weather_img_<?=$ii?>" value="<?=$path[dspath]?>/img/new_index/area_<?=strtolower(city2state($val));?>.gif">
				<?php endforeach; ?>
			</div>
			<input type="hidden" id="weather_idx" name="weather_idx" value="<?=$cIdx?>">
			<!-- WEATHER END -->
		</div>

		<div class="ad1"><? showBanner('M06', 'section', false, 0, 0, 3); ?></div>
		<div class="jobs">
			<div class="jobs-tabs">
				<strong>검색랭킹</strong>
			</div>
			<ul class="jobs-list" id="list_jobs0">
				<?php $sql = "select uid, keyword, sum(hit) hit from kimson_keyword where d_regis = date_format(now(),'%Y%m%d') group by keyword order by hit desc limit 0, 7";?>
				<?php $LRCDDAT = db_query($sql, $DB_CONNECT);?>
				<?php $r_cnt = 0;?>
				<?while($LR = db_fetch_array($LRCDDAT)):?>
					<?php $r_cnt++;?>
					<?php $bbshref = "search.php?stype=all&keyword=".$LR[keyword];?>
					<li class="<?=($r_cnt==1?"on":"")?>">
						<span class="no"><?=$r_cnt?></span>
						<a href="<?=$bbshref?>"><?=getStrCut($LR[keyword],39,'..')?></a>
						<span class="rl-right up"><?=$LR[hit]?></span>
					</li>
				<?endwhile;?>
			</ul>

			<!-- JOB BEGIN -->
			<ul class="jobs-list" id="list_jobs0" style="display:none;">
			<?php $id = "work_c_mstory"; ?>
			<? $sql = "select uid, subject, d_regis from kimson_bd_$id order by uid desc limit 0, 4";?>
			<? $LRCDDAT = db_query($sql, $DB_CONNECT);?>
			<? $r_cnt = 0;?>
			<? while($LR = db_fetch_array($LRCDDAT)):?>
				<? $r_cnt++;?>
				<? $bbshref = "bbs.php?id=$id&q=view&uid=".$LR[uid];?>
				<li><a href="<?=$bbshref?>"><?=getStrCut($LR[subject],39,'..')?></a></li>
			<? endwhile;?>
			<? for($i=0; $i < 4 - $r_cnt; $i++):?>
				<li>&nbsp;</li>
			<? endfor;?>

			<? if( ! db_num_rows($LRCDDAT)):?>
				<li>등록된 게시물이 없습니다.</li>
			<?endif?>
			</ul>
			<!-- JOB END -->

			<!-- ESTATE BEGIN -->
			<ul class="jobs-list" id="list_jobs1" style="display:none;">
			<?php $id = "estate_trend"; ?>
			<? $sql = "select uid, subject, d_regis from kimson_bd_$id order by uid desc limit 0, 4";?>
			<? $LRCDDAT = db_query($sql, $DB_CONNECT);?>
			<? $r_cnt = 0;?>
			<? while($LR = db_fetch_array($LRCDDAT)):?>
				<?$r_cnt++;?>
				<?$bbshref = "bbs.php?id=$id&q=view&uid=".$LR[uid];?>
				<li><a href="<?=$bbshref?>"><?=getStrCut($LR[subject],39,'..')?></a></li>
			<? endwhile;?>
			<? for($i=0; $i < 4 - $r_cnt; $i++):?>
				<li>&nbsp;</li>
			<? endfor;?>

			<? if( ! db_num_rows($LRCDDAT)):?>
				<li>등록된 게시물이 없습니다.</li>
			<? endif?>
			</ul>
			<!-- ESTATE END -->
		</div>

		<!-- POLL BEGIN -->
		<div class="survey">
		<?php
			$sql = "select * from kimson_bd_comm_vote /*kimson_bd_index_survey*/ where fst_yn = 'Y' /*and '$date[today]' between etc1 and etc2*/ order by uid desc limit 0, 1";
			$MR = db_fetch_array(db_query($sql, $DB_CONNECT));
		?>
			<?if($MR[uid]):?>
			<div class="survey-top">
				<span><img src="<?=$path[dspath]?>/images/img_itteam.jpg" alt="hojunara it team" /></span>
				<span class="txts">
					<!--<span class="txt1"><img src="<?=$path[dspath]?>/images/tit/tit_itteam.jpg" alt="Up and Down" /></span>-->
					<span class="txt2"><strong><!--<?=$MR[subject]?>-->호주나라 리뉴얼된 사이트 어떻게 생각하시나요?</strong></span>
				</span>
			</div>
			<div class="survey-bottom">
				<span>
					<!--<input type="radio" name="decision" id="decision0"><label for="decision0">안철수</label>
					<input type="radio" name="decision" id="decision1"><label for="decision1">문재인</label>
					<input type="radio" name="decision" id="decision0" value="good"/>-->
					<label for="sradio1"><img src="<?=$path[dspath]?>/images/btn/btn_survey_down.png" alt="" /></label>
					<input type="radio" name="decision" id="decision0" value="good"/>
					<label for="sradio2"><img src="<?=$path[dspath]?>/images/btn/btn_survey_up.png" alt="" /></label>
					<input type="radio" name="decision" id="decision1" value="bad"/>
				</span>
				<a href="javascript: alert('준비중 입니다.');"><img src="<?=$path[dspath]?>/images/btn/btn_vote.jpg" alt="투표 " /></a>
				<a href="javascript: alert('준비중 입니다.');"><img src="<?=$path[dspath]?>/images/btn/btn_result.jpg" alt="결과보기" /></a>
				<!--<a href="#;" onclick="fPoll('<?=$MR[uid]?>');"><img src="<?=$path[dspath]?>/images/btn/btn_vote.jpg" alt="투표 " /></a>
				<a href="bbs.php?id=index_survey&q=view&uid=<?=$MR[uid]?>" target="_new"><img src="<?=$path[dspath]?>/images/btn/btn_result.jpg" alt="결과보기" /></a>-->
			</div>
			<?else:?>
			<div class="survey-top">
				<span class="txts">
					<span class="txt2">진행중인 설문이 없습니다.</span>
				</span>
			</div>
			<?endif?>
		</div>
		<!-- POLL END -->

		<div class="mbanner1">
			<span>
				<a href="http://aus-sydney.mofat.go.kr/korean/as/aus-sydney/main/index.jsp" target="_blank"><img src="<?=$path[dspath]?>/images/tit/tit_consulate.jpg" alt="대한민국 총영사관" /></a>
			</span>
			<ul>
				<li class="t1"><a href="http://myrta.com/odkt/servlet/ODktDemoServlet?actionname=startdemo" target="_blank"><img src="<?=$path[dspath]?>/images/icon/icon_banner1.jpg" alt="RTA TEST" /></a></li>
				<li class="t2"><a href="http://www.centrelink.gov.au/" target="_blank"><img src="<?=$path[dspath]?>/images/icon/icon_banner2.jpg" alt="Centre link" /></a></li>
				<li class="t3"><a href="http://www.citizenship.gov.au/learn/cit_test/practice/" target="_blank"><img src="<?=$path[dspath]?>/images/icon/icon_banner3.jpg" alt="시민권 테스트" /></a></li>
				<li class="t1"><a href="http://www.sydneybuses.info/" target="_blank"><img src="<?=$path[dspath]?>/images/icon/icon_banner4.jpg" alt="Sydney Bus" /></a></li>
				<li class="t2"><a href="http://www.cityrail.info/" target="_blank"><img src="<?=$path[dspath]?>/images/icon/icon_banner5.jpg" alt="City Rail" /></a></li>
				<li class="t3"><a href="http://www.sydneyferries.info/" target="_blank"><img src="<?=$path[dspath]?>/images/icon/icon_banner6.jpg" alt="Sydney Ferries" /></a></li>
			</ul>
		</div>
	</div>
	
	<div class="main-center">
		<div class="main-news">
			<div class="news-tabs">
				<a href="#;" id="news0" class="first on">핫뉴스</a>
				<a href="#;" id="news1">시사</a>
				<a href="#;" id="news2">스포츠/연예</a>
				<a href="#;" id="news3">국제</a>
				<a href="#;" id="news4">전문가컬럼</a>
			</div>
			<!-- HOT_NEWS BEGIN -->
			<?php $category = ""; $idx=0; ?>
			<?php
				/*$imgNewsUids = array();
				$LISTIMG = getHotNewsList($category, 1);
				while($R = db_fetch_array($LISTIMG)) {
					$imgNewsUids[] = $R[uid];
				}*/
			?>
			<div id="list_news0" class="news-listdiv">
				<ul class="news-list top-news">
				<?$ii=0;?>
				<?$LIST = getHotNewsList($category, 10);?>
				<?while($R = db_fetch_array($LIST)):?>
					<li class="ddd410">
						<?=$idx==0?"<strong>":""?><a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat="><?=$R[subject]?></a><?=$idx==0?"</strong>":""?>
					</li>
					<?php $idx++; ?>
					<?$ii++;?>
					<?php if($ii==3) break; ?>
				<?endwhile?>
				</ul>
				<div class="news-bottom">
					<span class="news-img">
					<?while($R = db_fetch_array($LIST)):?>
						<?$pic = getFirstNewsPhoto($R[photo], true);?>
						<img src="<?=$pic?>" width="105" height="80" alt="" />
						<span><a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat=" title="<?=$R[subject]?>"><?=getStrCut($R[subject],40,'..')?></a></span>
						<?$ii++;?>
						<?php if($ii==4) break; ?>
					<?endwhile?>
					</span>
					<ul class="news-list">
					<?$LIST = getHotNewsList($category, 6, 6, $imgNewsUids);?>
					<?while($R = db_fetch_array($LIST)):?>
						<li class="ddd280 type1"><?=$idx==3?"<strong>":""?><a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat=" title="<?=$R[subject]?>"><?=$R[subject]?></a><?=$idx==3?"</strong>":""?></li>
						<?php $idx++; ?>
					<?endwhile?>
					</ul>
				</div>
			</div>
			<!-- HOT_NEWS END -->
			<!-- SISA BEGIN -->
			<?php $category = "01"; ?>
			<?php
				$imgNewsUids = array();
				$LISTIMG = getLastedPhotoNewsList($category, 1);
				while($R = db_fetch_array($LISTIMG)) {
				$imgNewsUids[] = $R[uid];
			}
			?>
			<div id="list_news1" class="news-listdiv" style="display: none;">
				<ul class="news-list top-news">
				<?$LIST = getLastedNewsList($category, 3, 0, $imgNewsUids);?>
				<?while($R = db_fetch_array($LIST)):?>
					<li class="ddd410">
						<a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat="><?=$R[subject]?></a>
					</li>
				<?endwhile?>
				</ul>
				<div class="news-bottom">
					<span class="news-img">
                              <?$LIST = getLastedPhotoNewsList($category, 1, null, $imgNewsUids);?>
                              <?while($R = db_fetch_array($LIST)):?>
                              <?$pic = getFirstNewsPhoto($R[photo], true);?>
								<img src="<?=$pic?>" width="105" height="80" alt="" />
								<span><a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat=" title="<?=$R[subject]?>"><?=getStrCut($R[subject],40,'..')?></a></span>
                              <?endwhile?>
							</span>
							<ul class="news-list">
                              <?$LIST = getLastedNewsList($category, 6, 6, $imgNewsUids);?>
                              <?while($R = db_fetch_array($LIST)):?>
								<li class="ddd280 type1"><a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat=" title="<?=$R[subject]?>"><?=$R[subject]?></a></li>
                              <?endwhile?>
							</ul>
						</div>
					</div>
                    <!-- SISA END -->
                    <!-- SPORTS BEGIN -->
                    <?php $category = "02"; ?>
                    <?php
                    $imgNewsUids = array();
                    $LISTIMG = getLastedPhotoNewsList($category, 1);
                    while($R = db_fetch_array($LISTIMG)) {
                        $imgNewsUids[] = $R[uid];
                    }
                    ?>
                    <div id="list_news2" class="news-listdiv" style="display: none;">
						<ul class="news-list top-news">
                          <?$LIST = getLastedNewsList($category, 3, 0, $imgNewsUids);?>
                          <?while($R = db_fetch_array($LIST)):?>
                            <li class="ddd410">
								<a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat="><?=$R[subject]?></a>
                            </li>
                            <?endwhile?>
						</ul>
						<div class="news-bottom">
							<span class="news-img">
                              <?$LIST = getLastedPhotoNewsList($category, 1, null, $imgNewsUids);?>
                              <?while($R = db_fetch_array($LIST)):?>
                              <?$pic = getFirstNewsPhoto($R[photo], true);?>
								<img src="<?=$pic?>" width="105" height="80" alt="" />
								<span><a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat=" title="<?=$R[subject]?>"><?=getStrCut($R[subject],40,'..')?></a></span>
                              <?endwhile?>
							</span>
							<ul class="news-list">
                              <?$LIST = getLastedNewsList($category, 6, 6, $imgNewsUids);?>
                              <?while($R = db_fetch_array($LIST)):?>
								<li class="ddd280 type1"><a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat=" title="<?=$R[subject]?>"><?=$R[subject]?></a></li>
                              <?endwhile?>
							</ul>
						</div>
					</div>
                    <!-- SPORTS END -->
                    <!-- INTERNATIONAL BEGIN -->
                    <?php $category = "03"; ?>
                    <?php
                    $imgNewsUids = array();
                    $LISTIMG = getLastedPhotoNewsList($category, 1);
                    while($R = db_fetch_array($LISTIMG)) {
                        $imgNewsUids[] = $R[uid];
                    }
                    ?>
                    <div id="list_news3" class="news-listdiv" style="display: none;">
						<ul class="news-list top-news">
                          <?$LIST = getLastedNewsList($category, 3, 0, $imgNewsUids);?>
                          <?while($R = db_fetch_array($LIST)):?>
                            <li class="ddd410">
								<a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat="><?=$R[subject]?></a>
                            </li>
                            <?endwhile?>
						</ul>
						<div class="news-bottom">
							<span class="news-img">
                              <?$LIST = getLastedPhotoNewsList($category, 1, null, $imgNewsUids);?>
                              <?while($R = db_fetch_array($LIST)):?>
                              <?$pic = getFirstNewsPhoto($R[photo], true);?>
								<img src="<?=$pic?>" width="105" height="80" alt="" />
								<span><a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat=" title="<?=$R[subject]?>"><?=getStrCut($R[subject],40,'..')?></a></span>
                              <?endwhile?>
							</span>
							<ul class="news-list">
                              <?$LIST = getLastedNewsList($category, 6, 6, $imgNewsUids);?>
                              <?while($R = db_fetch_array($LIST)):?>
								<li class="ddd280 type1"><a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat=" title="<?=$R[subject]?>"><?=$R[subject]?></a></li>
                              <?endwhile?>
							</ul>
						</div>
					</div>
                    <!-- INTERNATIONAL END -->
                    <!-- EXPERT BEGIN -->
                    <?php $category = "04"; ?>
                    <?php
                    $imgNewsUids = array();
                    $LISTIMG = getLastedPhotoNewsList($category, 1);
                    while($R = db_fetch_array($LISTIMG)) {
                        $imgNewsUids[] = $R[uid];
                    }
                    ?>
                    <div id="list_news4" class="news-listdiv" style="display: none;">
						<ul class="news-list top-news">
                          <?$LIST = getLastedNewsList($category, 3, 0, $imgNewsUids);?>
                          <?while($R = db_fetch_array($LIST)):?>
                          <li class="ddd410">
								<a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat="><?=$R[subject]?></a>
                          </li>
                          <?endwhile?>
						</ul>
						<div class="news-bottom">
							<span class="news-img">
                              <?$LIST = getLastedPhotoNewsList($category, 1, null, $imgNewsUids);?>
                              <?while($R = db_fetch_array($LIST)):?>
                              <?$pic = getFirstNewsPhoto($R[photo], true);?>
								<img src="<?=$pic?>" width="105" height="80" alt="" />
								<span><a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat=" title="<?=$R[subject]?>"><?=getStrCut($R[subject],40,'..')?></a></span>
                              <?endwhile?>
							</span>
							<ul class="news-list">
                              <?$LIST = getLastedNewsList($category, 6, 6, $imgNewsUids);?>
                              <?while($R = db_fetch_array($LIST)):?>
								<li class="ddd280 type1"><a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat=" title="<?=$R[subject]?>"><?=$R[subject]?></a></li>
                              <?endwhile?>
							</ul>
						</div>
					</div>
                    <!-- EXPERT END -->
					</div>
					<div class="main-news hotissue">
						<div class="hotissue-top">
							<span><img src="<?=$path[dspath]?>/images/tit/tit_hot_issue.jpg" alt="핫이슈" /></span>
							<span class="line">&nbsp;</span>
							<div class="links">
								<a href="#" id="hotissue0" class="on" >릴레이인터뷰</a>
								<a href="#" id="hotissue1">문화공간</a>
								<a href="#" id="hotissue2" class="last" >업소탐방</a>
							</div>
						</div>
                        <!-- RELAY BEGIN -->
                        <?php $category = "01_09"; $idx=0; ?>
						<div class="news-bottom hotissue-list" id="list_hotissue0">
							<span class="news-img">
                              <?$imgNewsUids = array();?>
                              <?$LIST = getLastedPhotoNewsList($category, 1, null, null, false);?>
                              <?while($R = db_fetch_array($LIST)):?>
                              <?$pic = getFirstNewsPhoto($R[photo], true);?>
                              <?$imgNewsUids[] = $R[uid];?>
								<img src="<?=$pic?>" width="103" height="78" alt="" />
								<span><a href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat="><?=getStrCutAll($R[subject],40,'..')?></a></span>
                              <?endwhile?>
							</span>
							<ul class="news-list">
                              <?$LIST = getLastedNewsList($category, 6, 0, $imgNewsUids, null, false);?>
                              <?while($R = db_fetch_array($LIST)):?>
								<li><?=$idx==0?"<strong>":""?><a class="ddd280 type1" href="bbs.php?id=news_artc&q=view&uid=<?=$R[uid]?>&ncat="><?=getStrCutAll($R[subject],50,'..')?></a><?=$idx==0?"</strong>":""?></li>
                              <?php $idx++; ?>
                              <?endwhile?>
							</ul>
						</div>
                        <!-- RELAY END -->
                        <!-- CULTURE BEGIN -->
						<div class="news-bottom hotissue-list" id="list_hotissue1" style="display:none;">
							<span class="news-img">
<?php
$WHEREIS = " WHERE board LIKE 'comm_c%' and subject!='' ";
$MBRQUE	= "SELECT * FROM ".$table[boarddata]." ".$WHEREIS." ORDER BY hit desc LIMIT 7";
?>
					<?$cnt==0;?>
					<?$RBROWS	= db_query($MBRQUE , $DB_CONNECT);?>
					<?php while ($RBDATA = db_fetch_array($RBROWS)) : ?>
						<?php //$ROWS = getArticleData($RBDATA[board], $DB_CONNECT, 1); ?>
						<?$ROWS=db_query("select * from kimson_bd_".$RBDATA[board]." where uid='".$RBDATA[parent]."'",$DB_CONNECT);?>
						<?php while ($R = db_fetch_array($ROWS)) : ?>
							<?php $bbshref = "bbs.php?id=".$RBDATA[board]."&q=view&uid=".$R[uid];?>
							<?
							$category = "community";
							$pic=getArticleImage($R[file1], true, $category, true);
							?>
								<img src="<?=$pic?>" width="103" height="78" alt="" />
								<span><a href="<?=$bbshref?>"><?=getStrCutAll($R[subject],40,'..')?></a></span>
						<?endwhile?>
						<?if($cnt==0) break;?>
					<?endwhile;?>
							</span>
							<ul class="news-list">
					<?php while ($RBDATA = db_fetch_array($RBROWS)) : ?>
						<?$ROWS=db_query("select * from kimson_bd_".$RBDATA[board]." where uid='".$RBDATA[parent]."'",$DB_CONNECT);?>
						<?php while ($R = db_fetch_array($ROWS)) : ?>
							<?php $bbshref = "bbs.php?id=".$RBDATA[board]."&q=view&uid=".$R[uid];?>
								<li><a class="ddd280 type1" href="<?=$bbshref?>"><?=getStrCut($R[subject],40,'..')?></a></li>
						<?endwhile?>
					<?endwhile;?>
							</ul>
						</div>
                        <!-- CULTURE END -->
                        <!-- BUSINESS BEGIN -->
						<div class="news-bottom hotissue-list" id="list_hotissue2" style="display:none;">
							<span class="news-img">
                              <?php $id = "store_c_report"; ?>
                              <?php $ROWS = getArticleData($id, $DB_CONNECT, 1); ?>
                              <?php while ($R = db_fetch_array($ROWS)) : ?>
                                <?php $bbshref = "bbs.php?id=$id&q=view&uid=".$R[uid];?>
								<?
								$category = "store";
								$pic=getArticleImage($R[file1], true, $category, true);
								?>
								<img src="<?=$pic?>" width="103" height="78" alt="" />
								<span><a href="<?=$bbshref?>"><?=getStrCut($R[subject],40,'..')?></a></span>
                              <?endwhile?>
							</span>
							<ul class="news-list">
                              <?php $id = "store_c_report"; ?>
                              <?php $ROWS = getArticleData($id, $DB_CONNECT, 6, 1); ?>
                              <?php while ($R = db_fetch_array($ROWS)) : ?>
                                <?php $bbshref = "bbs.php?id=$id&q=view&uid=".$R[uid];?>
								<li><a class="ddd280 type1" href="<?=$bbshref?>"><?=$R[subject]?></a></li>
                              <?endwhile?>
							</ul>
						</div>
                        <!-- BUSINESS END -->
					</div>
						<div class="news-bottom hotissue-list" id="list_hotissue2" style="display:none;">
							<span class="news-img">
							</span>
							<ul class="news-list">
                              <?php $id = "living_qna"; ?>
                              <?php $ROWS = getArticleData($id, $DB_CONNECT, 6, 1); ?>
                              <?php while ($R = db_fetch_array($ROWS)) : ?>
                                <?php $bbshref = "bbs.php?id=$id&q=view&uid=".$R[uid];?>
								<li><a class="ddd280 type1" href="<?=$bbshref?>"><?=$R[subject]?></a></li>
                              <?endwhile?>
							</ul>
						</div>
					<!-- LOCAL BEGIN -->
				<div class="main-news type1">
						<div class="region-top">
							<span><img src="<?=$path[dspath]?>/images/tit/tit_story.jpg" alt="우리들의 이야기" /></span>
							<span class="line type1">&nbsp;</span>
							<span class="nav type1">
								<a href="javascript:cf_listControlForPage('story', 3, '-', 'story_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_relatedprod_prev.jpg" alt="&lt;" /></a>
								<span>&nbsp;|&nbsp;</span>
								<a href="javascript:cf_listControlForPage('story', 3, '+', 'story_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_relatedprod_next.jpg" alt="&gt;" /></a>
							</span>
						</div>
                        <!-- STORY BEGIN -->
                        <?php $id = "store_c_local"; $idx=0; ?>
						<? foreach(range(0, 2) as $page): ?>
						<ul class="news-list top-news" id="story_lst_<?=$page?>" style="display: <?=$page==0 ? "" : "none"?>;">
<?php
$WHEREIS = " WHERE (board LIKE 'comm_s%' or board='knowledge_qna') and subject!='' and board != 'comm_s_happy'";
$MBRQUE	= "SELECT * FROM ".$table[boarddata]." ".$WHEREIS." ORDER BY uid desc LIMIT ".($page*7).", 8";
?>
								<?$RBROWS	= db_query($MBRQUE , $DB_CONNECT);?>
                              <?php //$ROWS = getArticleData($id, $DB_CONNECT, 6, $page*6); ?>
								<?php while ($RBDATA = db_fetch_array($RBROWS)) : ?>
									<?$ROWS=db_query("select * from kimson_bd_".$RBDATA[board]." where uid='".$RBDATA[parent]."'",$DB_CONNECT);?>
									<?php while ($R = db_fetch_array($ROWS)) : ?>
										<?php $bbshref = "bbs.php?id=".$RBDATA[board]."&q=view&uid=".$R[uid];?>
							<li><?=$idx==0?"<strong>":""?><a href="<?=$bbshref?>"><?=getStrCut($R[subject],48,'..')?><span><?=$BOARD_NAME[$RBDATA[board]]?></span></a><?=$idx==0?"</strong>":""?></li>
									<?endwhile?>
									<?php $idx++; ?>
								<?endwhile;?>
						</ul>
						<? endforeach; ?>
                        <input type="hidden" id="story_idx" name="story_idx" value="0">
                        <!-- LOCAL END -->
					</div>
					<div class=""><? showBanner('M07', 'section', false, 0, 0, 4); ?></div>
                        <div class="region-info">
						<div class="region-top">
							<span><img src="<?=$path[dspath]?>/images/tit/tit_regional_info.jpg" alt="사진으로 보는 지역정보" /></span>
							<span class="line">&nbsp;</span>
							<span class="nav">
								<a href="javascript:cf_listControlForPage('local', 3, '-', 'local_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_relatedprod_prev.jpg" alt="&lt;" /></a>
								<span>&nbsp;|&nbsp;</span>
								<a href="javascript:cf_listControlForPage('local', 3, '+', 'local_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_relatedprod_next.jpg" alt="&gt;" /></a>
							</span>
						</div>
                        <?php $id = "store_c_local"; ?>
						<? foreach(range(0, 2) as $page): ?>
						<ul class="region-list" id="local_lst_<?=$page?>" style="display: <?=$page==0 ? "" : "none"?>;">
                              <?php $ROWS = getArticleData($id, $DB_CONNECT, 3, $page*3); ?>
                              <?php while ($R = db_fetch_array($ROWS)) : ?>
                                <?php $bbshref = "bbs.php?id=$id&q=view&uid=".$R[uid];?>
                                <?php //$pic = getArticlePic($R, $id, $path[dspath]."/images/img_noimage.jpg"); ?>
								<?
								$category = "store";
								$pic=getArticleImage($R[file1], true, $category, true);
								?>
							<li>
								<span><img src="<?=$pic?>" width="120" height="78" alt="" /></span>
								<a href="<?=$bbshref?>">[<?=getStateName($R[refresh])?>] <?=getStrCut($R[subject],40,'..')?></a>
							</li>
                              <?endwhile?>
						</ul>
						<? endforeach; ?>
                        <input type="hidden" id="local_idx" name="local_idx" value="0">
                        <!-- STORY END -->
					</div>
				</div>
				<div class="main-right">
					<div class="ranking">
						<span class="ranking-top">
							<strong>업소록 랭킹</strong>
							<a href="#"><img src="<?=$path[dspath]?>/images/btn/btn_main_<?=strtolower($myState);?>.png" alt="<?=strtolower($myState);?>" onclick="lf_ypControl('yp', 8, 'yp_idx', this);"/></a>
						</span>
                            <!-- STORE BEGIN -->
						<span class="ranking-icon">
							<?php $dImg = $path[dspath]."/images/btn/btn_private_property2.jpg"; ?>
							<div id="ypimg1" name="ypimg1" width="110" height="53" style="margin-top: 15px; display: none;" ><? $a = showBanner('M41-1', 'section', false, 0, 0, 4); ?><span class="first"  >1</span><span class="first_text"><?=$a['ad_title']?></span></div>
							<div id="ypimg2" name="ypimg2" width="110" height="53" style="margin-top: 15px; display: none;" ><? $a = showBanner('M41-2', 'section', false, 0, 0, 4); ?><span class="first" >1</span><span class="first_text"><?=$a['ad_title']?></span></div>
							<div id="ypimg3" name="ypimg3" width="110" height="53" style="margin-top: 15px; display: none;" ><? $a = showBanner('M41-3', 'section', false, 0, 0, 4); ?><span class="first" >1</span><span class="first_text"><?=$a['ad_title']?></span></div>
							<div id="ypimg4" name="ypimg4" width="110" height="53" style="margin-top: 15px; display: none;" ><? $a = showBanner('M41-4', 'section', false, 0, 0, 4); ?><span class="first" >1</span><span class="first_text"><?=$a['ad_title']?></span></div>
							<div id="ypimg5" name="ypimg5" width="110" height="53" style="margin-top: 15px; display: none;" ><? $a = showBanner('M41-5', 'section', false, 0, 0, 4); ?><span class="first" >1</span><span class="first_text"><?=$a['ad_title']?></span></div>
							<div id="ypimg6" name="ypimg6" width="110" height="53" style="margin-top: 15px; display: none;" ><? $a = showBanner('M41-6', 'section', false, 0, 0, 4); ?><span class="first" >1</span><span class="first_text"><?=$a['ad_title']?></span></div>
							<div id="ypimg7" name="ypimg7" width="110" height="53" style="margin-top: 15px; display: none;" ><? $a = showBanner('M41-7', 'section', false, 0, 0, 4); ?><span class="first" >1</span><span class="first_text"><?=$a['ad_title']?></span></div>
							<div id="ypimg8" name="ypimg8" width="110" height="53" style="margin-top: 15px; display: none;" ><? $a = showBanner('M41-8', 'section', false, 0, 0, 4); ?><span class="first" >1</span><span class="first_text"><?=$a['ad_title']?></span></div>
						</span>
						<?php
						$ii = 0;
						$cIdx = 0;
						foreach ($code_state as $key => $val) {
							$ii++;
						?>
							<ul class="ranking-list" id="yp_lst_<?=$ii?>" style="display: <?=($myStateCd==array_search($val, $code_state)) ? "" : "none"?>; margin-top: 7px">
							<?php $id = "store_premium"; $iidx = 1; ?>
							<?php
							if ($key == 'local_cat_info_02') {
								$sql = "
									SELECT 
										* 
									FROM 
										kimson_bd_" . $id . "  
									WHERE 
											store_state_cd = '$key' 
										AND i_rec = 'Y' 
										AND biz_premium = 2 
									ORDER BY hit DESC 
									LIMIT 0, 5 
								";
							} else {
								$sql = "
									SELECT 
										* 
									FROM 
										kimson_bd_" . $id . "  
									WHERE 
										store_state_cd = '$key' 
									ORDER BY hit DESC 
									LIMIT 0, 5 
								";
							}
							$ROWS = db_query($sql, $DB_CONNECT);

							while ($R = db_fetch_array($ROWS)) {
								$bbshref = "bbs.php?id=$id&q=view&uid=".$R['uid'];
							?>
								<li>
									<span class="no"><?=$iidx + 1?></span>
									<a href="<?=$bbshref?>"><?=($my[id]=='admin')?$val:"";?><?=getStrCut($R[subject],12,'..')?></a>
									<?php if ($iidx != 0): ?><span class="rl-right up"><?=$R[hit]?></span><?php endif; ?>
								</li>
								<?php $MA = getSellerInfo($R[id]); ?>
								<?if($iidx==0):?><script>document.getElementById('ypimg<?=$ii?>').src="<?=$MA[logo]?>";</script><?endif;?>
								<?$iidx++;?>
						<?
							}
							$cIdx = ($myStateCd==array_search($val, $code_state)) ? $ii : $cIdx;
						?>
						</ul>
						<?
						}
						?>
						<input type="hidden" id="yp_idx" name="yp_idx" value="<?=$cIdx?>">
						<script>gf_show("ypimg<?=$cIdx?>");</script>
						<!-- STORE END -->
					</div>
					<div class="trade">
						<span class="trade-top">
							<strong>업소록</strong>
							<?if(!$my[id]):?><a href="regis.php?q=step1&comp=1&sq=p">무료등록</a><?endif;?>
						</span>
						<ul class="trade-list">
							<li><a href="javascript:goStore('픽업');"><span class="bgl">&nbsp;</span><b><span>픽업</span></b><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('이사');"><span class="bgl">&nbsp;</span><b><span>이사</span></b><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('송금');"><span class="bgl">&nbsp;</span><b><span>송금</span></b><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('유학');"><span class="bgl">&nbsp;</span><b><span>유학</span></b><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('민박');"><span class="bgl">&nbsp;</span><b><span>민박</span></b><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('회계');"><span class="bgl">&nbsp;</span><b><span>회계</span></b><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('이민');"><span class="bgl">&nbsp;</span><b><span>이민</span></b><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('변호사');"><span class="bgl">&nbsp;</span><span>변호사</span><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('미용실');"><span class="bgl">&nbsp;</span><span>미용실</span><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('음식점');"><span class="bgl">&nbsp;</span><span>음식점</span><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('여행');"><span class="bgl">&nbsp;</span><span>여행</span><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('금융');"><span class="bgl">&nbsp;</span><span>금융</span><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('보험');"><span class="bgl">&nbsp;</span><span>보험</span><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('컴퓨터');"><span class="bgl">&nbsp;</span><span>컴퓨터</span><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('병원');"><span class="bgl">&nbsp;</span><span>병원</span><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('핸드폰');"><span class="bgl">&nbsp;</span><span>핸드폰</span><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('정비소');"><span class="bgl">&nbsp;</span><span>정비소</span><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('부동산');"><span class="bgl">&nbsp;</span><span>부동산</span><span class="bgr">&nbsp;</span></a></li>
							<li><a href="javascript:goStore('기타');"><span class="bgl">&nbsp;</span><span>기타</span><span class="bgr">&nbsp;</span></a></li>
						</ul>
					</div>
					<div class="ad3">
					<? showBanner('M02-01', 'section', false, 0, 0, 4); ?>
					<? showBanner('M02-02', 'section', false, 0, 0, 4); ?>
					<? showBanner('M02-03', 'section', false, 0, 0, 4); ?>
					<script language=javascript>
					jQuery(document).ready(function(){
						jQuery("#M0201section").hide();
						jQuery("#M0202section").hide();
						jQuery("#M0203section").hide();
						//jQuery("#M020<?=rand(1, 3)?>section").show();
						jQuery("#<?=getRandomId(array('M02-01','M02-02','M02-03'),'section')?>").show();
						//$authCode = rand(1, 3);
					});
					</script>
					</div>
					<div class="ranking type1">
						<!-- 11'ST -->
						<iframe name='11Frame' id='11Frame' width='298' height='248' frameborder='0' scrolling='no' src="http://www.11st.co.kr/connect/Gateway.tmall?method=Xsite&tid=1000815391&lpUrl=http://i.011st.com/ui_img/cm_display/2012/10/global/1005_hoju/hoju_ifm.html"></iframe>
						<!--<span class="ranking-top">
							<strong class="star">호주 <span>11번가</span> 쇼핑</strong>
						</span>
						<ul class="merchandise-list">
							<li>
								<a href="#" class="img"><img src="<?=$path[dspath]?>/images/img_shop1.jpg" alt="" /></a>
								<a href="#" class="txt">Horse tee</a>
							</li>
							<li>
								<a href="#" class="img"><img src="<?=$path[dspath]?>/images/img_shop2.jpg" alt="" /></a>
								<a href="#" class="txt">Horse tee</a>
							</li>
							<li>
								<a href="#" class="img"><img src="<?=$path[dspath]?>/images/img_shop3.jpg" alt="" /></a>
								<a href="#" class="txt">Horse tee</a>
							</li>
							<li>
								<a href="#" class="img"><img src="<?=$path[dspath]?>/images/img_shop4.jpg" alt="" /></a>
								<a href="#" class="txt">Horse tee</a>
							</li>
							<li>
								<a href="#" class="img"><img src="<?=$path[dspath]?>/images/img_shop5.jpg" alt="" /></a>
								<a href="#" class="txt">Horse tee</a>
							</li>
							<li>
								<a href="#" class="img"><img src="<?=$path[dspath]?>/images/img_shop1.jpg" alt="" /></a>
								<a href="#" class="txt">Horse tee</a>
							</li>
							<li>
								<a href="#" class="img"><img src="<?=$path[dspath]?>/images/img_shop2.jpg" alt="" /></a>
								<a href="#" class="txt">Horse tee</a>
							</li>
							<li>
								<a href="#" class="img"><img src="<?=$path[dspath]?>/images/img_shop3.jpg" alt="" /></a>
								<a href="#" class="txt">Horse tee</a>
							</li>
							<li>
								<a href="#" class="img"><img src="<?=$path[dspath]?>/images/img_shop4.jpg" alt="" /></a>
								<a href="#" class="txt">Horse tee</a>
							</li>
							<li>
								<a href="#" class="img"><img src="<?=$path[dspath]?>/images/img_shop5.jpg" alt="" /></a>
								<a href="#" class="txt">Horse tee</a>
							</li>
						</ul>-->
					</div>
					<div class="ad4"><? showBanner('M08', 'section', false, 0, 0, 4); ?></div>
				</div>
			</div>
			<div class="main-bottom">
				<span class="bgleft">&nbsp;</span>
				<div class="mb-content">
					<ul class="mb-menu">
						<li><a href="#;" class="on"><img src="<?=$path[dspath]?>/images/tit/tit_mbmenu5_on.png" alt="업소록" id="mp0" /></a></li>
						<li><a href="#;"><img src="<?=$path[dspath]?>/images/tit/tit_mbmenu2_off.png" alt="부동산" id="mp1" /></a></li>
						<li><a href="#;"><img src="<?=$path[dspath]?>/images/tit/tit_mbmenu3_off.png" alt="생활용품" id="mp2" /></a></li>
						<li><a href="#;"><img src="<?=$path[dspath]?>/images/tit/tit_mbmenu4_off.png" alt="자동차" id="mp3" /></a></li>
						<li><a href="#;"><img src="<?=$path[dspath]?>/images/tit/tit_mbmenu1_off.png" alt="구인/구직" id="mp4" /></a></li>

					</ul>
					<!-- WORK BEGIN -->
					<div class="mb-marketplace" id="list_mp4" style="display: none;">
						<div class="mbmarket-top">
							<span class="mbmarket-tit"><img src="<?=$path[dspath]?>/images/tit/tit_mbt.jpg" alt="호주나라 마켓 플레이스 프리미엄"/></span>
							<div class="mbmarket-nav">
								<div>
									<a href="javascript:cf_listControlForPage('mpwork', 4, '0', 'mpwork_idx');" class="on"><img src="<?=$path[dspath]?>/images/btn/btn_mb_on.jpg" alt="" /></a>
									<a href="javascript:cf_listControlForPage('mpwork', 4, '1', 'mpwork_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_mb_off.jpg" alt="" /></a>
									<a href="javascript:cf_listControlForPage('mpwork', 4, '2', 'mpwork_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_mb_off.jpg" alt="" /></a>
									<a href="javascript:cf_listControlForPage('mpwork', 4, '3', 'mpwork_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_mb_off.jpg" alt="" /></a>
								</div>
								<span class="btns">
									<a href="javascript:cf_listControlForPage('mpwork', 4, '-', 'mpwork_idx');" class="prev"><img src="<?=$path[dspath]?>/images/btn/btn_relatedprod_prev.jpg" alt="&lt;"/></a>
									<span>&nbsp;|&nbsp;</span>
									<a href="javascript:cf_listControlForPage('mpwork', 4, '+', 'mpwork_idx');" class="next"><img src="<?=$path[dspath]?>/images/btn/btn_relatedprod_next.jpg" alt="&gt;"/></a>
								</span>
							</div>
						</div>
                        <?php $id = "work_job_premium";?>
						<? foreach(range(0, 3) as $page): ?>
						<ul class="mbmarket-list" id="mpwork_lst_<?=$page?>" style="display: <?=$page==0 ? "" : "none"?>;">
                              <?php $ROWS = getArticleData($id, $DB_CONNECT, 6, $page*3, "uid"); ?>
                              <?php while ($R = db_fetch_array($ROWS)) : ?>
                                <?php $bbshref = "bbs.php?id=$id&q=view&uid=".$R[uid];?>
                                <?php //$pic = getArticlePic($R, $id, $path[dspath]."/images/img_noimage.jpg"); ?>
								<?php $MA = getSellerInfo($R[id]); ?>
							<li style="margin-bottom:10px;">
								<a href="<?=$bbshref?>" class="mb-img" height="134" style="">
									<img src="<?=$MA[logo]?>" width="200" height="30" alt="" style="border: 1px solid #BFBFBF;"/>
									<!--<span class="icn"><img src="<?=$path[dspath]?>/images/icon/icon_rent.png" alt="렌트" /></span>-->
								</a>
								<a href="<?=$bbshref?>" class="mb-name">[<?=getStateName($R[wj_o_state_cd])?>] <?=getStrCut($R[subject],20,'..')?></a>
								<span class="facility"><?=getStrCut($MA[name],20,'..')?>&nbsp;</span>
								<?php $wj_pay_type_array = explode(";",$R[wj_pay_type]); ?>
								<span class="facility">$<?=$wj_pay_type_array[1]?> / <?=$WJ_PAY_TYPE[$wj_pay_type_array[0]]?></span>
							</li>
                              <?endwhile?>
						</ul>
						<? endforeach; ?>
                        <input type="hidden" id="mpwork_idx" name="mpwork_idx" value="0">
					</div>
					<!-- WORK BEGIN -->
					<!-- PROPERTY BEGIN -->
					<div class="mb-marketplace" id="list_mp1" style="display: none;">
						<div class="mbmarket-top">
							<span class="mbmarket-tit"><img src="<?=$path[dspath]?>/images/tit/tit_mbt.jpg" alt="호주나라 마켓 플레이스 프리미엄"/></span>
							<div class="mbmarket-nav">
								<div>
									<a href="javascript:cf_listControlForPage('mpproperty', 4, '0', 'mpproperty_idx');" class="on"><img src="<?=$path[dspath]?>/images/btn/btn_mb_on.jpg" alt="" /></a>
									<a href="javascript:cf_listControlForPage('mpproperty', 4, '1', 'mpproperty_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_mb_off.jpg" alt="" /></a>
									<a href="javascript:cf_listControlForPage('mpproperty', 4, '2', 'mpproperty_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_mb_off.jpg" alt="" /></a>
									<a href="javascript:cf_listControlForPage('mpproperty', 4, '3', 'mpproperty_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_mb_off.jpg" alt="" /></a>
								</div>
								<span class="btns">
									<a href="javascript:cf_listControlForPage('mpproperty', 4, '-', 'mpproperty_idx');" class="prev"><img src="<?=$path[dspath]?>/images/btn/btn_relatedprod_prev.jpg" alt="&lt;"/></a>
									<span>&nbsp;|&nbsp;</span>
									<a href="javascript:cf_listControlForPage('mpproperty', 4, '+', 'mpproperty_idx');" class="next"><img src="<?=$path[dspath]?>/images/btn/btn_relatedprod_next.jpg" alt="&gt;"/></a>
								</span>
							</div>
						</div>
                        <?php $id = "estate_premium";?>
						<? foreach(range(0, 3) as $page): ?>
						<ul class="mbmarket-list" id="mpproperty_lst_<?=$page?>" style="display: <?=$page==0 ? "" : "none"?>;">
                              <?php $ROWS = getArticleData($id, $DB_CONNECT, 3, $page*3, "uid"); ?>
                              <?php while ($R = db_fetch_array($ROWS)) : ?>
                                <?php $bbshref = "bbs.php?id=$id&q=view&uid=".$R[uid];?>
                                <?php //$pic = getArticlePic($R, $id, $path[dspath]."/images/img_noimage.jpg"); ?>
								<?
								$category = "estate";
								$pic=getArticleImage($R[pt_file1], true, $category, true);
								?>
							<li>
								<a href="<?=$bbshref?>" class="mb-img">
									<img src="<?=$pic?>" width="200" height="134" alt="" style="border: 1px solid #BFBFBF;"/>
									<?php $flagIcon = array("hcat_02"=>"rent","hcat_01"=>"buy","hcat_03"=>"hasuk","hcat_04"=>"share");?>
									<span class="icn"><img src="<?=$path[dspath]?>/images/icon/icon_<?=$flagIcon[$R[pt_tp1]]?>.png" alt="렌트" /></span>
								</a>
								<a href="<?=$bbshref?>" class="mb-name">[<?=getStateName($R[pt_h_state_cd])?>] <?=getStrCut($R[subject],30,'..')?></a>
								<span class="facility">
									<span><?=$PT_TYPE2[$R[pt_tp1]][$R[pt_tp2]]?></span>
									<?php $pt_feature_array = explode(",",$R[pt_feature]); ?>
									<span class="bed"><?=$pt_feature_array[0]?></span>
									<span class="bath"><?=$pt_feature_array[1]?></span>
									<span class="transpo"><?=$pt_feature_array[2]?></span>
								</span>	
								<span class="facility">지역: <?=$code_city[$R[pt_h_city_cd]].' '.$code_state[$R[pt_h_state_cd]];?></span>
								<?php $pt_price_array = explode(",",$R[pt_price]); ?>
								<span class="facility">가격: $<?=number_format($pt_price_array[0])?> / <?=$PT_PRICE2[$pt_price_array[1]]?></span>
							</li>
                              <?endwhile?>
						</ul>
						<? endforeach; ?>
                        <input type="hidden" id="mpproperty_idx" name="mpproperty_idx" value="0">
					</div>
					<!-- PROPERTY BEGIN -->
					<!-- LIVING BEGIN -->
					<div class="mb-marketplace" id="list_mp2" style="display: none;">
						<div class="mbmarket-top">
							<span class="mbmarket-tit"><img src="<?=$path[dspath]?>/images/tit/tit_mbt.jpg" alt="호주나라 마켓 플레이스 프리미엄"/></span>
							<div class="mbmarket-nav">
								<div>
									<a href="javascript:cf_listControlForPage('mpliving', 4, '0', 'mpliving_idx');" class="on"><img src="<?=$path[dspath]?>/images/btn/btn_mb_on.jpg" alt="" /></a>
									<a href="javascript:cf_listControlForPage('mpliving', 4, '1', 'mpliving_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_mb_off.jpg" alt="" /></a>
									<a href="javascript:cf_listControlForPage('mpliving', 4, '2', 'mpliving_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_mb_off.jpg" alt="" /></a>
									<a href="javascript:cf_listControlForPage('mpliving', 4, '3', 'mpliving_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_mb_off.jpg" alt="" /></a>
								</div>
								<span class="btns">
									<a href="javascript:cf_listControlForPage('mpliving', 4, '-', 'mpliving_idx');" class="prev"><img src="<?=$path[dspath]?>/images/btn/btn_relatedprod_prev.jpg" alt="&lt;"/></a>
									<span>&nbsp;|&nbsp;</span>
									<a href="javascript:cf_listControlForPage('mpliving', 4, '+', 'mpliving_idx');" class="next"><img src="<?=$path[dspath]?>/images/btn/btn_relatedprod_next.jpg" alt="&gt;"/></a>
								</span>
							</div>
						</div>
                        <?php $id = "living_premium";?>
						<? foreach(range(0, 3) as $page): ?>
						<ul class="mbmarket-list" id="mpliving_lst_<?=$page?>" style="display: <?=$page==0 ? "" : "none"?>;">
                              <?php $ROWS = getArticleData($id, $DB_CONNECT, 3, $page*3, "uid"); ?>
                              <?php while ($R = db_fetch_array($ROWS)) : ?>
                                <?php $bbshref = "bbs.php?id=$id&q=view&uid=".$R[uid];?>
                                <?php //$pic = getArticlePic($R, $id, $path[dspath]."/images/img_noimage.jpg"); ?>
								<?
								$category = "living";
								$pic=getArticleImage($R[lv_file1], true, $category, true);
								?>
							<li>
								<a href="<?=$bbshref?>" class="mb-img">
									<img src="<?=$pic?>" width="200" height="134" alt="" style="border: 1px solid #BFBFBF;"/>
									<!--<span class="icn"><img src="<?=$path[dspath]?>/images/icon/icon_rent.png" alt="렌트" /></span>-->
								</a>
								<a href="<?=$bbshref?>" class="mb-name">[<?=getStateName($R[lv_g_state_cd])?>] <?=getStrCut($R[subject],30,'..')?></a>
								<span class="facility">물품명: <?=$R[lv_name]?></span>
								<span class="facility">등록자위치: <?=$code_state[$R[lv_g_state_cd]]?> <?=$code_city[$R[lv_g_city_cd]]?></span>
								<span class="facility">제품상태: <?=$LV_COND1[$R[lv_cond1]]?> <?=$R[lv_use_period] ? "/ ".$R[lv_use_period] : ""?></span>
							</li>
                              <?endwhile?>
						</ul>
						<? endforeach; ?>
                        <input type="hidden" id="mpliving_idx" name="mpliving_idx" value="0">
					</div>
					<!-- LIVING BEGIN -->
					<!-- CAR BEGIN -->
					<div class="mb-marketplace" id="list_mp3" style="display: none;">
						<div class="mbmarket-top">
							<span class="mbmarket-tit"><img src="<?=$path[dspath]?>/images/tit/tit_mbt.jpg" alt="호주나라 마켓 플레이스 프리미엄"/></span>
							<div class="mbmarket-nav">
								<div>
									<a href="javascript:cf_listControlForPage('mpcar', 4, '0', 'mpcar_idx');" class="on"><img src="<?=$path[dspath]?>/images/btn/btn_mb_on.jpg" alt="" /></a>
									<a href="javascript:cf_listControlForPage('mpcar', 4, '1', 'mpcar_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_mb_off.jpg" alt="" /></a>
									<a href="javascript:cf_listControlForPage('mpcar', 4, '2', 'mpcar_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_mb_off.jpg" alt="" /></a>
									<a href="javascript:cf_listControlForPage('mpcar', 4, '3', 'mpcar_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_mb_off.jpg" alt="" /></a>
								</div>
								<span class="btns">
									<a href="javascript:cf_listControlForPage('mpcar', 4, '-', 'mpcar_idx');" class="prev"><img src="<?=$path[dspath]?>/images/btn/btn_relatedprod_prev.jpg" alt="&lt;"/></a>
									<span>&nbsp;|&nbsp;</span>
									<a href="javascript:cf_listControlForPage('mpcar', 4, '+', 'mpcar_idx');" class="next"><img src="<?=$path[dspath]?>/images/btn/btn_relatedprod_next.jpg" alt="&gt;"/></a>
								</span>
							</div>
						</div>
                        <?php $id = "car_premium";?>
						<? foreach(range(0, 3) as $page): ?>
						<ul class="mbmarket-list" id="mpcar_lst_<?=$page?>" style="display: <?=$page==0 ? "" : "none"?>;">
                              <?php $ROWS = getArticleData($id, $DB_CONNECT, 3, $page*3, "uid"); ?>
                              <?php while ($R = db_fetch_array($ROWS)) : ?>
                                <?php $bbshref = "bbs.php?id=$id&q=view&uid=".$R[uid];?>
                                <?php //$pic = getArticlePic($R, $id, $path[dspath]."/images/img_noimage.jpg"); ?>
								<?
								$category = "car";
								$pic=getArticleImage($R[car_file1], true, $category, true);
								?>
							<li>
								<a href="<?=$bbshref?>" class="mb-img">
									<img src="<?=$pic?>" width="200" height="134" alt="" style="border: 1px solid #BFBFBF;"/>
									<!--<span class="icn"><img src="<?=$path[dspath]?>/images/icon/icon_rent.png" alt="렌트" /></span>-->
								</a>
								<a href="<?=$bbshref?>" class="mb-name">[<?=getStateName($R[car_c_state_cd])?>] <?=getStrCut($R[subject],30,'..')?></a>
								<span class="facility">차종: <?=$CODE_CAR_MAKER[$R[car_manuf]]?> > <?=$CODE_CAR_MODEL[$R[car_model]]?></span>
								<span class="facility">변속기어: <?=$CAR_TRANS[$R[car_trans]]?></span>
								<span class="facility">주행거리: <?=$R[car_cond1] == "NEW" ? "새차" : ""?> <?=$R[car_cond2] ? $R[car_cond2].'년' : ""?> / <?=$R[car_mileage]?> Km</span>
							</li>
                              <?endwhile?>
						</ul>
						<? endforeach; ?>
                        <input type="hidden" id="mpcar_idx" name="mpcar_idx" value="0">
					</div>
					<!-- CAR BEGIN -->
					<!-- STORE BEGIN -->
					<div class="mb-marketplace" id="list_mp0" style="">
						<div class="mbmarket-top">
							<span class="mbmarket-tit"><img src="<?=$path[dspath]?>/images/tit/tit_mbt.jpg" alt="호주나라 마켓 플레이스 프리미엄"/></span>
							<div class="mbmarket-nav">
								<div>
									<a href="javascript:cf_listControlForPage('mpstore', 4, '0', 'mpstore_idx');" class="on"><img src="<?=$path[dspath]?>/images/btn/btn_mb_on.jpg" alt="" /></a>
									<a href="javascript:cf_listControlForPage('mpstore', 4, '1', 'mpstore_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_mb_off.jpg" alt="" /></a>
									<a href="javascript:cf_listControlForPage('mpstore', 4, '2', 'mpstore_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_mb_off.jpg" alt="" /></a>
									<a href="javascript:cf_listControlForPage('mpstore', 4, '3', 'mpstore_idx');"><img src="<?=$path[dspath]?>/images/btn/btn_mb_off.jpg" alt="" /></a>
								</div>
								<span class="btns">
									<a href="javascript:cf_listControlForPage('mpstore', 4, '-', 'mpstore_idx');" class="prev"><img src="<?=$path[dspath]?>/images/btn/btn_relatedprod_prev.jpg" alt="&lt;"/></a>
									<span>&nbsp;|&nbsp;</span>
									<a href="javascript:cf_listControlForPage('mpstore', 4, '+', 'mpstore_idx');" class="next"><img src="<?=$path[dspath]?>/images/btn/btn_relatedprod_next.jpg" alt="&gt;"/></a>
								</span>
							</div>
						</div>
                        <?php $start = 9; $cpp=8;?>
						<? foreach(range(0, 3) as $page): ?>
						<ul class="mbmarket-list" id="mpstore_lst_<?=$page?>" style="display: <?=$page==0 ? "" : "none"?>;">
							<? foreach(range(0, 7) as $row): ?>
							<li style="width:150px; margin-right: 30px;display: inline-block;text-align: center;margin-bottom: 30px;">
								<? showBanner('M'.sprintf("%02d",($start+$row+$cpp*$page)), 'section', false, 0, 0, 3); ?>
							</li>
							<? endforeach; ?>
						</ul>
						<? endforeach; ?>
                        <input type="hidden" id="mpstore_idx" name="mpstore_idx" value="0">
					</div>
					<!-- STORE BEGIN -->
					<span class="bgbottom">&nbsp;</span>
				</div>
				<span class="bgright">&nbsp;</span>
			</div>
			<span class="disclaimer">
				<?php $id = "cust_notice"; ?>
				<?php $ROWS = getArticleData($id, $DB_CONNECT, 1); ?>
				<?php while ($R = db_fetch_array($ROWS)) : ?>
				<?php $bbshref = "bbs.php?id=$id&q=view&uid=".$R[uid];?>
				<strong>공지사항</strong><a href="<?=$bbshref?>"><?=$R[subject]?></a></span>
				<?endwhile?>
			<?php $a = showBanner('M03', 'class', false, 0, 0, 1, "left-banner type1"); ?>
			<?php 
			if ($a['ad_title'] == '') : ?>
				<script type="text/javascript">jQuery('.left-banner').hide();</script>
			<?php endif ?>
			<a href="#;" class="right-banner type1">
				<span class="right-banner-left"><?php $a = showBanner('M04', 'class', false, 0, 0, 1, "right-banner type1"); ?></span>
			</a>
			<?php
			if ($a['ad_title'] == '') : ?>
				<script type="text/javascript">jQuery('.right-banner').hide();</script>
			<?php endif ?>
		</div>
		<!-- //Contents -->
		<? require_once $path['skinpath'].'body/inc/common/footer/_footer.php'; ?>
	</div>

<script type="text/javascript">
    function headlogCheck() {
        var f = document.logFrm;

        if (f.id.value == "")
        {
            alert('아이디를 입력해 주세요.         ');
            f.id.focus();
            return false;
        }
        if (f.pw.value == "")
        {
            alert('비밀번호를 입력해 주세요.         ');
            f.pw.focus();
            return false;
        }
        //if(f.referer.value=="") f.referer.value = location.href;
		 f.submit();
    }
    function remember_idpw1(ths)
    {
    	if (ths.checked == true)
    	{
    		/*if (!confirm('\n\n패스워드정보를 저장할 경우 다음접속시 \n\n패스워드를 입력하지 않으셔도 됩니다.\n\n그러나, 개인PC가 아닐 경우 타인이 로그인할 수 있습니다.     \n\nPC를 여러사람이 사용하는 공공장소에서는 체크하지 마세요.\n\n정말로 패스워드를 기억시키겠습니까?\n\n'))
    		{
    			ths.checked = false;
    		}*/
    	}
    }

	function fPoll(poll_id) {
		var decision = jQuery('input:radio[name="decision"]:checked').val();
		if (decision=="" || decision==undefined) {
			alert("찬성/반대를 선택해주세요.");
			jQuery("#decision0").focus();
			return false;
		}
		location.href = "bbs.php?id=comm_vote&a=reqs&uid="+poll_id+"&g="+decision;
	}

	function showSiteView(oImg) {
		//var oPos = getPosition(oImg);
		jQuery("#add").css("left", 235);
		jQuery("#add").css("top", 40);
		jQuery("#add").toggle();
	}

	//var delaySec = 0.15 * 1000;
	var delaySec = 0;
	var tabControlD = function(jObj, tabClsNm, lstClsNm) {
		jQuery(tabClsNm).removeClass("on");
		jQuery(jObj).addClass("on");
		jQuery(lstClsNm).hide();
		jQuery("#list_"+jQuery(jObj).attr("id")).show();
	}
	var tabControl = function(jObj, tabClsNm, lstClsNm) {
		setTimeout(function() {
			tabControlD(jObj, tabClsNm, lstClsNm);
		}, delaySec)
	}

	jQuery(document).ready(function(){

		jQuery(".jobs-tabs a").click(function(){
			//jQuery(".jobs-tabs a").toggleClass("on");
			//jQuery(".jobs-list").toggle();
			/*jQuery(".jobs-tabs a").removeClass("on");
			jQuery(this).addClass("on");
			jQuery(".jobs-list").hide();
			jQuery("#list_"+jQuery(this).attr("id")).show();*/
			tabControl(this, ".jobs-tabs a", ".jobs-list");
		});

		jQuery(".news-tabs a").click(function(){
			/*jQuery(".news-tabs a").removeClass("on");
			jQuery(this).addClass("on");
			jQuery(".news-listdiv").hide();
			jQuery("#list_"+jQuery(this).attr("id")).show();*/
			tabControl(this, ".news-tabs a", ".news-listdiv");
		});

		jQuery(".links a").click(function(){
			/*jQuery(".news-tabs a").removeClass("on");
			jQuery(this).addClass("on");
			jQuery(".news-listdiv").hide();
			jQuery("#list_"+jQuery(this).attr("id")).show();*/
			tabControl(this, ".links a", ".hotissue-list");
		});

		jQuery(".mb-menu li a").click(function(){
			//tabControl(this, ".mb-menu a", ".mb-marketplace");
		});

		var interval = 4000;
		var timer = setInterval("animatemenu()", interval)
		jQuery(".mb-menu li a").click(function(){
			clearInterval(timer);
			var mimg = jQuery(this).children("img");
			var onimg = jQuery(this).parent("li").siblings("li").children(".on").children("img");

			jQuery(this).addClass("on");
			jQuery(this).parent("li").siblings("li").children(".on").removeClass("on");

			if (mimg.attr("src").indexOf("on")==-1) {
				mimg.attr("src", mimg.attr("src").replace("_off", "_on"));
				onimg.attr("src", onimg.attr("src").replace("_on", "_off"));
				jQuery(".mb-marketplace").hide();
				jQuery("#list_"+mimg.attr("id")).show();
			}
		})
		jQuery(".mb-content").mouseleave(function(){
			timer = setInterval("animatemenu()", interval);
		})
		jQuery(".mb-content").mouseenter(function(){
			clearInterval(timer);
		})
	});

	function animatemenu(){
		<?php if ("localhost" != $_SERVER['HTTP_HOST'] && !$my[admin]): ?>
		var cur = jQuery(".mb-menu li a.on");
		var curimg = cur.children("img");
		var nxt = (cur.parent("li").next("li").length > 0) ? cur.parent("li").next("li").children("a") : jQuery(".mb-menu li:first-child a");
		var nxtimg = nxt.children("img");

		cur.removeClass("on");
		nxt.addClass("on");
		nxtimg.attr("src", nxtimg.attr("src").replace("_off", "_on"));
		curimg.attr("src", curimg.attr("src").replace("_on", "_off"));
		jQuery(".mb-marketplace").hide();
		jQuery("#list_"+nxtimg.attr("id")).show();

		var curMenu = 0;
		jQuery(".mb-menu li a").each(function(i,v){
			if( jQuery(v).attr("class") == "on" ) curMenu = i;
		});

		var totCnt = 4;
		if(curMenu==0) {
			var curIdx = calIndex("mpstore_idx", totCnt);
			cf_listControlForPage('mpstore', totCnt, curIdx, 'mpstore_idx');
			jQuery("#list_mp0 .mbmarket-nav div a").each(function(i,v){
				if(curIdx == i) jQuery(v).trigger('click');
			});
		}
/*
		if(curMenu==1) {
			var curIdx = calIndex("mpproperty_idx", totCnt);
			cf_listControlForPage('mpproperty', totCnt, curIdx, 'mpproperty_idx');
			jQuery("#list_mp1 .mbmarket-nav div a").each(function(i,v){
				if(curIdx == i) jQuery(v).trigger('click');
			});
		}

		if(curMenu==2) {
			var curIdx = calIndex("mpliving_idx", totCnt);
			cf_listControlForPage('mpliving', totCnt, curIdx, 'mpliving_idx');
			jQuery("#list_mp2 .mbmarket-nav div a").each(function(i,v){
				if(curIdx == i) jQuery(v).trigger('click');
			});
		}

		if(curMenu==3) {
			var curIdx = calIndex("mpcar_idx", totCnt);
			cf_listControlForPage('mpcar', totCnt, curIdx, 'mpcar_idx');
			jQuery("#list_mp3 .mbmarket-nav div a").each(function(i,v){
				if(curIdx == i) jQuery(v).trigger('click');
			});
		}

		if(curMenu==4) {
			var curIdx = calIndex("mpwork_idx", totCnt);
			cf_listControlForPage('mpwork', totCnt, curIdx, 'mpwork_idx');
			jQuery("#list_mp4 .mbmarket-nav div a").each(function(i,v){
				if(curIdx == i) jQuery(v).trigger('click');
			});
		}*/
		<?php endif; ?>
	}

	function calIndex(id, totCnt) {
		var curIdx = eval(jQuery("#"+id).val());
		if(curIdx == totCnt - 1) curIdx = 0;
		else curIdx = curIdx + 1;
		jQuery("#"+id).val(curIdx);
		return curIdx;
	}

	var goStore = function(store_category1) {
		//location.href = "bbs.php?q=list&id=store_premium&store_category1="+store_category1+"&store_category2=";
		location.href = "store_search_result.php?id=store_premium&search_keyword="+store_category1+"&category_str=Address, Suburbs, Region";
	}
</script>

<?php if ($my['comp'] == '1' && $my['comp_approval'] == '2') : ?>
<script type="text/javascript">
	denidedMemberInit = function() {
		var r = confirm('자료불출분으로 인해 요청하신 기업승인이 거부가 되셨습니다. 기업(업소)정보를 다시 작성후 재 승인요청을 하시겠습니까?');
		if (r == true) {
			jQuery.post('/ajax.php?category=global&fn=to_general_member', 
				{}, 
				function(data) { 
					if(data == '1') {
						alert('기업(업소) 정보가 초기화 되었습니다.');
						document.location.href='/mypage.php?q=premium';
					} else {
						alert('회원 정보 초기화에 실패하였습니다. 관리자에게 문의 하세요.');
					}
				}
			);
		}
	}
	jQuery(document).ready(function() { denidedMemberInit(); });
</script>
<?php endif; ?>