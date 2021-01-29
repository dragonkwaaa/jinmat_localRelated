<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'100';
	$lCode					=	'0105';
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
							<col style="width : 15%;">
							<col style="width : 85%;">
						</colgroup>
						<tbody>
							<tr>
								<th>검색어</th>
								<td>
									<select class="sbox">
										<option>전체</option>
										<option>업체명</option>
                                        <option>업체코드</option>
                                        <option>업체연락처</option>
									</select>
									<input class="tbox searchInput topLineSearchMod normal ui-autocomplete-input" placeholder="검색어를 입력해주세요.">
								</td>
							</tr>
							<tr>
								<th>업체방식</th> 
								<td>
									<div class="inTableCheckGroup">
                                        <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">단독</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">업체</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
                                <th>
									사용여부
								</th> 
								<td colspan="4">
									<div class="inTableCheckGroup">
                                        <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">사용</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label> 
											</div>
											<div class="checkBoxTitle">미사용</div>
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
				<div class="titleBox manageHeadlineSort">배송업체 목록</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
						<div class="sboxGroup listArraySort">
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
					<table class="searchResultTable">
						<colgroup>
                            <col style="width : 150px;">
                            <col style="width : 100px;">
							<col style="width : 80px;">
							<col style="width : 130px;">
                            <col style="width : 80px;">
                            <col style="width : 200px;">
                            <col style="width : 90px;">
							<col style="width : 100px;">
							<col style="width : 70px;">
                            <col style="width : 200px;">
                            <col style="width : 50px;">
                        </colgroup>
						<thead>
						<tr>
							<th>업체명</th>
							<th>업체코드</th>
                            <th>
                               방식 (단독,업체)
							</th>
							<th>연락처</th>
                            <th>
                                업체규모<br>
                                (배송기사 수)
                            </th>
                            <th>작업지시</th>
							<th>패널티 점수<br>
							(시간 준수/배송상태 등)
							</th>
							<th>누적 거래금액</th>
                            <th>사용여부</th>
                            <th>비고</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="업체명" value="">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="업체코드" value="">
                            </td>
                            <td>
								<select class="sbox regFullSort">
									<option>단독</option>
									<option>업체</option> 
								</select> 
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="연락처" value="">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="업체규모" value="">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="작업지시" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="패널티 점수" value="">
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="누적 거래금액" value="">
                                <span class="priceWord">원</span>
							</td>
							<td>
                                <select class="sbox regFullSort">
									<option>사용</option>
									<option>미사용</option>
								</select>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="비고" value="">
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
								</div>
							</td>
                        </tr>
                        <tr>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="업체명" value="강남배송">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="업체코드" value="G01011111">
                            </td>
                            <td>
								<select class="sbox regFullSort">
									<option>단독</option>
									<option>업체</option> 
								</select>  
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="연락처" value="010-5100-0429">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="업체규모" value="42">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="작업지시" value="매일 오전..">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="패널티 점수" value="72">
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="누적 거래금액" value="450,000,000">
                                <span class="priceWord">원</span>
							</td>
							<td>
                                <select class="sbox regFullSort">
									<option>사용</option>
									<option selected="">미사용</option>
								</select>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="비고" value="패널티 누적으로 3일 사용 중단">
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="/rawMat/rawMatSpec" class="btn modifySort">저장</a>
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