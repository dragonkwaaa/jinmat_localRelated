<!-- :: ksg_2 = ksg_20210114_1756 -->
<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
    $tCode					=	'0100';
	$lCode					=	'0103';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/standSet/pages/standSet_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">
			<div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">검색</div>
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
										<option>상호명</option>
										<option>납품처코드</option>
										<option>종사업장번호</option>
										<option>대표자명</option>
										<option>업태명</option>
									</select>
									<input class="tbox searchInput topLineSearchMod ui-autocomplete-input" placeholder="검색어를 입력해주세요.">
								</td>
                                <th>
									세무신고여부
								</th>
								<td>
									<div class="inTableCheckGroup">
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="" checked>
												<label></label>
											</div>
											<div class="checkBoxTitle">전체</div>
                                        </div>
                                        <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">신고</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">미신고</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="btnGroup verticalBottomSort inTblSort">
                        <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    </div>
				</div>
			</div>
			<div class="section horizontalManageSort searcManageSort fullMod">
				<div class="titleBox manageHeadlineSort">납품처 목록</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<div class="sboxGroup listArraySort">
							<!-- :: open : ksg_2 : [진맛] 테이블 우상단의 컨트롤 버튼 그룹. 여기서는 사용하지 않으므로 모두 style="display : none;" 처리 함. -->
                            <a style="display : none;" href="javascript:popdateChan();" class="btn listTopSort dateChanBtn">결제일변경</a>
                            <a style="display : none;" href="javascript:void(0);" class="btn listTopSort dateChanBtn">선택삭제</a>
                            <a style="display : none;" href="javascript:void(0);" class="btn listTopSort addStaffBtn">선택항목이체</a>
                            <a style="display : none;" href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
							<a style="display : none;" href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
							<!-- :: close : ksg_2 : [진맛] 테이블 우상단의 컨트롤 버튼 그룹. 여기서는 사용하지 않으므로 모두 style="display : none;" 처리 함. -->
							<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
							<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
							<select class="sbox">
								<option>번호순▼</option>
								<option>번호순▲</option>
								<option>등록순▼</option>
								<option>등록순▲</option>
                                <option>과목순▼</option>
								<option>과목순▲</option>
							</select>
							<select class="sbox">
								<option>40개씩</option>
								<option>80개씩</option>
								<option>100개씩</option>
							</select>
						</div>
					</div>
					<!-- :: open : ksg_2 : [진맛] 메인 테이블 상단에 표시되는 작은 테이블. 통계 수치를 표시하는 역할. 여기서는 사용하지 않으므로 style="display : none;" 처리 함. -->
					<table class="searchResultTable summarySort" style="display : none;">
						<tbody>
						<tr>
							<th>합계(일)</th>
							<td>
								<div class="tAlignR mt5">입금 합계 : 100,000,000 원</div>
								<div class="tAlignR mt5">지출 합계 : 100,000,000 원</div>
							</td>
						</tr>
						</tbody>
					</table>
					<!-- :: close : ksg_2 : [진맛] 메인 테이블 상단에 표시되는 작은 테이블. 통계 수치를 표시하는 역할. 여기서는 사용하지 않으므로 style="display : none;" 처리 함. -->
					<table class="searchResultTable">
						<colgroup>
                            <col width="120">
                            <col width="100">
                            <col width="50">
							<col width="100">
							<col width="100">
                            <col width="100">
                            <col width="200">
                            <col width="60">
                            <col width="100">
							<col width="180">
							<col width="40">
                        </colgroup>
						<thead>
						<tr>
							<th>
								<div>상호명</div>
								<div>(납품처코드)</div>
							</th>
							<th>거래구분</th>
                            <th>
								세무<br>
								신고여부
							</th>
							<th>종사업장번호</th>
							<th>
								<div>업태</div>
								<div>(업태코드)</div>
							</th>
                            <th>대표자정보(이름/전화)</th>
							<th>납품처주소</th>
							<th>담당자명</th>
							<th>담당자 연락처(1~3)</th>
							<th>비고</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
								<input class="tbox regFullSort listMod" placeholder="상호명" value="">
								<input class="tbox regFullSort listMod" placeholder="납품처코드" value="">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="거래구분" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="세무신고여부" value="">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="종사업장번호" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="업태" value="">
								<input class="tbox regFullSort listMod" placeholder="업태코드" value="">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="대표자명" value="">
								<input class="tbox regFullSort listMod" placeholder="대표자 전화번호" value="">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="납품처주소" value="">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="담당자명" value="">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="담당자 전화번호1" value="">
								<input class="tbox regFullSort listMod" placeholder="담당자 전화번호2" value="">
								<input class="tbox regFullSort listMod" placeholder="담당자 전화번호3" value="">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="" value="">                                
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<input class="tbox regFullSort listMod" placeholder="상호명" value="진맛농원">
								<input class="tbox regFullSort listMod" placeholder="납품처코드" value="J115200">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="거래구분" value="정기납품처">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="세무신고여부" value="신고">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="종사업장번호" value="1133-42-3333">
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="업태" value="축산업, 임업">
								<input class="tbox regFullSort listMod" placeholder="업태코드" value="110000">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="대표자명" value="진맛과">
								<input class="tbox regFullSort listMod" placeholder="대표자 전화번호" value="02-1234-1234">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="납품처주소" value="서울시 마포구 마포대로 13 한강로1">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="담당자명" value="곽반장">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="담당자 전화번호1" value="010-1234-1234">
								<input class="tbox regFullSort listMod" placeholder="담당자 전화번호2" value="010-4321-6789">
								<input class="tbox regFullSort listMod" placeholder="담당자 전화번호3" value="">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="" value="">                                
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">저장</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<input class="tbox regFullSort listMod" placeholder="상호명" value="강릉농장">
								<input class="tbox regFullSort listMod" placeholder="납품처코드" value="G654433">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="거래구분" value="비정기 납품처">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="세무신고여부" value="미신고">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="종사업장번호" value="1133-42-3333">
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="업태" value="식량, 채소, 화훼, 과실, 기타작물, 시설작물">
								<input class="tbox regFullSort listMod" placeholder="업태코드" value="011000">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="대표자명" value="강릉농부">
								<input class="tbox regFullSort listMod" placeholder="대표자 전화번호" value="02-1234-1234">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="납품처주소" value="서울시 마포구 마포대로 13 한강로1">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="담당자명" value="곽반장">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="담당자 전화번호1" value="010-1234-1234">
								<input class="tbox regFullSort listMod" placeholder="담당자 전화번호2" value="010-4321-6789">
								<input class="tbox regFullSort listMod" placeholder="담당자 전화번호3" value="">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="" value="">                                
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort">저장</a>
								</div>
							</td>
						</tr>
						</tbody>
                    </table>
				</div>
				<!-- <div class="page_group underSort">
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
				</div> -->
			</div>
		</div>
	</div>
