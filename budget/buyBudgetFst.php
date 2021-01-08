<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$lCode					=	'0101';
    $subCode				=	'022';
    $thirdCode				=	'0221';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
            <div class="subMenuTab">
				<a href="/budget/" class="btn subPartMod <?=($subCode == '021' ? ' activated' : '')?>">회사운영예산</a>
				<a href="/budget/buyBudgetFst" class="btn subPartMod <?=($subCode == '022' ? ' activated' : '')?>">구매자금예산</a>
            </div> 
            <div class="subMenuTab">
				<a href="/budget/buyBudgetFst" class="btn subPartMod <?=($thirdCode == '0221' ? ' activated' : '')?>">1차결제목록</a>
				<a href="/budget/buyBudgetSnd" class="btn subPartMod <?=($thirdCode == '0222' ? ' activated' : '')?>">2차결제목록</a>
			</div> 
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
										<option>과목</option>
										<option>거래처</option>
									</select>
									<input class="tbox searchInput topLineSearchMod ui-autocomplete-input" placeholder="검색어를 입력해주세요.">
								</td>
                                <th>
									구분
								</th>
								<td>
									<div class="inTableCheckGroup">
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">전체</div>
                                        </div>
                                        <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">승인</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">미승인</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
                                <th>
									결제수단
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
											<div class="checkBoxTitle">카드</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">계좌이체</div>
                                        </div>
                                        <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">어음</div>
                                        </div>
                                        <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">B2B</div>
										</div>
									</div>
								</td>
								<th>
									검색기간
								</th>
								<td>
									<div class="dateInputCase topLineSearchMod">
										<input class="tbox dateBox shortMod" id="startDate" readonly="" placeholder="시작일">
									</div>
									<div class="betweenWaveText">~</div>
									<div class="dateInputCase topLineSearchMod">
										<input class="tbox dateBox shortMod" id="endDate" readonly="" placeholder="종료일">
									</div>
									<div class="btnGroup inTableSearch">
										<a href="javascript:void(0);" class="btn searchSort">검색</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="section horizontalManageSort searcManageSort fullMod">
				<div class="titleBox manageHeadlineSort">집행목록</div>
				<div class="conGroup verticalManageSort bottomRowSort">
					<div class="headLineBox listControlSort">
                        <div class="sboxGroup listArraySort">
                            <a href="javascript:popdateChan();" class="btn listTopSort dateChanBtn">결제일변경</a>
                            <a href="javascript:void(0);" class="btn listTopSort dateChanBtn">선택삭제</a>
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">선택항목이체</a>
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn cardSort">카드잔액관리</a>
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
					<table class="searchResultTable summarySort">
						<tbody>
						<tr>
							<th>합계(일)</th>
							<td>
								<div class="tAlignR mt5">총 합계 금액 : 100,000,000 원</div>
								<div class="tAlignR mt5">미지급금 합계 : 100,000,000 원</div>
							</td>
						</tr>
						</tbody>
					</table>
					<table class="searchResultTable">
						<colgroup>
                            <col width="30">
                            <col width="50">
                            <col width="80">
                            <col width="80">
                            <col width="50">
                            <col width="50">
                            <col width="50">
                            <col width="80">
                            <col width="80">
                            <col width="80">
                            <col width="80">
                            <col width="80">
                            <col width="80">
                            <col width="200">
                            <col width="50">
                            <col width="90">
                            <col width="80">
                            <col width="50">
                            <col width="80">
                        </colgroup>
						<thead>
						<tr>
							<th rowspan="2">
                                <div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
                            </th>
                            <th rowspan="2">일</th>
							<th rowspan="2">과목</th>
                            <th rowspan="2">거래처명</th>
                            <th rowspan="2">해당월</th>
                            <th rowspan="2">회전일</th>
                            <th rowspan="2">분할횟수</th>
                            <th rowspan="2">분할금액</th>
                            <th rowspan="2">총 분할금</th>
                            <th rowspan="2">누적 지급금</th>
                            <th rowspan="2">총미지급금</th>
                            <th rowspan="2">
                                <div>결제수단 구분</div>
                                <div class="guideWord mt5">
                                    <div>1. 카드</div>
                                    <div>2. 계좌이체</div>
                                    <div>3. 어음</div>
                                    <div>4. B2B</div>
                                </div>
                            </th>
							<th rowspan="2">결제수단</th>
							<th rowspan="2">결제수단정보</th>
							<th rowspan="2">결제일</th>
							<th rowspan="2">비고</th>
                            <th rowspan="2">등록일</th>
                            <th rowspan="2">지급일자</th>
							<th rowspan="2">관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
                            <td></td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="일" value="">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="과목" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="거래처" value="">
                            </td>
							<td>
								<input class="tbox regFullSort listMod" value="">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" value="">
                                <span class="priceWord">회</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" value="">
                                <span class="priceWord">원</span>
							</td>
							
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" value="">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" value="">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" value="">
							</td>
                            <td>
								<input class="tbox regFullSort listMod" value="">
							</td>
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="은행/카드사">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="카드/계좌번호">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="" placeholder="예금주">
                                </div>
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="">
							</td>
                            <td>
								<input class="tbox regFullSort listMod">
							</td>
                            <td></td>
                            <td>
								<input class="tbox regFullSort listMod" value="">
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">등록</a>
								</div>
							</td>
						</tr>
                        <tr>
                            <td>
                                <div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="일" value="05">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="과목" value="활동비(1010)">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="거래처" value="적십자(1111)">
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" value="20.5">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="90">
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="2/4">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" value="1,000,000">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="4,000,000">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="2,000,000">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="2,000,000">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" value="카드(1)">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" value="국민카드1(1005)">
                                <div class="f_bold mt5">카드잔액 : 1,000,000,000원</div>
							</td>
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="국민은행" placeholder="은행/카드사">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="1234-1234-1234" placeholder="카드/계좌번호">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="곽반장" placeholder="예금주">
                                </div>
							</td>
                            <td>
								<input class="tbox dateBox regFullSort listMod" id="payDate_2">
                            </td>
                           
                            <td>
                                <input class="tbox regFullSort listMod" value="인건비 지급함 (카드)">
                            </td>
                            <td>
                                <div>2020.06.05 11:00</div>
                                <div>곽반장(주임)</div>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" value="06.12">
							</td>
							<td>
								<div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn modifySort">수정</a>
                                    <a href="javascript:void(0);" class="btn delSort">승인</a>
								</div>
							</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="일" value="05">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="과목" value="활동비(1010)">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="거래처" value="적십자(1111)">
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" value="20.5">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="90">
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="1/4">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" value="1,000,000">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="4,000,000">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="3,000,000">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" value="계좌(2)">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" value="우리계좌1(1005)">
                                <!-- <div class="f_bold mt5">카드잔액 : 1,000,000,000원</div> -->
							</td>
							
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="우리은행" placeholder="은행/카드사">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="5544-12-4444" placeholder="카드/계좌번호">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="곽주임" placeholder="예금주">
                                </div>
							</td>
                            <td>
								<input class="tbox regFullSort listMod">
                            </td>
                           
                            <td>
                                <input class="tbox regFullSort listMod" value="인건비 지급함">
                            </td>
                            <td>
                                <div>2020.06.05 11:00</div>
                                <div>곽반장(주임)</div>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" value="06.12">
							</td>
							<td>
								<div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn modifySort">수정</a>
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

