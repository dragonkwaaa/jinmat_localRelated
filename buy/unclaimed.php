<!-- :: ksg_1 = ksg_20210108_1726 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$tCode					=	'1100';
	$lCode					=	'1102';
?> 
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
    <!-- :: open : ksg_1 : [진맛] 좌측메뉴 파트. -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/buy/pages/buy_left.php'; ?>
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
										<option>거래처명</option>
                                        <option>거래처코드</option>
                                        <option>품목명</option>
                                        <option>품목코드</option> 
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
						</tbody>
                    </table>
                    <div class="btnGroup verticalBottomSort inTblSort">
                        <a href="javascript:void(0);" class="btn singleSearchMod">검색</a>
                    </div>
				</div>
			</div>
			<div class="section horizontalManageSort extendMod">
				<div class="titleBox manageHeadlineSort">미청구현황</div>
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
                            <col style="width : 100px;">
                            <col style="width : 100px;">
                            <col style="width : 50px;">
                            <col style="width : 100px;">
                            <col style="width : 100px;">
                            <col style="width : 100px;">
                            <col style="width : 150px;">
                            <col style="width : 100px;">
                            <col style="width : 50px;">
                        </colgroup>
						<thead>
						<tr>
							<th>
                                거래처명<br>
                                (거래처코드)
                            </th>
                            <th>
                                품목명<br>
                                (품목코드)
                            </th>
                            <th>수량</th>
                            <th>단가</th>
                            <th>공급가액</th>
                            <th>부가세</th>
                            <th>적요(비고)</th>
                            <th>등록일</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
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
                                <input class="tbox regFullSort listMod" placeholder="수량" value="">
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="단가" value="">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="공급가액" value="">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="부가세" value="">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="적요(비고)" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="등록일" value="" readonly>
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="/rawMat/rawMatSpec" class="btn regSort">등록</a>
								</div>
							</td>
                        </tr>
                        <tr>
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
                                <input class="tbox regFullSort listMod" placeholder="수량" value="">
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="단가" value="">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="공급가액" value="">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" placeholder="부가세" value="">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="적요(비고)" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="등록일" value="" readonly>
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="/rawMat/rawMatSpec" class="btn modifySort">수정</a>
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