<?php 
	include "include/define.php";

	session_start();
	if(isset($_SESSION['userid']))$userid = $_SESSION["userid"];
	else $userid = "";
	if(isset($_SESSION['username']))$username = $_SESSION["username"];
	else $username = "";
	if(isset($_SESSION['userlevel']))$userlevel = $_SESSION["userlevel"];
	else $userlevel = "";
	if(isset($_SESSION['userpoint']))$userpoint = $_SESSION["userpoint"];
	else $userpoint = "";
?>
		<div id="header" class="cf">
			<div id="top" class="cf">
				<div id="mainLogo">
					<h1 class="fl"><a href="index.php" tabindex="0" class="showBalloon" title="보건복지부 메인페이지"><img src="images/h1_logo.jpg" width="260" height="70" alt="보건복지부"/><span>보건복지부</span></a></h1>
				</div> <!-- id="mainLogo -->
				<div id="search" class="fl">
					<input type="text" name="search" value="검색어를 입력해주세요." class="sch1 guide"/>
					<input type="submit" value="검색" class="sch2"/>
				</div> <!-- id="search" -->
				<div id="keyword">
					<div class="box cf">
						<ul class="cf fl">
							<li class="first"><img src="images/list_01.jpg" alt="list_01" class="list fl"/><a href="#">코로나19</a></li>
							<li><img src="images/list_02.jpg" alt="list_01" class="list fl"/><a href="#">선별진료소</a></li>
							<li><img src="images/list_03.jpg" alt="list_01" class="list fl"/><a href="#">사회적거리두기</a></li>
							<li><img src="images/list_04.jpg" alt="list_01" class="list fl"/><a href="#">코로나19선별진료소</a></li>
							<li><img src="images/list_05.jpg" alt="list_01" class="list fl"/><a href="#">코로나</a></li>
							<li><img src="images/list_06.jpg" alt="list_01" class="list fl"/><a href="#">2021업무계획</a></li>
							<li><img src="images/list_07.jpg" alt="list_01" class="list fl"/><a href="#">아동학대</a></li>
							<li><img src="images/list_08.jpg" alt="list_01" class="list fl"/><a href="#">추석</a></li>
							<li><img src="images/list_09.jpg" alt="list_01" class="list fl"/><a href="#">거리두기</a></li>
							<li><img src="images/list_10.jpg" alt="list_01" class="list fl"/><a href="#">긴급복지생계지원</a></li>
						</ul>
						<img src="images/btn2.png" alt="btn2" class="btn2 fr"/>
					</div>
					<div class="sub">
						<p>인기키워드</p>
						<ul>
							<li><a href="sub01/sub01.html">코로나19</a></li>
							<li><a href="sub01/sub01.html">선별진료소</a></li>
							<li><a href="sub01/sub01.html">사회적 거리두기</a></li>
							<li><a href="sub01/sub01.html">코로나19 선별진료소</a></li>
							<li><a href="sub01/sub01.html">코로나</a></li>
							<li><a href="sub01/sub01.html">2021업무계획</a></li>
							<li><a href="sub01/sub01.html">아동학대</a></li>
							<li><a href="sub01/sub01.html">추석</a></li>
							<li><a href="sub01/sub01.html">거리두기</a></li>
							<li><a href="sub01/sub01.html">긴급복지생계지원</a></li>
						</ul>
					</div>
				</div> <!-- id="keyword" -->
<?php 
	if(!$userid) {
?>
				<div id="join">
					<ul class="cf">
						<li><a href="./login/member_form.php">회원가입</a></li>
						<li><a href="./login/member_form.php">로그인</a></li>
					</ul>
				</div>
				<!-- <li><a href="./login/member_form.php">회원 가입(11ch)</a></li> -->
				<!-- <li>|</li> -->
				<!-- <li><a href="./login/member_form.php">로그인(12ch)</a></li> -->
<?php
	}else{
		$logged = $username."(".$userid.")님[Level:".$userlevel.", point:".$userpoint."]";
?>
				<div id="join">
					<ul class="cf">
						<li><?=$logged?></li>
						<li><a href="./login/logout.php">로그아웃</a></li>
						<li><a href="./login/member_modify_form.php">정보 수정</a></li>
					</ul>
				</div>
				<!-- <li><?=$logged?></li>
				<li>|</li>
				<li><a href="./login/logout.php">로그아웃(12ch)</a></li>
				<li>|</li>
				<li><a href="./login/member_modify_form.php">정보 수정(12ch)</a></li> -->
<?php 
	}
