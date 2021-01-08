<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$lCode					=	'0106';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
            <div class="subMenuTab">
                <a href="/plan/" class="btn subPartMod">일일현금지출관리</a>
                <a href="/plan/dailyTransfer" class="btn subPartMod activated">일일현금이체리스트</a>
                <a href="/plan/transferList" class="btn subPartMod">이체리스트</a>
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
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">선택항목승인</a>
                            <a href="javascript:void(0);" class="btn listTopSort addStaffBtn">선택항목반려</a>
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
                            <col width="90">
                            <col width="90">
                            <col width="200">
                            <col width="50">
                            <col width="90">
                            <col width="50">
                            <col width="80">
                        </colgroup>
						<thead>
						<tr>
                            <th>
                                <div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
                            </th>
							<th>일</th>
							<th>과목</th>
                            <th>거래처</th>
                            <th>적요</th>
                            <th>입금</th>
                            <th>지출</th>
                            <th>
                                <div>결제수단 구분</div>
                                <div class="guideWord mt5">
                                    <div>1. 카드</div>
                                    <div>2. 계좌이체</div>
                                    <div>3. 어음</div>
                                    <div>4. B2B</div>
                                </div>
                            </th>
							<th>결제수단</th>
							<th>결제수단정보</th>
							<th>결제일</th>
                            <th>비고</th>
                            <th>등록일</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
                                <div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="일" value="05" readonly>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="과목" value="인건비(급여)(1234)" readonly>
                            </td>
							<td>
								<input class="tbox regFullSort listMod" value="에이디치히얌(5301)" readonly>
							</td>
							<td>
                                <input class="tbox regFullSort listMod" value="6월 지급금" readonly>
							</td>

							<td>
								<input class="tbox regFullSort listMod priceMod" value="" readonly>
								<div class="priceWord">원</div>
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="1,000,000" readonly>
                                <div class="priceWord">원</div>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" value="카드(1)" readonly>
							</td>
							<td>
                                <input class="tbox regFullSort listMod" value="우리카드_1(1111)" readonly>
							</td>
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="우리은행" placeholder="은행/카드사" readonly>
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="1234-4131-5555" placeholder="카드/계좌번호" readonly>
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="곽반장" placeholder="예금주" readonly>
                                </div>
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="07.01" readonly>
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="" readonly>
                            </td>
                            <td>
                                <div>2020.06.05 11:00</div>
                                <div>곽반장(주임)</div>
                            </td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">승인</a>
									<a href="javascript:void(0);" class="btn delSort">반려</a>
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
                                <input class="tbox regFullSort listMod" placeholder="일" value="04" readonly>
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="과목" value="인건비(급여)(1234)" readonly>
                            </td>
							<td>
								<input class="tbox regFullSort listMod" value="에이디치히얌(5301)" readonly>
							</td>
							<td>
                                <input class="tbox regFullSort listMod" value="6월 지급금" readonly>
							</td>

							<td>
								<input class="tbox regFullSort listMod priceMod" value="" readonly>
								<div class="priceWord">원</div>
							</td>
							<td>
                                <input class="tbox regFullSort listMod priceMod" value="1,000,000" readonly>
                                <div class="priceWord">원</div>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" value="카드(1)" readonly>
							</td>
							<td>
                                <input class="tbox regFullSort listMod" value="우리카드_1(1111)" readonly>
							</td>
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="우리은행" placeholder="은행/카드사" readonly>
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="1234-4131-5555" placeholder="카드/계좌번호" readonly>
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="곽반장" placeholder="예금주" readonly>
                                </div>
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="07.01" readonly>
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="" readonly>
                            </td>
                            <td>
                                <div>2020.06.05 11:00</div>
                                <div>곽반장(주임)</div>
                            </td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn regSort">승인</a>
									<a href="javascript:void(0);" class="btn delSort">반려</a>
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


<script src="/common/js/datePick.js"></script>
<script></script>
</body>
</html>