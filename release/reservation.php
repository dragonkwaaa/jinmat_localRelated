<!-- :: ksg_3 = ksg_20210124_1910 -->
<!-- :: ksg_2 = ksg_20210114_1756 -->
<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
    $tCode					=	'600';
	$lCode					=	'601';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/release/pages/release_left.php'; ?>
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
										<option>생산번호</option>
										<option>생산품명</option>
										<option>생산품코드</option>
										<option>창고명</option>
										<option>창고코드</option>
										<option>생산담당자</option>
										<option>담당자코드</option>
									</select>
									<input class="tbox searchInput topLineSearchMod ui-autocomplete-input" placeholder="검색어를 입력해주세요.">
								</td>
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
			<div class="section horizontalManageSort fullMod">
				<div class="titleBox manageHeadlineSort">출고예약 목록</div>
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
                            <col style="width : 90px;">
                            <col style="width : 180px;">
							<col style="width : 90px;">
							<col style="width : 90px;">
							<col style="width : 90px;">
							<col style="width : 150px;">
							<col style="width : 150px;">
                            <col style="width : 220px;">
                            <col style="width : 130px;">
                            <col style="width : 60px;">
                            <col style="width : 100px;">
                            <col style="width : 110px;">
                            <col style="width : 80px;">
                            <col style="width : 50px;">
                        </colgroup>
						<thead>
						<tr>
                            <th>
                                출고<br>
                                예약번호
                            </th>
                            <th>
                                출고 출처<br>
                                (출고날짜)
                            </th>
                            <th>
                                창고명<br>
                                (창고코드)
                            </th>
                            <th>
                                고객명<br>
                                (고객코드)
                            </th>
                            <th>
                                품목명<br>
                                (품목코드)
                            </th>
                            <th>
                                주문자<br>
                                (연락처)
                            </th>
                            <th>
                                실수령자<br>
                                (연락처)
                            </th>
                            <th>수령주소</th>
                            <th>결제방법</th>
                            <th>송하인번호</th>
                            <th>
                                출고담당자<br>
                                (출고담당코드)
                            </th>
                            <th>출고상태</th>
                            <th>출고금액</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr class="reged">
							<td>115522</td>
							<td>
                                <div>경기1</div>
                                <div>(2021.01.12 12:34:55)</div>
                            </td>
							<td>
								<div>경기창고1</div>
								<div class="mt2">(451412)</div>
							</td>
							<td>
								<div>곽반장</div>
								<div class="mt2">(566672)</div>
                            </td>
                            <td>
								<div>사과</div>
								<div class="mt2">(566672)</div>
                            </td>
                            <td>
								<div>곽주주</div>
								<div class="mt2">(010-1234-1234)</div>
                            </td>
                            <td>
								<div>곽고객</div>
                                <div class="mt2">(010-1234-1234)</div>
                            </td>
                            <td>서울시 영등포구 여의도동 여의중학교</td>
							<td>
                                <select class="sbox regFullSort">
									<option>-선택-</option>
									<option>카드결제</option>
                                    <option selected="">계좌이체</option>
									<option>무통장입금</option>
								</select>
							</td>
                            <td>114455</td>
                            <td>
								<div>곽명인</div>
                                <div class="mt2">(1144567)</div>
                            </td>
                            <td>
                                <select class="sbox regFullSort">
									<option>-선택-</option>
									<option>출고대기</option>
                                    <option selected="">출고중</option>
                                    <option>출고완료</option>
                                    <option>출고취소</option>
								</select>
								<div class="mt2">
                                    <input class="tbox regFullSort" placeholder="취소 사유" value="">
                                </div>
                            </td>
                            <td>145,670,000</td>
                            <td>
                                <div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn modifySort releasePopBtn">상세</a>
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



