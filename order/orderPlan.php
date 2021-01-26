<!-- :: ksg_5 = ksg_20210118_1639 -->
<!-- :: ksg_4 = ksg_20210112_2039 -->
<!-- :: ksg_3 = ksg_20210112_1604 -->
<!-- :: ksg_2 = ksg_20210109_1554 -->
<!-- :: ksg_1 = ksg_20210108_1930 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'200';
	$lCode					=	'0202';
?>
<body>
<div class="container">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/order/pages/order_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">
			<!-- :: single : ksg_4 : [진맛] 원자재 검색 파트 있던 곳. -->
			<!-- :: open : ksg_3 : [진맛] 테이블 병렬일 때의 총괄 컨트롤 박스 파트. -->
			<div class="headLineBox pageControlSort">
                <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">엑셀저장</a>
				<a href="javascript:void(0);" class="btn listTopSort addStaffBtn">인쇄</a>
			</div>
			<!-- :: close : ksg_3 : [진맛] 테이블 병렬일 때의 총괄 컨트롤 박스 파트. -->
            <!-- :: close : ksg_2 : [진맛] 입력창 / 검색버튼 / 추가버튼이 포함된 검색어 파트. -->
			<div class="section horizontalManageSort searcManageSort extendMod">
				<div class="titleBox manageHeadlineSort">발주계획 목록</div>
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
						<!-- :: open : ksg_4 : [진맛] 테이블 내의 검색어 파트. -->
						<table class="searchGroup inTblSort">
							<colgroup>
								<col style="width : 20%;">
								<col style="width : 80%;">
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
										<input class="tbox searchInput topLineSearchMod" name="dd" type="text" placeholder="검색어를 입력해주세요.">
									</td>
                                </tr>
                                <tr>
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
								    </td>
                                </tr>
                                <tr>
                                    <th>
                                        배송방법
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
                                <tr>
                                    <th>
                                        종결여부
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
							    </tr>
                                <tr>
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
							</tbody>
						</table>
                    	<div class="btnGroup verticalBottomSort inTblSort">
                    	    <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    	</div>
						<!-- :: close : ksg_4 : [진맛] 테이블 내의 검색어 파트. -->
						<div class="titleBox inlistConSort">
							<div class="titleText">발주계획 목록</div>
							<!-- :: single : ksg_4 : [진맛] 등록 페이지로 이동하는 버튼 있던 곳. -->
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
							<col style="width : 70px;">
                            <col style="width : 70px;">
                            <col style="width : 70px;">
							<col style="width : 70px;">
							<col style="width : 100px;">
                            <col style="width : 100px;">
                            <col style="width : 100px;">
                            <col style="width : 40px;">
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
                                (거래처코드)
                            </th>
                            <th>발주상태</th>
                            <th>
                                발주담당자<br>
                                (담당자연락처)
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
									<input class="tbox regFullSort listMod" placeholder="발주요청일" value="">
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
								<select class="sbox regFullSort">
									<option>발주요청</option>
                                    <option>발주요청승인</option>
                                    <option>발주취소요청</option>
                                    <option>발주취소</option>
                                    <option>발주완료</option>
								</select>
                            </td>
                            <td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="담당자명" value="">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="연락처" value="">
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
									<input class="tbox regFullSort listMod" placeholder="발주요청일" value="2021.01.01">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="발주코드" value="A12391">
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
								<select class="sbox regFullSort">
									<option>발주요청</option>
                                    <option>발주요청승인</option>
                                    <option>발주취소요청</option>
                                    <option>발주취소</option>
                                    <option>발주완료</option>
								</select>
                            </td>
                            <td>
								<div>
									<input class="tbox regFullSort listMod" placeholder="담당자명" value="">
								</div>
								<div class="mt2">
									<input class="tbox regFullSort listMod" placeholder="연락처" value="">
								</div>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" placeholder="비고" value="">
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
				<!-- :: open : ksg_3 : [진맛] 우측의 내용 입력 파트. -->
				<div class="specInfoGroup hide">
                    <div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">발주요청 정보</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
							<tr>
								<th>발주일</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>발주코드</th>
								<td>
									<input class="tbox regFullSort" value="" readonly>
								</td>
                            </tr>
                            <tr>
								<th>품목명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>품목코드</th>
								<td>
									<input class="tbox regFullSort" value="" readonly>
								</td>
                            </tr>
                            <tr>
								<th>품종명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>품종코드</th>
								<td>
									<input class="tbox regFullSort" value="" readonly>
								</td>
                            </tr>
                            <tr>
								<th>유통기한</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>규격</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>수량</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>단가</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>공급가액</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>부가세</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
							<tr>
								<th>창고명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>창고코드</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>창고주소</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>창고연락처</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>배송업체</th>
								<td>
									<select class="sbox regFullSort">
									    <option>1. 진짜 맛있는 과일 계약 물류배송 업체</option>
                                        <option selected="">2. 거래처 계약 물류배송 업체</option>
                                    </select>
								</td>
                            </tr>
                            <tr>
								<th>택배비</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>거래 수량</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>금액처리</th>
								<td>
                                    <select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 선금</option>
										<option>2. 납입시</option>
										<option>3. 후불</option>
										<option>4. 후불여신(개월)</option>
									</select>
								</td>
							</tr>
                            <tr>
								<th>결제방법</th>
								<td>
                                    <select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 우리카드1</option>
										<option>2. 국민카드1</option>
										<option>3. 국민카드2</option>
										<option>4. 국민계좌1</option>
									</select>
									<input class="tbox regFullSort" placeholder="결제방법명 / 카드(은행)명 / 카드(계좌)번호 / 예금주" value="">
								</td>
							</tr>
                            <tr>
								<th>납품일</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>미납금</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>입고자명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>입고자 전화번호</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>입고지 주소</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
                            <tr>
								<th>발주 담당자명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
                            <tr>
								<th>발주 담당자 전화번호</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
                            <tr>
								<th>상태</th>
								<td>
									<select class="sbox regFullSort">
									    <option>1. 발주요청</option>
                                        <option>2. 발주요청승인</option>
                                        <option>3. 발주취소요청</option>
                                        <option>4. 발주취소</option>
                                        <option>5. 발주완료</option>
                                    </select>
                                    <div class="mt2">
                                        <input class="tbox regFullSort" placeholder="취소 사유를 입력해 주십시오" value="">
                                    </div>
								</td>
                            </tr>
                            <tr>
								<th>비고</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
                            </tr>
							</tbody>
						</table>
					</div>
				</div>
                <!-- :: close : ksg_3 : [진맛] 우측의 내용 입력 파트. -->
                <div class="btnGroup horizontalBottomSort">
					<a href="javascript:void(0);" class="btn saveSort">저장</a>
                </div>
            </div>
            <!-- :: close : ksg_2 : [진맛] 우측 테이블 구조. -->
		</div>
	</div>
