<!-- :: ksg_2 = ksg_20210120_2050 -->
<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'300';
	$lCode					=	'0304';
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
            	<a href="/buy/cardBuy" class="btn subPartMod  activated">카드매입내역</a>
            	<a href="/buy/bankTransfer" class="btn subPartMod ">계좌이체내역</a>
            </div>
            <!-- :: close : ksg_2 : [진맛] 서브 헤드메뉴 파트. -->
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
							<th>검색어</th>
							<td>
								<select class="sbox">
									<option>전체</option>
									<option>카드명</option>
                                    <option>카드번호</option>
                                    <option>카드소유주</option>
									<option>거래처명</option>
									<option>거래처코드</option>
								</select>
								<input class="tbox searchInput topLineSearchMod ui-autocomplete-input" placeholder="검색어를 입력해주세요.">
                            </td>
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
								<div class="btnGroup inTableSearch">
									<a href="javascript:void(0);" class="btn searchSort">검색</a>
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
										<div class="checkBoxTitle">결제대기</div>
									</div>
									<div class="checkBoxCase">
										<div class="checkBoxIconBox">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
										<div class="checkBoxTitle">결제완료</div>
									</div>
									<div class="checkBoxCase">
										<div class="checkBoxIconBox">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
										<div class="checkBoxTitle">결제취소</div>
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
                            <col style="width : 100px;">
                            <col style="width : 150px;">
                            <col style="width : 250px;">
                            <col style="width : 150px;">
                            <col style="width : 50px;">
                        </colgroup>
						<thead>
						<tr>
                            <th>카드명</th>
                            <th>
                                카드번호<br>
                                (소유주)
                            </th>
                            <th>
                                거래처<br>
                                (거래처코드)
                            </th>
                            <th>금액합계</th>
                            <th>부가세</th>
                            <th>상태</th>
                            <th>
                                전표종류<br>
                                (전표번호)
                            </th>
                            <th>비고</th>
                            <th>등록일</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="카드명" value="">
                            </td>
                            <td>
                                <div>
                                    <input class="tbox regFullSort listMod " placeholder="카드번호" value="">
                                </div>
                                <div class="mt2">
                                    <input class="tbox regFullSort listMod " placeholder="소유주" value="">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="tbox regFullSort listMod " placeholder="거래처" value="">
                                </div>
                                <div class="mt2">
                                    <input class="tbox regFullSort listMod " placeholder="거래처코드" value="">
                                </div>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="금액합계" value="">
                                <span class="priceWord">원</span>
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="부가세" value="">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <select class="sbox regFullSort">
							    	<option>1. 결제대기</option>
							    	<option>2. 결제완료</option>
							    	<option>3. 결제취소</option>
							    </select>
							</td>
							<td>
                                <div>
                                    <input class="tbox regFullSort listMod " placeholder="전표종류" value="">
                                </div>
                                <div class="mt2">
                                    <input class="tbox regFullSort listMod " placeholder="전표번호" value="">
                                </div>
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
                                <input class="tbox regFullSort listMod" placeholder="카드명" value="우리카드1">
                            </td>
                            <td>
                                <div>
                                    <input class="tbox regFullSort listMod " placeholder="카드번호" value="1234-12-1234">
                                </div>
                                <div class="mt2">
                                    <input class="tbox regFullSort listMod " placeholder="소유주" value="곽반장">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="tbox regFullSort listMod " placeholder="거래처" value="강남농원1">
                                </div>
                                <div class="mt2">
                                    <input class="tbox regFullSort listMod " placeholder="거래처코드" value="G1234123">
                                </div>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="금액합계" value="140,000,000">
                                <span class="priceWord">원</span>
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="부가세" value="140,000">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <select class="sbox regFullSort">
							    	<option>1. 결제대기</option>
							    	<option selected="">2. 결제완료</option>
							    	<option>3. 결제취소</option>
							    </select>
							</td>
							<td>
                                <div>
                                    <input class="tbox regFullSort listMod " placeholder="전표종류" value="일반전표">
                                </div>
                                <div class="mt2">
                                    <input class="tbox regFullSort listMod " placeholder="전표번호" value="12344321123">
                                </div>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="비고" value="강남 일반 전표 2021.01.11">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="등록일" value="2021.01.02 13:02:45" readonly>
                            </td>
							<td>
								<div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn regSort">등록</a>
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