<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/head.php';
	$lCode					=	'110';
	$subCode				=	'012';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/pages/header.php'; ?>
	<div class="wrapper">
		<div class="contents">
			<div class="subMenuTab">
                <a href="/settlement/" class="btn subPartMod <?=($subCode == '010' ? ' activated' : '')?>">회사운영예산결산</a>
                <a href="/settlement/dailySettle" class="btn subPartMod <?=($subCode == '011' ? ' activated' : '')?>">일일현금지출결산</a>
                <a href="/settlement/buySettle" class="btn subPartMod <?=($subCode == '012' ? ' activated' : '')?>">구매자금지출결산</a>
                <a href="/settlement/compare" class="btn subPartMod <?=($subCode == '013' ? ' activated' : '')?>">총결산목록</a>
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
									<input class="tbox searchInput nearBtnMod" placeholder="검색어를 입력해주세요.">
                                    <div class="btnGroup inTableSearch">
								    	<a href="javascript:void(0);" class="btn searchSort">검색</a>
								    </div>
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
				<div class="titleBox manageHeadlineSort">집행목록</div>
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
					<table class="searchResultTable summarySort">
						<tbody>
						<tr>
							<th>합계(일)</th>
							<td>
								<div class="tAlignR mt5">합계금액 총계 : 100,000,000 원</div>
								<div class="tAlignR mt5">미지급금 합계 : 100,000,000 원</div>
							</td>
						</tr>
						</tbody>
					</table>
					<table class="searchResultTable">
						<colgroup>
                            <col width="30">
                            <col width="100">
                            <col width="100">
                            <col width="80">
                            <col width="50">
                            <col width="120">
                            <col width="120">
                            <col width="120">
                            <col width="120">
                            <col width="80">
                            <col width="100">
                            <col width="150">
                            <col width="80">
                            <col width="150">
                            <col width="80">
                            <col width="80">
                        </colgroup>
						<thead>
						<tr>
							<th rowspan="2">일</th>
							<th rowspan="2">과목</th>
                            <th rowspan="2">거래처명</th>
                            <th rowspan="2">해당월</th>
                            <th rowspan="2">회전일</th>
                            <th rowspan="2">분할금액</th>
                            <th rowspan="2">당월분</th>
                            <th rowspan="2">합계금액</th>
                            <th rowspan="2">총미지급금</th>
                            <th rowspan="2">지급일자</th>
							<th rowspan="2">결제수단</th>
							<th rowspan="2">결제수단정보</th>
							<th rowspan="2">결제일</th>
							<th rowspan="2">비고</th>
							<th rowspan="2">등록일</th>
                            <th rowspan="2">승인</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>5</td>
							<td>
                                인건비(급여)(1234)
                            </td>
                            <td>
                                녹십자(1110)
                            </td>
                            <td>
								20.05
							</td>
							<td>
								90
							</td>
                            <td>
								1,0,000,000 원
							</td>
                            <td>
                                1,0,000,000 원
							</td>
                            <td>
                                1,0,000,000 원
							</td>
                            <td>
								0
							</td>
                            <td>
								06.12
							</td>
							<td>
                                카드
                                <div class="f_bold mt5">카드잔액 : 1,000,000,000원</div>
							</td>
                            <td>
								<div class="mt5">
                                  국민은행
                                </div>
                                <div class="mt5">
                                  1245-05-1234
                                </div>
                                <div class="mt5">
                                  곽반장
                                </div>
							</td>
                            <td>
								2020.06.01
							</td>
                            <td>
                                인건비 지급함
							</td>
                            <td>
                                <div>2020.06.05 11:00</div>
                                <div>곽반장(과장)</div>
							</td>
                            <td>
                                <div>2020.06.01 14:00</div>
                                <div>곽주임(주임)</div>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
				<!-- <div class="page_group underSort">
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
				</div> -->
			</div>
		</div>
	</div>
</div>
<script src="/common/js/datePick.js"></script>
<script>
</script>
</body>
</html>