<!-- :: ksg_3 = ksg_20210124_1910 -->
<!-- :: ksg_2 = ksg_20210114_1756 -->
<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
    $tCode					=	'500';
	$lCode					=	'500';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/work/pages/work_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">
			<div class="section horizontalManageSort searcManageSort topLineMod">
				<div class="titleBox manageHeadlineSort">검색</div>
				<div class="conGroup verticalManageSort">
					<table class="searchGroup">
						<colgroup>
							<col width="15%">
							<col width="85%">
						</colgroup>
						<tbody> 
							<tr>
								<th>검색어</th>
								<td>
									<select class="sbox">
										<option>전체</option>
										<option>생산번호</option>
										<option>생산품명</option>
										<option>생산품코드</option>
										<option>창고명</option>
										<option>창고코드</option>
										<option>생산담당자</option> 
										<option>담당자코드</option>
									</select>
									<input class="tbox searchInput topLineSearchMod normal ui-autocomplete-input" placeholder="검색어를 입력해주세요.">
								</td>
							</tr>
							<tr>
								<th>
									생산지시일 
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
						</tbody>
					</table>
					<div class="btnGroup verticalBottomSort inTblSort">
                        <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    </div>
				</div>
			</div>
			<div class="section horizontalManageSort searcManageSort leftFocused1">
				<div class="titleBox manageHeadlineSort">작업지시 목록</div>
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
                            <col style="width : 100px;">
                            <col style="width : 100px;">
							<col style="width : 100px;">
							<col style="width : 50px;">
							<col style="width : 100px;">
							<col style="width : 100px;">
							<col style="width : 120px;">
                            <col style="width : 140px;">
                        </colgroup>
						<thead>
						<tr>
							<th>생산번호</th>
							<th>생산지시일</th>
							<th>
								생산품명<br>
								(생산품코드)
							</th>
							<th>생산수량</th>
							<th>
								<div>창고명</div>
								<div>(창고코드)</div>
							</th>
							<th>
								<div>생산담당</div>
								<div>(담당자코드)</div>
							</th>
							<th>생산상태</th>
							<th>비고</th>
						</tr>
						</thead>
						<tbody>
						<!-- :: open : ksg_3 : [진맛] 인풋으로 구성된 좌측 테이블 내용 파트. 여기서는 고정폼을 사용할 것이므로 display : none 처리. -->
						<tr style="display : none;">
							<td>
								<input class="tbox regFullSort listMod" placeholder="생산번호" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="생산지시일" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="생산품명" value="">
								<input class="tbox regFullSort listMod" placeholder="생산품코드" value="">
							</td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="생산수량" value="">
                            </td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="창고명" value="">
								<input class="tbox regFullSort listMod" placeholder="창고코드" value="">
							</td>
							<td>
								<input class="tbox regFullSort listMod" placeholder="생산자담당자" value="">
								<input class="tbox regFullSort listMod" placeholder="담당자코드" value="">
							</td>
							<td>
                                <select class="sbox regFullSort">
									<option>-선택-</option>
									<option>1. 생산 대기</option>
                                    <option>2. 생산중</option>
									<option>3. 생산 완료</option>
									<option>4. 생산 취소</option>
								</select>
								<div class="mt2">
                                    <input class="tbox regFullSort" placeholder="취소 사유" value="">
                                </div>
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
						<!-- :: close : ksg_3 : [진맛] 인풋으로 구성된 좌측 테이블 내용 파트. 여기서는 고정폼을 사용할 것이므로 display : none 처리. -->
						<tr class="reged">
							<td>115522</td>
							<td>01.05</td>
							<td>
								<div>딸기주스</div>
								<div class="mt2">(451412)</div>
							</td>
							<td>300</td>
							<td>
								<div>경남창고1</div>
								<div class="mt2">(662412)</div>
							</td>
							<td>
								<div>곽반장</div>
								<div class="mt2">(566672)</div>
							</td>
							<td>
                                <select class="sbox regFullSort">
									<option>-선택-</option>
									<option>1. 생산 대기</option>
                                    <option>2. 생산중</option>
									<option>3. 생산 완료</option>
									<option>4. 생산 취소</option>
								</select>
								<div class="mt2">
                                    <input class="tbox regFullSort" placeholder="취소 사유" value="">
                                </div>
							</td>
                            <td>
                                01.05 생산내용                         
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






			<!-- :: open : ksg_3 : [진맛] 우측 작업지시 내용 테이블 파트. -->
			<div class="section horizontalManageSort leftFocused2">
                <div class="titleBox manageHeadlineSort">상세정보</div>
				<div class="specRegGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<div class="titleBox inlistConSort">
								<div class="titleText">생산품 정보</div>
							</div>
						</div>
						<table class="infoGroup">
							<colgroup>
								<col width="100">
								<col width="*">
							</colgroup>
							<tbody>
							<tr>
								<th>생산번호</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>생산지시일</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>생산품명</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>생산품코드</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>생산수량</th>
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
								<th>생산담당자</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>담당자코드</th>
								<td>
									<input class="tbox regFullSort" value="">
								</td>
							</tr>
							<tr>
								<th>생산상태</th>
								<td>
									<input class="tbox regFullSort" value="">
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
				<!-- :: open : ksg_3 : [진맛] 작업지시 목록 파트. -->
				<div class="specInfoGroup hide">
					<div class="conGroup verticalManageSort">
						<div class="headLineBox listControlSort">
							<table class="searchGroup inTblSort">
								<colgroup>
									<col style="width : 30%;">
									<col style="width : 70%;">
								</colgroup>
								<tbody>
									<tr>
										<th>검색어</th>
										<td>
											<select class="sbox">
												<option>전체</option>
												<option>창고명</option>
												<option>창고코드</option>
												<option>작업지시자</option>
												<option>작업지시상태</option>
											</select>
											<input class="tbox searchInput topLineSearchMod" name="dd" type="text" placeholder="검색어를 입력해주세요.">
										</td>
									</tr>
									<tr>
										<th>
											작업지시일
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
								</tbody>
							</table>
                    		<div class="btnGroup verticalBottomSort inTblSort">
                    		    <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    		</div>
							<div class="titleBox inlistConSort">
								<div class="titleText">사용 원자재 목록</div>
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
						<table class="infoGroup txtCSort">
							<colgroup>
								<col style="width : 80px;">
								<col style="width : 80px;">
								<col style="width : 80px;">
								<col style="width : 80px;">
								<col style="width : 80px;">
								<col style="width : 80px;">
								<col style="width : 100px;">
								<col style="width : 40px;">
							</colgroup>
							<thead>
							<tr>
								<th>
									<div>작업지시번호</div>
									<div>작업지시날짜</div>
								</th>
								<th>
									창고명<br>
									(창고코드)
								</th>
								<th>작업지시자</th>
								<th>작업지시유형</th>
								<th>작업지시내용</th>
								<th>작업지시상태</th>
								<th>비고</th>
								<th>관리</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									<div>
										<input class="tbox regFullSort listMod" placeholder="작업지시번호" value="">
									</div>
									<div class="mt2">
										<input class="tbox regFullSort listMod" placeholder="작업지시날짜" value="">
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
									<input class="tbox regFullSort listMod" placeholder="작업지시자" value="">
                        	    </td>
                        	    <td>
									<input class="tbox regFullSort listMod" placeholder="작업지시유형" value="">
								</td>

								<td>
									<input class="tbox regFullSort listMod" placeholder="작업지시내용" value="">
								</td>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 생산 대기</option>
                        	            <option>2. 생산중</option>
										<option>3. 생산 완료</option>
										<option>4. 생산 취소</option>
									</select>
									<div class="mt2">
                        	            <input class="tbox regFullSort" placeholder="취소 사유" value="">
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
							<tr>
								<td>
									<div>
										<input class="tbox regFullSort listMod" placeholder="작업지시번호" value="110055">
									</div>
									<div class="mt2">
										<input class="tbox regFullSort listMod" placeholder="작업지시날짜" value="01.05">
									</div>
								</td>
								<td>
									<div>
										<input class="tbox regFullSort listMod" placeholder="창고명" value="경산창고1">
									</div>
									<div class="mt2">
										<input class="tbox regFullSort listMod" placeholder="창고코드" value="424211">
									</div>
								</td>
								<td>
									<input class="tbox regFullSort listMod" placeholder="작업지시자" value="곽반장">
                        	    </td>
                        	    <td>
									<input class="tbox regFullSort listMod" placeholder="작업지시유형" value="일반작업">
								</td>
								
								<td>
									<input class="tbox regFullSort listMod" placeholder="작업지시내용" value="일반생산작업">
								</td>
								<td>
									<select class="sbox regFullSort">
										<option>-선택-</option>
										<option>1. 생산 대기</option>
                        	            <option selected="">2. 생산중</option>
										<option>3. 생산 완료</option>
										<option>4. 생산 취소</option>
									</select>
									<div class="mt2 hide">
                        	            <input class="tbox regFullSort" placeholder="취소 사유" value="">
                        	        </div>
								</td>
								<td>
									<input class="tbox regFullSort listMod" placeholder="비고" value="5일 일반 생산작업">
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
				</div>
				<!-- :: close : ksg_3 : [진맛] 작업지시 목록 파트. -->
            </div>
			<!-- :: close : ksg_3 : [진맛] 우측 작업지시 내용 테이블 파트. -->
		</div>
	</div>
</div>
<script src="/common/js/datePick.js"></script>
<script>
// :: open : ksg_4 : [진맛] 원자재 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
$(document).on('click', '.conGroup.verticalManageSort .searchResultTable tr.reged', function(){
    $('.specInfoGroup.hide').removeClass('hide');
	$('.specRegGroup').removeClass('hide');
    $('.specInfoGroup').next('.btnGroup.horizontalBottomSort').removeClass('hide');
	$(this).siblings('tr').removeClass('activated');
	$(this).addClass('activated');
});
// :: close : ksg_4 : [진맛] 원자재 목록 중, 등록된 테이블 라인(class="reged")가 있는 곳만, 클릭했을 때 우측 상세정보가 표시되도록 하는 스크립트.
</script>
</body>
</html>