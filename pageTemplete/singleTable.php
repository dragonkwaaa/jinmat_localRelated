<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$lCode					=	'0100';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/pageTemplete/pages/pageTemplete_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">
            <!-- :: open : ksg_1 : [진맛] 여기서는 사용하지 않을 서브 메뉴 탭 내용. "디스플레이 논" 을 부여하여 숨겨둠. -->
            <div class="subMenuTab" style="display:none;">
                <a href="/plan/" class="btn subPartMod  activated">일일현금지출관리</a>
                <a href="/plan/dailyTransfer" class="btn subPartMod">일일현금이체리스트</a>
                <a href="/plan/transferList" class="btn subPartMod">이체리스트</a>
			</div>
            <!-- :: close : ksg_1 : [진맛] 여기서는 사용하지 않을 서브 메뉴 탭 내용. "디스플레이 논" 을 부여하여 숨겨둠. -->
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
								<div class="tAlignR mt5">입금 합계 : 100,000,000 원</div>
								<div class="tAlignR mt5">지출 합계 : 100,000,000 원</div>
							</td>
						</tr>
						</tbody>
                    </table>
					<table class="searchResultTable">
						<colgroup>
                            <col width="30">
                            <col width="30">
                            <col width="80">
                            <col width="80">
                            <col width="120">
                            <col width="80">
                            <col width="80">
                            <col width="80">
                            <col width="80">
                            <col width="200">
                            <col width="80">
                            <col width="90">
                            <col width="80">
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
                            <th rowspan="2">거래처</th>
							<th rowspan="2">적요</th>
                            <th rowspan="2">입금</th>
                            <th rowspan="2">지출</th>
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
							<th rowspan="2">
                                <div>결제일</div>
                                <div class="mt5 f_blue">예) 1월 1일 = 01.01</div>
                            </th>
							<th rowspan="2">비고</th>
							<th rowspan="2">등록일</th>
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
                                <input class="tbox regFullSort listMod" placeholder="과목명" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="거래처" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" value="">
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
                                <input class="tbox regFullSort listMod" placeholder="">                                
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" value="">
							</td>
							<td></td>
                           
							<td>
								<div class="btnGroup inListTable">
									<a href="/rawMat/rawMatSpec" class="btn regSort">등록</a>
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
                                <input class="tbox regFullSort listMod" value="인건비(1234)" placeholder="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" value="곽직원(3110)" placeholder="">
                            </td>
							<td>
								<input class="tbox regFullSort listMod" value="인건비 지급">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" value="0">
                                <span class="priceWord">원</span>
								
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" value="1,000,000">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" value="계좌이체(2)">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" value="국민계좌1(1005)">
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
								<input class="tbox regFullSort listMod" value="07.01">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" value="인건비 지급함">
                            </td>
                            <td>
                                <div>2020.07.05 11:00</div>
                                <div>곽선생(주임)</div>
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="/rawMat/rawMatSpec" class="btn modifySort">수정</a>
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
                                <input class="tbox regFullSort listMod" placeholder="일" value="01">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" readonly value="인건비(1234)" placeholder="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" readonly value="곽직원(3110)" placeholder="">
                            </td>
							<td>
								<input class="tbox regFullSort listMod" readonly value="인건비 지급">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="0">
                                <span class="priceWord">원</span>	
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" value="계좌이체(2)">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" readonly value="국민계좌1(1005)">
							</td>
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" readonly value="국민은행" placeholder="은행/카드사">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" readonly value="1234-1234-1234" placeholder="카드/계좌번호">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" readonly value="곽반장" placeholder="예금주">
                                </div>
							</td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="07.01">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" readonly value="인건비 지급함">
                            </td>
                            <td>
                                <div>2020.07.05 11:00</div>
                                <div>곽선생(주임)</div>
							</td>
							<td>
                                <div>이체됨</div>
                                <div>2020.07.05 11:00</div>
                                <div>곽선생(주임)</div>
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