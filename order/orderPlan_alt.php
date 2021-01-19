<!-- :: ksg_2 = ksg_20210119_1730 -->
<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'200';
	$lCode					=	'202';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/order/pages/order_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">
			<div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">검색</div>
				<div class="conGroup verticalManageSort">
					<table class="searchGroup">
						<colgroup>
							<col style="width : 15%;">
							<col style="width : 35%;">
							<col style="width : 15%;">
							<col style="width : 35%;">
						</colgroup>
						<tbody>
                            <tr>
                                <th>
							    	발주일자
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
                                <th>
							    	배송일
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
							<tr>
								<th>검색어</th>
								<td>
									<select class="sbox">
										<option>전체</option>
										<option>거래처명</option>
                                        <option>거래처코드</option>
                                        <option>품목명</option>
                                        <option>품목코드</option>
                                        <option>생산품명</option>
                                        <option>생산품코드</option>
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
											<div class="checkBoxTitle">개인</div>
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
                                    종결여부
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
											<div class="checkBoxTitle">진행중</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">종결</div>
                                        </div>
									</div>
                                </td>
                                <th>
                                    상태
								</th>
								<td >
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
											<div class="checkBoxTitle">발주요청</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">발주요청승인</div>
                                        </div>
                                        <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">발주취소요청</div>
                                        </div>
                                        <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">발주취소</div>
                                        </div>
                                        <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">발주완료</div>
										</div>
									</div>
								</td>
                            </tr>
                            <tr>
                                <th>
                                    배송방법
								</th>
								<td colspan="3">
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
											<div class="checkBoxTitle">직접배송</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">경동택배</div>
                                        </div>
                                        <div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">한진택배</div>
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
				<div class="titleBox manageHeadlineSort">발주계획 목록</div>
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
					<table class="searchResultTable ">
						<colgroup>
							<col style="width : 80px;">
							<col style="width : 80px;">
							<col style="width : 80px;">
							<col style="width : 80px;">
                            <col style="width : 80px;">
                            <col style="width : 80px;">
                            <col style="width : 120px;">
                            <col style="width : 50px;">
                            <col style="width : 100px;">
                            <col style="width : 200px;">
                            <col style="width : 100px;">
                            <col style="width : 200px;">
                            <col style="width : 80px;">
						</colgroup>
						<thead>
						<tr>
							<th>
								발주일<br>
								(발주코드)
							</th>
							<th>
                                창고명<br>
                                (창고코드)
                            </th>
                            <th>
                                거래처명<br>
                                (거래처코드)
                            </th>
                            <th>
                                품목명<br>
                                (품목코드)
                            </th>
                            <th>
                                품종명<br>
                                (품종코드)
                            </th>
                            <th>바코드</th>
                            <th>
                                배송방법<br>
                                (배송일시)
                            </th>
                            <th>수량</th>
                            <th>출고금액</th>
                            <th>상태</th>
                            <th>
                                발주담당자<br>
                                (연락처)
                            </th>
                            <th>비고</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<!-- :: open : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						<tr>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="발주일" value="">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="발주코드" value="">
								</div>
							</td>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="창고명" value="">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="창고코드" value="">
								</div>
							</td>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="거래처명" value="">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="거래처코드" value="">
								</div>
                            </td>
                            <td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="품목명" value="">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="품목코드" value="">
								</div>
                            </td>
                            <td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="품종명" value="">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="품종코드" value="">
								</div>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="바코드" value="" readonly>
							</td>
                            <td>
								<select class="sbox regFullSort">
									<option>직접배송</option>
                                    <option>한진택배</option>
                                    <option>경동택배</option>
                                </select>
                                <div class="mt2">
                                    <input class="tbox regFullSort listMod" placeholder="예시) 7월1일 = 07.01" value="">
                                </div>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="수량" value="">
                            </td>
                            <td>
								<input class="tbox regFullSort listMod priceMod" placeholder="" value="">
                                <span class="priceWord">원</span>
							</td>
                            <td>
								<select class="sbox regFullSort">
									<option>발주요청</option>
                                    <option>발주요청승인</option>
                                    <option>발주취소요청</option>
                                    <option>발주취소</option>
                                    <option>발주완료</option>
                                </select>
                                <div class="mt2">
                                    <input class="tbox regFullSort listMod" placeholder="취소 사유를 입력해주세요" value="">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="tbox regFullSort listMod" placeholder="담당자명" value="">
                                </div>
                                <div class="mt2">
                                    <input class="tbox regFullSort listMod" placeholder="담당자연락처" value="">
                                </div>
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
						<!-- :: close : ksg_4 : [진맛] 테이블에 등록하는 파트. -->
						<tr class="reged">
                        <td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="발주일" value="01.07">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="발주코드" value="A1010101" readonly>
								</div>
							</td>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="창고명" value="경남창고1">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="창고코드" value="G010111" readonly>
								</div>
							</td>
							<td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="거래처명" value="진주농산">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="거래처코드" value="J010111" readonly>
								</div>
                            </td>
                            <td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="품목명" value="사과">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="품목코드" value="F10111" readonly>
								</div>
                            </td>
                            <td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="품종명" value="부사">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="품종코드" value="G191010" readonly>
								</div>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="바코드" value="br011131" readonly>
							</td>
                            <td>
								<select class="sbox regFullSort">
									<option>직접배송</option>
                                    <option>한진택배</option>
                                    <option selected="">경동택배</option>
                                </select>
                                <div class="mt2">
                                    <input class="tbox regFullSort listMod" placeholder="예시) 7월1일 = 07.01" value="01.14">
                                </div>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="수량" value="827">
                            </td>
                            <td>
								<input class="tbox regFullSort listMod priceMod" placeholder="" value="3,640,000">
                                <span class="priceWord">원</span>
							</td>
                            <td>
								<select class="sbox regFullSort">
									<option>발주요청</option>
                                    <option>발주요청승인</option>
                                    <option>발주취소요청</option>
                                    <option selected="">발주취소</option>
                                    <option>발주완료</option>
                                </select>
                                <div class="mt2">
                                    <input class="tbox regFullSort listMod" placeholder="취소 사유를 입력해주세요" value="특별 사유로 취소함. 비고 참조.">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="tbox regFullSort listMod" placeholder="담당자명" value="곽반장">
                                </div>
                                <div class="mt2">
                                    <input class="tbox regFullSort listMod" placeholder="담당자연락처" value="010-1234-1234">
                                </div>
							</td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="비고" value="과실 상태 불량으로 취소.">
							</td>
							<td>
								<div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn modifySort">저장</a>
                                    <a href="javascript:void(0);" class="btn regSort">발주실행</a>
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