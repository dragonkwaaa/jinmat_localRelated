<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$lCode					=	'0102';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
            <div class="subMenuTab">
                <a href="/expense/expendList" class="btn subPartMod  activated">지출자료관리</a>
                <a href="/expense/outcomeList" class="btn subPartMod">고정지출관리</a>
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
									<input class="tbox searchInput topLineSearchMod" placeholder="검색어를 입력해주세요.">
								</td>
								<th>
									결제수단
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
							</tr>
                            <tr>
                                <th>
									지출자료분류
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
											<div class="checkBoxTitle">지출결의서</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">기안서</div>
										</div>
										<div class="checkBoxCase">
											<div class="checkBoxIconBox">
												<input type="checkbox" name="" value="">
												<label></label>
											</div>
											<div class="checkBoxTitle">품의서</div>
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
				<div class="titleBox manageHeadlineSort">지출목록</div>
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
                            <col width="100">
                            <col width="100">
                            <col width="80">
                            <col width="120">
                            <col width="90">
                            <col width="90">
                            <col width="90">
                            <col width="90">
                            <col width="200">
                            <col width="120">
                            <col width="80">
                            <col width="80">
                            <col width="80">
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
							<th>
                                <div>지출자료분류</div>
                                <div class="guideWord mt5">
                                    <div>1. 지출결의서</div>
                                    <div>2. 기안서</div>
                                    <div>3. 품의서</div>
                                </div>
                            </th>
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
                            <th>비고</th>
                            <th>등록일</th>
                            <th>승인</th>
							<th>관리</th>
						</tr>
						</thead>
						<tbody>
						<tr>
                            <td></td>
							<td></td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="과목" value="">
                            </td>
							<td>
                               
                                <input class="tbox regFullSort listMod" placeholder="분류" value="">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" value="">
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
								<input class="tbox regFullSort listMod" value="" placeholder="결제수단 구분">
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
                            <td></td>
							<td>
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
							<td>2</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="과목명" value="인건비(비급여)(1234)">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" value="지출결의서(1)">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" value="에이디치히얌(4210)">
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" value="비급여 지급">
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
								<input class="tbox regFullSort listMod" value="계좌이체(2)" placeholder="결제수단 구분">
							</td>
							<td>
								<input class="tbox regFullSort listMod" value="우리계좌1(1109)">
							</td>
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="우리은행" placeholder="은행/카드사">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="1234-1234-1234" placeholder="카드/계좌번호">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="곽주임" placeholder="예금주">
                                </div>
							</td>
                            <td>
								<input class="tbox regFullSort listMod" value="">
							</td>
                            <td>
                                <div>2020.06.01 11:00</div>
                                <div>곽주임(주임)</div>
                            </td>
							<td>
                                <div class="btnGroup inListTable">
                                    <a href="javascript:void(0);" class="btn vertSort modifySort">승인</a>
                                </div>
							</td>
							<td>
								<div class="btnGroup inListTable">
									<a href="javascript:void(0);" class="btn vertSort modifySort">수정</a>
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
							<td>1</td>
                            <td>
                                인건비(비급여)(1234)
                            </td>
							<td>
                                기안서(02)
                            </td>
                            <td>
                                녹십자(1110)
                            </td>
							<td>
                                녹십자 납부금
                            </td>
                            <td>
								0 원
							</td>
                            <td>
                                1,000,000 원
                            </td>
                            <td>
                                계좌이체(2)
							</td>
							<td>
                                우리계좌4(1114)
							</td>
                            <td>
								<div>우리은행</div>
                                <div>1234-1234-1234</div>
                                <div>곽주임</div>
							</td>
                            <td></td>
                            <td>
                                <div>2020.06.01 11:00</div>
                                <div>곽반장(과장)</div>
                            </td>
                            <td>
                                <div>2020.06.01 11:00</div>
                                <div>곽선생(주임)</div>
                            </td>
							<td>
								승인됨
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<script src="/common/js/datePick.js"></script>
<script>
</script>
</body>
</html>