<!-- :: open : ksg_20ba0127_1d18 : [진맛] 상세 팝업 파트. -->
<div class="popup centerSort releasePop">
	<div class="popupCon wideSort">
		<a href="javascript:closePop()">
			<img src="/common/img/close.png" class="close">
		</a>
		<div class="titleBox popupSort">
			상세정보
		</div>
		<div class="conGroup verticalManageSort">
			<table class="infoGroup">
				<colgroup>
					<col width="*">
				</colgroup>
				<tbody>
				<tr>
					<th>출고예약번호</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
				<tr>
					<th>출고예약날짜</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				<tr>
					<th>출고출처</th>
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
					<th>품목명</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
				<tr>
					<th>품목코드</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
				<tr>
					<th>품목정보</th>
					<td>
                        <!-- :: open : ksg_3 : [진맛] 테이블 내에서 품목을 등록하는 병렬 내용 파트.. -->
                        <!-- :: open : ksg_3 : [진맛] 왼쪽 품목 검색 파트. -->
                        <div class="inTblBoxGroup twinSort wearingGoodsMod">
                            <!-- :: open : ksg_3 : [진맛] 품목을 검색하고 등록하는 파트. -->
                            <div class="inTblSchGroup">
                                <select class="sbox">
						    		<option>품목명</option>
						    		<option>품목코드</option>
						    	</select>
                                <input class="tbox searchInput inTblSort" placeholder="검색어를 입력해주세요.">
                                <div class="btnGroup inTableSearch">
					        		<a href="javascript:void(0);" class="btn searchSort">등록</a>
					        	</div>
                            </div>
							<!-- :: close : ksg_3 : [진맛] 품목을 검색하고 등록하는 파트. -->
							<!-- :: open : ksg_4 : [진맛] 내부 테이블(진짜 <table> 태그 사용)에 대한 내용 파트. -->
							<table class="searchResultTable">
								<colgroup>
                    		        <col style="width : 100px;">
                    		        <col style="width : 100px;">
                    		        <col style="width : 100px;">
                    		        <col style="width : 50px;">
                    		    </colgroup>
								<thead>
								<tr>
                    		        <th>
                    		            품종명<br>
                    		            (품종코드)
                    		        </th>
                    		        <th>수량</th>
									<th>출고단가</th>
                    		        <th>관리</th>
								</tr>
								</thead>
								<tbody>
                    		    <tr>
                    		        <td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
                    		        <td>450</td>
                    		        <td>1,400원</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn regSort">선택</a>
										</div>
									</td>
                    		    </tr>
								</tbody>
                    		</table>
							<!-- :: close : ksg_4 : [진맛] 내부 테이블(진짜 <table> 태그 사용)에 대한 내용 파트. -->
                            <!-- :: open : ksg_3 : [진맛] 검색 결과에 대한 내부 페이징 파트. -->
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
                            <!-- :: close : ksg_3 : [진맛] 검색 결과에 대한 내부 페이징 파트. -->
                        </div>
                        <!-- :: close : ksg_3 : [진맛] 왼쪽 품목 검색 파트. -->
                        <!-- :: open : ksg_3 : [진맛] 우측 선택된 품목 파트. -->
                        <div class="inTblBoxGroup twinSort wearingGoodsMod">
							<!-- :: open : ksg_4 : [진맛] 내부 테이블(진짜 <table> 태그 사용)에 대한 내용 파트. -->
							<table class="searchResultTable">
								<colgroup>
									<col style="width : 100px;">
                    		        <col style="width : 100px;">
                    		        <col style="width : 100px;">
                    		        <col style="width : 50px;">
                    		    </colgroup>
								<thead>
								<tr>
                    		        <th>
                    		            품종명<br>
                    		            (품종코드)
                    		        </th>
                    		        <th>수량</th>
									<th>출고단가</th>
                    		        <th>관리</th>
								</tr>
								</thead>
								<tbody>
                    		    <tr>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
                    		        <td>450</td>
                    		        <td>1,400원</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
                    		        <td>450</td>
                    		        <td>1,400원</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
                    		        <td>450</td>
                    		        <td>1,400원</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
                    		        <td>450</td>
                    		        <td>1,400원</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
                    		        <td>450</td>
                    		        <td>1,400원</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
                    		        <td>450</td>
                    		        <td>1,400원</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
                    		        <td>450</td>
                    		        <td>1,400원</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
                    		        <td>450</td>
                    		        <td>1,400원</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
                    		            <div>
                    		                부사
                    		            </div>
                    		            <div class="mt5">
                    		                (115122)
                    		            </div>
									</td>
                    		        <td>450</td>
                    		        <td>1,400원</td>
                    		        <td>
										<div class="btnGroup inListTable">
											<a href="javascript:void(0);" class="btn delSort">삭제</a>
										</div>
									</td>
								</tr>
								</tbody>
                    		</table>
							<!-- :: close : ksg_4 : [진맛] 내부 테이블(진짜 <table> 태그 사용)에 대한 내용 파트. -->
                        </div>
                        <!-- :: close : ksg_3 : [진맛] 우측 선택된 품목 파트. -->
                        <!-- :: close : ksg_3 : [진맛] 테이블 내에서 품목을 등록하는 병렬 내용 파트.. -->
					</td>
                </tr>
				<tr>
					<th>고객명</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
				<tr>
					<th>고객코드</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
				<tr>
					<th>송하인</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
				<tr>
					<th>실수령자</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
				<tr>
					<th>출고주소</th>
					<td>
						<div>
							<input class="tbox regShortSort" value="">
						</div>
						<div class="mt2">
							<input class="tbox regFullSort" value="">
						</div>
					</td>
                </tr>
				<tr>
					<th>송하인번호</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
				</tr>
				<tr>
					<th>출고담당자</th>
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
					<th>출고금액</th>
					<td>
						<input class="tbox regFullSort" value="">
					</td>
                </tr>
				</tbody>
			</table>
		</div>
		<div class="btnGroup verticalBottomSort">
			<a href="javascript:closePop();" class="btn searchSort">저장</a>
		</div>
	</div>
</div>  
<!-- :: close : ksg_20ba0127_1d18 : [진맛] 상세 팝업 파트. -->
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
// :: open : ksg_b021ja27_1d3a : [진맛] : 팝업 오픈하는 스크립트.
$(document).on('click', '.btn.releasePopBtn', function(){
	$('.popup.centerSort.releasePop').show();
	$('.contents').addClass('overlay');
});
// :: close : ksg_b021ja27_1d3a : [진맛] : 팝업 오픈하는 스크립트.
</script>
</body>
</html>