<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$lCode					=	'0100';
?>
<body>
<div class="container">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/rawMat/pages/rawMat_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">
            <!-- :: open : ksg_2 : [진맛] 원자재 검색 파트. -->
			<div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">직원검색</div>
				<div class="conGroup verticalManageSort">
					<table class="searchGroup">
						<colgroup>
							<col width="70">
							<col width="*">
							<col width="70">
							<col width="*">
						</colgroup>
						<tbody>
							<tr>
								<th>검색어</th>
								<td>
									<select class="sbox">
										<option>전체</option>
										<option>품목명</option>
										<option>품목코드</option>
										<option>품종</option>
									</select>
									<input class="tbox searchInput topLineSearchMod" name="dd" type="text" placeholder="검색어를 입력해주세요.">
								</td>
								<th>
									생산일
								</th>
								<td>
									<div class="dateInputCase topLineSearchMod">
										<input class="tbox dateBox shortMod" id="startDate" readonly="" placeholder="시작일">
									</div>
									<div class="betweenWaveText">~</div>
									<div class="dateInputCase topLineSearchMod">
										<input class="tbox dateBox shortMod" id="endDate" readonly="" placeholder="종료일">
									</div>
								</td>
							</tr>
							<tr>
								<th>
									입고단가
								</th>
								<td>
									<input class="tbox prcShortMod onlyNum">
									<div class="betweenWaveText">~</div>
									<input class="tbox prcShortMod onlyNum">
								</td>
								<th>
									출고단가
								</th>
								<td>
									<input class="tbox prcShortMod onlyNum">
									<div class="betweenWaveText">~</div>
									<input class="tbox prcShortMod onlyNum">
								</td>
							</tr>
						</tbody>
					</table>
					<!-- :: open : ksg_2 : [진맛] 테이블 밖에 배치되는 "검색" 버튼.. -->
                    <div class="btnGroup verticalBottomSort">
                        <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    </div>
                    <!-- :: close : ksg_2 : [진맛] 테이블 밖에 배치되는 "검색" 버튼.. -->
				</div>
            </div>
            <!-- :: close : ksg_2 : [진맛] 원자재 검색 파트. -->
			<!-- :: open : ksg_3 : [진맛] 테이블 병렬일 때의 총괄 컨트롤 박스 파트. -->
			<div class="headLineBox pageControlSort">
                <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
				<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
			</div>
			<!-- :: close : ksg_3 : [진맛] 테이블 병렬일 때의 총괄 컨트롤 박스 파트. -->
            <!-- :: close : ksg_2 : [진맛] 입력창 / 검색버튼 / 추가버튼이 포함된 검색어 파트. -->
			<div class="section horizontalManageSort searcManageSort extendMod">
				<div class="titleBox manageHeadlineSort">원자재 목록</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<!-- <div class="selectGroup monthSort">
							<select>
								<option selected>2020년</option>
								<option >2019년</option>
								<option >2018년</option>
								<option >2017년</option>
							</select>
							<select>
								<option selected>6월</option>
								<option >5월</option>
								<option >4월</option>
								<option >3월</option>
							</select>
						</div> -->
						<div class="titleBox inlistConSort">
							<div class="titleText">원자재 품목</div>
							<a href="/rawMat/rawMatSpec" class="btn headRightAbMod addPlanBtn">원자재 추가</a>
						</div>
						<div class="sboxGroup listArraySort">
							<select class="sbox">
								<option>번호순▼</option>
								<option>번호순▲</option>
								<option>등록순▼</option>
								<option>등록순▲</option>
							</select>
							<select class="sbox">
								<option>40개씩</option>
								<option>80개씩</option>
								<option>100개씩</option>
							</select>
						</div>
					</div>
					<table class="searchResultTable ">
						<colgroup>
						</colgroup>
						<thead>
						<tr>
							<th>No.</th>
							<th>이미지</th>
							<th>
								품목명<br>
								(품목코드)
							</th>
							<th>품종</th>
                            <th>규격</th>
							<th>입고단가</th>
							<th>출고단가</th>
							<th>생산일</th>
							<th>재고</th>
							<th>사용여부</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
								<div>2</div>
							</td>
							<td>
								<div class="imgBgCase">
									<img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
								</div>
							</td>
							<td>
								수박<br>
								(24555111)
							</td>
							<td>
								부민
							</td>
                            <td>
								3 (kg)
							</td>
							<td>
								65,000
							</td>
							<td>
								45,000
							</td>
							<td>
								2021.01.05<br>
								11:30:32
							</td>
							<td>
								500
							</td>
							<td>
								<div class="inTableRadioGroup">
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="matList_2" value="1" checked="">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
									</div>
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="matList_2" value="2">
											<label></label>
										</div>
										<div class="radioTitle">미사용</div>
									</div>
								</div>
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn delSort">삭제</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div>1</div>
							</td>
							<td>
								<div class="imgBgCase">
									<img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
								</div>
							</td>
							<td>
								사과<br>
								(111222333)
							</td>
							<td>
								홍옥
							</td>
                            <td>
								12 (수)
							</td>
							<td>
								11500
							</td>
							<td>
								11000
							</td>
							<td>
								2021.01.05<br>
								11:30:32
							</td>
							<td>
								140
							</td>
							<td>
								<div class="inTableRadioGroup">
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="matList_1" value="1">
											<label></label>
										</div>
										<div class="radioTitle">사용</div>
									</div>
									<div class="radioCase">
										<div class="radioIconBox">
											<input type="radio" name="matList_1" value="2" checked="">
											<label></label>
										</div>
										<div class="radioTitle">미사용</div>
									</div>
								</div>
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn delSort">삭제</a>
								</div>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
				<div class="page_group underSort">
					<ul class="page_box">
						<li class="prev arrow">
							<a href="javascript:void(0);"></a>
						</li>
						<li class="pageNum on">
							<a href="javascript:void(0);">1</a>
						</li>
						<li class="pageNum">
							<a href="javascript:void(0);">2</a>
						</li>
						<li class="next arrow">
							<a href="javascript:void(0); "></a>
						</li>
					</ul>
				</div>
            </div>
            <!-- :: open : ksg_2 : [진맛] 우측 테이블 구조. -->
			<div class="section horizontalManageSort extendMod">
                <div class="titleBox manageHeadlineSort">상세정보</div>
				<!-- :: open : ksg_3 : [진맛] 좌측 테이블과 유사한 구조의, 우측 상품 상세정보 내용. -->
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">원자재 상세정보</div>
							</div>
						</div>
						<table class="infoGroup txtCSort">
						<colgroup></colgroup>
						<thead>
						<tr>
							<th>이미지</th>
							<th>
								품목명<br>
								(품목코드)
							</th>
							<th>품종</th>
                            <th>규격</th>
							<th>바코드</th>
							<th>입고단가</th>
							<th>출고단가</th>
							<th>생산일</th>
							<th>재고합계</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
								<div class="imgBgCase">
                                	<img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
								</div>
							</td>
							<td>
								수박<br>
								(24555111)
							</td>
							<td>
								부민
							</td>
                            <td>
								3 (kg)
							</td>
							<td>
                                <img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
								<div>(bar1A1)</div>
							</td>
							<td>
								65,000
							</td>
							<td>
								45,000
							</td>
							<td>
								2021.01.05<br>
								11:30:32
							</td>
							<td>
								<div class="f_blue f_bold">250</div>
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="/rawMat/rawMatSpec" class="btn regSort">상세</a>
								</div>
							</td>
						</tr>
						</tbody>
						</table>
					</div>
					<!-- :: open : ksg_3 : [진맛] 우측 하단의 창고별 재고 확인 테이블 내용. -->
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">창고 정보</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col style="width : 50px;">
								<col style="*">
							</colgroup>
							<tbody>
								<tr>
									<th class="flatImgSort">
                                        <div class="imgBgCase">
                                            <img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
                                        </div>
                                    </th>
									<td>
                                        <div class="inTblTitleBox">수박창고1</div>
                                        <div class="inTblInfoBox materialSort">
                                            <span class="infoWord">경기도 성남시</span>
                                            <div class="stockCounter f_blue">150</div>
                                        </div>
                                        <a href="javascript:void(0);" class="linkCover"></a>
									</td>
                                </tr>
                                <tr>
									<th class="flatImgSort">
                                        <div class="imgBgCase">
                                            <img src="/common/img/icon_status_topaz.png" class="img inTblSmSort">
                                        </div>
                                    </th>
									<td>
                                        <div class="inTblTitleBox">수박창고2</div>
                                        <div class="inTblInfoBox materialSort">
                                            <span class="infoWord">충남 연기군</span>
                                            <div class="stockCounter f_blue">100</div>
                                        </div>
                                        <a href="javascript:void(0);" class="linkCover"></a>
									</td>
                                </tr>
							</tbody>
						</table>
					</div>
					<!-- :: close : ksg_3 : [진맛] 우측 하단의 창고별 재고 확인 테이블 내용. -->
				</div>
				<!-- :: close : ksg_3 : [진맛] 좌측 테이블과 유사한 구조의, 우측 상품 상세정보 내용. -->
            </div>
            <!-- :: close : ksg_2 : [진맛] 우측 테이블 구조. -->
		</div>
	</div>