?>
<?php 
	if($userlevel==1) {
?>
				<div id="join">
					<ul class="cf">
						<li><a href="./login/admin.php">관리자 모드(15ch)</a></li>
					</ul>
				</div>
				<!-- <li>|</li>
				<li><a href="./login/admin.php">관리자 모드(15ch)</a></li> -->
<?php 
	}
?>
			<div id="mainGnb" class="fr cf">
					<div class="sns fl cf">
						<ul>
							<li class="facebook"><a href="#" title="페이스북으로 이동" class="btn showBalloon"></a></li>
							<li class="twitter"><a href="#" title="트위터로 이동" class="btn showBalloon"></a></li>
							<li class="naver"><a href="#" title="네이버로 이동" class="btn showBalloon"></a></li>
							<li class="youtube"><a href="#" title="유튜브로 이동" class="btn showBalloon"></a></li>
							<li class="eng"><a href="#" title="영어로 변경" class="btn showBalloon"></a></li>
						</ul>
					</div>
					<p class="hBtn fr"><a href="#" class="showBalloon" title="전체메뉴"><span>사이트맵</span></a></p>
				</div> <!-- id="mainGnb" -->
			</div><!--  id="top -->
			
			<div id="Menu1">
				<ul class="oneDepth cf">
					<li class="Odth fl"><a href="sub01/sub01.html" tabindex="1" class="first showBalloon" title="정보공개 페이지">정보공개</a>
						<div class="disease width100 cf lf">
							<ul class="twoDepth cf">
								<li class="fl">
									<dl>
										<dt><a href="sub01/sub01.html">정보공개</a></dt>
										<dd><a href="sub01/sub01.html">정보공개제도안내</a></dd>
										<dd><a href="sub01/sub01.html">정보공개청구</a></dd>
										<dd><a href="sub01/sub01.html">정보목록</a></dd>
										<dd><a href="sub01/sub01.html">비공개 대상정보 세부기준</a></dd>
										<dd><a href="sub01/sub01.html">사전정보공표</a></dd>
										<dd><a href="sub01/sub01.html">정보공개 연차보고서</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub01/sub01.html">공공데이터개방</a></dt>
										<dd><a href="sub01/sub01.html">보건복지 공공데이터</a></dd>
										<dd><a href="sub01/sub01.html">공공데이터 제공신청</a></dd>
										<dd><a href="sub01/sub01.html">이용안내</a></dd>
									</dl>
								</li>
								<li class="fl ">
									<dl>
										<dt><a href="sub01/sub01.html">정책실명제</a></dt>
										<dd><a href="sub01/sub01.html">국민신청실명제</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub01/sub01.html">공공누리</a></dt>
										<dd><a href="sub01/sub01.html">공공누리 제도안내</a></dd>
										<dd><a href="sub01/sub01.html">공공누리 유형안내</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub01/sub01.html">보건복지모바일앱종합안내</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl ">
									<dl>
										<dt><a href="sub01/sub01.html">정보보호</a></dt>
										<dd><a href="sub01/sub01.html">개인정보관리현황</a></dd>
									</dl>
								</li>
								<li class="fl">
									<img src="images/menuimg07.png" alt=""/>
								</li>
							</ul>
						</div>
					</li>
					<li><a href="sub02/sub02.html" class="showBalloon" title="민원 페이지" tabindex="2">민원</a>
						<div class="health width100 cf lf">
							<ul class="twoDepth cf">
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">민원이용안내</a></dt>
										<dd><a href="sub02/sub02.html">민원신청</a></dd>
										<dd><a href="sub02/sub02.html">나의민원확인</a></dd>
										<dd><a href="sub02/sub02.html">유사민원검색</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">부정청탁 및 금품 등 수수신고</a></dt>
										<dd><a href="sub02/sub02.html">신고</a></dd>
										<dd><a href="sub02/sub02.html">신고내용확인(19.11.21이전)</a></dd>
										<dd><a href="sub02/sub02.html">신고내용확인(19.11.21이후)</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">부정비리.공익신고센터</a></dt>
										<dd><a href="sub02/sub02.html">공익신고</a></dd>
										<dd><a href="sub02/sub02.html">노인장기요양기관 부당청구 신고.포상금제</a></dd>
										<dd><a href="sub02/sub02.html">의약품 유통 부정.비리신고</a></dd>
										<dd><a href="sub02/sub02.html">공직자부조리신고</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">보건의요인 면허(자격) 민원</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">건강보험분쟁조정위원회</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">예산낭비신고</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">안전신문고<img src="images/go.png" alt="바로가기"/></a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">100회상/수어/채팅상담</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">민원행정서비스헌장</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">온라인지로</a></dt>
										<dd></dd>
									</dl>
								</li>
							</ul>
						</div>
					</li>
					<li><a href="sub03/sub03.html" class="showBalloon" title="참여 패이지" tabindex="3">참여</a>
						<div class="policy width100 cf lf">
							<ul class="twoDepth cf">
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">제안신청</a></dt>
										<dd><a href="sub03/sub03.html">나의제안확인</a></dd>
										<dd><a href="sub03/sub03.html">공개제안</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">적극행정</a></dt>
										<dd><a href="sub03/sub03.html">제도소개</a></dd>
										<dd><a href="sub03/sub03.html">우수사례</a></dd>
										<dd><a href="sub03/sub03.html">우수공무원.정책 국민추천제등</a></dd>
										<dd><a href="sub03/sub03.html">소극행정신고</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">규제개혁</a></dt>
										<dd><a href="sub03/sub03.html">규제개혁소개</a></dd>
										<dd><a href="sub03/sub03.html">규제개혁과제</a></dd>
										<dd><a href="sub03/sub03.html">자료실</a></dd>
										<dd><a href="sub03/sub03.html">규제개혁신문고</a></dd>
										<dd><a href="sub03/sub03.html">규제입증요청</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">설문/토론/공청회</a></dt>
										<dd><a href="sub03/sub03.html">글작성</a></dd>
										<dd><a href="sub03/sub03.html">답글확인</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">장관과의대화</a></dt>
										<dd><a href="sub03/sub03.html">글작성</a></dd>
										<dd><a href="sub03/sub03.html">답글확인</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">모범공직자추천</a></dt>
										<dd><a href="sub03/sub03.html">글작성</a></dd>
										<dd><a href="sub03/sub03.html">답글확인</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">정부포상공개검증</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">나눔문화</a></dt>
										<dd><a href="sub03/sub03.html">대한민국 나눔국민대상</a></dd>
										<dd><a href="sub03/sub03.html">대한민국 나눔국민대상 국민공모</a></dd>
										<dd><a href="sub03/sub03.html">홍보영상</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">자유게시판</a></dt>
										<dd></dd>
									</dl>
								</li>
							</ul>
						</div>
					</li>
					<li><a href="sub04/sub04.html" class="showBalloon" title="정보 페이지" tabindex="4">정보</a>
						<div class="research width100 cf lf">
							<ul class="twoDepth cf">
								<li class="fl">
									<dl>
										<dt><a href="sub04/sub04.html">홍보자료</a></dt>
										<dd><a href="sub04/sub04.html">#덕분에캠페인</a></dd>
										<dd><a href="sub04/sub04.html">카드뉴스</a></dd>
										<dd><a href="sub04/sub04.html">간행물</a></dd>
										<dd><a href="sub04/sub04.html">영상</a></dd>
										<dd><a href="sub04/sub04.html">영상으로 보는 소식</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub04/sub04.html">감사</a></dt>
										<dd><a href="sub04/sub04.html">감사결과</a></dd>
										<dd><a href="sub04/sub04.html">청렴/부패방지</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub04/sub04.html">통계</a></dt>
										<dd><a href="sub04/sub04.html">승인통계(보건복지부 통계)</a></dd>
										<dd><a href="sub04/sub04.html">e-나라지표</a></dd>
										<dd><a href="sub04/sub04.html">관련주요사이트</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub04/sub04.html">복지행정지원</a></dt>
										<dd><a href="sub04/sub04.html">지역사회보장계획</a></dd>
										<dd><a href="sub04/sub04.html">공공복지전달체계</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub04/sub04.html">법령</a></dt>
										<dd><a href="sub04/sub04.html">법률/시행령/시행규칙</a></dd>
										<dd><a href="sub04/sub04.html">훈령/예규/고시/지침</a></dd>
										<dd><a href="sub04/sub04.html">입법/행정예고 전자공정회</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub04/sub04.html">통상협상<img src="images/go.png" alt="바로가기"/></a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub04/sub04.html">주요계획<img src="images/go.png" alt="바로가기"/></a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub04/sub04.html">사업<img src="images/go.png" alt="바로가기"/></a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub04/sub04.html">예결산</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub04/sub04.html">계약</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub04/sub04.html">연구/조사/발간자료</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub04/sub04.html">현황</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub04/sub04.html">법인/시설/단체</a></dt>
										<dd></dd>
									</dl>
								</li>
							</ul>
						</div>
					</li>
					<li><a href="sub05/sub05.html" class="showBalloon" title="알림 페이지" tabindex="5">알림</a>
						<div class="notice width100 cf lf">
							<ul class="twoDepth cf">
								<li class="fl">
									<dl>
										<dt><a href="sub05/sub05.html">명단공표</a></dt>
										<dd><a href="sub05/sub05.html">건강보험 거짓청구 요양기관 명단공표</a></dd>
										<dd><a href="sub05/sub05.html">직장어린이집 설치의무 미이행 및 조사불응사업장 명단 공표</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub05/sub05.html">공지사항</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub05/sub05.html">입찰안내<img src="images/go.png" alt="바로가기"/></a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub05/sub05.html">보도자료</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub05/sub05.html">알림창</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub05/sub05.html">베너모음</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub05/sub05.html">포토뉴스</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub05/sub05.html">보도설명</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub05/sub05.html">요양기관현지조사</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub05/sub05.html">협동조합 경영공시</a></dt>
										<dd><a href="sub05/sub05.html">경영고시조회</a></dd>
									</dl>
								</li>
							</ul>
						</div>
					</li>
					<li><a href="sub06/sub06.html" class="showBalloon" title="소개 페이지" tabindex="6">소개</a>
						<div class="stats width100 cf lf">
							<ul class="twoDepth cf">
								<li class="fl">
									<dl>
										<dt><a href="sub06/sub06.html">조직</a></dt>
										<dd><a href="sub06/sub06.html">조직도</a></dd>
										<dd><a href="sub06/sub06.html">소속기관</a></dd>
										<dd><a href="sub06/sub06.html">산하 공공기관</a></dd>
										<dd><a href="sub06/sub06.html">부서안내/직원찿기</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub06/sub06.html">비전/업무</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub06/sub06.html">후원명칭 사용승인 현황</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub06/sub06.html">연혁<img src="images/go.png" alt="바로가기"/></a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub06/sub06.html">정부상징</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub06/sub06.html">장관소개</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub06/sub06.html">제1차관소개</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub06/sub06.html">제2차관소개</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub06/sub06.html">오시는길</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<img src="images/menuimg08.png" alt="메뉴이미지"/>
								</li>
							</ul>
						</div>
					</li>
					<li><a href="sub07/sub07.html" class="showBalloon" title="정책 페이지" tabindex="7">정책</a>
						<div class="civil width100 cf lf">
							<ul class="twoDepth cf">
								<li class="fl">
									<dl>
										<dt><a href="sub07/sub07.html">업무계획</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub07/sub07.html">보건의료</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub07/sub07.html">공공보건<img src="images/go.png" alt="바로가기"/></a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">한의약<img src="images/go.png" alt="바로가기"/></a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">건강보험</a></dt>
										<dd></dd>
									</dl>
								</li><li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">건강</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">보건사업</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">사회서비스</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">복지</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">장애인</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">인구아동</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">노인</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">보육</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub02/sub02.html">연금<img src="images/go.png" alt="바로가기"/></a></dt>
										<dd></dd>
									</dl>
								</li>
							</ul>
						</div>
					</li>
					<li><a href="sub03/sub03.html" title="이용안내 페이지" tabindex="8" class="last showBalloon">이용안내</a>
						<div class="institute width100 cf lf">
							<ul class="twoDepth cf">
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">이메일서비스<img src="images/go.png" alt="바로가기"/></a></dt>
										<dd><a href="sub03/sub03.html">복지로 뉴스레터</a></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">홈페이지이용안내</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">개인정보처리방침</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">영상정보처리기기운영방침</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">뷰어다운로드<img src="images/go.png" alt="바로가기"/></a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">정보구독</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">장애인이용안내</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">홈페이지 기능오류신고</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">전체보기</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<dl>
										<dt><a href="sub03/sub03.html">ㄱ~ㅎ색인</a></dt>
										<dd></dd>
									</dl>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div> <!-- id="maun" -->
		</div> <!-- id="header" -->