<!-- :: ksg_2 = ksg_20210120_2050 -->
<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'1100';
	$lCode					=	'1104';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/buy/pages/buy_left.php'; ?>
	<!-- :: close : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<div class="wrapper">
		<div class="contents">
            <!-- :: open : ksg_2 : [진맛] 서브 헤드메뉴 파트. -->
            <div class="subMenuTab">
            	<a href="/buy/cardBuy" class="btn subPartMod">카드매입내역</a>
            	<a href="/buy/bankTransfer" class="btn subPartMod activated">계좌이체내역</a>
            </div>
            <!-- :: close : ksg_2 : [진맛] 서브 헤드메뉴 파트. -->
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
									<option>이체번호</option>
                                    <option>출금은행</option>
                                    <option>출금계좌</option>
                                    <option>입금계좌</option>
                                    <option>예금주</option>
								</select>
								<input class="tbox searchInput topLineSearchMod normal ui-autocomplete-input" placeholder="검색어를 입력해주세요.">
                            </td>
						</tr>  
						<tr>
						<th>
								검색일자
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
                                상태
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
										<div class="checkBoxTitle">이체대기</div>
									</div>
									<div class="checkBoxCase">
										<div class="checkBoxIconBox">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
										<div class="checkBoxTitle">이체완료</div>
									</div>
									<div class="checkBoxCase">
										<div class="checkBoxIconBox">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
										<div class="checkBoxTitle">이체취소</div>
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
				<div class="titleBox manageHeadlineSort">카드매입 목록</div>
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
                            <col style="width : 120px;">
                            <col style="width : 120px;">
                            <col style="width : 120px;">
                            <col style="width : 120px;">
                            <col style="width : 120px;">
                            <col style="width : 120px;">
                            <col style="width : 100px;">
                            <col style="width : 120px;">
                            <col style="width : 100px;">
                            <col style="width : 200px;">
                            <col style="width : 120px;">
                            <col style="width : 50px;">
                        </colgroup>
						<thead>
						<tr>
                            <th>이체번호</th>
                            <th>출금은행</th>
                            <th>출금계좌</th>
                            <th>입금계좌</th>
                            <th>예금주</th>
                            <th>이체금액</th>
                            <th>이체요청일</th>
                            <th>이체상태</th>
                            <th>이체일시</th>
                            <th>비고</th>
                            <th>등록일</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="이체번호" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod " placeholder="출금은행" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod " placeholder="출금계좌" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod " placeholder="입금계좌" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod " placeholder="예금주" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="이체금액" value="">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod " placeholder="이체요청일" value="">
                            </td>
                            <td>
                                <select class="sbox regFullSort">
							    	<option>1. 이체대기</option>
							    	<option>2. 이체완료</option>
							    	<option>3. 이체취소</option>
							    </select>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod " placeholder="이체일시" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="비고" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="등록일" value="" readonly>
                            </td>
							<td>
								<div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn regSort">등록</a>
                                    <a href="javascript:void(0);" class="btn delSort">삭제</a>
								</div>
							</td>
                        </tr>
                        <tr>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="이체번호" value="123413123">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod " placeholder="출금은행" value="우리은행">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod " placeholder="출금계좌" value="1234-12-1234">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod " placeholder="입금계좌" value="1234-12-1234">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod " placeholder="예금주" value="곽반장">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="이체금액" value="140,000,000">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod " placeholder="이체요청일" value="07.01">
                            </td>
                            <td>
                                <select class="sbox regFullSort">
							    	<option>1. 결제대기</option>
							    	<option selected="">2. 결제완료</option>
							    	<option>3. 결제취소</option>
							    </select>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod " placeholder="이체일시" value="12.03">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="비고" value="강남 일반 전표 2021.01.11">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="등록일" value="2021.01.02 13:02:45" readonly>
                            </td>
							<td>
								<div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn modifySort">저장</a>
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
</script>
</body>
</html>