</div>
<!-- :: 날짜 변경 팝업 내용 -->
<div class="popup centerSort changeDatePop">
	<div class="popupCon">
		<a href="javascript:closePop()">
			<img src="/common/img/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			결제일변경
		</div>
		<div class="conGroup verticalManageSort">
			<table class="infoGroup">
				<colgroup>
					<col width="100">
					<col width="*">
				</colgroup>
				<tbody>
					<tr>
						<th>변경 날짜</th>
						<td>
                            <input class="tbox regFullSort listMod priceMod" value="" placeholder="입력 형식 예 ) 7월 1일 = 07.01">
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="btnGroup verticalBottomSort">
			<a href="javascript:choicePop();" class="btn searchSort">변경</a>
		</div>
	</div>
</div>

<script src="/common/js/datePick.js"></script>
<script>


// :: 검색 결과 클릭 시, 상세정보 표시.
// $(document).on('click', '.conGroup.verticalManageSort .searchResultTable td', function(){
// 	$('.specInfoGroup.hide').removeClass('hide');
// 	$('.specRegGroup').addClass('hide');
// 	$(this).parent().siblings('tr').removeClass('activated');
// 	$(this).parent('tr').addClass('activated');
// });
// :: 집행등록 버튼 클릭 시, 등록창 표시.
// $(document).on('click', '.btn.addPlanBtn', function(){
// 	$('.specInfoGroup').addClass('hide');
// 	$('.conGroup.verticalManageSort .searchResultTable tr').removeClass('activated');
// 	$('.specRegGroup.hide').removeClass('hide');
// });

// :: "카드잔액관리" 버튼 클릭 시,  팝업 나타나는 스크립트.
$(document).on('click', '.btn.addStaffBtn.cardSort', function(){
	$('.popup.centerSort.cardSort').show();
	$('.contents').addClass('overlay');
});

// :: 날짜 변경 팝업 오픈 스크립트.
function popdateChan() {
    $('.popup.changeDatePop').show();
    $('.contents').addClass('overlay');
}

// :: 팝업창에서 "등록" 버튼 클릭 시, 팝업창 닫히는 스크립트.
function choicePop(){
	$('.popup.centerSort').hide();
	$('.contents').removeClass('overlay');
}
// :: 팝업창의 X 버튼 클릭 시, 팝업 닫기 스크립트.
function closePop(){
	$('.popup.centerSort').hide();
	$('.contents').removeClass('overlay');
}
// :: 팝업창 외부 클릭 시 팝업창 닫기 스크립트.
$(document).mouseup(function (e) {
	let overlay = $('.contents');
	let popupM = $('.popup.centerSort')

	if (!popupM.is(e.target) && popupM.has(e.target).length === 0){
		popupM.hide();
		overlay.removeClass('overlay');
	}
});
</script>
</body>
</html>