</div>
<script src="/common/js/datePick.js"></script>
<script>
// :: open : ksg_2 : [진맛] 원자재 목록을 클릭 시, 우측의 테이블 내용과 하단 버튼이 나타나도록 하는 내용. "등록" 파트를 눌러도 우측 내용이 나오는 문제가 있어, 이것은 사용을 중단함.
// $(document).on('click', '.conGroup.verticalManageSort .searchResultTable td', function(){
//     $('.specInfoGroup.hide').removeClass('hide');
//     $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
// 	$('.specRegGroup').addClass('hide');
// 	$(this).parent().siblings('tr').removeClass('activated');
// 	$(this).parent('tr').addClass('activated');
// });
// :: close : ksg_2 : [진맛] 원자재 목록을 클릭 시, 우측의 테이블 내용과 하단 버튼이 나타나도록 하는 내용. "등록" 파트를 눌러도 우측 내용이 나오는 문제가 있어, 이것은 사용을 중단함.
// :: open : ksg_4 : [진맛] 원자재 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
$(document).on('click', '.conGroup.verticalManageSort .searchResultTable tr.reged', function(){
    $('.specInfoGroup.hide').removeClass('hide');
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
	$('.specRegGroup').addClass('hide');
	$(this).siblings('tr').removeClass('activated');
	$(this).addClass('activated');
});
// :: close : ksg_4 : [진맛] 원자재 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
// :: open : ksg_4 : [진맛] 품종 리스트의 "품질" 버튼 클릭 시, 품질 팝업창 표시하는 스크립트.
$(document).on('click', '.btn.popQualMod', function(){
	$('.popup.centerSort.qualitypop').show();
	$('.contents').addClass('overlay');
});
// :: close : ksg_4 : [진맛] 품종 리스트의 "품질" 버튼 클릭 시, 품질 팝업창 표시하는 스크립트.


</script>
</body>
</html>