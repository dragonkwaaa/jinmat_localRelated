<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$lCode					=	'0108';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
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
										<option>결제수단</option>
										<option>업체명</option>
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
									검색기간
								</th>
								<td colspan="4">
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
				<div class="titleBox manageHeadlineSort">카드관리</div>
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
                                <div class="tAlignR mt5">금액 총계 : 200,000,000 원</div>
								<div class="tAlignR mt5">사용금액 합계 : 100,000,000 원</div>
								<div class="tAlignR mt5">잔액 합계 : 100,000,000 원</div>
							</td>
						</tr>
						</tbody>
					</table>
					<table class="searchResultTable">
						<colgroup>
                            <col width="30">
                            <col width="90">
                            <col width="90">
                            <col width="90">
                            <col width="200">
                            <col width="90">
                            <col width="90">
                            <col width="90">
                            <col width="150">
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
                            <th>전체금액</th>
							<th>결제수단정보</th>
                            <th>업체명</th>
                            <th>사용금액</th>
                            <th>잔액</th>
                            <th>비고</th>
                            <th>등록일</th>
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
                            <td rowspan="3">
                                <input class="tbox regFullSort listMod" placeholder="결제수단 구분" readonly value="계좌(2)">
                            </td>
                            <td rowspan="3">
                                <input class="tbox regFullSort listMod" value="우리팜코(1121)" readonly placeholder="결제수단">
                                <div class="mt5">잔액 : 2,000,000 원</div>
                            </td>
                            <td rowspan="3">
                                <input class="tbox regFullSort listMod priceMod" readonly value="5,000,000" placeholder="전체금액">
                                <span class="priceWord">원</span>
                            </td>
                            <td rowspan="3">
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="우리은행" readonly placeholder="은행/카드사">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="1234-12-1234" readonly placeholder="카드/계좌번호">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="곽반장" readonly placeholder="예금주">
                                </div>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="업체" readonly value="녹십자(1110)">
                            </td>
                            <td>
                               
                                <input class="tbox regFullSort listMod onlyNum priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod onlyNum priceMod" readonly value="4,000,000">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="">
							</td>
							<td>
								2020.07.04
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
                                <input class="tbox regFullSort listMod" placeholder="업체" readonly value="네이처(1120)">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod onlyNum priceMod" readonly value="2,000,000">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod onlyNum priceMod" readonly value="3,000,000">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="학술논문 게재">
							</td>
							<td>
								2020.07.03
							</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBoxIconBox">
									<input type="checkbox" name="" value="">
									<label></label>
								</div>
                            </td>
                            <td class="hide">
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="우리은행" readonly placeholder="은행/카드사">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="1234-12-1234" readonly placeholder="카드/계좌번호">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="곽반장" readonly placeholder="예금주">
                                </div>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="업체" readonly value="메디포럼(1115)">
                            </td>
                            <td>
                               
                                <input class="tbox regFullSort listMod onlyNum priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod onlyNum priceMod" readonly value="2,000,000">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="">
							</td>
							<td>
								2020.06.24
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
                                <input class="tbox regFullSort listMod" placeholder="결제수단 구분" readonly value="카드(1)">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod" value="기업카드1(1320)" readonly placeholder="결제수단">
                                <div class="mt5">잔액 : 0 원</div>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod priceMod" readonly value="5,000,000" placeholder="전체금액">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
								<div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="기업은행" readonly placeholder="은행/카드사">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="1324-12-5678" readonly placeholder="카드/계좌번호">
                                </div>
                                <div class="accInfoGroup">
                                  <input class="tbox regFullSort listMod" value="곽팀장" readonly placeholder="예금주">
                                </div>
							</td>
                            <td>
                                <input class="tbox regFullSort listMod" placeholder="업체" readonly value="적십자(1111)">
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod onlyNum priceMod" readonly value="1,000,000">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
                                <input class="tbox regFullSort listMod onlyNum priceMod" readonly value="0">
                                <span class="priceWord">원</span>
                            </td>
                            <td>
								<input class="tbox regFullSort listMod" readonly value="적십자 월 지급">
							</td>
							<td>
								2020.06.11
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