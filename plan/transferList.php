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
                <a href="/plan/dailyTransfer" class="btn subPartMod">일일현금이체리스트</a>
                <a href="/plan/transferList" class="btn subPartMod activated">이체리스트</a>
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
                            <col width="50">
                            <col width="80">
                            <col width="80">
                            <col width="50">
                            <col width="50">
                            <col width="50">
                            <col width="80">
                            <col width="80">
                            <col width="80">
                            <col width="80">
                            <col width="80">
                            <col width="80">
                            <col width="200">
                            <col width="50">
                            <col width="90">
                            <col width="80">
                            <col width="50">
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
                            <th rowspan="2">거래처명</th>
                            <th rowspan="2">해당월</th>
                            <th rowspan="2">회전일</th>
                            <th rowspan="2">분할횟수</th>
                            <th rowspan="2">분할금액</th>
                            <th rowspan="2">당월분</th>
                            <th rowspan="2">합계금액</th>
                            <th rowspan="2">총미지급금</th>
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
							<th rowspan="2">결제일</th>
							<th rowspan="2">비고</th>
                            <th rowspan="2">등록일</th>
                            <th rowspan="2">지급일자</th>
							<th rowspan="2">관리</th>
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
                                <input class="tbox regFullSort listMod" placeholder="일" readonly value="05">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="과목" readonly value="활동비(1010)">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="거래처" readonly value="적십자(1111)">
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="20.5">
							</td>
							<td>
								<input class="tbox regFullSort listMod" readonly value="90">
                            </td>
                            <td>
                                1/4 회
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
                                <div class="f_bold mt5">총 분할금 : 4,000,000원</div>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="카드(1)">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" readonly value="국민카드1(1005)">
                                <div class="f_bold mt5">카드잔액 : 1,000,000,000원</div>
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
								<input class="tbox dateBox regFullSort listMod" readonly value="05.01">
                            </td>
                           
                            <td>
                                <input class="tbox regFullSort listMod" readonly value="인건비 지급함 (카드)">
                            </td>
                            <td>
                                <div>2020.06.05 11:00</div>
                                <div>곽반장(주임)</div>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="06.12">
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
                                <input class="tbox regFullSort listMod" placeholder="일" readonly value="05">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="과목" readonly value="활동비(1010)">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="거래처" readonly value="적십자(1111)">
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="20.5">
							</td>
							<td>
								<input class="tbox regFullSort listMod" readonly value="90">
                            </td>
                            <td>
                                1/4 회
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
                                <div class="f_bold mt5">총 분할금 : 4,000,000원</div>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="계좌(2)">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" readonly value="우리계좌1(1005)">
                                <!-- <div class="f_bold mt5">카드잔액 : 1,000,000,000원</div> -->
							</td>
							
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" readonly value="우리은행" placeholder="은행/카드사">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" readonly value="5544-12-4444" placeholder="카드/계좌번호">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" readonly value="곽주임" placeholder="예금주">
                                </div>
							</td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="06.01">
                            </td>
                           
                            <td>
                                <input class="tbox regFullSort listMod" readonly value="인건비 지급함">
                            </td>
                            <td>
                                <div>2020.06.05 11:00</div>
                                <div>곽반장(주임)</div>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="06.12">
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
                                <input class="tbox regFullSort listMod" placeholder="일" readonly value="05">
                            </td>
							<td>
                                <input class="tbox regFullSort listMod" placeholder="과목" readonly value="활동비(1010)">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="거래처" readonly value="적십자(1111)">
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="20.5">
							</td>
							<td>
								<input class="tbox regFullSort listMod" readonly value="90">
                            </td>
                            <td>
                                1/4 회
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
                                <div class="f_bold mt5">총 분할금 : 4,000,000원</div>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="카드(1)">
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" readonly value="국민카드1(1005)">
                                <div class="f_bold mt5">카드잔액 : 1,000,000,000원</div>
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
								<input class="tbox regFullSort listMod" readonly value="04.05">
                            </td>
                           
                            <td>
                                <input class="tbox regFullSort listMod" readonly value="인건비 지급함 (카드)">
                            </td>
                            <td>
                                <div>2020.06.05 11:00</div>
                                <div>곽반장(주임)</div>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="06.12">
							</td>
							<td>
								<div>승인됨</div>
                                <div>2020.07.01</div>
                                <div>곽반장(주임)</div>
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