</div>
<script src="/common/js/datePick.js"></script>
<script>
// :: single : ksg_2 [진맛] 다른 작업물의 "상세보기 표시, 숨기기", "상세검색 표시, 숨기기." 스크립트 있던 곳.
// :: open : ksg_2 : [진맛] 원자재 목록을 클릭 시, 우측의 테이블 내용과 하단 버튼이 나타나도록 하는 내용.
$(document).on('click', '.conGroup.verticalManageSort .searchResultTable td', function(){
    $('.specInfoGroup.hide').removeClass('hide');
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
	$('.specRegGroup').addClass('hide');
	$(this).parent().siblings('tr').removeClass('activated');
	$(this).parent('tr').addClass('activated');
});
// :: close : ksg_2 : [진맛] 원자재 목록을 클릭 시, 우측의 테이블 내용과 하단 버튼이 나타나도록 하는 내용.
// :: single : ksg_2 [진맛] 다른 작업물의 "집행등록 버튼 클릭 시, 등록창 표시.", ""직원 추가" 버튼 클릭 시, 직원 추가 팝업 나타나는 스크립트.", "직원 추가 팝업창에서 "등록" 버튼 클릭 시, 팝업창 닫히는 스크립트.", "팝업창의 X 버튼 클릭 시, 팝업 닫기 스크립트." 있던 곳.
// :: single : ksg_2 : [진맛] 다른 작업물의 "팝업창 외부 클릭 시 팝업창 닫기 스크립트." 있던 곳.
</script>
</body>
</html>