<!-- :: 카드 잔액 설정 팝업 -->
<div class="popup centerSort addStaffSort cardSort">
	<div class="popupCon">
		<a href="javascript:closePop()">
			<img src="//cleanadmin.heeyam.com//image/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			카드잔액관리
		</div>
		<div class="conGroup verticalManageSort">
			<table class="infoGroup">
				<colgroup>
					<col width="100">
					<col width="*">
				</colgroup>
                <thead>
                <tr>
                    <th>카드명</th>
                    <th>잔액(원)</th>
                </tr>
                </thead>
				<tbody>
					<tr>
						<td>현대카드1</td>
						<td>
							<input class="tbox regFullSort listMod priceMod" value="">
						</td>
					</tr>
					<tr>
						<td>우리카드1</td>
						<td>
							<input class="tbox regFullSort listMod priceMod" value="">
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="btnGroup verticalBottomSort">
			<a href="javascript:choicePop();" class="btn searchSort">등록</a>
		</div>
	</div>
</div>

<!-- :: 날짜 변경 팝업 내용 -->
<div class="popup centerSort changeDatePop">
	<div class="popupCon">
		<a href="javascript:closePop()">
			<img src="//cleanadmin.heeyam.com//image/close.png" class="close">
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
							<input class="tbox regFullSort listMod priceMod onlyNum" value="" placeholder="입력 형식 예 ) 7월 1일 = 07.01">
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